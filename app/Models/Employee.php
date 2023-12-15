<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // protected $table = '';
    protected $fillable = [
        'name',
        // Add other attributes that you want to allow for mass assignment
        'gender',
        'dob',
        'address',
        'email',
        'phone',
        'department_id',
        'designation_id',
        'doj',
        'image',
        // ...
    ];

}
