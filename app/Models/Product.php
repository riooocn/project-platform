<?php

namespace App\Models;

use Illuminate\Support\Arr;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'shoe_id';

    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    protected $fillable = ['name', 'brand', 'category', 'slug', 'price', 'description', 'url'];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'shoe_id', 'product_id');
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class, 'shoe_id');
    }
}