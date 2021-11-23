<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Backend\Brand;
use App\Models\Backend\Product;
use DB;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index($id){
      $product = Product::orderby('product_id','DESC')->where('category_id',$id)->get();
      $brand = DB::table('brand_category')->join('tbl_category','brand_category.category_id','=','tbl_category.category_id')
        ->join('tbl_brand','brand_category.brand_id','=','tbl_brand.brand_id')->where('tbl_brand.brand_id',$id)->get();
      
      $data = [
        'product' => $product,
        'brand' => $brand
      ];
      return view('frontend.category.index',$data);
    }
}
