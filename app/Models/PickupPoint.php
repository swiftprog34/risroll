<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PickupPoint extends Model
{
    use HasFactory;
    protected $fillable = ["name", "site_id"];

    public function site(): BelongsTo
    {
        return $this->belongsTo(Site::class);
    }
}
