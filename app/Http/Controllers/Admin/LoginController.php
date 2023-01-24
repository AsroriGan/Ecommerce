<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\returnCallback;

class LoginController extends Controller
{
    public function loginadmin(){
        return view('dashboardadmin.loginadmin.login');
    }
    public function loginadminproses(Request $request)
    {
        $this->_validation($request);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/subkategori');
        } else {
            return redirect()->back()->with('password', 'password salah');
        }

        return \redirect('loginadmin');
    }
    private function _validation(Request $request)
    {

        $validation = $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email' => 'Harap Isi Email',
                'password' => 'Harap Isi Password'
            ]
        );
    }
    public function logoutadmin()
    {
        Auth::logout();
        return \redirect('loginadmin');
    }
}
