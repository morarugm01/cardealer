<?php

use App\Http\Controllers\Api\ManufacturerController;
use App\Http\Controllers\Api\VehicleModelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('manufacturers', [ManufacturerController::class, 'index']);
Route::get('models/{id}', [VehicleModelController::class, 'index']);