<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Pengunjung;
use App\Models\Transaksi;
use App\Models\Detail_Transaksi;
use App\Models\Kamar;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $karyawan   = Karyawan::all();
        $pengunjung = Pengunjung::all();
        $transaksi  = Transaksi::all();
        $detail_transaksi  = Detail_Transaksi::all();
        $kamar  = Kamar::all();
        
        return view('post.hotel', compact('karyawan','pengunjung','transaksi','detail_transaksi','kamar')); //compact dari variable
    }
}
