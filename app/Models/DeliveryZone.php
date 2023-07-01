<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DeliveryZone extends Model
{
    use HasFactory;

    public function postcodes(): HasMany
    {
        return $this->hasMany(Postcode::class);
    }

    public function deliveries(): HasMany
    {
        return $this->hasMany(Delivery::class);
    }

    public function free_deliveries(): HasMany
    {
        return $this->hasMany(FreeDelivery::class);
    }

    public function local_pickups(): HasMany
    {
        return $this->hasMany(LocalPickup::class);
    }
}
