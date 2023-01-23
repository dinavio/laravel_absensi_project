@extends('layouts.main')
@section('body')
<div class="row justify-content-center">
    <div class="col-md-5">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="mb-3 row text-center">
    <main class="form-signin w-100 m-auto">
        <h1 class="h3  mt-5 fw-normal">Please Login</h1>
        <div class="pict">
                <img src="/profil.png" alt="" class="mb-3 mt-2">

        </div>
    <form action="/login" method="post">
            @csrf
        <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" autofocus required 
        value="{{ old('email') }}">
        <label for="floatingInput">Email address</label>
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
        </div>
        
        <button class="w-100 btn btn-lg btn-primary" style="background-color:#DB7093; " type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">&copy; Bangkalan 2022</p>
</form>
<small class="d-block text-center mt-3 mb-3">Not registered?<a href="/register">Register Now!</a></small>
</main>
</div>
</div>
</div>


@endsection