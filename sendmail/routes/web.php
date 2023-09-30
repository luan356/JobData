<?php

use App\Http\Controllers\SendJobController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



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

// Route::get('/', function () {
//     Mail::to('ls1075673@gmail.com')->send(new MailgunTeste);
//     return view('welcome');



Route::get('/job', function (Request $request) {
    $dataRequestController = new SendJobController();
    $dataRequest= $dataRequestController->getRequest($request);
    // return response()->json($dataRequest);
        return $dataRequest;


});





