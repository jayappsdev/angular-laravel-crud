<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActualUserController;

Route::get('/users',[App\Http\Controllers\ActualUserController::class, 'index']);

Route::get('/users/{id}',[App\Http\Controllers\ActualUserController::class, 'show']);

Route::post('/users',[App\Http\Controllers\ActualUserController::class, 'store']);

Route::put('/users/{id}',[App\Http\Controllers\ActualUserController::class, 'update']);

Route::delete('/users/{id}',[App\Http\Controllers\ActualUserController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
