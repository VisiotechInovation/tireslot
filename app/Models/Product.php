<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $filllable = [
        'name',
        'sku',
        'ean',
        'description',
        'meta_description',
        'quantity',
        'active',
        'store_tab',
        'seo_id',
        'seo_title',
        'createdby',
        'lastmodifiedby'
    ];
    public function product_categories(){
        return $this->hasMany(ProductCategories::class, 'product_id');
    }
}
