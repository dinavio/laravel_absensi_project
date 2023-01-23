<?php

namespace App\Http\Controllers;

use App\Models\Ortu;
use Illuminate\Http\Request;

class OrtuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ortu.index',[
            'ortu' => Ortu::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ortu.create');
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
            'nik'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'jk'=>'required',
            'email'=>'required'
        ]);
        Ortu::create($validatedData);
        return redirect('/dashboard/ortu')->with('success', 'New data Ortu berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ortu  $ortu
     * @return \Illuminate\Http\Response
     */
    public function show(Ortu $ortu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ortu  $ortu
     * @return \Illuminate\Http\Response
     */
    public function edit(Ortu $ortu)
    {
        return view('dashboard.ortu.edit',[
            'ortu'=>$ortu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ortu  $ortu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ortu $ortu)
    {
        $prosesedit = [
            'nik'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'jk'=>'required',
            'email'=>'required'
        ];
        $validatedData=$request->validate($prosesedit);
        Ortu::where('id', $ortu->id)
            ->update($validatedData);
        return redirect('/dashboard/ortu')->with('success', 'New data Ortu berhasil di edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ortu  $ortu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ortu $ortu)
    {
        Ortu::destroy($ortu->id);
        return redirect('/dashboard/ortu')->with('success', 'data Ortu has been deleted');
    }
}
