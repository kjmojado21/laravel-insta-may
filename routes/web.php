<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Auth::routes();

Route::group(['middleware'=>'auth'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::resource('/post',PostController::class);

});
