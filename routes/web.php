<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);



Route::get('/about', function () {
    return view('about');
});

Route::get('/hello', function () {
    $dataArray = [
        'message' => 'Hello, Word',
    ];

    return response()->json($dataArray);
});

Route::get('/debug', function () {
    $dataArray = [
        'message' => 'Hello, Word',
    ];

    dd($dataArray);
    // ddd(request());
});

$taskList = [
    'first' => 'Sleep',
    'second' => 'Eat',
    'thirt' => 'Work',
];

// GET
Route::get('/tasks', function () use ($taskList) {
    if (request()->search) {
        return $taskList[request()->search];
    }
    return $taskList;
});

// GET BY PARAM
Route::get('/tasks/{param}', function ($param) use ($taskList) {
    return $taskList[$param];
});

// POST
Route::post('/tasks', function () use ($taskList) {
    // return request()->all();
    $taskList[request()->label] = request()->task;

    return $taskList;
});

// PUT
Route::patch('/tasks/{key}', function ($key) use ($taskList) {
    $taskList[$key] = request()->task;

    return $taskList;
});

// DELETE
Route::delete('/tasks/{key}', function ($key) use ($taskList) {
    unset($taskList[$key]);

    return $taskList;
});
