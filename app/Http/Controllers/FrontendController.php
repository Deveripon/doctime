<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    //Show Login Page
    public function ShowHomePage()
    {
        return view('frontend.index');
    }
    
    //Show Login Page
    public function ShowLoginPage()
    {
        return view('frontend.login');
    }

    //Show Patient Register Page
    public function RegisterPatientPage()
    {
       return view('frontend.patient.register');
    }
    
    //Show Doctor Register pages

    	function RegisterDoctorPage()
    {
        return view('frontend.doctor.register');
    }


}
