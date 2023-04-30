<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ajax/get/{name?}',[AjaxController::class,'getRequest']);
Route::get('/ajax/getJSON',[AjaxController::class,'getJSON']);
Route::get('/ajax/getData/{data}',[AjaxController::class,'getError']);
Route::get('/ajax/getHeader',[AjaxController::class,'getHeader']);
Route::post('/ajax/post',[AjaxController::class,'postRequest']);
Route::put('/ajax/put/{id}',[AjaxController::class,'putRequest']);
Route::patch('/ajax/patch/{id}',[AjaxController::class,'patchRequest']);
Route::delete('/ajax/delete/{id}',[AjaxController::class,'deleteRequest']);