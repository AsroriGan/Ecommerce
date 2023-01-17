<?php

namespace App\Http\Controllers\Admin;

use App\Models\BannerPromo;
use App\Models\promo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromosiController extends Controller
{
    public function promosi()
    {
        $data = promo::all();
        return view('dashboardadmin.promo.promo', compact('data'));
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
        return redirect()->route('promosi')->with('success', 'Berhasil Di Update');
    }
    public function bannerpromosi()
    {
        $data = BannerPromo::all();
        return view('dashboardadmin.promo.bannerpromo', compact('data'));
    }
    public function editbanner(Request $request, $id)
    {
        $data = BannerPromo::find($id);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoproduk/', $request->file('foto')->getClientOriginalName());
            $namafoto = $request->file('foto')->getClientOriginalName();
            $data->update([
                'foto' => $namafoto,
                'judul' => $request->judul,
                'subjudul' => $request->subjudul,
                'deskripsi' => $request->deskripsi,

            ]);
        } else {
            $data->update([
                //'foto' => request->foto
                'judul' => $request->judul,
                'subjudul' => $request->subjudul,
                'deskripsi' => $request->deskripsi,

            ]);
        }
        return redirect()->route('bannerpromosi')->with('success', 'Berhasil Di Update');
    }
}
