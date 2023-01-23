@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Create New Posts</h1>
</div>

<div class="col-lg-8">
<form action="/dashboard/posts" method="post">
    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
    <select name="status" id="">
        <option value="1">sakit</option>
        <option value="1">Hadir</option>
        <option value="1">Alfa</option>
        <option value="1">izin</option>
    </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection