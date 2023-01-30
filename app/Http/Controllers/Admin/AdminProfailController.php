<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class AdminProfailController extends Controller
{
    public function viewprofail() {
        return view('dashboardadmin.admin_profail.viewprofail');
    }

    public function hal_edit() {
        return view('dashboardadmin.admin_profail.editprofail');
    }

    public function editfoto(Request $request, $id) {
        // dd($request->all());
        $user = User::findorfail($id);

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('assets/images/admin', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            $user->save();
        }
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'notelepon' => $request->notelepon,
        ]);
        // dd($user);

        return redirect()->route('Edit_Admin')->with("success", "Profil Anda Berhasil Di Edit!");

    }

    public function viewganti() {
        return view('dashboardadmin.admin_profail.gantipasword');
    }

    public function gantipasswordpost(Request $request) {

        $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'min:8|required|confirmed',
        ]);

        #Match The Old Password
        if (!Hash::check($request->oldpassword, auth()->user()->password)) {
            return back()->with("error", "Kata Sandi Lama Tidak Cocok!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->newpassword)
        ]);

        return back()->with("success", "Password Berhasil DiGanti!");
    }
}
