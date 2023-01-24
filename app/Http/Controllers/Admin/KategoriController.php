<?php

namespace App\Http\Controllers\Admin;

use App\Models\kategori;
use App\Models\subkategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Sub_Subkategori;

class KategoriController extends Controller
{

    //-- Untuk Kategori --//

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

    //-- End Kategori --//

    //-- Untuk SubKategori --//

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
        $this->_validasi($request);
        subkategori::insert([
            'kategori' => $request->kategori,
            'sub_kategori' => $request->sub_kategori,
        ]);
    }

    private function _validasi(Request $request){

        $validasi = $request->validate([
            'kategori' => 'required',
            'sub_kategori' => 'required'
        ],
        [
            'kategori' => 'Harap Isi Kategori',
            'sub_kategori' => 'Harap Isi Sub-Kategori'
        ]);
    }

    public function showSubkategori($id)
    {
        $datas = kategori::all();
        $data = subkategori::findOrFail($id);
        return view('dashboardadmin.kategori.datasubkategori.editsubkategori')->with([
            'data' => $data,
            'datas' => $datas
        ]);
    }

    public function updatesubkategori(Request $request, $id)
    {
        $data = subkategori::findOrFail($id);
        $data->update([
            'kategori' => $request->kategori,
            'sub_kategori' => $request->sub_kategori,
        ]);
    }

    public function destroySubkategori($id)
    {
        $data =subkategori::findOrFail($id);
        $data->delete();
    }

    //-- End subKategori --//

    //-- Untuk Sub-SubKategori  --//

    public function halamanSub_SubKategori()
    {
        $datas = kategori::all();
        $data = subkategori::all();
        $datap = Sub_Subkategori::all();
        return view('dashboardadmin.kategori.dataSub-subkategori.sub_subkategori', compact('data','datas', 'datap'));
    }

    public function tampilsub_subkategori()
    {
        $datas = kategori::all();
        $data = subkategori::all();
        $datap = Sub_Subkategori::with('datakategori','datasubkategori')->get();
        return view('dashboardadmin.kategori.dataSub-subkategori.tampilsub_subkategori')->with([
            'data' => $data,
            'datas' => $datas,
            'datap' => $datap
        ]);
    }

    public function createsub_Subkategori()
    {

        $datas = kategori::all();
        $data = subkategori::all();
        $datap = Sub_Subkategori::all();
        return view('dashboardadmin.kategori.dataSub-subkategori.createsub_subkategori', compact('data','datas','datap'));
    }

    public function storesub_SubKategori(Request $request)
    {
        // dd($request->all());
        $this->_validations($request);
        Sub_Subkategori::insert([
            'kategori' => $request->kategori,
            'sub_kategori' => $request->sub_kategori,
            'sub_subkategori' => $request->sub_subkategori,
        ]);
    }

    private function _validations(Request $request){

        $validasi = $request->validate([
            'kategori' => 'required',
            'sub_kategori' => 'required',
            'sub_subkategori' => 'required'
        ],
        [
            'kategori' => 'Harap Isi Kategori',
            'sub_kategori' => 'Harap Isi Sub-Kategori',
            'sub_subkategori' => 'Harap Isi Sub-SubKategori'
        ]);
    }

    public function showSub_Subkategori($id)
    {
        $datas = kategori::all();
        $data = subkategori::all();
        $datap = Sub_Subkategori::findOrFail($id);
        // dd($data);
        return view('dashboardadmin.kategori.dataSub-subkategori.editsub_subkategori')->with([
            'data' => $data,
            'datas' => $datas,
            'datap' => $datap
        ]);
    }

    public function updatesub_Subkategori(Request $request, $id)
    {
        $data = Sub_Subkategori::findOrFail($id);
        $data->update([
            'kategori' => $request->kategori,
            'sub_kategori' => $request->sub_kategori,
            'sub_subkategori' => $request->sub_subkategori,
        ]);
    }

    public function destroySub_Subkategori($id)
    {
        $data =Sub_Subkategori::findOrFail($id);
        $data->delete();
    }
}
