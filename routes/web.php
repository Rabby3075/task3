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
Route::get('/admin',[AdminController::class, 'dash'])->name('dashadmin');



Route::get('/user/dash',[CustomerController::class, 'dash'])->name('dashbd')->middleware('userValid');
Route::get('/user/dash/home', function () {return view('customer.home');})->name('userHome');
Route::get('/user/dash/logout',[CustomerController::class, 'logout'])->name('userLogout')->middleware('userValid');



Route::get('/admin',[AdminController::class, 'dash'])->name('dashadmin')->middleware('ValidAdmin');
Route::get('/admin/userlist',[AdminController::class, 'userList'])->name('userList')->middleware('ValidAdmin');
Route::get('/admin/logout',[AdminController::class, 'logout'])->name('adminLogout')->middleware('ValidAdmin');

Route::get('/user/dash/profile', function () {return view('customer.profile');})->name('userProfile')->middleware('userValid');
Route::post('/user/dash/profileSubmit',[CustomerController::class, 'editProfile'])->name('editProfile')->middleware('userValid');



Route::get('/admin',[AdminController::class, 'dash'])->name('dashadmin')->middleware('ValidAdmin');
Route::get('/admin/userlist',[AdminController::class, 'userList'])->name('userList')->middleware('ValidAdmin');
Route::get('/admin/logout',[AdminController::class, 'logout'])->name('adminLogout')->middleware('ValidAdmin');
Route::get('/admin/userEdit/{id}',[AdminController::class, 'userEdit'])->name('userEdit')->middleware('ValidAdmin');
Route::post('/admin/userEdit',[AdminController::class, 'userEditSubmitted'])->name('userEdit')->middleware('ValidAdmin');

Route::get('/user/dash/profile', function () {return view('customer.profile');})->name('userProfile')->middleware('userValid');
Route::post('/user/dash/profileSubmit',[CustomerController::class, 'editProfile'])->name('editProfile')->middleware('userValid');

