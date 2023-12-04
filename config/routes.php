<?php

use App\Controllers\HomeController;
use App\Controllers\MovieController;
use App\Controllers\TestController;
use App\Router\Route;

return [
    Route::get('/kinozavr/home', [HomeController::class,'index']),
    Route::get('/kinozavr/movies', [MovieController::class, 'index']),
    Route::get('/kinozavr/test', [TestController::class, 'index'])
    ];
?>