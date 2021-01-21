<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function superadmin()
    {
      return view('login.superadmin');
    }
    public function ict()
    {
      return view('login.ict');
    }
    public function kajur()
    {
      return view('login.kajur');
    }
    public function data()
    {
      return view('login.data');
    }
    public function korpro()
    {
      return view('login.koorpro');
    }
    public function postlogin(Request $request)
    {
      $request->validate([
          'username' => 'required',
          'password' => 'required',
      ]);
      if(Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password])) {
          return redirect()->intended('/beranda')->with('status', 'Anda Berhasil Login di Sistem Aplikasi SNMPTN & SBMPTN ITK');
      }
      return redirect()->back()->withInput($request->only('username', 'remember'))->with('gagal', 'Username atau Password Salah!');
    }
    public function logout()
    {
      Auth::logout();
      return redirect('/')->with('sukses','Anda telah keluar dari Sistem!');
    }
}
