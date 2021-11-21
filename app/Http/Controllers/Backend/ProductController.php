<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Brand;
use App\Models\Backend\Product;
use App\Models\Backend\information;
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
        $product = Product::orderby('product_id','desc')->get();
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
        $product->product_event = $data['product_event'];
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
        $product->product_event = $data['product_event'];
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

    public function product_detail(Request $request,$id){
        $product = Product::join('tbl_category','tbl_product.category_id','=','tbl_category.category_id')
        ->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('product_id',$id)->get();

        

        $id = $id;
        $data = [
            'product' => $product,
            'id' => $id
           
        ];
        // return redirect()->back();
        return view('Backend.product-detail.index',$data);
    }

    public function add_detail(Request $request,$id){
       
        
        information::create([
            'product_id'            =>$id,
            'warranty'              => $request->warranty,
            'series'                => $request->series,
            'part_number'           => $request->part_number,
            'generation'            => $request->generation,
            'cpu'                   => $request->cpu,
            'graphics'              => $request->graphics,
            'ram'                   => $request->ram,
            'screen'                => $request->screen,
            'archive'               => $request->archive,
            'maximum_archive'       => $request->maximum_archive,
            'slot_type'             => $request->slot_type,
            'screen_output'         => $request->screen_output,
            'connecting'            => $request->connecting,
            'connection_not_wire'   => $request->connection_not_wire,
            'keyboard'              => $request->keyboard,
            'system'                => $request->system,
            'size'                  => $request->size,
            'pin'                   => $request->pin,
            'weight'                => $request->weight,
            'led'                   => $request->led


        ]);
        return redirect()->back();
    }
}
