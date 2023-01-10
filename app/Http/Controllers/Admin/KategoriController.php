<?php

namespace App\Http\Controllers\Admin;

use App\Models\kategori;
use App\Models\subkategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{

    // Kategori 

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

    public function editkategoripost(Request $request, $id){
        $data = kategori::findOrFail($id);

        $data->update ([

            'kategori' => $request->kategori,

        ]);

        return redirect()->route('kategori')->with('success','Data Berhasil DiUpdate');
    }

    //Sub Kategori

    public function subkategori(){
        $kategori = subkategori::with('idkategori')->get();
        $data = kategori::all();
        return view('dashboardadmin.kategori.subkategori', compact('data','kategori'));
    }

    public function sub_kategoripost(Request $request){
        $data = subkategori::create ([

            'kategori' => $request->kategori,
            'sub_kategori' => $request->sub_kategori,
        ]);

        return redirect()->route('subkategori')->with('success','Data Berhasil Ditambahkan');
    }

}
