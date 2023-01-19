<?php

namespace App\Http\Controllers\Admin;


use App\Models\Merek;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MerekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Merek::all();
        return view('dashboardadmin.merek.merek', compact('data'));
    }

    public function tampilanmerek()
    {
        $data = Merek::all();
        return view('dashboardadmin.merek.tampilanmerek')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createmerek()
    {
        return view('dashboardadmin.merek.createmerek');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storemerek(Request $request)
    {
        
        dd($request->all());
        // $data = Merek::insert([
        //     'nama_merek' => $request->nama_merek,
        //     'foto_merek' => $request->foto_merek,
            
        // ]);
        // if ($request->hasFile('foto_merek')) {
        //     $request->file('foto_merek')->move('foto/', $request->file('foto_merek')->getClientOriginalName());
        //     $data->foto_merek = $request->file('foto_merek')->getClientOriginalName();
        //     $data->save();
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function show(Merek $merek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Merek::find($id);
        if ($request->hasFile('foto_merek')) {
            $request->file('foto_merek')->move('foto/', $request->file('foto_merek')->getClientOriginalName());
            $namafoto = $request->file('foto_merek')->getClientOriginalName();
            $data->update([
                'foto_merek' => $namafoto,
                'nama_merek' => $request->nama_merek,
                
            ]);
        } else {
            $data->update([
                //'foto' => request->foto
                'nama_merek' => $request->nama_merek,
            

            ]);
        }
        return redirect()->route('merek')->with('success', 'Berhasil Di Update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merek $merek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function delete(Merek $merek, $id)
    {
        $data = Merek::find($id);
        $data->delete();
        return redirect()->route('merek')->with('success', 'Data Berhasil DiHapus');
    }
}
