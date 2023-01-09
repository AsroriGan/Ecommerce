<?php

namespace App\Http\Controllers\Admin;

use App\Models\kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function kategori(){
        $data = kategori::all();

        return view('dashboardadmin.kategori.kategori', compact('data'));
    }

    public function kategoripost(Request $request){
        $data = kategori::create ([

            'kategori' =>  $request->kategori,

        ]);

        return Redirect()->route('kategori')->with('success','Data Berhasil Ditambahkan');
    }
}
