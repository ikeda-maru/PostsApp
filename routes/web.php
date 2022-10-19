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

Route::get('/example', [\App\Http\Controllers\Example\IndexController::class, 'index']);
Route::get('/example/create', [\App\Http\Controllers\Example\CreateController::class, 'index']);
Route::post('/example/posts', [\App\Http\Controllers\Example\StoreController::class, 'index']);
Route::get('/example/{id}', [\App\Http\Controllers\Example\ShowController::class, 'index'])->name('example.show');
Route::get('/example/{id}/edit',  [\App\Http\Controllers\Example\EditController::class, 'index']);
Route::put('/example/{id}',  [\App\Http\Controllers\Example\UpdateController::class, 'index']);
Route::delete('/example/{id}',  [\App\Http\Controllers\Example\DestroyController::class, 'index']);
Route::get('/example', [\App\Http\Controllers\Example\IndexController::class, 'index'])->name('example.index');
