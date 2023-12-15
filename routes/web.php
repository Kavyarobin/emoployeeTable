<?php
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/', [EmployeeController::class,'index'])->name('employees.index');
Route::match(['get','post'],'employees/store',[EmployeeController::class,'store']);
Route::get('/employees/{id}',[EmployeeController::class,'show']);
Route::match(['get,post'],'/update-employee/{id}',[EmployeeController::class,'update']);
Route::delete('employee/{id}/delete',[EmployeeController::class,'destroy'])->name('employees.delete');
Route::get('get-designations/{id}',[EmployeeController::class,'getDesignation'])->name('get-designation');

Route::get('newTable',[EmployeeController::class,'getDesignation'])->name('get-designation');
// Example routes/web.php




