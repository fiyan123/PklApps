<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\withoutModelEvents;

class PengunjungTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengunjung = [
            
            ['id_pengunjung' => '1205' , 'nm_pengunjung' => 'Ibnu' , 'alamat' => 'Kota Baru','jk' => 'Laki-laki','no_tlp' => '0878787878','no_ktp' => 24242323],
            ['id_pengunjung' => '1206' , 'nm_pengunjung' => 'Abdul' , 'alamat' => 'Kota Lama','jk' => 'Laki-laki','no_tlp' => '0878787656','no_ktp' => 242423656],
            ['id_pengunjung' => '1207' , 'nm_pengunjung' => 'Rahman' , 'alamat' => 'Cibiru','jk' => 'Laki-laki','no_tlp' => '0878786565','no_ktp' => 242465658],
            ['id_pengunjung' => '1208' , 'nm_pengunjung' => 'Rudi' , 'alamat' => 'Katapang','jk' => 'Laki-laki','no_tlp' => '08787877576','no_ktp' => 2424878],
            ['id_pengunjung' => '1209' , 'nm_pengunjung' => 'Salsa' , 'alamat' => 'Cihanjuang','jk' => 'Perempuan','no_tlp' => '087875765','no_ktp' => 242423787],   
    ];

    // masukkan data ke db
    DB::table('pengunjungs')->insert($pengunjung);
    
    }
}
