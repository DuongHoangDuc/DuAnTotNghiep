<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\ProductCategory;
use Illuminate\Support\Facades\Auth;
use  App\Http\Requests\CategoryProduct\ValidateCreate;
use  App\Http\Requests\CategoryProduct\ValidateUpdate   ;
class CategoryProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        
        $category =  ProductCategory::all();
        $manager_category = view('backend.Category-Product.index')->with('category',$category);
        return view('backend.master_layout')->with('backend.Category-Product.index',$manager_category);
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Category-Product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ValidateCreate $validate)
    {
        $data = $request->all();
        $category = new ProductCategory();
        $category->category_name = $data['category_name'];
        $category->category_slug = $data['category_slug'];
        $category->category_status = '0';
        $get_images = $request->file('category_images');

        if($request->has('category_images')){
            $get_images = $request->file('category_images');
            $get_name_images = $get_images->getClientOriginalName();// lấy tên ảnh
            $name_image      = current(explode('.',$get_name_images));
            $new_image       = $name_image.rand(0,99).'.'.$get_images->getClientOriginalExtension();
            $get_images->move('Backend/uploads/category',$new_image);
            $category->category_images = $new_image;
        }
        $category->save();
        session()->put('message', 'Thêm Thành Công');
        return Redirect('/admin/category-product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = ProductCategory::find($id);
        return view('backend.Category-Product.edit')->with(compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id ,ValidateUpdate $validate)
    {
        $data = $request->all();
        $category =  ProductCategory::find($id);
        $category->category_name = $data['category_name'];
        $category->category_slug = $data['category_slug'];
        // $category->category_status = '0';
        $get_images = $request->file('category_images');

        if($request->has('category_images')){
            // xoa anh cu
            $category_images_old = $category->category_images;
            $path = 'Backend/uploads/category/'.$category_images_old; 
            unlink($path);
            // cap nhap anh mới
            $get_name_images = $get_images->getClientOriginalName();// lấy tên ảnh
            $name_image      = current(explode('.',$get_name_images));
            $new_image       = $name_image.rand(0,99).'.'.$get_images->getClientOriginalExtension();
            $get_images->move('Backend/uploads/category/',$new_image);
            $category->category_images = $new_image;
           
        }
        $category->update();
        Session()->put('message','Cập Nhập Danh Mục Thành Công');
        return Redirect('/admin/category-product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = ProductCategory::find($id);
        $category_images = $category->category_images;
        $path = 'Backend/uploads/category/'.$category_images;
        if( $category_images  ){
            unlink($path);
        }

        $category->delete();
        Session()->put('message','Xóa Danh Mục Sản Phẩm Thành Công');
        return Redirect('/admin/category-product');
    }

    public function active(Request $request,$id ){
        $data = $request->all();
        $category =  ProductCategory::find($id);

        $category->category_status = '1';
        $category->update();
        return Redirect('/admin/category-product');
    }
    public function unactive(Request $request,$id ){
        $data = $request->all();
        $category =  ProductCategory::find($id);

        $category->category_status = '0';
        $category->update();
        return Redirect('/admin/category-product');
    }
}
