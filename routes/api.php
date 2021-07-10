<?php

use App\Http\Controllers\ApiController\InsuranceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::get('/get-insurance', [InsuranceController::class,'get_insurance']);
Route::get('/get-insurance/{id}/show', [InsuranceController::class,'single_insurance']);
Route::post('/insurance-create', [InsuranceController::class,'create_insurance']);
Route::put('/insurance/update/{id}', [InsuranceController::class,'update']);
Route::delete('/insurance/delete/{id}', [InsuranceController::class,'delete']);

