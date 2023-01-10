<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Datawilayah;
use App\Models\datawilayahkabupaten;
use App\Models\datawilayahkecamatan;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcherInterface;

class DatawilayahController extends Controller
{
    public function datawilayahprovinsi(){
        $data = Datawilayah::all();
        // dd($data);
        return view('dashboardadmin.datawilayah.datawilayahprovinsi',compact('data'));
    }
    public function insertprovinsi(Request $request){
        $data = Datawilayah::create($request->all());
        return redirect('/datawilayahprovinsi');
    }
    public function editprovinsi(Request $request,$id){
        $data = Datawilayah::findorfail($id);
        $data->update($request->all());
        // dd($data);
        return redirect('/datawilayahprovinsi');
    }

    public function datawilayahkabupaten(){
        $provinsi = Datawilayah::all();
        $kabupaten = datawilayahkabupaten::all();
        return view('dashboardadmin.datawilayah.datawilayahkabupaten',compact('provinsi','kabupaten'));
    }
    public function insertkabupaten(Request $request){
        // dd($request->all());
        $data = datawilayahkabupaten::create($request->all());
        return redirect('/datawilayahkabupaten');
    }

    public function datawilayahkecamatan(){
        $provinsi = Datawilayah::all();
        $kabupaten = datawilayahkabupaten::all();
        $kecamatan = datawilayahkecamatan::with('kprovinsi','kkabupaten')->get();
        return view('dashboardadmin.datawilayah.datawilayahkecamatan',compact('provinsi','kabupaten','kecamatan'));
    }
    public function insertkecamatan(Request $request){
        $data = datawilayahkecamatan::create($request->all());
        return redirect('/datawilayahkecamatan');
    }
}
