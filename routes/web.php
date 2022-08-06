<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

//Frontend Page routes
Route::get('/',[FrontendController::class,'ShowHomePage']) -> name('home.page');
Route::get('/login',[FrontendController::class,'ShowLoginPage']) -> name('login.page');
Route::get('/register-patient',[FrontendController::class,'RegisterPatientPage']) -> name('patient.register.page');
Route::get('/register-doctor',[FrontendController::class,'RegisterDoctorPage']) -> name('doctor.register.page');






