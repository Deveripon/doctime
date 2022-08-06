<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

//Frontend Page routes
Route::get('/',[FrontendController::class,'ShowHomePage']) -> name('home.page');