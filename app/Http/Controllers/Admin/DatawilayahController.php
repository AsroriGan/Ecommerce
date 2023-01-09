<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Datawilayah;
use Illuminate\Http\Request;

class DatawilayahController extends Controller
{
    public function datawilayahprovinsi(){
        return view('dashboardadmin.datawilayah.datawilayahprovinsi');
    }
    public function insertprovinsi(Request $request){
        $data = Datawilayah::create($request->all());
        return redirect('/datawilayahprovinsi');
    }

    public function datawilayahkabupaten(){
        return view('dashboardadmin.datawilayah.datawilayahkabupaten');
    }
}
