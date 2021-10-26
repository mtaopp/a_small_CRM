<?php

namespace App\Models\crm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first-name',
        'last-name',
        'adress',
        'house',
        'postcode',
        'city',
        'phone',
        'email',
    ];
}