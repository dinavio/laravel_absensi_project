@extends('dashboard.layouts.main')
@section('container')

<div class="navbar navbar-light bg-light d-flex justify-cpntent flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-botton">
<h3>Edit Absensi</h3>
</div>

<div class="container mt-3 col-lg-8">
    <form method="post" action="/dashboard/absensi/{{ $absensi->id }}" style= "background-color: #FFF0F5">
        @method('PUT')
        @csrf
        <div class="row g-2 mb-3">
        <div class="col-md">
        <div class="form-floating">
            <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" id="nis" placeholder="125789" value="{{ old('nis', $absensi->nis) }}">
            <label for="nis">NIS</label>
            @error('nis')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control input-color @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Jokowidodo" value="{{ old('nama', $absensi->nama) }}">
                    <label for="nama">Nama</label>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div> 
        </div>
        <div class="row g-2 mb-3">
            <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control input-color @error('kelas') is-invalid @enderror" id="kelas" name="kelas" placeholder="name@example.com" value="{{ old('kelas', $absensi->kelas) }}">
                <label for="kelas">Kelas</label>
            </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                <input type="text" class="form-control" name="nama_guru" id="nama_guru" placeholder="Jokowidodo" value="{{ old('nama_guru', $absensi->nama_guru) }}">
                    <label for="nama_guru">Nama Guru</label>
                    @error('nama_guru')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row g-2 mb-3">
        <div class="col-md">
                <div class="form-floating">
                <input type="text" class="form-control input-color @error('kode_guru') is-invalid @enderror" name="kode_guru" id="kode_guru" placeholder="Kode Guru" value="{{ old('kode_guru', $absensi->kode_guru) }}">
                    <label for="kode_guru">Kode Guru</label>
                </div>
            </div>
            <div class="col-md">
            <div class="form-floating">
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" placeholder="name@example.com" value="{{ old('tanggal', $absensi->tanggal) }}"> 
                <label for="tanggal">Tanggal</label>
                @error('tanggal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <select class="form-select @error('hadir') is-invalid @enderror" name="hadir" id="hadir" 
                    aria-label="Floating label select example" value="{{ old('hadir') }}">
                    
                    <option value="Hadir">Hadir</option>
                    <option value="Izin">Izin</option>
                    <option value="Sakit">Sakit</option>
                    <option value="Alfa">Alfa</option>
                    </select>
                    <label for="status">Keterangan</label>
                    @error('hadir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-info float-end" name="submit">Updated Data</button>
    </form>
</div>
@endsection