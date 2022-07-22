<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\withoutModelEvents;

class KamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kamar = [
            
            ['no_kamar' => 1234 , 'jenis_kamar' => 'Deluxe', 'harga' => 20000],
            ['no_kamar' => 1235 , 'jenis_kamar' => 'Primary', 'harga' => 30000],
            ['no_kamar' => 1236 , 'jenis_kamar' => 'Second', 'harga' => 40000],
            ['no_kamar' => 1237 , 'jenis_kamar' => 'Elite', 'harga' => 50000],
            ['no_kamar' => 1238 , 'jenis_kamar' => 'B5', 'harga' => 100000],

        ];

        // masukkan data ke db
        DB::table('kamars')->insert($kamar);
    }
}
