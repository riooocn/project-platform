<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;
    protected $fillable = ['shoe_id', 'size', 'stock'];
    protected $primaryKey = 'variant_id';

    public function product()
    {
        return $this->belongsTo(Product::class, 'shoe_id', 'shoe_id');
    }
}
