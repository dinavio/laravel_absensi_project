@extends('layouts.main')
@section('body')
@if ($errors->any())
<div class="alert-error">
    @foreach ($errors->all() as $error)
        <ul>
            <li>{{ $error }}</li>
        </ul>
    @endforeach
</div>
@endif
<div class="regris">
<div class="row" style="justify-content-center background-color:blue;">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal">REGRISTRASI</h1>
            <div class="pic">
                <img src="/profil.jpg" alt="">

            </div>
        <form action="/register" method="post">
            @csrf
        <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <div class="form-floating">
        <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="name"
        required value="{{ old('nama') }}">
        <label for="name">name</label>
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-floating">
        <input type="email" class="form-control rounded-top @error('email')is-invalid @enderror" id="floatingInput" name="email" placeholder="email">
        <label for="floatingInput">Email address</label>
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-floating">
        <input type="text" class="form-control rounded-top @error('username')is-invalid @enderror" id="username" name="username" placeholder="username">
        <label for="username">username</label>
        @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        
        


        <div class="form-floating">
            
        <div class="form-check">
        <input class="form-check-input" type="radio" name="jk" id="jk" value="perempuan">
        <label class="form-check-label" for="perempuan">
            Perempuan
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="jk" id="jk" value="laki-laki" >
        <label class="form-check-label" for="laki-laki">
            Laki-laki
        </label>
        </div>
        @error('jk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-floating">
        <input type="text" class="form-control rounded-top @error('alamat')is-invalid @enderror" id="alamat" name="alamat" placeholder="alamat">
        <label for="alamat">Alamat</label>
        @error('jk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-floating">
        <input type="text"  class="form-control rounded-top @error('level')is-invalid @enderror" id="level" name="level" placeholder="level">
        <label for="level">level</label>
        @error('level')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-floating">
        <input type="password" name="password" class="form-control rounded-bottom rounded-top @error('password')is-invalid @enderror" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <button class="w-100 btn btn-lg  mt-4" style="background-color:#DB7093; " type="submit"><a class="save"></span>Create</button>
        <p class="mt-2 text-muted">&copy; Bangkalan 2022</p>
    </form>
    <small class="d-block text-center mt-3">Already<a href="/login">Login!</a></small>
    </main>
    </div>
</div>
    
</div>

@endsection