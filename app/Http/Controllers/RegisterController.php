<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
        // [ 'title'=>'Register', 'active' => 'Register'];
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|email:dns|unique:users',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'jk' => 'required',
            'alamat' => 'required',
            'level' => 'required',
            'password' => 'required|min:5|max:255'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        // dd('registrasi berhasil');
        User::create($validatedData);

        // menuju flash data dulu
        // $request->session()->flash('success', 'Berhasil registrasi. Silahkan login');
        return redirect('/login')->with('success', 'Berhasil registrasi. Silahkan login');
    }
}
