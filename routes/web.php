<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\patient\PatientAuthController;

//Frontend Page routes
Route::get('/',[FrontendController::class,'ShowHomePage']) -> name('home.page');
Route::get('/login',[FrontendController::class,'ShowLoginPage']) -> name('login.page');
Route::get('/register-patient',[FrontendController::class,'RegisterPatientPage']) -> name('patient.register.page');
Route::get('/register-doctor',[FrontendController::class,'RegisterDoctorPage']) -> name('doctor.register.page');
Route::get('/patient-dashboard',[FrontendController::class,'PatientDashboardPage']) -> name('patient.dashboard.page');



//Patient Authentication routes
Route::post('register-patient',[PatientAuthController::class,'register']) -> name('patient.register');
Route::post('login',[PatientAuthController::class,'login']) -> name('login');




