<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
        // [ array masukan
        // belum ada
        // 'title => 'Login'
        // ]);
    }

    public function authenticate(Request $request)
    {
        $credentials= $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);

        // if(Auth::attempt(['email' =>$request->email,'password'=>$request->password]))
        // {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboard');
        // }

        // // dd('berhasil login');
        // return back()->with('loginError','Login Failed!');

        if(Auth::attempt(['email' => $request->email,'password' => $request->password,'level' => 'admin'])){
            $request->session()->put('login',True);
            $request->session()->put('admin','admin');
            return redirect()->intended('/dashboard');
        }elseif (Auth::attempt([
            'email' => $request->email,'password' => $request->password,'level' => 'siswa'])){
            $request->session()->put('login',True);
            $request->session()->put('siswa','siswa');
            return redirect()->intended('/awal');
        }elseif (Auth::attempt([
            'email' => $request->email,'password' => $request->password,'level' => 'ortu'])){
            $request->session()->put('login',True);
            $request->session()->put('ortus','ortus');
            return redirect()->intended('/awal');
        }
        else{
            return back()->with('loginError','Login Failed!');
        }
    }
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
