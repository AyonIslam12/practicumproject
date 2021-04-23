<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\CarController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DriverController;
use App\Http\Controllers\Backend\OfferController;
use App\Http\Controllers\Backend\UserController as BackendUserController;
use App\Http\Controllers\Frontend\CarController as FrontendCarController;
use App\Http\Controllers\Frontend\SiteController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\UserProfile;
use App\Models\User;
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
Route::prefix('/')->name('website.')->group(function(){
    Route::get('/',[SiteController::class,'index'])->name('home');
    Route::get('/about-us',[SiteController::class,'about'])->name('about');
    Route::get('/services',[SiteController::class,'services'])->name('services');
    Route::get('/pricing',[SiteController::class,'pricing'])->name('pricing');
    Route::get('/blogs',[SiteController::class,'blogs'])->name('blogs');
    Route::get('/contact-us',[SiteController::class,'contact'])->name('contact');


    Route::prefix('/user')->name('user.')->group(function (){
        Route::get('/registration/form',[UserController::class,'registrationForm'])->name('registration.form');
        Route::post('/registration/create',[UserController::class,'register'])->name('register');
        Route::get('/login',[UserController::class,'loginForm'])->name('login.form');
        Route::post('/dologin',[UserController::class,'doLogin'])->name('login');
        Route::get('/logout',[UserController::class,'logout'])->name('logout');

        //UserProfile
        Route::prefix('/profile')->name('profile.')->group(function (){
            Route::get('/',[UserProfile::class,'index'])->name('home');

        });

    });


    Route::prefix('/car')->name('car.')->group(function(){

        Route::get('/our-cars',[ FrontendCarController::class,'cars'])->name('list');
        Route::get('/view/{id}',[ FrontendCarController::class,'singleCar'])->name('singlecar');
        Route::get('/booking/{id}',[ FrontendCarController::class,'booking'])->name('booking');


    });

});






//Backend Routes
Route::prefix('admin')->name('admin.')->group(function (){
    //Admin Login
    Route::get('/login',[BackendUserController::class,'showLoginForm'])->name('login-form');
    Route::post('/login',[BackendUserController::class,'login'])->name('login');

    Route::group(['middleware' => 'admin-auth'],function () {

        Route::get('/',[AdminController::class,'dashboard'])->name('dashboard');
        Route::get('/logout',[BackendUserController::class,'logout'])->name('logout');

        Route::prefix('car')->name('car.')->group(function (){
            Route::get('/lists',[CarController::class,'index'])->name('manage');
            Route::get('/create',[CarController::class,'create'])->name('create');
            Route::post('/store',[CarController::class,'store'])->name('store');
            Route::get('/{id}',[CarController::class,'show'])->name('show');
            Route::get('/{id}/edit',[CarController::class,'edit'])->name('edit');
            Route::put('/{id}',[CarController::class,'update'])->name('update');
            Route::delete('/{id}',[CarController::class,'destroy'])->name('destroy');

        });

        Route::prefix('booking')->name('booking.')->group(function (){
            Route::get('/list',[BookingController::class,'index'])->name('manage');
            Route::get('/create',[BookingController::class,'create'])->name('create');
            Route::post('/store',[BookingController::class,'store'])->name('store');
            Route::get('/{id}',[BookingController::class,'show'])->name('show');
            Route::delete('/{id}',[BookingController::class,'destroy'])->name('delete');


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
        Route::prefix('offer')->name('offer.')->group(function (){
            Route::get('/lists',[OfferController::class,'index'])->name('manage');
            Route::get('/create',[OfferController::class,'create'])->name('create');
            Route::post('/store',[OfferController::class,'store'])->name('store');
        });

    });



});
