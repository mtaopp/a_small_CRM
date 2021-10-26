<?php

namespace App\Models\crm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_created',
        'has_cleaning',
        'has_moving',
        'moving_id',
        'moving_id',
    ];
}
