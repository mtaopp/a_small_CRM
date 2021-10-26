<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisposalRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'waste-dis-volume_min',
        'waste-dis-volume_max',
        'waste-dis-price_per_m3',
    ];
}
