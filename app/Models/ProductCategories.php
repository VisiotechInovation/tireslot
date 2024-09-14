<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsToMany(Category::class, 'category_id');
    }
    public function product(){
        return $this->belongsToMany(Product::class, 'product_id');
    }
}
