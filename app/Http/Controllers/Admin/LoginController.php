<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnCallback;

class LoginController extends Controller
{
    public function login(){
        return view('dashboardadmin.loginadmin.login');
    }
}
