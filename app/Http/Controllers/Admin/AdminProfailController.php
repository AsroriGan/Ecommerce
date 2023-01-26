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

        return redirect()->route('Edit_Admin')->with("success", "Your profile has been successfully updated");

    }

    public function viewganti() {
        return view('dashboardadmin.admin_profail.gantipasword');
    }

    public function gantipasswordpost(Request $request) {


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
