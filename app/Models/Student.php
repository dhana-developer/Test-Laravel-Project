<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'middle_name',
        'course',
        'gender', 
        'phone_number',
        'current_address',
        'email',
        'password',
        'confirm_password', 
    ];  
}
