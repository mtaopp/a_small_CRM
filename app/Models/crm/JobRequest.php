<?php

namespace App\Models\crm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_id',
        'is_created',
        'has_cleaning',
        'cleaning_id',
        'has_moving',
        'moving_id',
        'job_id',
    ];
}
