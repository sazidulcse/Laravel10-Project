<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/about',[MainController::class,'About']);


Route::get('/service',[MainController::class,'Service']);


Route::get('/skill',[MainController::class,'Skill']);



Route::get('/contact',[MainController::class,'Contact']);