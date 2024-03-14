<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

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
        $user = new UserModel();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        print_r($request->all());
        echo('register');
    }
}
