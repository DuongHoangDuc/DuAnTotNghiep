<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'brand_id','category_id','product_name','product_desc','product_content',
        'product_price','product_sales','product_images','product_status','product_hots','product_slug','product_event'
    ]; 

    protected $primaryKey = 'product_id';
    protected $table = 'tbl_product';
}
