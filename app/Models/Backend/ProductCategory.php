<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'category_name','category_status','category_images','category_slug'
    ]; 

    protected $primaryKey = 'category_id';
    protected $table = 'tbl_category';
}
