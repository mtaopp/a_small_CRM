<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnwrappingRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'unwrap-dateTime',
        'unwrap-vehicles',
        'unwrap-vehicle_per_hour',
        'unwrap-men',
        'unwrap-men_per_hour',
        'unwrap-time_min',
        'unwrap-time_max',
    ];
}
