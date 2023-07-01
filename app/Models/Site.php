<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Site extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'city', 'prefix', 'restaurantID', 'wid', 'header_description', 'footer_description'
    ];

    public function pickupPoints(): HasMany
    {
        return $this->hasMany(PickupPoint::class);
    }

    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function delivery_zones(): HasMany
    {
        return $this->hasMany(Delivery::class);
    }

    public function pickup_points(): HasMany
    {
        return $this->hasMany(PickupPoint::class);
    }

    public function pages(): HasMany
    {
        return $this->hasMany(Page::class);
    }

    public function sliders(): HasMany
    {
        return $this->hasMany(Slider::class);
    }

    public function payment_gateways(): HasMany
    {
        return $this->hasMany(PaymentGateway::class);
    }
}
