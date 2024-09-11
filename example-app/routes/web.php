<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('about');
});

Route::get('/about',[MainController::class,'About']);


Route::get('/service',[MainController::class,'Service']);


Route::get('/skill',[MainController::class,'Skill']);



Route::get('/contact',[MainController::class,'Contact']);