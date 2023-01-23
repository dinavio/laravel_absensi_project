@extends('dashboard.layouts.main')
@section('container')

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
    <h3>Data Orangtua</h3>
    </div>
    <div class="container-fluid">
        <button>
            TOTAL SISWA {{ $ortu->count() }}
        </button>
    </div>
</nav>

<div>
    <a href="/dashboard/ortu/create" class="btn btn-outline-info mb-3">
    <span data-feather="plus"></span>  
    Tambah</a>
</div>



@if(session()->has('success'))
<div class="alert alert-success col lg-6" role="alert">
    {{ session('success') }}
</div>
@endif


    <table class="table  text-center" style="width: 100%; background-color: #FFF0F5">
    <thead>
        <tr class="table table-danger">
        <th scope="col" width="5%">NO</th>
        <th scope="col" width="5%">NIK</th>
        <th scope="col" width="5%">Nama</th>
        <th scope="col" width="5%">Alamat</th>
        <th scope="col" width="5%">Email</th>
        <th scope="col" width="5%">JK</th>
        <th scope="col" width="5%">Created</th>
        <th scope="col" width="5%">Updated</th>
        <th colspan="2" scope="col" width="5%">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ortu as $ort)
        <tr>
            <td>{{ $ort->id }}</td>
            <td>{{ $ort->nik }}</td>
            <td>{{ $ort->nama }}</td>
            <td>{{ $ort->alamat }}</td>
            <td>{{ $ort->email }}</td>
            <td>{{ $ort->jk }}</td>
            <td>{{ $ort->created_at }}</td>
            <td>{{ $ort->updated_at }}</td>
            <td>
            <form action="/dashboard/ortu/{{ $ort->id }}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Benarkah anda ingin menghapusnya?')"><span data-feather="x-circle"></span></button>
            </form>
            <a href="/dashboard/ortu/{{ $ort->id }}/edit" class="badge bg-info"><span data-feather="edit"></span></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

