<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    public function productType(){
        return $this->belongsToMany(Product::class, 'product_type_pivots');
    }
}
