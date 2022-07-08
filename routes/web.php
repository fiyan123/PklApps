<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route Yang Paling Sederhana / (namanya slash)

Route::get('/belajar', function () {
    echo "  <center>
                <u>
                    <h1>HALO SEMUANYA</h1>
                    <h2>Kami Sedang Belajar Laravel Dasar</h2>
                </u>
            </center>";
});

// route basic lanjut ke views
Route::get('/home' , function(){
    return view('home');
});

// Route Basic Memanggil Folder yang ada didalam views dengan 'pages.index'
Route::get('/index',function(){
    return view('pages.index');
});

Route::get('/beranda' , function(){
    return view('pages.beranda');
});

Route::get('/about' , function(){
    return view('pages.about');
});

// route parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{kelas}/{hobby}', function($a,$b,$c,$d,$e,$f){
    return view('pages.biodata' , compact('a','b','c','d','e','f'));
});

// route parameter optional
Route::get('/pesanan/{menu?}', function($makan = 'Pesanan Anda Tidak Ada'){
    return view('pages.pesanan' , compact('makan'));
});
