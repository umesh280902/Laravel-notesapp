<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'user'],function(){
    Route::get('/login',[userController::class,'getlogin']);
    Route::post('/login',[userController::class,'postlogin']);
    Route::get('/profile',[userController::class,'userprofile']);
});

