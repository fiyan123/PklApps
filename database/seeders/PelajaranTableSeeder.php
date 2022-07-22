<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\withoutModelEvents;

class PelajaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelajaran = [
            
                ['kode_mp' => 'MPO1' , 'nama_mp' => 'Algoritma' , 'sks' => '2' , 'semester' => '1'],
                ['kode_mp' => 'MPO2' , 'nama_mp' => 'Basis Data' , 'sks' => '3' , 'semester' => '1'],
                ['kode_mp' => 'MPO3' , 'nama_mp' => 'Assembly' , 'sks' => '2' , 'semester' => '2'],      
        ];

        // masukkan data ke db
        DB::table('pelajarans')->insert($pelajaran);
    }
}
