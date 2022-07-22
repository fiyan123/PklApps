<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Peserta;
use App\Models\Pelajaran;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function utama()
    {
        $siswa     = Siswa::all();
        $peserta   = Peserta::all();
        $pelajaran = Pelajaran::all();

        return view('post.siswa', compact('siswa','peserta','pelajaran')); //compact dari variable
    }
}
