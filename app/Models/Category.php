<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $filllable = [
        'name',
        'description',
        'active',
        'store_tab',
        'seo_id',
        'seo_title',
        'createdby',
        'lastmodifiedby'
    ];
    public function product_categories(){
        return $this->hasMany(ProductCategories::class, 'category_id');
    }
}
