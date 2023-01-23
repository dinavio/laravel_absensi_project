@extends('dashboard.layouts.main')
@section('container')

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
    <h3>Data Siswa SMPN 1 Baureno</h3>
    </div>
    <div class="container-fluid">
        <button>
            TOTAL SISWA {{ $siswa->count() }}
        </button>
    </div>
</nav>
@can('admin')
<div class="table-responsive">
<a href="/dashboard/siswa/create" class="btn btn-outline">
    <span data-feather="eye"></span>Tambah</a>
@endcan
    <table class="table  text-center" style="width: 100%; background-color: #FFF0F5">
    <thead>
        <tr class="table table-danger">
        <th scope="col" width="5%">NO</th>
        <th scope="col" width="5%">NIS</th>
        <th scope="col" width="5%">Kelas_id</th>
        <th scope="col" width="5%">Nama</th>
        <th scope="col" width="5%">Username</th>
        <th scope="col" width="5%">email</th>
        <th scope="col" width="5%">JK</th>
        <th scope="col" width="5%">Alamat</th>
        <th scope="col" width="5%">Agama</th>
        
        <th scope="col" width="5%">Guru id </th>
        <th scope="col" width="5%">Created</th>
        <th scope="col" width="5%">Updated</th>
        
        @can('admin')
        <th colspan="2" scope="col" width="5%">Action</th>
        @endcan
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $siswa)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $siswa->nis }}</td>
            <td>{{ $siswa->kelas->kelas }}</td> 
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->username }}</td>
            <td>{{ $siswa->email }}</td>
            <td>{{ $siswa->jk }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td>{{ $siswa->agama }}</td>
            
            <td>{{ $siswa->guru->name }}</td>
            <td>{{ $siswa->created_at }}</td>
            <td>{{ $siswa->updated_at }}</td>
            
            @can('admin')
            <td>
                <form action="/dashboard/siswa/{{ $siswa->id }}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus?')"><span data-feather="x-circle"></span></button>
                </form>
                <a href="/dashboard/siswa/{{ $siswa->id }}/edit" class="badge bg-info"><span data-feather="edit"></span></a>
            </td>
            @endcan
        </tr>
        @endforeach
    </tbody>    
    </table>
</div>
@endsection
