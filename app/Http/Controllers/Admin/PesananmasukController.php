<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesananmasukController extends Controller
{
    public function index(){
        return view('dashboardadmin.pesananmasuk.index');
    }

    public function detail($id){
        return view('dashboardadmin.pesananmasuk.detail');
    }
}
