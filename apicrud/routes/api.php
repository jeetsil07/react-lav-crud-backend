<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/addCompany',[CompanyController::class,'addCompany']);
Route::get('/showAllCmp',[CompanyController::class,'showCmpData']);
Route::post('/addDesg',[DesignationController::class,'addDesg']);
Route::get('/showDesg/{company_id}',[DesignationController::class,'showDesg']);
Route::post('/addEmp',[EmployeeController::class,'addEmployee']);
Route::get('/showAllEmp',[EmployeeController::class,'showAllEmployee']);
