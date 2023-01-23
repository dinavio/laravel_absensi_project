    @extends('layouts.main')
    @section('body')

    <!-- <h3 class="card-img-top" style="align-text:center; width:1200px; height:400px;">SELAMAT LOGIN MENUJU SISTEM INFORMASI ABSENSI SMPN 1 BAURENO</h3> -->

    <!-- <img src="smp.jpg" class="rounded mx-auto d-block" alt="foto smp"> -->

<!-- <div class="home">
    <div class="text-black pt-5" >
    <h1 style="text-align:center;" class="mb-5">Sistem Informasi Absensi SMPN 1 Baureno.</h1>
    </div>
</div> -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active mb-5">
                <img src="/apik.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-dark">Sistem Informasi Absensi SMPN 1 Baureno.</h1>
                    
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section -->
    <div class="about-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="about-img mt-5">
                                <img src="smp.jpg" alt="foto smp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                            <div class="about-text">
                            <h4>Info Sekolah</h4>
                    <table class="table table-striped " >
                    <!-- <thead>
                    <tr>
                        <img src="" alt="">
                    </tr>
                    </thead> -->
                    <tbody>
                    <tr>
                        <td>NPSN</td>
                        <td>20504429</td>
                    </tr>
                    <tr>
                        <td>Akreditasi</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Kodepos</td>
                        <td>62192</td>
                    </tr>
                    <tr>
                        <td>Jenjang</td>
                        <td>SMP</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>Negeri</td>
                    </tr>
                    <tr>
                        <td>Lintang</td>
                        <td>-7.16613</td>
                    </tr>
                    <tr>
                        <td>Bujur</td>
                        <td>111.882534000000008</td>
                    </tr>
                    <tr>
                        <td>Ketinggian</td>
                        <td>21</td>
                    </tr>
                    </tbody>
                    </table>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    @endsection