<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\withoutModelEvents;

class Detail_TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_transaksi = [
            
            ['id_dtl_transaksi' => 'MPO12' , 'no_transaksi' => 1234 , 'no_kamar' => 20202],
            ['id_dtl_transaksi' => 'MPO13' , 'no_transaksi' => 1235 , 'no_kamar' => 20203],
            ['id_dtl_transaksi' => 'MPO14' , 'no_transaksi' => 1236 , 'no_kamar' => 20204],
            ['id_dtl_transaksi' => 'MPO15' , 'no_transaksi' => 1237 , 'no_kamar' => 20205],
            ['id_dtl_transaksi' => 'MPO16' , 'no_transaksi' => 1238 , 'no_kamar' => 20206],
            
    ];
    
    // masukkan data ke db
    DB::table('detail__transaksis')->insert($detail_transaksi);
}
 
}
