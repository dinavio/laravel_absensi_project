<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(auth()->user()->level !== 'siswa'){
        //     abort(403);
        // }
        // return view('dashboard.absensi.index',[
        //     'absensi'=> Absensi::all()
        // ]);
        // return('INI ABSEN');
        // if(!auth()->check() || auth()->user()->level !=='siswa'){
        //     abort(403);
        // }
        return view('dashboard.absensi.index',[
            'absensi' => Absensi::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.absensi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData =$request->validate([
            'nis'=>'required',
            'nama'=>'required',
            'kelas'=>'required',
            'nama_guru'=>'required',
            'kode_guru'=>'required',
            'tanggal'=>'required',
            'hadir'=>'required'
        ]);
        Absensi::create($validatedData);
        return redirect('/dashboard/absensi')->with('succes', 'Absen Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Absensi $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Absensi $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi  $absensi)
    {
        Absensi::destroy($absensi->id);
        return redirect('/dashboard/absensi')->with('succes', 'Absen Berhasil di Hapus');
    }
}
