<?php
namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhislistController extends Controller
{
    public function daftarkeinginan(){
        return view('landingpage.whisList.WhisList');
    }
}
