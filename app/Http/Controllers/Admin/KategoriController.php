<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
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
}
