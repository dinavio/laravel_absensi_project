@extends('dashboard.layouts.main')
@section('container')

@if(session()->has('success'))
<div class="alert alert-success col lg-6" role="alert">
    {{ session('success') }}
</div>

@endif

<nav class="navbar navbar-light bg-light justfy-content">
    <div class="container-fluid">
    <h3>Data Kelas</h3>
    </div>
</nav>

<div>
    <a href="/dashboard/kelas/create" class="btn btn-outline-info mb-3">
    <span data-feather="plus"></span>  
    Tambah</a>
</div>

<table class="table  text-center col lg-6" style="width: 100%; background-color: 	#F0F8FF">
<thead>

    <tr class="table " style="background-color: #87CEFA;">
    <th scope="col" width="5%">NO</th>
    <th scope="col" width="10%">ID KELAS</th>
    <th scope="col" width="10%">NAMA KELAS</th>
    <!-- <th scope="col" width="10%">NAMA GURU</th> -->
    <th scope="col" width="5%">Created</th>
    <th scope="col" width="5%">Updated</th>
    <th colspan="2" scope="col" width="5%">Action</th>
</thead>
<tbody>
    @foreach ($kelas as $kelas)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $kelas->id }}</td>
        <td>{{ $kelas->kelas }}</td>
        <td>{{ $kelas->created_at }}</td>
        <td>{{ $kelas->updated_at }}</td>
        <td>
        <td>
                <form action="/dashboard/kelas/{{ $kelas->id }}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus?')"><span data-feather="x-circle"></span></button>
                </form>
                <a href="/dashboard/kelas/{{ $kelas->id }}/edit" class="badge bg-info"><span data-feather="edit"></span></a>
            </td>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection