<?php

namespace App\Models\crm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovingRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'move-first-name',
        'move-last-name',
        'move-phone',
        'move-email',

        'origin-adress',
        'origin-house',
        'origin-postcode',
        'origin-city',
        'dest-adress',
        'dest-house',
        'dest-postcode',
        'dest-city',

        'visited',
        'object-type',
        'ares',
        'rooms',
        'floor',
        'elevator',

        'moving-dateTime',
        'vehicles',
        'vehicle_per_hour',
        'men',
        'men_per_hour',
        'approach_trip_time',
        'return_trip_time',
        'required_time_min',
        'required_time_max',

        'disassembly',
        'assembly',

        'extras-employee_expenses_count',
        'extras-employee_expenses_price',

        'extras-funiture_lift_count',
        'extras-funiture_lift_price',

        'extras-heavy_cargo_count',
        'extras-heavy_cargo_price',

        'extras-safe_count',
        'extras-safe_price',

        'extras-piano_count',
        'extras-piano_price',

        'extras-grand_piano_count',
        'extras-grand_piano_price',

        'has_wrapping',
        'wrapping_id',

        'has_unwrapping',
        'unwrapping_id',

        'has_waste_disposal',
        'waste_disposal_id',

        'has_storage',
        'storage_id',

        'comment',
    ];
}
