<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Designation;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'depname'
    ];

    public function designations()
    {
        return $this->hasMany(Designation::class,'department_id');
    }

    /*public function employees(){
        return $this->hasMany(Employee::class);
    }*/
}
