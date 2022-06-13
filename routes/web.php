<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
//Route::get('/adminRegistration',[AdminController::class, 'userCreate'])->name('userRegistration');
//Route::post('/adminRegistrationSubmit',[AdminController::class, 'adminCreateSubmit'])->name('adminCreateSubmit');
Route::get('/userLogin', function () {return view('customer.login');})->name('userLogin');
Route::post('/userLoginSubmit',[CustomerController::class, 'userLoginSubmit'])->name('userLoginSubmit');
