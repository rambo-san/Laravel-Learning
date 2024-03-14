<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request){
        $name = $request->input('name');
        return view('home',['name'=>$name]);
    }
    
}
