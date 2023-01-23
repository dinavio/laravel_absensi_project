<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // if(!auth()->user()->level !== 'admin'){
        //     abort(403);
        // }
        return view('dashboard.user.index', [
            'user' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return redirect('/dashboard/user')->with('success', 'Berhasil registrasi. Silahkan login');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //menampilkan view nya
        return view('dashboard.user.edit', [
            'user'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $aturan = [
            'name' => 'required|max:225',
            'email' => 'required|email:dns|unique:users',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'jk' => 'required',
            'alamat' => 'required',
            'level' => 'required',
            'password' => 'required|min:5|max:255'
        ];
        $validatedData=$request->validate($aturan);

        User::where('id', $user->id)
            ->update($validatedData);
        return redirect('/dashboard/user')->with('success', 'New data USER berhasil di edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/user')->with('success', 'data User has been deleted');
    }
}
