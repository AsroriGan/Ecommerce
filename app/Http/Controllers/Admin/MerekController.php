<?php

namespace App\Http\Controllers\Admin;


use App\Models\Merek;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MerekController extends Controller
{

    public function index()
    {
        $data = Merek::all();
        return view('dashboardadmin.merek.merek', compact('data'));
    }

    public function tampilanmerek()
    {
        $data = Merek::all();
        return view('dashboardadmin.merek.tampilanmerek', compact('data'));
    }

    public function createmerek()
    {
        return view('dashboardadmin.merek.createmerek');
    }

    public function storemerek(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'nama_merek' => 'required',
            'foto_merek' => 'required',
        ], [
            'nama_merek.required' => 'Merk Wajib Diisi',
            'foto_merek.required' => 'Foto Wajib Diisi',
        ]);
        if ($request->hasFile('foto_merek')) {
            $request->file('foto_merek')->move('foto/', $request->file('foto_merek')->getClientOriginalName());
            // $request->file('foto_merek')->getClientOriginalName();
        };
        $model  = new merek();
        $model->nama_merek = $request->nama_merek;
        $model->foto_merek = $request->file('foto_merek')->getClientOriginalName();
        $model->save();
        return response()->json();
        // dd($data);
    }

    public function editviewmerk($id)
    {
        $data = Merek::findorfail($id);
        return view('dashboardadmin.merek.editmerek', compact('data'));
    }

    public function edit(Request $request, $id)
    {
        // dd($request->all());
        $data = Merek::find($id);
        if ($request->hasFile('foto_merek')) {
            // dd('p');
            $request->file('foto_merek')->move('foto/', $request->file('foto_merek')->getClientOriginalName());
            $namafoto = $request->file('foto_merek')->getClientOriginalName();
            $data->nama_merek = $request->nama_merek;
            $data->foto_merek = $namafoto;
            $data->save();
            // dd($data);
        } else {
            // if ($request->nama_merek == null) {
            //     return response()->json();
            // } else {
                $data->update([
                    //'foto' => request->foto
                    'nama_merek' => $request->nama_merek,
                ]);
            // }
        }
        return response()->json();
    }

    public function update(Request $request, Merek $merek)
    {
        //
    }

    public function delete(Merek $merek, $id)
    {
        $data = Merek::find($id);
        $data->delete();
        // return redirect()->route('merek')->with('success', 'Data Berhasil DiHapus');
    }
}
