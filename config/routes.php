<?php

use App\Controllers\HomeController;
use App\Controllers\MovieController;
use App\Controllers\TestController;
use App\Kernel\Router\Route;

return [
    Route::get('/home', [HomeController::class,'index']),
    Route::get('/movies', [MovieController::class, 'index']),
    Route::get('/test', [TestController::class, 'index'])
    ];
?>