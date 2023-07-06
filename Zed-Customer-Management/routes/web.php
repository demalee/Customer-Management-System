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

Route::get('/',[App\Http\Controllers\CustomerController::class,'index'])->name('welcome');
Route::post('add_zed_customer',[App\Http\Controllers\CustomerController::class,'store'])->name('add_zed_customer');
Route::patch('customer/update/{id}',[App\Http\Controllers\CustomerController::class,'update'])->name('customer/update');
Route::get('update_customer/{id}',[App\Http\Controllers\CustomerController::class,'edit'])->name('update_customer');
Route::get('add_customer',[App\Http\Controllers\CustomerController::class,'create'])->name('add_customer');
Route::get('zed_customer/{email}', [App\Http\Controllers\CustomerController::class, 'show'])->name('zed_customer');
Route::delete('delete_customer/{id}', [CustomerController::class, 'destroy'])->name('delete_customer');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
