<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorageRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'storage-volume_min',
        'storage-volume_max',
        'storage-price',
        'storage_from_date',
        'storage_until_date',
    ];
}
