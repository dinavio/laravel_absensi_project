@extends('dashboard.layouts.main')
@section('container')
<div class="navbar navbar-light bg-light d-flex justify-cpntent flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-botton">
<h3>Edit user</h3>
</div>
<div class="container mt-3 col-lg-8">
    <form method="post" action="/dashboard/user/{{ $user->id }}" style= "background-color: #FFF0F5">
        @method('PUT')
        @csrf
        <div class="mb-3 mt-3">
        <label for="name" class="form-label">Name :</label>
        <input type="text" class="form-control input-color @error('name') is-invalid @enderror" id="name" placeholder="Masukkan name" name="name" 
        value="{{ old('name', $user->name) }}" >
        @error('nis')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>

        <div class="mb-3 mt-3">
        <label for="email"  class="form-label">Email :</label>
        <input type="text" class="form-control input-color @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email anda" name="email" 
        value="{{ old('email', $user->email) }}">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3 mt-3">
        <label for="username" class="form-label">Username :</label>
        <input type="text" class="form-control input-color @error('username') is-invalid @enderror" id="username" placeholder="Masukkan Nama anda" name="username" 
        value="{{ old('username', $user->username) }}">
        @error('username')
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
        value="{{ old('alamat', $user->alamat) }}">
        @error('alamat')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>

        <div class="mb-3 mt-3">
        <label for="agama" class="form-label">level  :</label>
        <input type="text" class="form-control input-color @error('level') is-invalid @enderror" id="level" name="level" placeholder="Masukkan level anda"  
        value="{{ old('level', $user->level) }}">
        @error('level')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3 mt-3">
        <label for="password" class="form-label">password:</label>
        <input type="text" class="form-control input-color @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan passwordanda"  
        value="{{ old('password', $user->password) }}">
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        
        
        <button type="submit" class="btn btn-info float-end" name="submit">Updated Data</button>
    </form>
</div>
@endsection 