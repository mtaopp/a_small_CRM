<?php

namespace App\Models\crm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CleaningRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'clean-first-name',
        'clean-last-name',
        'clean-adress',
        'clean-house',
        'clean-postcode',
        'clean-city',
        'clean-phone',
        'clean-email',

        'cleaning-dateTime',
        'handover-dateTime',

        'visited',
        'object-type',
        'ares',
        'rooms',
        'floor',
        'elevator',
        'windows',
        'carpet',
        'shades',
        'basement',
        'screed',
        'balcony',
        'terrace',
        'garage',
        'conservatory',
    ];
}
