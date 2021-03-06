<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\CarBrandController;
use App\Http\Controllers\Backend\CarController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\CustomerMessageController;
use App\Http\Controllers\Backend\DriverController;
use App\Http\Controllers\Backend\InsuranceController;
use App\Http\Controllers\Backend\OfferController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\UserController as BackendUserController;
use App\Http\Controllers\Driver\AddToBookingDriver;
use App\Http\Controllers\Driver\DriverController as DriverDriverController;
use App\Http\Controllers\ForgetPassword;
use App\Http\Controllers\Frontend\BookingController as FrontendBookingController;
use App\Http\Controllers\Frontend\CarController as FrontendCarController;
use App\Http\Controllers\Frontend\CustomerMessage;
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



//Forget Password sent in email
Route::get('forget-password-customer',[ForgetPassword::class,'forgetPassword'])->name('forget.password');
Route::get('forget-password-employee',[ForgetPassword::class,'forgetPasswordForDriver'])->name('employye.forget.password');
Route::post('forget-password-link',[ForgetPassword::class,'forgetPasswordLink'])->name('forget.password.link');
Route::get('forget-password-link-click/{token}/{email}',[ForgetPassword::class,'passwordReset'])->name('password.reset');
Route::post('reset-password',[ForgetPassword::class,'resetPassword'])->name('password.reset.post');

//Fontend  Routes
Route::prefix('/')->name('website.')->group(function(){
    Route::get('/',[SiteController::class,'index'])->name('home');
    Route::get('/about-us',[SiteController::class,'about'])->name('about');
    Route::get('/our-services',[SiteController::class,'services'])->name('services');
    Route::get('/faq',[SiteController::class,'faqPage'])->name('faq');
    Route::get('/contact-us',[SiteController::class,'contact'])->name('contact');
    //Login Resgiter
    Route::get('user/registration/form',[UserController::class,'registrationForm'])->name('user.registration.form');
    Route::post('user/registration/create',[UserController::class,'register'])->name('user.register');
    Route::get('user/login',[UserController::class,'loginForm'])->name('user.login.form');
    Route::post('user/dologin',[UserController::class,'doLogin'])->name('user.login');
    Route::get('user/logout',[UserController::class,'logout'])->name('user.logout');

        //Route Group for Auth Middleware
Route::group(['middleware' => 'auth'],function () {
        //Car Booking View Page and Booking Routes
    Route::get('/car/booking/{id}',[ FrontendBookingController::class,'showBookinfForm'])->name('car.booking.form');
    Route::post('/car/booking',[ FrontendBookingController::class,'booking'])->name('car.booking');

    //UserProfile
    Route::get('/user/profile',[UserProfile::class,'index'])->name('user.profile.home');
    Route::get('/user/update-password',[UserProfile::class,'password'])->name('user.edit.password');
    Route::Post('/user/update-password',[UserProfile::class,'updatePassword'])->name('user.update.password');

    Route::get('/user/profile/edit/{id}',[UserProfile::class,'profileEdit'])->name('user.profile.edit');
    Route::put('/userprofile/update/{id}',[UserProfile::class,'profileUpdate'])->name('user.profile.update');

    Route::get('/user/booking/history',[UserProfile::class,'bookingHistory'])->name('user.booking.history');

    Route::get('/user/testimonials',[UserProfile::class,'showTestimonials'])->name('user.testimonials.show');
    Route::post('/user/testimonials/post',[UserProfile::class,'postTestimonials'])->name('user.testimonials.post');
    Route::get('/user/testimonials/delete/{id}',[UserProfile::class,'deletetTestimonials'])->name('user.testimonials.delete');
    Route::get('/user/testimonials/edit/{id}',[UserProfile::class,'editTestimonials'])->name('user.testimonials.edit');
    Route::put('/user/testimonials/update/{id}',[UserProfile::class,'updateTestimonials'])->name('user.testimonials.update');

    //User Message
    Route::post('/user/message',[CustomerMessage::class,'sendMessage'])->name('user.message');
    });
    //Car Single And Multipule View Routes
Route::prefix('/car')->name('car.')->group(function(){
    Route::get('/our-cars',[ FrontendCarController::class,'cars'])->name('list');
    Route::get('/view/{id}',[ FrontendCarController::class,'singleCar'])->name('singlecar');
    Route::post('/search',[ FrontendCarController::class,'carSearch'])->name('search');


    });

});


//Backend Routes
Route::prefix('admin')->name('admin.')->group(function (){
    //Admin Login
    Route::get('/login',[BackendUserController::class,'showLoginForm'])->name('login-form');
    Route::post('/login',[BackendUserController::class,'login'])->name('login');

    Route::group(['middleware' => 'admin-auth'],function () {

        Route::get('/',[AdminController::class,'dashboard'])->name('dashboard');
        //Admin Profile
        Route::get('/profile',[AdminController::class,'profile'])->name('profile');
        Route::get('/profile/{id}',[AdminController::class,'editShow'])->name('profile.edit');
        Route::put('/profile/update/{id}',[AdminController::class,'updateProfile'])->name('profile.update');
        //Admin Logout
        Route::get('/logout',[BackendUserController::class,'logout'])->name('logout');

        Route::prefix('car')->name('car.')->group(function (){
            //brand Route Group
        Route::prefix('brand')->name('brand.')->group(function (){
            Route::get('/',[CarBrandController::class,'index'])->name('manage');
            Route::get('/create',[CarBrandController::class,'create'])->name('create');
            Route::post('/store',[CarBrandController::class,'store'])->name('store');
            Route::get('/edit/{id}',[CarBrandController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[CarBrandController::class,'update'])->name('update');
            Route::get('/delete/{id}',[CarBrandController::class,'destroy'])->name('delete');
        });
            //Car Route Group
            Route::get('/lists',[CarController::class,'index'])->name('manage');
            Route::get('/create',[CarController::class,'create'])->name('create');
            Route::post('/store',[CarController::class,'store'])->name('store');
            Route::get('/show/{id}',[CarController::class,'show'])->name('show');
            Route::get('/{id}/edit',[CarController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[CarController::class,'update'])->name('update');
            Route::get('/delete/{id}',[CarController::class,'destroy'])->name('destroy');


        });
        //Booking Route Group

        Route::prefix('booking')->name('booking.')->group(function (){
            Route::get('/list',[BookingController::class,'index'])->name('manage');
            Route::get('/show/{id}',[BookingController::class,'show'])->name('show');
            Route::get('/delete/{id}',[BookingController::class,'destroy'])->name('delete');
            Route::get('/booking/{id}/{status}',[BookingController::class,'updateStatus'])->name('status');
            //Payment In Per Booking
            Route::get('payment/{id}',[BookingController::class,'paymentShow'])->name('payment');
            Route::post('payment/create',[BookingController::class,'paymentCreate'])->name('payment.create');
            //add driver
            Route::get('/add-driver/{id}',[AddToBookingDriver::class,'addToBooking'])->name('add.driver.form');
            Route::put('/add/{id}',[AddToBookingDriver::class,'AddDriver'])->name('add.driver');


        });

        //Driver Route Group
        Route::prefix('driver')->name('driver.')->group(function (){
            Route::get('/lists',[DriverController::class,'index'])->name('list');
            Route::post('/create',[DriverController::class,'create'])->name('create');
            Route::get('/show/{id}',[DriverController::class,'show'])->name('show');
            Route::get('/edit/{id}',[DriverController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[DriverController::class,'update'])->name('update');
            Route::get('/delete/{id}',[DriverController::class,'destroy'])->name('delete');
        });

        //Customer Manage Route Group
        Route::prefix('user')->name('user.')->group(function (){
            Route::get('/lists',[BackendUserController::class,'index'])->name('list');
            Route::post('/create',[BackendUserController::class,'createCustomer'])->name('create');
            Route::get('/show/{id}',[BackendUserController::class,'show'])->name('show');
            Route::get('/edit/{id}',[BackendUserController::class,'editCustomer'])->name('edit');
            Route::put('/update/{id}',[BackendUserController::class,'updateCustomer'])->name('update');
            Route::get('/delete/{id}',[BackendUserController::class,'delete'])->name('delete');

        });
        //Insurance Manage Route Group
        Route::prefix('insurance')->name('insurance.')->group(function (){
            Route::get('/lists',[InsuranceController::class,'index'])->name('list');
            Route::get('/create',[InsuranceController::class,'create'])->name('create');
            Route::post('/store',[InsuranceController::class,'store'])->name('store');
            Route::get('/show/{id}',[InsuranceController::class,'show'])->name('show');
            Route::get('/edit/{id}',[InsuranceController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[InsuranceController::class,'update'])->name('update');
            Route::get('/delete/{id}',[InsuranceController::class,'delete'])->name('delete');

        });
        //customerMessage Manage Route Group
        Route::prefix('customerMessage')->name('customerMessage.')->group(function (){
            Route::get('/lists',[CustomerMessageController::class,'index'])->name('list');
            Route::get('/show/{id}',[CustomerMessageController::class,'show'])->name('show');
            Route::get('/delete/{id}',[CustomerMessageController::class,'delete'])->name('delete');
        });
        //Testiminials Manage Route Group
        Route::prefix('testimonials')->name('testimonials.')->group(function (){
            Route::get('/lists',[TestimonialController::class,'index'])->name('list');
            Route::get('/show/{id}',[TestimonialController::class,'show'])->name('show');
            Route::get('/delete/{id}',[TestimonialController::class,'dedele'])->name('delete');
        });
        //Payments Manage Route Group
        Route::prefix('payment')->name('payment.')->group(function (){
            Route::get('/lists',[PaymentController::class,'index'])->name('list');
            Route::get('/show/{id}',[PaymentController::class,'show'])->name('show');
            Route::get('/delete/{id}',[PaymentController::class,'delete'])->name('delete');

        });
        //Reports Manage Route Group
        Route::prefix('report')->name('report.')->group(function (){
            Route::get('/booking',[ReportController::class,'bookingReport'])->name('booking');
            Route::get('/payment',[ReportController::class,'paymentReport'])->name('payment');


        });

    });



});


//Driver Site Routes
    Route::get('employee/login',[DriverDriverController::class,'showLoginForm'])->name('employee.login.form');
    Route::post('employee/do-login', [DriverDriverController::class,'Dologin'])->name('employee.do.login');

    Route::group(['middleware' => 'driver-auth'],function () {
        Route::get('employee/',[DriverDriverController::class,'dashboard'])->name('employee.dashboard');
        Route::get('employee/logout',[DriverDriverController::class,'logout'])->name('employee.logout');
        //booking info for driver
        Route::get('/booking-information',[DriverDriverController::class,'bookingList'])->name('booking.information') ;
        Route::get('employee-schedule/show/{id}',[DriverDriverController::class,'show'])->name('show.booking');
        Route::get('/booking/{id}/{response}',[DriverDriverController::class,'updateResponse'])->name('employee.response');
        //Driver Profile Edit Routes
        Route::get('employee-profile/edit/{id}',[DriverDriverController::class,'edit'])->name('employee.profile.edit');
        Route::put('employee-profile/update/{id}',[DriverDriverController::class,'update'])->name('employee.profile.update');
        //Driver Password Setting
        Route::get('/employee/update-password',[DriverDriverController::class,'editpassword'])->name('employee.edit.password');
        Route::Post('/employee/update-password',[DriverDriverController::class,'updatePassword'])->name('employee.update.password');
    });

