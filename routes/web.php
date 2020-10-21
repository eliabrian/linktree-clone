<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function ()
{
    Route::get('/links', [App\Http\Controllers\LinkController::class, 'index']);
    Route::get('/links/new', [App\Http\Controllers\LinkController::class, 'create']);
    Route::post('/links/new', [App\Http\Controllers\LinkController::class, 'store']);
    Route::get('/links/{link}', [App\Http\Controllers\LinkController::class, 'edit']);
    Route::put('/links/{link}', [App\Http\Controllers\LinkController::class, 'update']);
    Route::delete('/links/{link}', [App\Http\Controllers\LinkController::class, 'destroy']);

    Route::get('/settings', [App\Http\Controllers\UserController::class, 'edit']);
    Route::put('/settings', [App\Http\Controllers\UserController::class, 'update']);
});

Route::post('/visit/{link}', [App\Http\Controllers\VisitController::class, 'store']);

Route::get('/{user:username}', [App\Http\Controllers\UserController::class, 'show']);


