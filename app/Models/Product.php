<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid', 'meta_title', 'meta_description', 'title', 'img', 'price', 'text', 'sku', 'category_id', 'site_id', 'enabled', 'order'
    ];

    public static function findOrFail($product_id)
    {
        return Product::findOrFail($product_id);
    }
}
