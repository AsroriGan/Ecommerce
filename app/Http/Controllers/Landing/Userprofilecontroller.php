<?php

namespace App\Http\Controllers\Landing;

use App\Models\Datawilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\datawilayahkabupaten;
use App\Models\datawilayahkecamatan;
use Spatie\FlareClient\Http\Response;

class Userprofilecontroller extends Controller
{
    public function index(){
        $regionstate = Datawilayah::orderBy('provinsi','asc')->get();
        // $city = Datawilayah::get();
        // $distric = Datawilayah::get();
        return view('landingpage.user_profile.user_profile',compact('regionstate'));
    }
    public function getkabupaten(Request $request){
        $rsi = $request->post('rsi');
        $kabupaten = datawilayahkabupaten::where('provinsi',$rsi)->orderBy('kabupaten','asc')->get();
        $html = '<option value="">-- City List --</option>';
        foreach($kabupaten as $row){
            $html.= '<option value="'.$row->id.'">'.$row->kabupaten.'</option>';
        }
        echo $html;
    }
    public function getkecamatan(Request $request){
        $ci = $request->post('ci');
        $Kecamatan = datawilayahkecamatan::where('kabupaten',$ci)->orderBy('kecamatan','asc')->get();
        $html = '<option value="">-- Districs List --</option>';
        foreach($Kecamatan as $row){
            $html.= '<option value="'.$row->id.'">'.$row->kecamatan.'</option>';
        }
        echo $html;
    }


    public function history(){
        return view('landingpage.History.history');
    }
}
