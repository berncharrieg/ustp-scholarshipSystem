<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholar extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'age',
        'address',
        'number',
        'gender',
        'email',
        'password',
        'status',
        'course',
        'semester_start',
        'semester_end',
        'school_year_start',
        'school_year_end',
        'school',
        'year_level',
    ];
}