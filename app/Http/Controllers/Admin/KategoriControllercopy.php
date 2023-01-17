<?php

namespace App\Http\Controllers\Admin;
use App\Models\kategori;
use App\Models\subkategori;
use Illuminate\Http\Request;
use App\Models\Sub_Subkategori;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;

class KategoriController extends Controller
{

    // Kategori

    // public function kategori()
    // {
    //     $data = kategori::all();

    //     return view('dashboardadmin.kategori.kategori', compact('data'));
    // }

    public function tabel() {
        $data = kategori::all();

        return view('dashboardadmin.kategori.tabelkategori', compact('data'));
    }

    public function kategoripost(Request $request)
    {
        $this->_validation($request);

        $validator = Validator::make($request->all(),[
                'kategori' => 'required',
            ]);

            if($validator->fails())
            {
                return Response()->json([
                    'status' => 400,
                    'errors' => $validator->messages(),
                ]);
            }
            else{
                // kategori::create($request->all());
                $kategori = new kategori;
                $kategori->kategori = $request->input('kategori');
                $kategori->save();
                return response()->json([
                    'status' =>200,
                    'message' => 'success',
                ]);

            }
            // dd($validator);
            return redirect()->back();
        }

    private function _validation(Request $request){

        $validation = $request->validate([
            'kategori' => 'required',
        ],
        [
            'kategori' => 'isi',
        ]);
    }

    public function editkategoripost(Request $request, $id)
    {
        $data = kategori::findOrFail($id);

        $data->update([

            'kategori' => $request->kategori,

        ]);

        return redirect()->route('tabelkategori')->with('success', 'Data Berhasil DiUpdate');
    }

    public function deletekategori($id)
    {

        $data = kategori::findorfail($id);
        $data->delete();

        return redirect()->route('kategori')->with('success', 'Data Berhasil DiHapus');
    }

    //Sub Kategori

    public function subkategori()
    {
        $kate = subkategori::all();
        $data = kategori::all();
        return view('dashboardadmin.kategori.subkategori', compact('data', 'kate'));
    }

    public function sub_kategoripost(Request $request)
    {
        $data = subkategori::create([

            'kategori' => $request->kategori,
            'sub_kategori' => $request->sub_kategori,
        ]);

        return redirect()->route('subkategori')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function editsub_kategoripost(Request $request, $id)
    {
        // dd($request->all());
        $data = subkategori::findOrFail($id);

        $data->update($request->all());

        return redirect()->route('subkategori')->with('success', 'Data Berhasil DiUpdate');
    }

    public function deletesubkategori($id)
    {
        $data = subkategori::find($id);
        $data->delete();
        return redirect()->route('subkategori')->with('success', 'Data Berhasil DiHapus');
    }

    //Sub-Subkategori

    public function sub_subkategori()
    {

        $kategori = kategori::all();
        $subkategori = subkategori::all();
        $_subsubkategori = Sub_Subkategori::with('datasubkategori', 'datakategori')->get();
        // dd($_subsubkategori);
        return view('dashboardadmin.kategori.sub_subkategori', compact('kategori', 'subkategori', '_subsubkategori'));
    }

    public function sub_subkategoripost(Request $request)
    {
        $data = Sub_Subkategori::create([

            'kategori' => $request->kategori,
            'sub_kategori' => $request->sub_kategori,
            'sub_subkategori' => $request->sub_subkategori,

        ]);

        return redirect()->route('sub_subkategori')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function updatesub_subkategori(Request $request, $id)
    {
        // dd($request->all());
        $data = Sub_Subkategori::findOrFail($id);

        $data->update([

            'kategori' => $request->kategori,
            'sub_kategori' => $request->sub_kategori,
            'sub_subkategori' => $request->sub_subkategori,

        ]);

        return redirect()->route('sub_subkategori')->with('success', 'Data Berhasil DiUpdate');
    }
    public function deletesub_sub($id)
    {
        $data = Sub_Subkategori::findorfail($id);
        $data->delete();
        return redirect('/sub_subkategori')->with("success", "Data berhasil Dihapus");
    }
}
