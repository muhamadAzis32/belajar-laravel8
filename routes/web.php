<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/hello', function(){
    $dataArray =[
        'message' => 'Hello, Word'
    ];

    return response()->json($dataArray);
});

Route::get('/debug', function(){
    $dataArray =[
        'message' => 'Hello, Word'
    ];

    dd($dataArray);
    // ddd(request());
});
