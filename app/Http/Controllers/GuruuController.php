<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class GuruuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // if(!auth()->check() || auth()->user()->level !=='admin'){
        //     abort(403);
        // }
        
        return view('dashboard.guru.index',[
            'guru' => Guru::all()
        ]);
        // return('Ini halaman guru');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kls= Kelas::all();
        return view('dashboard.guru.create', compact('kls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // BISA
        // if ($request->file('image') == null) {
        //     $file = "";
        // }else{
        //     $file = $request->file('image')->store('images');  
        // }
        // return $request->file('image')->store('guru-images');

        $validatedData = $request->validate([
            'image'=>'image|file|max:225',
            'nip'=>'required',
            'name' => 'required|max:225',
            'kelas_id'=>'required',
            'email' => 'required|email:dns|unique:gurus',
            'username' => ['required', 'min:3', 'max:255'],
            'jk' => 'required',
            'alamat' => 'required',
            
        ]);
        // SANDIKA
        // if($request->file('image')){
        //     $validatedData['image']=$request->file('image')->store('guru-images');
        // }
        $data = Guru::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('guru-images/', $request->file('image')->getClientOriginalName());
            $data->image=$request->file('image')->getClientOriginalName();
            $data->save();
        }
        Guru::create($validatedData);
        return redirect('/dashboard/guru')->with('success', 'New data Guru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        // return view('dashboard.guru.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    // public function edit(Guru $guru)
    public function edit($id)
    {
        //menampilkan view nya
        $kls=Kelas::all();
        
        $guru = Guru::find($id);

        return view('dashboard.guru.edit',compact('kls'), [
            'guru'=>$guru
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        //proses
        $aturan = [
            'nip'=>'required',
            'name' => 'required|max:225',
            'image'=>'image|file|max:225',
            'kelas_id'=>'required',
            'email' => 'required|email:dns|unique:gurus',
            'username' => ['required', 'min:3', 'max:255', 'unique:gurus'],
            'jk' => 'required',
            'alamat' => 'required',
            // 'kode_guru' => 'required'
        ];


        


        $validatedData=$request->validate($aturan);
        $data = Guru::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('guru-images/', $request->file('image')->getClientOriginalName());
            $data->image=$request->file('image')->getClientOriginalName();
            $data->save();
        }


        // CEK GAMBAR
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete()($request->oldImage);
            }
            $validatedData['image']=$request->file('image')->store('guru-images');
        }


        Guru::where('id', $guru->id)
            ->update($validatedData);
        return redirect('/dashboard/guru')->with('success', 'New data Guru berhasil di edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        // if($guru->image){
        //     Storage::delete()($guru->image);
        // }

        Guru::destroy($guru->id);
        return redirect('/dashboard/guru')->with('success', 'Data Guru has been deleted');
    }
}
