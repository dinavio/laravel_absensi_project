<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/719f1245a0.js" crossorigin="anonymous"></script>
    <link rel="icon" href="logo.png" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- CSS ku dari Public -->
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
    <!-- boootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- bootstrap icon -->
    
    <title>Home</title>
    
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-sm  navbar-dark fw-bolder sticky-top" style="background-color: #DB7093;">
    <div class="container-fluid">
        <ul class="navbar-nav navbar-right">
        <li class="nav-item">
            <a class="nav-link active " href="/">SISTEM INFORMASI ABSENSI</a>
        </li>
        </ul>
    
    
    <!-- header  mengecek session -->
    <!-- @if (session()->exists('level'))
        header admin -->
        <!-- @if (session()->get('level')=='admin')
        <ul class="nav navbar-nav navbar-right">
            <li class="navbar-item">
                <a href="/data_siswa" class="nav-link active">Data siswa</a>
            </li>
            &nbsp &nbsp &nbsp &nbsp &nbsp
            <li class="navbar-item">
                <a href="/about" class="nav-link active">Data guru</a>
            </li>
            &nbsp &nbsp &nbsp &nbsp &nbsp
            <li class="navbar-item">
                <a href="/about" class="nav-link active">Data ortu</a>
            </li>
            &nbsp &nbsp &nbsp &nbsp &nbsp
            <li class="navbar-item">
                <a href="/" class="nav-link active">Input Siswa</a>
            </li>
            &nbsp &nbsp &nbsp &nbsp &nbsp
            <li class="navbar-item">
                <a href="/" class="nav-link active">Input Guru</a>
            </li>
        </ul>
            header siswa -->
        <!-- @elseif (session()->get('level')=='siswa')
        <ul class="nav navbar-nav navbar-right">
            &nbsp &nbsp &nbsp &nbsp &nbsp
            <li class="navbar-item">
                <a href="/data_siswa" class="nav-link active">Data siswa</a>
            </li>
            &nbsp &nbsp &nbsp &nbsp &nbsp
            <li class="navbar-item">
                <a href="/data_guru" class="nav-link active">Data guru</a>
            </li>
        </ul>
        
        @else 
        @endif  -->
    <!-- @else --> 
    <!-- Header awal -->
        <ul class="nav navbar-nav navbar-right">
            <li class="navbar-item">
                <a href="/awal" class="nav-link active"><i class="bi bi-house"></i>Home</a>
            </li>
            &nbsp &nbsp &nbsp &nbsp &nbsp
            <li class="navbar-item">
                <a href="/about" class="nav-link active">
                <i class="fas fa-clipboard-list"></i>
                About Sistem</a>
            </li>
        </ul>   
        
        <!-- Ini hanya akan muncul ketika user sudah Login -->
        <ul class="navbar-nav navbar-right">
        @auth
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, <span class="text-dark">{{ auth()->user()->name }}</span>
            </a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-database-fill-check"></i> Room Dashboard</a></li>
            
            <li><a class="dropdown-item" href="/guru/index"><i class="bi bi-valentine2"></i> Data Guru</a></li>
            <li><a class="dropdown-item" href="/siswa/index"><i class="bi bi-valentine"></i> Data Siswa</a></li>
            @can('siswa')  
            <li><a class="dropdown-item" href="/dashboard/absensi">Absensi</a></li>
            @endcan
                <li><a class="dropdown-item" href="/profil"><i class="bi bi-person-lines-fill"></i> Profil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="bi bi-box-arrow-right"></i>Logout</button>
                    </form>    
                </li>
            </ul>
        </li>

        @else
        
        <li class="nav-item">
        &nbsp &nbsp &nbsp &nbsp &nbsp
        <li class="navbar-item">
            <a href="/login" class="nav-link active"><i class="bi bi-box-arrow-right"></i>Login</a>
        </li>
        </li>
        </ul>
        @endauth
        
    <!-- @endif -->
    </div>
    </div>
    <!-- <form action="/logout" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form> -->
</nav>

<!--Tabel-->
    <div class="container mt-3" id="beranda">
        @yield('body')
    </div>
    <!--Footer-->
    <!--Bagian Footer-->
    <div class="mt-2">
    <footer  class="  text-white pt-5" style="background-color: #DB7093;">
        <!-- Grid container -->
        <div class="container p-2">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h6 class="text-uppercase mb-0">Contact</h6>
                <br><br>
                <ul class="list-unstyled">
                    <li class="text-white garis-bawah">Telp : 0322451726</li>
                    <li class="text-white garis-bawah">Fax : 031-3011146</li>
                    <li class="text-white garis-bawah">Email : smpnegeri1baureno@gmail.com</li>
                </ul>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h6 class="text-uppercase">Sosial Media</h6>
                <br>
                <ul class="list-unstyled">
                    <li class="text-white garis-bawah">Facebook</li>
                    <li class="text-white garis-bawah">Twitter</li>
                    <li class="text-white garis-bawah">Instagram</li>
                    <li class="text-white garis-bawah">Youtube</li>
                </ul>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2022 Copyright : Dina Violina
            </div>

        <!--Grid row-->
        </div>
        </div>
        
    </footer>
    </div>
<!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, danyang terakhit Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    
</body>
</html>

