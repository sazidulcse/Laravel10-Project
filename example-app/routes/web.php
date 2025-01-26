<?php

use App\Http\Controllers\demoController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\ActionMiddleware;
use Illuminate\Support\Facades\Route;


Route::get('/{code}',[HomeController::class,'index'])->name('home')
->middleware([ActionMiddleware::class]);

Route::get('/about',[MainController::class,'About']);


Route::get('/service',[MainController::class,'Service']);


Route::get('/skill',[MainController::class,'Skill']);



Route::get('/contact',[MainController::class,'Contact']);


Route::get('/test/{email}',[demoController::class,'SessionPut']);

Route::get('/SessionPull',[demoController::class,'SessionPull']);
Route::get('/SessionGet',[demoController::class,'SessionGet']);
Route::get('/SessionForget',[demoController::class,'SessionForget']);