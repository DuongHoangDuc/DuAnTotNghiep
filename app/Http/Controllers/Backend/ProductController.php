<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Brand;
use App\Models\Backend\Product;
use App\Models\Backend\ProductCategory;
use App\Http\Requests\Product\ValidateCreate;
use App\Http\Requests\Product\ValidateUpdate;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderby('product_id','desc')->paginate(10);
        return view('Backend.Product.index')->with(compact('product'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::all();
        $category = ProductCategory::all();
        return view('Backend.Product.create_product')->with(compact('brand'))->with(compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,ValidateCreate $validate )
    {
        $data = $request->all();
        $product = new product();
        $product->product_name = $data['product_name'];
        $product->product_price = $data['product_price'];
        $product->category_id = $data['category_id'];
        $product->brand_id = $data['brand_id'];
        $product->product_sales = $data['product_sales'];
        $product->product_content = $data['product_content'];
        $product->product_desc = $data['product_desc'];
        $product->product_slug = $data['product_slug'];
        $product->product_status = '0';
        $product->product_hot = '0';

        if($request->has('product_images')){

            $get_images = $request->file('product_images');      
            $get_name_images = $get_images->getClientOriginalName();// lấy tên ảnh
            $name_image      = current(explode('.',$get_name_images));
            $new_image       = $name_image.rand(0,99).'.'.$get_images->getClientOriginalExtension();
            $get_images->move('Backend/uploads/products',$new_image);
            $product->product_images = $new_image;
        }
            $product->save();
            Session()->put('message','Thêm Sản Phẩm Thành Công');
            return Redirect('/admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $category = ProductCategory::orderby('category_id')->get();
        $brand = Brand::orderby('brand_id')->get();
        return view('Backend.Product.edit_product')->with(compact('category'))
        ->with(compact('brand'))->with(compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,ValidateUpdate $validate)
    {
        $data = $request->all();
        $product =  product::find($id);
        $product->product_name = $data['product_name'];
        $product->product_price = $data['product_price'];
        $product->category_id = $data['category_id'];
        $product->brand_id = $data['brand_id'];
        $product->product_sales = $data['product_sales'];
        $product->product_content = $data['product_content'];
        $product->product_desc = $data['product_desc'];
        $product->product_slug = $data['product_slug'];
        $product->product_status = '0';
        $product->product_hot = '0';

        $get_images = $request->file('product_images');

        if($get_images){
            // xoa anh cu
            $product_images_old = $product->product_images;
            $path = 'Backend/uploads/products/'.$product_images_old; 
            unlink($path);
            // cap nhap anh mới
            $get_name_images = $get_images->getClientOriginalName();// lấy tên ảnh
            $name_image      = current(explode('.',$get_name_images));
            $new_image       = $name_image.rand(0,99).'.'.$get_images->getClientOriginalExtension();
            $get_images->move('Backend/uploads/products/',$new_image);
            $product->product_images = $new_image;
           
        }
        $product->save();
        Session()->put('message','Cập Nhập Sản Phẩm Thành Công');
        return Redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return Redirect('/admin/product');
    }
}
