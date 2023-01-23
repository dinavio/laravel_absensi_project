@extends('layouts.main')
@section('body')
<div class="profil">

<div class="col-md-4 mb-3 row justify-content-center mt-5 mb-5 " style="margin-left:auto;margin-right:auto">
    <div class="card shadow-sm">
        <div class="card-header " style="margin:auto;">
            <!-- Login sebagai{{ auth()->user()->name }} Login sebagai {{ auth()->user()->level }} -->
            Informasi Data Login
        </div>
        <div class="card-body " >
            <div class="pic">
                <img src="/profil.png" >
            </div>
            <div class="text-center mt-2 mb-2 name">
                PROFIL
            </div>
            <table style="margin:auto;">
            <tr>
                <td><span class="fw-bold d-block">Nama  </span></td>
                <td>:</td>
                <td>{{ auth()->user()->name }}</td>
            </tr>
            <tr>
                <td><span class="fw-bold d-block">Jenis Kelamin  </span></td>
                <td>:</td>
                <td>{{ auth()->user()->jk }}</td>
            </tr>
            <tr>
                <td><span class="fw-bold d-block">Email </span></td>
                <td>:</td>
                <td>{{ auth()->user()->email }}</td>
            </tr>
            <tr>
                <td><span class="fw-bold d-block">Alamat </span></td>
                <td>:</td>
                <td>{{ auth()->user()->alamat }}</td>
            </tr>
            <tr>
                <td><span class="fw-bold d-block">Bergabung pada </span></td>
                <td>:</td>
                <td>{{ auth()->user()->created_at->format('d M Y') }}</td>
            </tr>
            <tr>
                <td><span class="fw-bold d-block">Level  </span></td>
                <td>:</td>
                <td>{{ auth()->user()->level }}</td>
            </tr>
        </table>
        </div>
    </div>
</div>
</div>

<!-- PROFIL 2 -->
<!-- 
<div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-dark pb-2 fw-bold">Profil User</h2>
            {{ auth()->user()->name }}
            Login sebagai{{ auth()->user()->level }}
        </div>
        
    </div>
</div>
<div class="about-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="pic">
                            <div class="about-img mt-5 mb-5">
                                <img src="profil.png" alt="foto smp" class="img-fluid">
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                            <div class="about-text">
                            <h4>Tentang {{ auth()->user()->name }} </h4>
                            
                            <table>
            <tr>
                <td><span class="fw-bold d-block">Nama  </span></td>
                <td>:</td>
                <td>{{ auth()->user()->name }}</td>
            </tr>
            <tr>
                <td><span class="fw-bold d-block">Email </span></td>
                <td>:</td>
                <td>{{ auth()->user()->email }}</td>
            </tr>
            <tr>
                <td><span class="fw-bold d-block">Alamat </span></td>
                <td>:</td>
                <td>{{ auth()->user()->alamat }}</td>
            </tr>
            <tr>
                <td><span class="fw-bold d-block">Bergabung pada </span></td>
                <td>:</td>
                <td>{{ auth()->user()->created_at->format('d M Y') }}</td>
            </tr>
        </table>

                    
                            </div>
                        </div>
                    </div>
                </div>
    </div> -->
@endsection