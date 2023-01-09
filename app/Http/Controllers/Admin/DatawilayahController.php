<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatawilayahController extends Controller
{
    public function datawilayah(){
        return view('dashboardadmin.datawilayah.datawilayah');
    }
}
