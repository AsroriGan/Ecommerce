<?php

namespace App\Http\Controllers\Admin;

use App\Models\kategori;
use App\Models\subkategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{

    // Untuk Kategori

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function halamankategori()
    {
        $data = kategori::all();
        return view('dashboardadmin.kategori.datakategori.kategori', compact('data'));
    }

    public function tampilkandata()
    {
        $data = kategori::all();
        return view('dashboardadmin.kategori.datakategori.tampilkandata')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardadmin.kategori.datakategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_validation($request);
        $data['kategori'] = $request->kategori;
        kategori::insert($data);
    }

    private function _validation(Request $request){

        $validation = $request->validate([
            'kategori' => 'required'
        ],
        [
            'kategori' => 'Harap Isi Kategori',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = kategori::findOrFail($id);
        return view('dashboardadmin.kategori.datakategori.edit')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = kategori::findOrFail($id);
        $data->kategori = $request->kategori;
        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =kategori::findOrFail($id);
        $data->delete();
    }

    // Untuk SubKategori

    public function halamanSubKategori()
    {
        $data = subkategori::all();
        $datas = kategori::all();
        return view('dashboardadmin.kategori.datasubkategori.subkategori', compact('data','datas'));
    }

    public function tampilsubkategori()
    {
        $data = kategori::all();
        $datas = subkategori::all();
        return view('dashboardadmin.kategori.datasubkategori.tampilsubkategori')->with([
            'data' => $data,
            'datas' => $datas
        ]);
    }

    public function createsubkategori()
    {
        $data = kategori::all();
        return view('dashboardadmin.kategori.datasubkategori.createsubkategori', compact('data'));
    }

    public function storesubKategori(Request $request)
    {
        $this->_validation($request);
        // $data['kategori'] = $request->kategori;
        // $datas['sub_kategori'] = $request->sub_kategori;
        // kategori::insert($data);
        subkategori::insert([
            'kategori' => $request->kategori,
            'sub_kategori' => $request->sub_kategori,
        ]);
    }

    public function showSubkategori($id)
    {
        // $datas = kategori::where('kategoris., $id');
        $datas = DB::table('subkategoris')
                  // ->form()  
                  ->join('kategoris','kategoris.id','=','subkategoris.kategori') 
                  ->where('kategoris.id', $id) 
                  ->get();
        // $datas = DB::table('subkategoris')
        //                 ->join('kategoris', 'subkategoris.kategori','kategoris.id')
        //                 ->select('subkategoris.*', 'kategoris.kategori')
        //                 ->get();
        $data = subkategori::findOrFail($id);
        return view('dashboardadmin.kategori.datasubkategori.editsubkategori')->with([
            'data' => $data,
            'datas' => $datas
        ]);
        // dd($data);
    }

    public function updatesubkategori(Request $request, $id)
    {
        $data = subkategori::findOrFail($id);
        $data->update([
            'kategori' => $request->kategori,
            'sub_kategori' => $request->sub_kategori,
        ]);
    }
}
