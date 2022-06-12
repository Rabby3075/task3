<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;

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

Route::get('/userRegistration',[CustomerController::class, 'userCreate'])->name('userRegistration');
Route::post('/userRegistrationSubmit',[CustomerController::class, 'userCreateSubmit'])->name('userCreateSubmit');
Route::get('/adminRegistration',[AdminController::class, 'adminCreate'])->name('adminRegistration');
Route::post('/adminRegistrationSubmit',[AdminController::class, 'adminCreateSubmit'])->name('adminCreateSubmit');
Route::get('/adminLogin', function () {return view('admin.login');})->name('adminLogin');
Route::post('/adminLoginSubmit',[AdminController::class, 'adminLoginSubmit'])->name('adminLoginSubmit');
Route::get('/userLogin', function () {return view('customer.login');})->name('userLogin');
Route::post('/userLoginSubmit',[CustomerController::class, 'userLoginSubmit'])->name('userLoginSubmit');
Route::get('/user/dash',[CustomerController::class, 'dash'])->name('dashbd');
