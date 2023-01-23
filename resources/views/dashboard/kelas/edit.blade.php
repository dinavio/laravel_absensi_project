@extends('dashboard.layouts.main')
@section('container')

<div class="navbar navbar-light bg-light d-flex justify-cpntent flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-botton">
<h3>Edit Kelas</h3>
</div>
<div class="container mt-3 col-lg-8">
    <form method="post" action="/dashboard/kelas/{{ $kelas->id }}" style= "background-color: #F0F8FF;">
        @method('PUT')
        @csrf
        
        <div class="mb-3 mt-3">
        <label for="kelas" class="form-label">Nama Kelas :</label>
        <input type="text" class="form-control input-color @error('kelas') is-invalid @enderror" id="kelas" placeholder="Masukkan kelas" name="kelas" 
        value="{{ old('kelas', $kelas->kelas) }}">
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