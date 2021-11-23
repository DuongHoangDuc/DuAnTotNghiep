<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'brand_name','brand_slug'
    ]; 

    protected $primaryKey = 'brand_id';
    protected $table = 'tbl_brand';

    /**
     * Get all of the products for the Brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * The productCategories that belong to the Brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function productCategories()
    {
        return $this->belongsToMany(ProductCategory::class, 'brand_category','brand_brand_id','category_category_id');
    }
}
