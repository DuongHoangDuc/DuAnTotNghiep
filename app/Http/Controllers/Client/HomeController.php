<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\ProductCategory;
use App\Models\Backend\Product;
use App\Models\Backend\Gallery;
use App\Models\Backend\Slider;
use DB;
class HomeController extends Controller
{
   
    public function index() {
        // product laptop
        $product            = DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('category_id','22')->limit(4)->orderBy('product_id', 'asc')->get();
        $product1           = DB::table('tbl_product')->where('category_id','22')->where('product_id' ,'>', '23')->orderBy('product_id', 'asc')->limit(4)->get();
        $product2           = DB::table('tbl_product')->where('category_id','22')->where('product_id' ,'>', '32')->orderBy('product_id', 'asc')->limit(4)->get();
       // product Điện gia dụng
        $product_DGD        = DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('category_id','21')->limit(4)->orderBy('product_id', 'asc')->get();
        $product_DGD1       = DB::table('tbl_product')->where('category_id','21')->where('product_id' ,'>', '39')->orderBy('product_id', 'asc')->limit(4)->get();
        // product TV
        $product_TV         = DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('category_id','23')->limit(4)->orderBy('product_id', 'asc')->get();
        // product Điện thoại
        $product_phone      = DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('category_id','24')->limit(4)->orderBy('product_id', 'asc')->get();
        $product_phone1     = DB::table('tbl_product')->where('category_id','24')->where('product_id' ,'>', '39')->orderBy('product_id', 'asc')->limit(4)->get();
        // sản phẩm PC
        $product_pc         = DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('category_id','25')->limit(4)->orderBy('product_id', 'asc')->get();
        $product_pc1        = DB::table('tbl_product')->where('category_id','25')->where('product_id' ,'>', '39')->orderBy('product_id', 'asc')->limit(4)->get();
        // sản phẩm máy ảnh
        $product_photo      = DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('category_id','28')->limit(4)->orderBy('product_id', 'asc')->get();
        // category
        
        $category           = DB::table('tbl_category')->where('category_id','21')->get();
        $category_laptop    = DB::table('tbl_category')->where('category_id','22')->get();
        $category_TV        = DB::table('tbl_category')->where('category_id','23')->get();
        $category_phone     = DB::table('tbl_category')->where('category_id','24')->get();
        $category_pc        = DB::table('tbl_category')->where('category_id','25')->get();
        $category_photo     = DB::table('tbl_category')->where('category_id','28')->get();

        $category_all       = DB::table('tbl_category')->orderby('category_id','asc')->get();
        // tất cả sản phẩm
        $product_all        = Product::orderby('product_id','desc')->paginate(20);
        $product_random     = Product::orderByRaw('RAND()')->take(10)->limit(5)->get();
        

        $Slider            = Slider::orderby('Slider_id','asc')->get();
        $data = [
            'product'          => $product,
            'product1'         => $product1,
            'product2'         => $product2,
            'product_DGD'      => $product_DGD, 
            'product_DGD1'     => $product_DGD1, 
            'product_TV'       => $product_TV,
            'product_phone'    => $product_phone,
            'product_phone1'   => $product_phone1,
            'product_pc'       => $product_pc,
            'product_pc1'      => $product_pc1,
            'product_photo'    => $product_photo,
            'product_all'      => $product_all,
            'product_random'   => $product_random,
            'category'         => $category,
            'category_laptop'  => $category_laptop,
            'category_TV'      => $category_TV,
            'category_phone'   => $category_phone,
            'category_pc'      => $category_pc,
            'category_photo'   => $category_photo,
            'category_all'     => $category_all,
            'Slider'          => $Slider
            
            

        ];

        return view('frontend.index', $data);
    }

    // public function search(Request $request) {
    //     $search = Product::where('product_name','like','%'.$request->keyword.'%')->orwhere('product_price','like','%'.$request->keyword.'%')->get();
    //     $data = [
    //         'search'   => $search
    //     ];
    //     return view('frontend.index', $data);
    // }
    public function detail($id){

        $product = Product::join('tbl_category','tbl_product.category_id','=','tbl_category.category_id')
        ->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('product_id',$id)->get();

        

        $gallery = Gallery::orderby('gallery_id','desc')->where('product_id',$id)->get();
        
        foreach($product as $key => $value){
            $brand_id = $value->brand_id;
        }

        $related = product::join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')
        ->where('tbl_brand.brand_id',$brand_id)->orderByRaw('RAND()')->limit(5)->get();

        $related1 = product::join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')
        ->where('tbl_brand.brand_id','>',$brand_id)
        ->where('tbl_brand.brand_id',$brand_id)->orderByRaw('RAND()')->limit(5)->get();

        
        $data = [
            'product' => $product,
            'gallery' => $gallery,
            'related' => $related,
            'related1' => $related1
            
        ];
        // dd($product_brand);
        return view('frontend.detail',$data);
    }
    
}
