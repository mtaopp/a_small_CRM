<?php

namespace App\Models\crm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WrappingRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'wrap-dateTime',
        'wrap-vehicles',
        'wrap-vehicle_per_hour',
        'wrap-men',
        'wrap-men_per_hour',
        'wrap-time_min',
        'wrap-time_max',
    ];
}
