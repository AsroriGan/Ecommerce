<?php

namespace App\Http\Controllers\Landing;

use App\Models\User;
use App\Models\Datawilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\datawilayahkabupaten;
use App\Models\datawilayahkecamatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use Spatie\FlareClient\Http\Response;

class Userprofilecontroller extends Controller
{
    public function index()
    {
        $ProvinsiId = Auth::user()->provinsi;
        $KabupatenId = Auth::user()->kabupaten;
        $KecamatanId = Auth::user()->kecamatan;
        $regionstate = RajaOngkir::provinsi()->all();
        $province_user = RajaOngkir::provinsi()->find($ProvinsiId);
        $Distric_user = RajaOngkir::kota()->dariprovinsi($ProvinsiId)->find($KabupatenId);
        $SubDistric_user = datawilayahkecamatan::find($KecamatanId);
        // $city = Datawilayah::get();
        $nama = explode(' ', Auth::user()->name);
        // dd($SubDistric_user);
        return view('landingpage.user_profile.user_profile', compact('regionstate', 'nama','province_user','Distric_user','SubDistric_user'));
    }
    public function edit_profile(Request $request, $id)
    {
        $user = User::findorfail($id);
        // dd($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('assets/images/user/', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            $user->save();
        }
        if ($request->hasFile('fotosampul')) {
            $request->file('fotosampul')->move('assets/images/banner/', $request->file('fotosampul')->getClientOriginalName());
            $user->fotosampul = $request->file('fotosampul')->getClientOriginalName();
            $user->save();
            // dd($user);
        }
        $user->update([
            'name' => $request->fristname . ' ' . $request->lastname,
            'email' => $request->email,
            'notelepon' => $request->notelepon,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
        ]);
        // dd($user);
        return redirect('/user-profile')->with("success", "Your profile has been successfully updated");
    }
    public function getkabupaten(Request $request)
    {
        $rsi = $request->post('rsi');

        $kabupaten = datawilayahkabupaten::where('province_id', $rsi)->orderBy('province_id', 'asc')->get();
        // $kabupaten = RajaOngkir::kota()->dariProvinsi($rsi)->get();
        // dd($kabupaten);
        $html = '<option value="">-- Select Distric --</option>';
        foreach ($kabupaten as $row) {
            $html .= '<option value="' . $row['city_id'] . '">'.$row['type'].' '.$row['city_name'].'</option>';
        }
        echo $html;
    }
    public function getkecamatan(Request $request)
    {
        $ci = $request->post('ci');
        $Kecamatan = datawilayahkecamatan::where('kabupaten', $ci)->orderBy('kecamatan', 'asc')->get();
        $html = '<option value="">-- Select SubDistric --</option>';
        foreach ($Kecamatan as $row) {
            $html .= '<option value="' . $row->id . '">' . $row->kecamatan . '</option>';
        }
        echo $html;
    }
    public function history()
    {
        return view('landingpage.History.history');
    }
    public function change_password()
    {
        return view('landingpage.user_profile.change_password');
    }
    public function postchange_password(Request $request)
    {
        // dd($request->all());
        # Validation
        $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'min:8|required|confirmed',
        ], [
            'newpassword.required' => 'Enter New Password',
            'newpassword.confirmed' => 'The new password confirmation does not match',
        ]);


        #Match The Old Password
        if (!Hash::check($request->oldpassword, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->newpassword)
        ]);

        return back()->with("success", "Password changed successfully!");
    }
}
