<?php

namespace App\Models\crm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'adress',
        'house',
        'postcode',
        'city',
        'tel',
        'email',
        'created_by',
        'cw',
        'cid',
    ];
}
