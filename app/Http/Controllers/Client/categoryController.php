<?php

namespace App\Http\Controllers\Client;

use DB;
use Illuminate\Http\Request;
use App\Models\Backend\Brand;
use App\Models\Backend\Product;
use App\Http\Controllers\Controller;
use App\Models\Backend\ProductCategory;

class categoryController extends Controller
{
    public function index($id){
      $product = Product::orderby('product_id','DESC')->where('category_id',$id)->get();
      $category = DB::table('tbl_category')
                  ->join('brand_category','brand_category.category_category_id' ,'=', 'tbl_category.category_id')
                  ->join('tbl_brand','brand_category.brand_brand_id' ,'=', 'tbl_brand.brand_id')
                  ->where('category_id', $id)->get();
      
      
      return view('frontend.category.index',compact('product', 'category'));
    }
}
