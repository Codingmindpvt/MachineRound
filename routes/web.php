<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\EmployeeController;
Use App\Http\Controllers\DepartmentController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', [EmployeeController::class, 'index']);
Route::post('/employees', [EmployeeController::class, 'store']);
Route::get('/employees/create', [EmployeeController::class, 'create']);
Route::get('employeesEdit/{id}',[EmployeeController::class,'edit']);
Route::get('employeesShow/{id}',[EmployeeController::class,'show']);
Route::get('employees/delete/{id}',[EmployeeController::class,'destroy']);
Route::post('/employees_update/{id}',[EmployeeController::class,'update']);

Route::resource('departments', DepartmentController::class);