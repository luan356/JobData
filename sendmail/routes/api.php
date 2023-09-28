<?php

use App\Http\Controllers\jobsController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/index',[jobsController::class,'index'])->name('api.index');
Route::post('/store',[jobsController::class,'store'])->name('api.store');
Route::post('/delete{id}',[jobsController::class,'delete'])->name('api.delete');
Route::post('/edit{id}',[jobsController::class,'edit'])->name('api.edit');
