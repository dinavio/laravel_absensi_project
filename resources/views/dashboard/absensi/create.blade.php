@extends('dashboard.layouts.main')
@section('container')
<div>
<h4>Data Absensi Siswa SMPN 1 Baureno</h4>
</div>
<div>
    <form action="/dashboard/absensi" method="post">
        @csrf
        <div class="row g-2 mb-3">
        <div class="col-md">
        <div class="form-floating">
            <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" id="nis" placeholder="125789" value="{{ old('nis') }}">
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
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Jokowidodo" value="{{ old('nama') }}">
                    <label for="nama">Nama</label>
                </div>
            </div> 
        </div>
        <div class="row g-2 mb-3">
            <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="name@example.com">
                <label for="kelas">Kelas</label>
            </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                <input type="text" class="form-control" name="nama_guru" id="nama_guru" placeholder="Jokowidodo">
                    <label for="nama_guru">Nama Guru</label>
                </div>
            </div>
        </div>
        <div class="row g-2 mb-3">
        <div class="col-md">
                <div class="form-floating">
                <input type="text" class="form-control" name="kode_guru" id="kode_guru" placeholder="Jokowidodo">
                    <label for="kode_guru">Kode Guru</label>
                </div>
            </div>
            <div class="col-md">
            <div class="form-floating">
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" placeholder="name@example.com">
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
        <button type="submit" class="btn btn-default">Send Absen</button>
    </form>
</div>
@endsection