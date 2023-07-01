<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "uid", "meta_title", "title", "image", "enabled", "order", "site_id", "header_description", "footer_description"
    ];

    public function products() : HasMany
    {
        return $this->HasMany(Product::class);
    }
}
