@extends('dashboard.layouts.main')

@section('container')

<h3 style="text-align :center;" class="mt-2 mb-2">ABSENSI</h3>
<table class="table  text-center col lg-6" style="width: 100%; background-color: #FFF0F5">
<thead>

    <tr class="table table-danger">
    <th scope="col" width="5%">NO</th>
    <th scope="col" width="10%">NIS</th>
    <th scope="col" width="10%">Nama</th>
    <th scope="col" width="5%">Kelas</th>
    <th scope="col" width="10%">Nama Guru</th>
    <th scope="col" width="5%">Kode_Guru</th>
    <th scope="col" width="10%">Tanggal</th>
    <th scope="col" width="5%">Status</th>
    <th scope="col" width="10%">Created</th>
    <th scope="col" width="10%">Updated</th>
    
    </tr>
    </thead>
<tbody>
    @foreach ($absensi as $abs)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $abs->nis }}</td>
        <td>{{ $abs->nama }}</td>
        <td>{{ $abs->kelas }}</td>
        <td>{{ $abs->nama_guru }}</td>
        <td>{{ $abs->kode_guru }}</td>
        <td>{{ $abs->tanggal }}</td>
        <td>{{ $abs->hadir }}</td>
        <td>{{ $abs->created_at }}</td>
        <td>{{ $abs->updated_at }}</td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection