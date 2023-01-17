<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Logincontroller extends Controller
{
    public function login()
    {
        return view('login.login');
    }


    public function loginpost(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email Harus Diisi',
            'email.inuque' => 'email sudah di pakai',
            'password.required' => 'password Harus Diisi'
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            if (auth()->user()->role == 'user') {
                return redirect('/')->with('success', 'Berhasil Login');;
            } else {
                return redirect('beranda');
            }
        }
        //  dd($request);

        return redirect('login')->with('error', 'Email atau Password Salah!');
    }

    public function register()
    {
        return view('login.register');
    }
    public function registerpost(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'phonenumber' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
        ], [
            'username.required' => 'Username Harus Di isi',
            'name.required' => 'Nama Harus Di isi',
            'notelepon.required' => 'No Telepon Harus Di Isi',
            'email.required' => 'Email Harus Diisi',
            'email' => 'Email Yang Anda Masukan Tidak Benar',
            'unique' => 'Email Ini Sudah Digunakan',
            'password.required' => 'Password Harus Diisi',
            'password.min' => 'Password harus minimal 8 karakter',
        ]);
        $data = User::create([
            'name' => $request->firstname . ' ' . $request->lastname,
            'notelepon' => $request->phonenumber,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user',
            'remember_token' => Str::random(60),
        ]);
        // dd($data);
        return redirect('/login')->with('success', 'Berhasil Membuat Akun');
    }
    public function logout(){
        Auth::logout();
        return redirect('/')->with("success","You has been Logout");
    }
}
