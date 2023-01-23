<?php

namespace App\Http\Controllers;


use App\Models\Absensi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OlahabsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.olahabsen.index',[
            'absensi' => Absensi::all()
        ]);
        // return('INI');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function create()
        {
            return view('dashboard.olahabsen.create');
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
        return redirect('/dashboard/olahabsen')->with('succes', 'Absen Berhasil di Input');
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
     * @param   int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absensi= absensi::find($id);
        return view('dashboard.olahabsen.edit',compact(['absensi']))
        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        // $rules =[
        //     'nis' => 'required',
        //     'nama' => 'required',
        //     'kelas' => 'required',
        //     'nama_guru' => 'required',
        //     'kode_guru' => 'required',
        //     'tanggal' => 'required',
        //     'hadir' => 'required'
        // ];

        // $validatedData=$request->validate($rules);

        // Absensi::where('id', $absensi->id)
        //     ->update($validatedData);
        // return redirect('/dashboard/olahabsen')->with('succes', 'Absen Berhasil di Edit');
        $absensi = absensi::find($id);
        $absensi->update($request->except(['submit']));
        return redirect('dashboard/olahabsen')->with('succes', 'Absen Berhasil di Edit');

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $absensi = absensi::find($id);
        $absensi->delete($request->except(['submit']));
        return redirect('/dashboard/olahabsen')->with('succes', 'Absen Berhasil di Hapus');
    }
}
