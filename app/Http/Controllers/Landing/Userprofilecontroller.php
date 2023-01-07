<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Userprofilecontroller extends Controller
{
    public function index(){
        return view('landingpage.user_profile.user_profile');
    }
}
