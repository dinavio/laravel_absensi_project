@extends('dashboard.layouts.main')
@section('container')

<div class="navbar navbar-light bg-light d-flex justify-content flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-botton">
<h3>Add Ortu</h3>
</div>
<div class="container mt-3 col-lg-8">
    <form method="post" action="/dashboard/ortu/{{ $ortu->id }}" style= "background-color: #FFF0F5">
        @method('PUT')
        @csrf
        
        <div class="mb-3 mt-3">
        <label for="nik" class="form-label">Nik :</label>
        <input type="text" class="form-control input-color @error('nik') is-invalid @enderror" id="nik" placeholder="Masukkan nik" name="nik" value="{{ old('nik', $ortu->nik) }}" >
        @error('nik')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Nama :</label>
        <input type="text" class="form-control input-color @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{ old('nama', $ortu->nama) }}">
        @error('nama')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        
        <div class="mb-3 mt-3">
        <label for="alamat" class="form-label">Alamat :</label>
        <input type="text" class="form-control input-color @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan alamat" name="alamat" value="{{ old('alamat', $ortu->alamat) }}">
        @error('alamat')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3 mt-3">
        <label for="email" class="form-label">Email :</label>
        <input type="text" class="form-control input-color @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email" value="{{ old('email', $ortu->email) }}" >
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3 mt-3">
        <label for="created" class="form-label">Created  :</label>
        <input type="date" class="form-control input-color" id="created" name="created" placeholder="Masukkan created anda" value="{{ old('created', $ortu->created) }}" >
        </div>
        <div class="form-check">
        <label  class="form-label">Jenis Kelamin :</label><br>
        <label class="form-check-label" for="perempuan">
            Perempuan
        </label>
        <input class="form-check-input" type="radio" name="jk" id="jk" value="perempuan">
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="jk" id="jk" value="laki-laki" >
        <label class="form-check-label" for="laki-laki">
            Laki-laki
        </label>
        </div>
        @error('jk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        
        
        <button type="submit" class="btn btn-info float-end" name="submit">Simpan Data</button>
    </form>
</div>

@endsection