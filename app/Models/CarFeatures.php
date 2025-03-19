<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarFeatures extends Model
{
    use HasFactory;
    protected $table = 'car_features';

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
