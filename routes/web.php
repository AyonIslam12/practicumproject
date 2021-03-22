<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\Backend\CustomerController;
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

Route::get('/', function () {
    return view('welcome');
});
//Backend Routes
Route::prefix('admin')->name('admin.')->group(function (){

    Route::get('/',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/login',[AdminController::class,'login'])->name('login');

    Route::prefix('customer')->name('customer.')->group(function (){
        Route::get('/lists',[CustomerController::class,'index'])->name('manage');
        Route::get('/create',[CustomerController::class,'create'])->name('create');
        Route::post('/store',[CustomerController::class,'store'])->name('store');
        Route::get('/{id}',[CustomerController::class,'show'])->name('show');
        Route::get('/{id}/edit',[CustomerController::class,'edit'])->name('edit');
        Route::put('/{id}',[CustomerController::class,'update'])->name('update');
        Route::delete('/{id}',[CustomerController::class,'destroy'])->name('delete');
    });

});
