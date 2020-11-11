<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserRegistrationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Userlogin;
// use App\Http\Controllers\UserRegistrationController;

// use Input;
// use Illuminate\Support\Facades\Input;


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
    return view('userlogin');
});

Route::get('/myadmin', function () {
    return view('adminlogin');
});

Route::get('/Ad', function () {
    return view('Admin.index');
});


// Route::get('alogin',[AuthController::class,'AuthLogin']);
// Route::post('alogin',[AuthController::class,'AuthLogin']);


Route::get('alogin',[AuthController::class,'login']);
Route::post('alogin',[AuthController::class,'AuthLogin']);
Route::get('/logout',[AuthController::class,'logout']);

Route::get('ulogin',[Userlogin::class,'login']);
Route::post('ulogin',[Userlogin::class,'UserLogin']);

Route::get('/logout',[Userlogin::class,'logout']);

Route::resource('category',CategoryController::class);

Route::resource('subcategory',SubCategoryController::class);

Route::resource('cli',ClientController::class);

Route::resource('/ureg',UserRegistrationController::class);

Route::get('/getcontent/{id}', [ClientController::class,'search']);

