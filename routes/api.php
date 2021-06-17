<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/datosform', [App\Http\Controllers\UserFormController::class, 'consultarid']);

Route::get('/allsform', [App\Http\Controllers\UserFormController::class, 'colsultalls']);

Route::post('/userformsave', [App\Http\Controllers\UserFormController::class, 'store']);

Route::post('/editar', [App\Http\Controllers\UserFormController::class, 'edit']);
Route::post('/borrar', [App\Http\Controllers\UserFormController::class, 'destroy']);
