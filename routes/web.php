<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TeamController;
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
/////////////////// Team  ///////////////////////


Route::get('team',[TeamController::class,'index']);
    Route::get('show_team/show/{id}',[TeamController::class,'show']);
    Route::get('manage_team',[TeamController::class,'manage_team']);
    Route::get('manage_team_process',[TeamController::class,'manage_team_process']);
    Route::get('manage_team/{id}',[TeamController::class,'manage_team']);
    Route::post('manage_team_process',[TeamController::class,'manage_team_process'])->name('team.manage_team_process');
    Route::get('team/delete/{id}',[TeamController::class,'delete']);
    Route::get('team/status/{status}/{id}',[TeamController::class,'status']);




///////////////////Company /////////////////////////


Route::get('company',[CompanyController::class,'index']);
    Route::get('show_company/show/{id}',[CompanyController::class,'show']);
    Route::get('manage_company',[CompanyController::class,'manage_company']);
    Route::get('manage_company_process',[CompanyController::class,'manage_company_process']);
    Route::get('manage_company/{id}',[CompanyController::class,'manage_company']);
    Route::post('manage_company_process',[CompanyController::class,'manage_company_process'])->name('team.manage_team_process');
    Route::get('company/delete/{id}',[CompanyController::class,'delete']);
    Route::get('company/status/{status}/{id}',[CompanyController::class,'status']);

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
