@extends('layouts.main')
@section('body')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Data Siswa</h1>
</div>
<div class="table-responsive">
    <table class="table  text-center col lg-8" style="width: 100%; background-color: #FFF0F5">
    <thead>
        <tr class="table table-danger">
        <th scope="col" width="1%">NO</th>
        <th scope="col" width="1%">ID</th>
        <th scope="col" width="5%">NIS</th>
        <th scope="col" width="5%">Nama</th>
        <th scope="col" width="5%">Username</th>
        <th scope="col" width="5%">email</th>
        <th scope="col" width="5%">JK</th>
        <th scope="col" width="5%">Alamat</th>
        <th scope="col" width="5%">Agama</th>
        <th scope="col" width="5%">Kelas</th>
        <th scope="col" width="5%">Guru</th>
        <!-- <th scope="col" width="5%">Status</th> -->
        <th scope="col" width="5%">Created</th>
        <th scope="col" width="5%">Updated</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $siswa)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $siswa->id }}</td>
            <td>{{ $siswa->nis }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->username }}</td>
            <td>{{ $siswa->email }}</td>
            <td>{{ $siswa->jk }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td>{{ $siswa->agama }}</td>
            <td>{{ $siswa->kelas->kelas }}</td>
            <td>{{ $siswa->guru->name }}</td>
            <td>{{ $siswa->created_at }}</td>
            <td>{{ $siswa->updated_at }}</td>
            
        </tr>
        @endforeach
    </tbody>    
    </table>
</div>

@endsection