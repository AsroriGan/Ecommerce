<?php

namespace App\Http\Controllers\Landing;

use App\Models\Datawilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Spatie\FlareClient\Http\Response;

class Userprofilecontroller extends Controller
{
    public function index(){
        $regionstate = Datawilayah::orderBy('provinsi','asc')->get();
        $city = Datawilayah::get();
        $distric = Datawilayah::get();
        return view('landingpage.user_profile.user_profile',compact('regionstate','city','distric'));
    }
    public function getkabupaten(Request $request){
        echo $rsi = $request->post('rsi');
    }
    public function getkecamatan(){
        return view('landingpage.History.history');
    }


    public function history(){
        return view('landingpage.History.history');
    }
}
