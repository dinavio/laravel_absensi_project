@extends('layouts.main')
@section('body')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Data Guru</h1>
</div>
<table class="table  text-center" style="width: 100%; background-color: #FFF0F5">
<thead>
    <tr class="table table-danger">
    <th scope="col" width="15%">NO</th>
    <th scope="col" width="15%">NIP</th>
    <th scope="col" width="15%">Nama</th>
    <th scope="col" width="15%">email</th>
    <th scope="col" width="15%">Username</th>
    <th scope="col" width="15%">JK</th>
    <th scope="col" width="15%">Alamat</th>
    <th scope="col" width="15%">Kelas</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($guru as $g)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $g->nip }}</td>
        <td>{{ $g->name }}</td>
        <td>{{ $g->email }}</td>
        <td>{{ $g->username }}</td>
        <td>{{ $g->jk }}</td>
        <td>{{ $g->alamat }}</td>
        <td>{{ $g->kelas->kelas }}</td>
        
    </tr>
    @endforeach
</tbody> 
</table>
</div>
@endsection
