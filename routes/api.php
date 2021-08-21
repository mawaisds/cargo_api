<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BkngStsController;
use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\VhclInfoController;
use App\Http\Controllers\VhclStsController;
use App\Http\Controllers\VhclTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Public Routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/usertypes', [UserTypeController::class, 'index']);
Route::get('/usertypes/{id}', [UserTypeController::class, 'show']);

Route::get('/vehicletypes', [VhclTypeController::class, 'index']);
Route::get('/vehicletypes/{id}', [VhclTypeController::class, 'show']);

Route::get('/vehiclestatus', [VhclStsController::class, 'index']);
Route::get('/vehiclestatus/{id}', [VhclStsController::class, 'show']);

Route::get('/vehicleinfo', [VhclInfoController::class, 'index']);
Route::get('/vehicleinfo/{id}', [VhclInfoController::class, 'show']);
Route::get('/vehicleinfo/type/{id}', [VhclInfoController::class, 'show_filter_type']);
Route::get('/vehicleinfo/status/{id}', [VhclInfoController::class, 'show_filter_status']);

Route::get('/bookingstatus', [BkngStsController::class, 'index']);
Route::get('/bookingstatus/{id}', [BkngStsController::class, 'show']);


//Protected Routes
Route::group (['middleware' => ['auth:sanctum']], function () {
    Route::post('/usertypes', [UserTypeController::class, 'store']);
    Route::put('/usertypes/{id}', [UserTypeController::class, 'update']);
    Route::delete('/usertypes/{id}', [UserTypeController::class, 'destroy']);

    Route::post('/vehicletypes', [VhclTypeController::class, 'store']);
    Route::put('/vehicletypes/{id}', [VhclTypeController::class, 'update']);
    Route::delete('/vehicletypes/{id}', [VhclTypeController::class, 'destroy']);

    Route::post('/vehiclestatus', [VhclStsController::class, 'store']);
    Route::put('/vehiclestatus/{id}', [VhclStsController::class, 'update']);
    Route::delete('/vehiclestatus/{id}', [VhclStsController::class, 'destroy']);

    Route::post('/vehicleinfo', [VhclInfoController::class, 'store']);
    Route::put('/vehicleinfo/{id}', [VhclInfoController::class, 'update']);
    Route::delete('/vehicleinfo/{id}', [VhclInfoController::class, 'destroy']);

    Route::post('/bookingstatus', [BkngStsController::class, 'store']);
    Route::put('/bookingstatus/{id}', [BkngStsController::class, 'update']);
    Route::delete('/bookingstatus/{id}', [BkngStsController::class, 'destroy']);


    Route::post('/logout', [AuthController::class, 'logout']);
});
