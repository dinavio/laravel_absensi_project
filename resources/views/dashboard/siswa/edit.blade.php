@extends('dashboard.layouts.main')
@section('container')
<div class="navbar navbar-light bg-light d-flex justify-cpntent flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-botton">
<h3>Edit Siswa</h3>
</div>
<div class="container mt-3 col-lg-8">
    <form method="post" action="/dashboard/siswa/{{ $siswa->id }}" style= "background-color: #FFF0F5">
        @method('PUT')
        @csrf
        <div class="mb-3 mt-3">
        <label for="kelas_id" class="form-label">kelas_id :</label>
        <select  class="form-control input-color @error('kelas_id') is-invalid @enderror" id="kelas_id" placeholder="Masukkan kelas_id" name="kelas_id" >
        <option disabled value>Pilih Kelas</option>
        <option value="{{ $siswa->kelas_id }}">{{ $siswa->kelas->kelas }}</option>
        @foreach ($kls as $item)
        <option value="{{ $item->id }}">{{ $item->kelas }}</option>
        @endforeach
        </select>
        @error('kelas_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3 mt-3">
        <label for="nis" class="form-label">NIS :</label>
        <input type="text" class="form-control input-color @error('nis') is-invalid @enderror" id="nis" placeholder="Masukkan nis" name="nis" 
        value="{{ old('nis', $siswa->nis) }}" >
        @error('nis')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>

        <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Nama :</label>
        <input type="text" class="form-control input-color @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" name="nama" 
        value="{{ old('nama', $siswa->nama) }}">
        @error('nama')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>

        <div class="mb-3 mt-3">
        <label for="username" class="form-label">Username :</label>
        <input type="text" class="form-control input-color @error('username') is-invalid @enderror" id="username" placeholder="Masukkan Nama anda" name="username" 
        value="{{ old('username', $siswa->username) }}">
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>

        <div class="mb-3 mt-3">
        <label for="email"  class="form-label">Email :</label>
        <input type="text" class="form-control input-color @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email anda" name="email" 
        value="{{ old('email', $siswa->email) }}">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
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

        <div class="mb-3 mt-3">
        <label for="alamat" class="form-label">Alamat  :</label>
        <input type="text" class="form-control input-color @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukkan Alamat anda"  
        value="{{ old('alamat', $siswa->alamat) }}">
        @error('alamat')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>

        <div class="mb-3 mt-3">
        <label for="agama" class="form-label">Agama  :</label>
        <input type="text" class="form-control input-color @error('agama') is-invalid @enderror" id="agama" name="agama" placeholder="Masukkan agama anda"  
        value="{{ old('agama', $siswa->agama) }}">
        @error('agama')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3 mt-3">
        <label for="guru_id" class="form-label">Guru_id :</label>
        <select  class="form-control input-color @error('guru_id') is-invalid @enderror" id="guru_id" placeholder="Masukkan guru_id" name="guru_id" >
        <option disabled value>Pilih Guru</option>
        @foreach ($gur as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
        </select>
        @error('guru_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3 mt-3">
        <label for="kelas" class="form-label">Kelas :</label>
        <input type="text" class="form-control input-color @error('kelas') is-invalid @enderror" id="kelas" name="kelas" placeholder="Masukkan kelas anda"  
        value="{{ old('kelas', $siswa->kelas) }}">
        @error('kelas')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        
        <div class="mb-3 mt-3">
        <label for="created" class="form-label">Created  :</label>
        <input type="date" class="form-control input-color" id="created" name="created" placeholder="Masukkan created anda"  >
        </div>
        
        <button type="submit" class="btn btn-info float-end" name="submit">Updated Data</button>
    </form>
</div>
@endsection 