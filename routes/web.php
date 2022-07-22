<?php

// perintah untuk pengaksesan controller kita
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\SlotController;
use Illuminate\Support\Facades\Route;

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

//  Route Basic
Route::get('/', function () {
    return view('welcome');
});

// Route Yang Paling Sederhana / (namanya slash)
// /belajar artinya halaman belajar
Route::get('/belajar', function () {
    echo "  <center>
                <u>
                    <h1>HALO SEMUANYA</h1>
                    <h2>Kami Sedang Belajar Laravel Dasar</h2>
                </u>
            </center>";
});

// Route basic lanjut ke views
Route::get('/home', function () {
    return view('home');
});

// Route Basic Memanggil Folder yang ada didalam views dengan 'pages.index'
Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/beranda', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about');
});

// Route parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{kelas}/{hobby}', function ($a, $b, $c, $d, $e, $f) {
    return view('pages.biodata', compact('a', 'b', 'c', 'd', 'e', 'f'));
});

// Route parameter optional
Route::get('/pesanan/{menu?}/{menu1?}', function ($makan = 'Pesanan Anda Tidak Ada', $makan1 = 'Pesanan Tidak Ada') {
    return view('pages.pesanan', compact('makan', 'makan1'));
});

// Passing Data Dari Controller ke view
Route::get('/pengenalan', [App\Http\Controllers\PengenalanController::class, 'pengenalan']);

// Passing Data dinamis(route parameter) dari controller ke view
Route::get('/intro/{nama}/{alamat}/{umur}', [PengenalanController::class, 'intro']);

// Passiing Looping Condition
Route::get('/siswa', [PengenalanController::class, 'siswa']);

Route::get('/menu', [LatihanController::class, 'menu']);

Route::get('/kampus', [LatihanController::class, 'kampus']);

Route::get('/televisi', [LatihanController::class, 'televisi']);

Route::get('/post',[PostController::class, 'index']);

Route::get('/siswa',[SiswaController::class, 'utama']);

Route::get('/peserta',[PesertaController::class, 'index']);

Route::get('/pelajaran',[PelajaranController::class, 'index']);

Route::get('/hotel',[HotelController::class, 'index']);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('slot',SlotController::class);
