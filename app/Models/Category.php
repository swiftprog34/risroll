<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "uid", "meta_title", "title", "image", "enabled", "order", "site_id", "header_description", "footer_description"
    ];
}
