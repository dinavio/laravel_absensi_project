<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SiswaController extends Controller
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

        return view('dashboard.siswa.index', [
            'siswa' => Siswa::all()
        ]);

        // $dtSiswa = Siswa::with('kelas')->paginate(2);
        // return view('dashboard.siswa.index',compact('dtSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kls=Kelas::all();
        $gur=Guru::all();
        // return view('dashboard.siswa.create', compact('kls'));
        return view('dashboard.siswa.create', compact('kls','gur'));
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
            'kelas_id'=>'required',
            'nis'=>'required',
            'nama' => 'required|max:225',
            'username' => ['required', 'min:3', 'max:255', 'unique:siswas'],
            'email' => 'required|email:dns|unique:siswas',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            // 'kelas' => 'required',
            'guru_id' => 'required'
        ]);
        Siswa::create($validatedData);
        return redirect('/dashboard/siswa')->with('succes', 'New Siswa Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //menampilkan view
        $kls=Kelas::all();
        $gur=Guru::all();
        // $siswa = Siswa::with('kelas');
        return view('dashboard.siswa.edit', compact('kls','gur'), [
            'siswa'=>$siswa, 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        // proses validate
        $rules = [
            'nis'=>'required',
            'kelas_id'=>'required',
            'nama' => 'required|max:225',
            'username' => ['required', 'min:3', 'max:255', 'unique:gurus'],
            'email' => 'required|email:dns|unique:gurus',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            // 'kelas' => 'required',
            'guru_id' => 'required'
        ];
        $validatedData=$request->validate($rules);

        Siswa::where('id', $siswa->id)
            ->update($validatedData);
        return redirect('/dashboard/siswa')->with('success', 'New data Siswa berhasil di edit');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);
        return redirect('/dashboard/siswa')->with('success','data berhasil dihapus!');
    }
}
