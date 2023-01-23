@extends('dashboard.layouts.main')
@section('container')


<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
    <h3>Absensi</h3>
    </div>
</nav>

<div>
    <a href="/dashboard/olahabsen/create" class="btn btn-outline-info mb-3">
    <span data-feather="plus"></span>  
    Tambah</a>
</div>

@if(session()->has('success'))
<div class="alert alert-success col lg-6" role="alert">
    {{ session('success') }}
</div>
@endif

<table class="table  text-center col lg-6" style="width: 100%; background-color: #FFF0F5">
<thead>

    <tr class="table table-danger">
    <th scope="col" width="5%">NO</th>
    <th scope="col" width="10%">NIS</th>
    <th scope="col" width="10%">Nama</th>
    <th scope="col" width="10%">Kelas</th>
    <th scope="col" width="10%">Nama Guru</th>
    <th scope="col" width="10%">Kode_Guru</th>
    <th scope="col" width="10%">Tanggal</th>
    <th scope="col" width="5%">Status</th>
    <th scope="col" width="10%">Created</th>
    <th scope="col" width="10%">Updated</th>
    <th scope="col" width="10%">Action</th>
    
    </tr>
    </thead>
<tbody>
    @foreach ($absensi as $absensi)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $absensi->nis }}</td>
        <td>{{ $absensi->nama }}</td>
        <td>{{ $absensi->kelas }}</td>
        <td>{{ $absensi->nama_guru }}</td>
        <td>{{ $absensi->kode_guru }}</td>
        <td>{{ $absensi->tanggal }}</td>
        <td>{{ $absensi->hadir }}</td>
        <td>{{ $absensi->created_at }}</td>
        <td>{{ $absensi->updated_at }}</td>
        <td>
            <!-- <a href="" class="badge bg-info"><span data-feather="eye"></span></a>  -->
            <form action="/dashboard/olahabsen/{{ $absensi->id }}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Benarkah anda ingin menghapusnya?')"><span data-feather="x-circle"></span></button>
            </form>

            
            <a href="/dashboard/olahabsen/{{ $absensi->id }}/edit" class="badge bg-info"><span data-feather="edit"></span></a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection