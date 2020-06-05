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
Route::get('/interview-types', 'ApiController@getInterviewTypes');

Route::post('/add-employee','EmployeeController@addEmployee');
Route::post('/add-employee-detail', 'EmployeeController@addDetail');
Route::post('/add-emergency-contacts', 'EmployeeController@addEmergencyContact');
Route::post('/add-interview-related','EmployeeController@addInterviewRelated');
Route::get('/employees','EmployeeController@getEmployees');
Route::get('/view-employee/{id}','EmployeeController@getEmployee');
Route::resource('asset','AssetController');
Route::get('/salary-packages','ApiController@getSalaryPackage');
Route::resource('salary','SalaryController');

Route::post('/add-bank-details','EmployeeController@addBankDetail');
Route::post('/important-documents','EmployeeController@addImportantDocument');