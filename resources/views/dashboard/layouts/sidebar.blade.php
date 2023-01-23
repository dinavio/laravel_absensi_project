<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse" style="background-color:	#FFFAF0;">
<div class="position-sticky pt-3 sidebar-sticky">
<ul class="nav flex-column">
    <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
        <span data-feather="home" class="align-text-bottom"></span>
        Dashboard
    </a>
</li>
@can('siswa')
    <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/absensi*') ? 'active' : '' }}" aria-current="page" href="/dashboard/absensi">
        <span data-feather="home" class="align-text-bottom"></span>
        Absensi
    </a>
    </li>
@endcan
    <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/data_absen') ? 'active' : '' }}" href="/dashboard/data_absen">
        <span data-feather="file-plus" class="align-text-bottom"></span>
        Daftar absensi
    </a>
    </li>
<!-- @can('admin')
    <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/guru*') ? 'active' : '' }}" href="/dashboard/guru">
        <span data-feather="user" class="align-text-bottom"></span>
        Data Guru
    </a>
    </li>
@endcan -->
@can('admin')
<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1
text-muted">
    <span>Administrator</span>
</h6>
    <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/guru*') ? 'active' : '' }}" href="/dashboard/guru">
        <span data-feather="user" class="align-text-bottom"></span>
        Data Guru
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/siswa*') ? 'active' : '' }}" href="/dashboard/siswa">
        <span data-feather="user" class="align-text-bottom"></span>
        Data Siswa
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/ortu*') ? 'active' : '' }}" href="/dashboard/ortu">
        <span data-feather="clipboard" class="align-text-bottom"></span>
        Data ortu
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/olahabsen*') ? 'active' : '' }}" href="/dashboard/olahabsen">
        <span data-feather="file-text" class="align-text-bottom"></span>
        Data Absensi
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/user*') ? 'active' : '' }}" href="/dashboard/user">
        <span data-feather="users" class="align-text-bottom"></span>
        Data User
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/kelas*') ? 'active' : '' }}" href="/dashboard/kelas">
        <span data-feather="archive" class="align-text-bottom"></span>
        Data Kelas
    </a>
    </li>
    
<!-- Hanya admin -->
<!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1
text-muted">
    <span>Administrator</span>
</h6> -->
<!-- <ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/absensi*') ? 'active' : '' }}" href="/dashboard/absensi">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Data Absensi
        </a>
    </li>
</ul> -->
<!-- <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
        <span data-feather="grid" class="align-text-bottom"></span>
        Post Categories
    </a>
</li> -->
</ul>
@endcan

</div>
</nav>