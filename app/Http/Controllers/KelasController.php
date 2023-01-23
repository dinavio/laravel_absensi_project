<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kelas.index',[
            'kelas'=> Kelas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $gru= Guru::all();
        // return view('dashboard.kelas.create', compact('gru'));
        return view('dashboard.kelas.create');
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
            'kelas'=>'required',
            
        ]);
        Kelas::create($validatedData);
        return redirect('/dashboard/kelas')->with('succes', 'New Kelas Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas= kelas::find($id);
        return view('dashboard.kelas.edit',compact(['kelas']))
        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kelas = kelas::find($id);
        $kelas->update($request->except(['submit']));
        return redirect('dashboard/kelas')->with('succes', 'Kelas Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $kelas = kelas::find($id);
        $kelas->delete($request->except(['submit']));
        return redirect('/dashboard/kelas')->with('success','data berhasil dihapus!');
    }
}
