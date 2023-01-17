<?php

namespace App\Http\Controllers\Admin;
// namespace App\Http\Controllers;
use App\Http\Controllers\Controller;



use App\Models\blog;
use Illuminate\Http\Request;

class blogadmin extends Controller
{
    public function blogg (){
        $data=blog::all();
        return view('dashboardadmin.blog.blog', compact('data'));
    }
    public function tambahblog(){
        return view('dashboardadmin.blog.tambahblog');
    }
    public function insertblog(Request $request)
    {
        // dd($request->all());
        $files = [];
        if ($request->hasfile('foto_kegiatan')) {
            foreach ($request->foto_kegiatan as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('fotokegiatan/'), $name);
                $files[] = $name;
            }
        }
        // dd($files);
        $file = implode(',',$files);
        $file  = new blog();
        $file->judul_blog = $request->judul_blog;
        $file->deskripsi = $request->deskripsi;
        $file->deskripsi_produk = $request->deskripsi_produk;
        $file->foto_sampul = $request->foto_sampul;
        $file->foto_kegiatan = json_encode($files);
        if ($request->hasFile('foto_sampul')) {
            $request->file('foto_sampul')->move('blog/', $request->file('foto_sampul')->getClientOriginalName());
            $file->foto_sampul = $request->file('foto_sampul')->getClientOriginalName();
            $file->save();
        }
        // dd($file);
        // dd($file->foto_kegiatan );
        $file->save();

        return Redirect()->route('blogg')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function editblog($id){
        $data=blog::findOrFail($id);
        return view('dashboardadmin.blog.editblog', compact('data'));
    }

    public function updateblog(Request $request, $id)
    {
        // dd($request->all());
        $data =blog::find($id);
        $data->update([
            'judul_blog' => $request->judul_blog,
            'deskripsi' => $request->deskripsi,
        ]);
        // dd($data);   
        if ($request->hasFile('foto_sampul')) {
            $request->file('foto_sampul')->move('blog/', $request->file('foto_sampul')->getClientOriginalName());
            $data->foto_sampul = $request->file('foto_sampul')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasfile('foto_kegiatan')) {
            $keyarray1 =  array_keys($request->foto_kegiatan);
            $foto = [];
            // dd($keyarray1);
            // $hasil = array_combine($tes,$foto);
            $i = 0;
            foreach ($request->foto_kegiatan as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('foto_kegiatan/'), $name);
                $foto[$keyarray1[$i]] = $name;
                $i++;
            }
            $fotoin = json_decode($data->foto_kegiatan);
            // dd($foto);
            foreach ($keyarray1 as $key) {
                $fotoin[$key] = $foto[$key];
            }
            $data->foto_kegiatan = $fotoin;
            $data->save();
        }
        return redirect()->route('blogg')->with('success', 'Berhasil Di Update');
    }

    public function deleteblog($id){
        $data=blog::findOrFail($id);
        $data->delete();
        return redirect('blogg')->with('success', 'Data Berhasil Didelete');

    }
}

