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
    Route::get('/login',[AdminController::class,'login'])->name('login');
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');

    Route::prefix('customer')->name('customer.')->group(function (){
        Route::get('/manage',[CustomerController::class,'index'])->name('manage');

    });

});
