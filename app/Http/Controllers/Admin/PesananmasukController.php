<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesananmasuk;
use App\Models\RincianPesanan;
use Illuminate\Http\Request;

class PesananmasukController extends Controller
{
    public function index(){
        $pesananmasuk = Pesananmasuk::latest()->get();
        return view('dashboardadmin.pesananmasuk.index',compact('pesananmasuk'));
    }

    public function detail($id){
        $rincianproduk = RincianPesanan::where("pesanan_id",$id)->get();
        $pesananmasuk = Pesananmasuk::findorfail($id);
        // dd($rincianproduk);
        return view('dashboardadmin.pesananmasuk.detail',compact('rincianproduk','pesananmasuk'));
    }
}
