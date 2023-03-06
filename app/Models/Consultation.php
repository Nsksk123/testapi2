<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'user_id',
        'disease_history',
        'current_symptoms',
        'doctor',
        'doctor_notes',
    ];
}
