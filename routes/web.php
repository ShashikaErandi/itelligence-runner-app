<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/runner-enroll', [App\Http\Controllers\RunnerController::class, 'index']);
    Route::post('/runner-enroll', [App\Http\Controllers\RunnerController::class, 'store']);
    Route::get('/run-result', [App\Http\Controllers\RunnerController::class, 'getRunsList']);
    Route::get('/run-result-save/{id}', [App\Http\Controllers\RunnerController::class, 'getRunnersList']);
    Route::post('/run-result-save/{id}', [App\Http\Controllers\RunnerController::class, 'storeResult']);
});
