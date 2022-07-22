<?php

namespace App\Http\Controllers;

class PengenalanController extends Controller
{
    public function pengenalan()
    {
        $nama = "Sofyan";
        $umur = 17;
        return view('pages.pengenalan', compact('nama', 'umur'));
    }

    public function intro($nama, $alamat, $umur)
    {
        return view('pages.intro', compact('nama', 'alamat', 'umur'));
    }

    public function siswa()
    {

        $a = [
            array('id' => 1, 'name' => "Sofyan", 'age' => 17, 'mapel' => ['Matematika','B.Inggris'],'hobi' => ['Nonton','Musikkan']),
            array('id' => 2, 'name' => "Ian", 'age' => 16, 'mapel' => ['Fisika','Kimia'],'hobi' => ['Mandi','Bebas']),
            array('id' => 3, 'name' => "arif", 'age' => 15, 'mapel' => ['Pai','Pjok'],'hobi' => ['Game','Push']),
        ];

        // menampilkan data dump
        // dd($a);
        return view('pages.siswa', ['siswa' => $a]);
    }

}
