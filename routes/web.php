<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'user'],function(){
    Route::get('/login',[userController::class,'getlogin'])->name('login');
    Route::post('/login',[userController::class,'postlogin']);
    Route::get('/signup',[userController::class,'getsignup'])->name('signup');
    Route::post('/signup',[userController::class,'postsignup']);
    Route::get('/profile',[userController::class,'userprofile'])->name('profile');
});

