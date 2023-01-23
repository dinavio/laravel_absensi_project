@extends('dashboard.layouts.main')

@section('container')
<!-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
<br>
</div>
<h4>Join sebagai, {{ auth()->user()->level }}</h4>
<a href="/awal">Kembali</a> -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="/apik.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h1 class="text-dark">Hi, {{ auth()->user()->name }} </h1>
        <p class="text-dark">anda join sebagai </p><h3 class="text-dark uppercase">{{ auth()->user()->level }}</h3>
        <p><a href="/awal" class="btn btn-warning">Go to Home</a></p>
        </div>
    </div>
</div>
</div>

@endsection