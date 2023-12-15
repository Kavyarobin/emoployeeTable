<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Designation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'designation_name',
        'department_id'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /*public function employees(){
        return $this->hasMany(Employee::class);
    }*/
}
