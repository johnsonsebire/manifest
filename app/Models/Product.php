<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function productCategory(){
        return $this->belongsToMany(ProductCategories::class, 'product_categories_pivots');
    }

    public function productType(){
        return $this->belongsToMany(ProductTypes::class, 'product_types_pivots');
    }

    // public function services()
    // {
    //     return $this->belongsToMany(Services::class);
    // }
}
