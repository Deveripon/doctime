<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PatientAuthController extends Controller
{

    
    //Patient Login
    public function register(Request $request)
    {
        // form validation
        $this -> validate($request,[
            'name'           =>  'required',
            'email'          =>  'required|email|unique:patients',
            'mobile'         =>  'required|unique:patients',
            'password'       =>  'required|confirmed',
        ]);

       Patient::create([
            'name'           => $request -> name,
            'email'          => $request -> email,
            'mobile'         => $request -> mobile,
            'password'       => Hash::make($request -> password),
       ]);
       return back() -> with('success','Hi '.$request -> name.' ! your registration Successful! Now Please Login');
    }

    //Login Method
    public function login(Request $request)
    {
        //validation
        $this -> validate($request,[
            'user'      => 'required',
            'password'  => 'required',
        ],[
            'user.required'     => 'Email or Phone Or Password Does Not Match',
            'password.required'     => 'Email or Phone Or Password Does Not Match'
        ]);
        
        //Login Attempt
        if(Auth::guard('patient') -> attempt(['email' => $request -> user, 'password' => $request -> password])||Auth::guard('patient')-> attempt(['mobile' => $request -> user , 'password' => $request -> password])){
            return redirect() -> route('patient.dashboard.page');
        }else{
            return redirect() -> route('login.page') -> with('danger','Email or Phone Or Password Does Not Match');
        }
    

    }


}
