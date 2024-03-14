<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view('registration');
    }  
    public function register(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required|min:5|max:12|confirmed',
                'password_confirmation'=>'required|min:5|max:12'

            ]
            );
        print_r($request->all());
        echo('register');
    }
}
