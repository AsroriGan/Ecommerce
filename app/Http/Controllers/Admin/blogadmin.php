<?php

namespace App\Http\Controllers\Admin;
// namespace App\Http\Controllers;
use App\Http\Controllers\Controller;



use App\Models\blog;
use App\Models\kategoriblog;
use Illuminate\Http\Request;

class blogadmin extends Controller
{
    public function blogg (){
        $data=blog::with('idblog')->get();
        return view('dashboardadmin.blog.blog', compact('data'));
    }
    public function tambahblog(){
        $relasi=kategoriblog::all();
        $data = blog::all();
        return view('dashboardadmin.blog.tambahblog', compact('data','relasi'));
    }
    public function insertblog(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'judul_blog' => 'required|',
            'deskripsi' => 'required|' ,
            'deskripsi_produk' => 'required|',
            'foto_sampul' => 'required|mimes:png,jpg,jpeg,webp,jfif',
            // 'foto_kegiatan' => 'required|mimes:png,jpg,jpeg,webp,jfif'
        ],[
            'judul_blog.required' => 'Judul Blog Wajib diisi',
            'deskripsi.required' => 'Deskripsi Wajid diisi',
            'deskripsi_produk.required' => 'Deskripsi Produk Wajib Diisi',
            'foto_sampul.required' => 'Foto Blog Wajib Diisi',
            'foto_sampul.mimes' => 'Foto Harus Berupa Jpg, Jpeg, Png, Webp, Jfif',
            // 'foto_kegiatan.required' => 'Foto Produk Wajib Diisi',
            // 'foto_kegiatan.mimes' => 'Foto Harus Berupa Jpg, Jpeg, Png, Webp, Jfif '
        ]);
        $files = [];
        if ($request->hasfile('foto_produk')) {
            foreach ($request->foto_produk as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('fotoprodukblog/'), $name);
                $files[] = $name;
            }
        }
        // dd($files);
        $file = implode(',',$files);
        $file  = new blog();
        $file->judul_blog = $request->judul_blog;
        $file->kategoriblog = $request->kategoriblog;
        $file->deskripsi = $request->deskripsi;
        $file->deskripsi_produk = $request->deskripsi_produk;
        $file->foto_sampul = $request->foto_sampul;
        $file->foto_produk = json_encode($files);
        if ($request->hasFile('foto_sampul')) {
            $request->file('foto_sampul')->move('blog/', $request->file('foto_sampul')->getClientOriginalName());
            $file->foto_sampul = $request->file('foto_sampul')->getClientOriginalName();
            $file->save();
        }
        // dd($file);
        // dd($file->foto_kegiatan );
        $file->save();

        return Redirect()->route('blogad')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function editblog($id){
        $data=blog::findOrFail($id);
        $relasi=kategoriblog::all();
        // dd($relasi);
        // $relasi=blog::with('idblog')->get();
        return view('dashboardadmin.blog.editblog', compact('data','relasi'));
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
        if ($request->hasfile('foto_produk')) {
            $keyarray1 =  array_keys($request->foto_produk);
            $foto = [];
            // dd($keyarray1);
            // $hasil = array_combine($tes,$foto);
            $i = 0;
            foreach ($request->foto_produk as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('fotoprodukblog/'), $name);
                $foto[$keyarray1[$i]] = $name;
                $i++;
            }
            $fotoin = json_decode($data->foto_produk);
            // dd($foto);
            foreach ($keyarray1 as $key) {
                $fotoin[$key] = $foto[$key];
            }
            $data->foto_produk = $fotoin;
            $data->save();
        }
        return redirect()->route('blogad')->with('success', 'Berhasil Di Update');
    }

    public function deleteblog($id){
        $data=blog::findOrFail($id);
        $data->delete();
        return redirect()->route('blogad')->with('success', 'Data Berhasil Didelete');

    }


    public function kategoriblog(){
        $data=kategoriblog::all();
        return view('dashboardadmin.kategoriblog.kategoriblog', compact('data'));
    }

    public function insertkategoriblog(request $request){
        $data = kategoriblog::create([
            'kategoriblog' => $request->kategoriblog
        ]);
        return redirect()->route('kategoriblog')->with('succes', 'Berhasil Menambahkan Kategori blog');
    }
    public function updatekategoriblog(request $request, $id){
       $data=kategoriblog::find($id);
       $data->update([
        'kategoriblog'=>$request->kategoriblog
       ]);
        return redirect()->route('kategoriblog')->with('succes', 'Data Berhasil Di Update');
    }
}

