<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CarController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DriverController;
use App\Http\Controllers\Fontend\SiteController;
use Illuminate\Support\Facades\Route;

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


//Fontend  Routes

Route::get('/',[SiteController::class,'index']);






//Backend Routes
Route::prefix('admin')->name('admin.')->group(function (){

    Route::get('/',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/login',[AdminController::class,'login'])->name('login');


    Route::prefix('car')->name('car.')->group(function (){
        Route::get('/lists',[CarController::class,'index'])->name('manage');
        Route::get('/create',[CarController::class,'create'])->name('create');
        Route::post('/store',[CarController::class,'store'])->name('store');

    });

    Route::prefix('customer')->name('customer.')->group(function (){
        Route::get('/lists',[CustomerController::class,'index'])->name('manage');
        Route::get('/create',[CustomerController::class,'create'])->name('create');
        Route::post('/store',[CustomerController::class,'store'])->name('store');
        Route::get('/{id}',[CustomerController::class,'show'])->name('show');
        Route::get('/{id}/edit',[CustomerController::class,'edit'])->name('edit');
        Route::put('/{id}',[CustomerController::class,'update'])->name('update');
        Route::delete('/{id}',[CustomerController::class,'destroy'])->name('delete');
    });
    Route::prefix('driver')->name('driver.')->group(function (){
        Route::get('/lists',[DriverController::class,'index'])->name('manage');
        Route::post('/create',[DriverController::class,'create'])->name('create');
    });

});
