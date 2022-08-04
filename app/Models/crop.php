<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crop extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'cycle',
        'base_temperature',
        'growth_rate',
        'bloom_rate',
        'inflorescence_rate',
        'maturations_rate',
        'harvest_date',
    ];

}
