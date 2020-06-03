<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/login','LoginController@login');
Route::get('/designations','ApiController@getDesignations');
Route::get('/departments','ApiController@getDepartment');
Route::get('/asset-types','ApiController@getAssetTypes');

Route::post('/add-employee','EmployeeController@addEmployee');
Route::get('/employees','EmployeeController@getEmployees');
Route::resource('asset','AssetController');