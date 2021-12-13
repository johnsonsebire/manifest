<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function products() {
        return $this->hasMany(Products::class);
    }

    public function categories() {
        return $this->hasManyThrough(productCategory::class, Product::class, 'id', 'product_id');
    }

    public function productType() {
        return $this->hasManyThrough(productType::class, Product::class);
    }
}
