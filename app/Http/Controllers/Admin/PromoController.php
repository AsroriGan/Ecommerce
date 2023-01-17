<?php

namespace App\Http\Controllers\Admin;


use App\Models\promo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = promo::all();
        return view('dashboardadmin.promo.promo', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function merekpost(Request $request)
    {
        $data = promo::create([

            'judul' => $request->nama_merek,
            'deskripsi'=> $request->deskripsi,
            'foto_merek' => $request->foto_merek,
            
        ]);
        // dd($data);
        if ($request->hasFile('foto_merek')) {
            $request->file('foto_merek')->move('foto/', $request->file('foto_merek')->getClientOriginalName());
            $data->foto_merek = $request->file('foto_merek')->getClientOriginalName();
            $data->save();
        }
        
        return Redirect()->route('merek')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function show(Promo $promo)
    {
        //
    }

   
    public function edit(Request $request, $id)
    {
        $data = promo::find($id);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoproduk/', $request->file('foto')->getClientOriginalName());
            $namafoto = $request->file('foto')->getClientOriginalName();
            $data->update([
                'foto' => $namafoto,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                
            ]);
        } else {
            $data->update([
                //'foto' => request->foto
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,

            ]);
        }
        return redirect()->route('promo')->with('success', 'Berhasil Di Update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $merek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function delete( $merek, $id)
    {
       
    }
}
