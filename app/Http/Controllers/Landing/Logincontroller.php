<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    public function login(){
        return view('landingpage.Login_register.login');
    }

    public function register(){
        return view('landingpage.Login_register.register');
    }
}
