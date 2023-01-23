@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">My Posts</h1>
</div>

<div class="table-responsive col-log-8">
    <a href="/dashboard/posts/create" classa="btn btn-primary mb-3">Tambah Data Guru Baru</a>
<table class="table table-striped table-sm">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">NIS</th>
        <th scope="col">NAMA</th>
        <th scope="col">STATUS</th>
        <th scope="col">ACTION</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1,001</td>
        <td>random</td>
        <td>data</td>
        <td>placeholder</td>
        <td>text</td>
    </tr>
    </tbody>
</table>
</div>


@endsection