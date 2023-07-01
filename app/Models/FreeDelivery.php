<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeDelivery extends Model
{
    use HasFactory;

    protected $fillable = ["title", "min_sum", "delivery_zone_id"];
}
