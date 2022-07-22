<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\withoutModelEvents;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan = [
            
            ['id_karyawan' => '1205' , 'nm_karyawan' => 'Ibnu' , 'jk' => 'Laki-laki'],
            ['id_karyawan' => '1206' , 'nm_karyawan' => 'Maulana' , 'jk' => 'Laki-laki'],
            ['id_karyawan' => '1207' , 'nm_karyawan' => 'Lala' , 'jk' => 'Perempuan'],
            ['id_karyawan' => '1208' , 'nm_karyawan' => 'Nana' , 'jk' => 'Perempuan'],
            ['id_karyawan' => '1209' , 'nm_karyawan' => 'Ibnu2' , 'jk' => 'Laki-laki'],     
    ];

    // masukkan data ke db
    DB::table('karyawans')->insert($karyawan);
    }
}
