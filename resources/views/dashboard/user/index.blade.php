@extends('dashboard.layouts.main')
@section('container')


<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
    <h3>Data user SMPN 1 Baureno</h3>
    
    </div>
    <div class="container-fluid">
        <button>
            TOTAL USER {{ $user->count() }}
        </button>
    </div>
</nav>

<div class="table-responsive">
<a href="/dashboard/user/create" class="btn btn-outline">
    <span data-feather="plus"></span>Tambah</a>

    <table class="table  text-center col lg-8" style="width: 100%; background-color: #FFF0F5">
    <thead>
        <tr class="table table-danger">
        <th scope="col" width="5%">NO</th>
        <th scope="col" width="5%">Nama</th>
        <th scope="col" width="5%">Email</th>
        <th scope="col" width="5%">Username</th>
        <th scope="col" width="5%">JK</th>
        <th scope="col" width="5%">Alamat</th>
        <th scope="col" width="5%">Level</th>
        <th scope="col" width="2%">Password</th>
        <th scope="col" width="5%">Created</th>
        <th scope="col" width="5%">Updated</th>
        
        <th colspan="2" scope="col" width="10%">Action</th>
        
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->jk }}</td>
            <td>{{ $user->alamat }}</td>
            <td>{{ $user->level }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
            
            
            <td>
                <form action="/dashboard/user/{{ $user->id }}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Yakin anda ingin menghapus?')"><span data-feather="x-circle"></span></button>
                </form>
                <a href="/dashboard/user/{{ $user->id }}/edit" class="badge bg-info"><span data-feather="edit"></span></a>
            </td>
            
        </tr>
        @endforeach
    </tbody>    
    </table>
</div>
@endsection
