<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/tasks', [TaskController::class, 'index']);
});

Route::get('/', [HomeController::class, 'index']);
// Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create']);
Route::get('/tasks/{id}', [TaskController::class, 'show']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']);
Route::patch('/tasks/{id}', [TaskController::class, 'update']);
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);

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
