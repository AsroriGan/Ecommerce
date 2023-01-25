<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


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
            $request->file('foto')->move('assets/images/', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            $user->save();
        }
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        // dd($user);

        return redirect()->route('Edit_Admin')->with("success", "Your profile has been successfully updated");

    }   
}
