@extends('dashboard.layouts.main')
@section('container')





<nav class="navbar navbar-light bg-light">
    <div class="container-fluid d-flex justify-content-center mt-2">
    <h3>Data Guru</h3>
    </div>
    <div class="container-fluid">
        <button>
            TOTAL GURU {{ $guru->count() }}
        </button>
    </div>
</nav>

<div>
    <a href="/dashboard/guru/create" class="btn btn-outline-info mb-3">
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
    <!-- <th scope="col" width="5%">ID</th> -->
    <th scope="col" width="10%">NIP</th>
    <th scope="col" width="10%">Nama</th>
    <th scope="col" width="10%">Image</th>
    <th scope="col" width="5%">Kelas</th>
    <th scope="col" width="10%">Email</th>
    <th scope="col" width="5%">Username</th>
    <th scope="col" width="5%">JK</th>
    <th scope="col" width="10%">Alamat</th>
    <th scope="col" width="10%">Created</th>
    <th scope="col" width="10%">Updated</th>
    <th colspan="2" scope="col" width="5%">Action</th>
    </tr>
    </thead>
<tbody>
    @foreach ($guru as $guru)
    <tr>
        <td>{{ $loop->iteration }}</td>
        
        <!-- <td>{{ $guru->id }}</td> -->
        <td>{{ $guru->nip }}</td>
        <td>{{ $guru->name }}</td>
        <td>
            <img src="{{ asset('guru-images/'.$guru->image) }}" alt="" style="width:80px;">
        </td>
        <td>{{ $guru->kelas->kelas }}</td>
        <td>{{ $guru->email }}</td>
        <td>{{ $guru->username }}</td>
        <td>{{ $guru->jk }}</td>
        <td>{{ $guru->alamat }}</td>
        <td>{{ $guru->created_at }}</td>
        <td>{{ $guru->updated_at }}</td>
        <td>
            <!-- <a href="" class="badge bg-info"><span data-feather="eye"></span></a>  -->
            <form action="/dashboard/guru/{{ $guru->id }}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Benarkah anda ingin menghapusnya?')"><span data-feather="x-circle"></span></button>
            </form>
            <a href="/dashboard/guru/{{ $guru->id }}/edit" class="badge bg-info"><span data-feather="edit"></span></a>
        </td>
        
    </tr>
    @endforeach
</tbody>
</table>
@endsection