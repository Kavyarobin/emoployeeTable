<?php
namespace App\Http\Helpers;

use App\Models\Department;
use App\Models\Designation;

class EmployeeHelper
{
    public static function getDepartment($department)
    {
        $department = Department::find($department);
        return $department ? $department->depname : null;
    }
    public static function getDesignation($designation)
    {
        $designation = Designation::find($designation);
        return $designation ? $designation->designation_name : null;
    }
}