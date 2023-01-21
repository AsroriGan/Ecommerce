<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Datawilayah;
use App\Models\datawilayahkabupaten;
use App\Models\datawilayahkecamatan;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcherInterface;

class DatawilayahController extends Controller
{
    //======== Start data wilayah provinsi ========//
    public function datawilayahprovinsi()
    {
        $data = Datawilayah::all();
        // dd($data);
        return view('dashboardadmin\datawilayah\provinsi\datawilayahprovinsi', compact('data'));
    }

    public function viewdataprovinsi()
    {
        $data = Datawilayah::all();
        // dd($data);
        return view('dashboardadmin.datawilayah.provinsi.viewdataprovinsi', compact('data'));
    }

    public function create()
    {
        return view('dashboardadmin.datawilayah.provinsi.create');
    }

    public function insertprovinsi(Request $request)
    {
        $validated = $request->validate([
            'provinsi' => 'required'
        ], ['provinsi.required' => 'Provinsi Wajib Di isi']);
        Datawilayah::create($request->all());
        return response()->json(['title' => 'Success', 'message' => 'Data Berhasil Ditambahkan']);
    }

    public function provinsiview($id)
    {
        // dd($id);
        $data = Datawilayah::findorfail($id);
        return view('dashboardadmin.datawilayah.provinsi.editview', compact('data'));
    }

    public function editprovinsi(Request $request, $id)
    {
        // dd($request->all());
        $data = Datawilayah::findorfail($id);
        $data->update($request->all());
        return response()->json(['title' => 'Success', 'message' => 'Data Berhasil Diedit']);
    }

    public function deleteprovinsi($id)
    {
        $relasi = datawilayahkabupaten::where('provinsi', $id)->count();
        if ($relasi > 0) {
            return response()->json(['messagerelasi' => 'Data Provinsi Sedang digunakan']);
        }
        $data = Datawilayah::findorfail($id);
        // dd($data);
        $data->delete();
        // $message = 'deleted';
        return response()->json();
        // return redirect('/datawilayahprovinsi')->with("success","Data Berhasil Dihapus");
    }
    //======== End data wilayah provinsi ========//

    //======== Star data wilayah Kabupaten ========//

    public function datawilayahkabupaten()
    {
        $provinsi = Datawilayah::all();
        $kabupaten = datawilayahkabupaten::all();
        return view('dashboardadmin.datawilayah.kabupaten.datawilayahkabupaten', compact('provinsi', 'kabupaten'));
    }

    public function viewkabupaten()
    {
        $kabupaten = datawilayahkabupaten::all();
        // dd($data);
        return view('dashboardadmin.datawilayah.kabupaten.viewkabupaten', compact('kabupaten'));
    }

    public function createkabupaten()
    {
        $provinsi = Datawilayah::all();
        return view('dashboardadmin.datawilayah.kabupaten.create', compact('provinsi'));
    }

    public function insertkabupaten(Request $request)
    {
        // dd($request->all());
        $this->_validations($request);
         datawilayahkabupaten::create($request->all());
        // return redirect('/datawilayahkabupaten')->with("success", "Data berhasil di tambahkan");
    }

    private function _validations(Request $request){

        $validasi = $request->validate([
            'provinsi' => 'required',
            'kabupaten' => 'required'
        ],
        [
            'provinsi' => 'Harap Isi provinsi',
            'kabupaten' => 'Harap Isi kabupaten'
        ]);
    }

    public function ShowKabupaten($id)
    {
        // dd($id);
        $provinsi = Datawilayah::all();
        $data = datawilayahkabupaten::findorfail($id);
        return view('dashboardadmin.datawilayah.kabupaten.edit', compact('data', 'provinsi'));
    }

    public function editkabupaten(Request $request, $id)
    {
        // dd($request->all());
        $data = datawilayahkabupaten::findorfail($id);
        $data->update($request->all());
        // return redirect('/datawilayahkabupaten')->with("sucess", "Data Berhasil di update");
    }

    public function deletekabupaten($id)
    {
        $relasi = datawilayahkecamatan::where('kabupaten', $id)->count();
        if ($relasi > 0) {
            return redirect()->back()->with("error", "Data masih digunakan di data kecamatan");
        }
        $data = datawilayahkabupaten::findorfail($id);
        $data->delete();
        // return redirect('/datawilayahkabupaten')->with("success", "Data berhasil dihapus");
    }

    //======== End data wilayah Kabupaten ========//

    //======== Star data wilayah Kecamatan ========//


    public function datawilayahkecamatan()
    {
        $provinsi = Datawilayah::all();
        $kabupaten = datawilayahkabupaten::all();
        $kecamatan = datawilayahkecamatan::with('kprovinsi', 'kkabupaten')->get();
        return view('dashboardadmin.datawilayah.Kecamatan.datawilayahkecamatan', compact('provinsi', 'kabupaten', 'kecamatan'));
    }

    public function createkecamatan()
    {
        $provinsi = Datawilayah::all();
        $kabupaten = datawilayahkabupaten::all();
        return view('dashboardadmin.datawilayah.Kecamatan.createkecamatan', compact('provinsi', 'kabupaten'));
    }

    public function viewkecamatan()
    {
        $kecamatan = datawilayahkecamatan::all();
        // dd($data);
        return view('dashboardadmin.datawilayah.Kecamatan.viewkecamatan', compact('kecamatan'));
    }

    public function insertkecamatan(Request $request)
    {
        $this->_validation($request);
        $data = datawilayahkecamatan::create($request->all());
        // return redirect('/datawilayahkecamatan')->with("success", "data berhasil di tambahkan");
    }

    private function _validation(Request $request){

        $validasi = $request->validate([
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required'
        ],
        [
            'provinsi' => 'Harap Isi provinsi',
            'kabupaten' => 'Harap Isi kabupaten',
            'kecamatan' => ' Harap Isi Kecamatan'
        ]);
    }

    public function getkabupaten(Request $request){
        // dd($request->all());
        $rsi = $request->post('rsi');
        $kabupaten = datawilayahkabupaten::where('provinsi', $rsi)->orderBy('kabupaten', 'asc')->get();
        $html = '<option value="">Pilih Kabupaten</option>';
        foreach ($kabupaten as $row) {
            $html .= '<option value="' . $row->id . '">' . $row->kabupaten . '</option>';
        }
        echo $html;
    }

    public function Showkecamatan($id)
    {
        // dd($id);
        $provinsi = Datawilayah::all();
        $kabupaten = datawilayahkabupaten::all();
        $data = datawilayahkecamatan::findOrFail($id);
        return view('dashboardadmin.datawilayah.Kecamatan.editkecamatan', compact('provinsi', 'kabupaten', 'data'));
    }

    public function editkecamatan(Request $request, $id)
    {
        $data = datawilayahkecamatan::findorfail($id);
        $data->update($request->all());
        // return redirect('/datawilayahkecamatan')->with("success", "data berhasil di edit");
    }
    public function deletekecamatan($id)
    {
        $data = datawilayahkecamatan::findorfail($id);
        $data->delete();
        // return redirect('/datawilayahkecamatan')->with("success", "Data berhasil Dihapus");
    }

    //======== End data wilayah Kecamatan ========//

    //ajax validation

}
