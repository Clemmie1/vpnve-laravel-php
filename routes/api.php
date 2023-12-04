<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/





Route::middleware('api.key')->group(function () {
    Route::get('/v1/serverList', [App\Http\Controllers\API\GetServerList::class, 'getList']);
    Route::post('/v1/createKey', [App\Http\Controllers\API\CoreApiKey::class, 'createKey']);
    Route::get('/v1/getKey', [App\Http\Controllers\API\CoreApiKey::class, 'getKey']);
    Route::delete('/v1/deleteKey', [App\Http\Controllers\API\CoreApiKey::class, 'deleteKey']);
});
