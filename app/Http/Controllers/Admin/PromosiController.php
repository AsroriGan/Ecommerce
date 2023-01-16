<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromosiController extends Controller
{
    public function promosi(){
        return view('dashboardadmin.Promosi.promo');
    }
}
