<?php

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Absensi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CobaaController;
use App\Http\Controllers\GuruuController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\DataabsenController;
use App\Http\Controllers\OlahabsenController;
use App\Http\Controllers\TampilsiswaController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('awal');
});
Route::get('/awal', function () {
    return view('awal');
});
Route::get('/login.index', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/profil', function () {
    return view('profil');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->
middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
// Route::post('/guru/index',[GuruuController::class,'index']);
//halaman luar dashboard
Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/guru/index', TampilanController::class)->middleware('auth');

Route::get('/guru/index', function () {
    return view('guru.index', [
        'guru'=> Guru::all()
    ]);
});

Route::get('/siswa/index', function () {
    return view('siswa.index', [
        'siswa'=> Siswa::all()
    ]);
});

Route::get('/kelas', 'App\Http\Controllers\CobaaController@index');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
// dashboard CRUD  khusus admin
Route::resource('/dashboard/guru', GuruuController::class)->middleware('admin');
// Route::resource('/dashboard/guru', GuruuController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/siswa', SiswaController::class)->middleware('admin');
Route::resource('dashboard/user', UserController::class)->middleware('admin');
Route::resource('dashboard/absensi', AbsensiController::class)->middleware('auth');
Route::resource('dashboard/olahabsen', OlahabsenController::class)->middleware('admin');
Route::resource('dashboard/kelas', KelasController::class)->middleware('admin');
Route::resource('dashboard/ortu', OrtuController::class)->middleware('admin');

// untuk melihat data absensi hari ini
Route::resource('dashboard/data_absen', TampilsiswaController::class)->middleware('auth');



// Route::resource('dashboard/absensi', TampilsiswaController::class)->middleware('auth');
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');



