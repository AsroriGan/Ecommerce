<?php

namespace App\Http\Controllers\Admin;

use App\Models\kategori;
use App\Models\subkategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sub_Subkategori;

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

    public function deletekategori($id){

        $data = kategori::find($id);
        $data->delete();

        return redirect()->route('kategori')->with('success','Data Berhasil DiHapus');

    }

    //Sub Kategori

    public function subkategori(){
        $kate = subkategori::all();
        $data = kategori::all();
        return view('dashboardadmin.kategori.subkategori', compact('data','kate'));
    }

    public function sub_kategoripost(Request $request){
        $data = subkategori::create ([

            'kategori' => $request->kategori,
            'sub_kategori' => $request->sub_kategori,
        ]);

        return redirect()->route('subkategori')->with('success','Data Berhasil Ditambahkan');
    }

    public function editsub_kategoripost(Request $request, $id){
        // dd($request->all());
        $data = subkategori::findOrFail($id);

        $data->update($request->all());

         return redirect()->route('subkategori')->with('success', 'Data Berhasil DiUpdate');

    }

    public function sub_subkategori(){

        $kategori = kategori::all();
        $subkategori = subkategori::all();
        $_subsubkategori = Sub_Subkategori::with('datasubkategori','datakategori')->get();
        // dd($_subsubkategori);
        return view('dashboardadmin.kategori.sub_subkategori', compact('kategori', 'subkategori', '_subsubkategori'));
    }

    public function sub_subkategoripost(Request $request){
        $data = Sub_Subkategori::create ([

            'kategori' => $request->kategori,
            'sub_kategori' => $request->sub_kategori,
            'sub_subkategori' => $request->sub_subkategori,

        ]);

        return redirect()->route('sub_subkategori')->with('success', 'Data Berhasil Ditambahkan');

    }

    public function updatesub_subkategori(Request $request, $id)
    {
        // dd($request- >all());
        $data =Sub_Subkategori::findOrFail($id);

        $data->update([

                'kategori' => $request->kategori,
                'sub_kategori' => $request->sub_kategori,
                'sub_subkategori' => $request->sub_subkategori,

            ]);

        return redirect()->route('sub_subkategori')->with('success', 'Data Berhasil DiUpdate');
    }

}
