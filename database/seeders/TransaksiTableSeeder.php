<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\withoutModelEvents;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = [
            
            ['no_transaksi' => 1234,'id_pengunjung' => '2022' , 'id_karyawan' => '20223' , 'jmlh_kamar' => 3 , 'tgl_masuk' => '2022-6-19' , 'tgl_keluar' => '2022-6-20' , 'lama_nginap' => 2 ,'total_harga' => 20000],
            ['no_transaksi' => 1235,'id_pengunjung' => '2023' , 'id_karyawan' => '20224' , 'jmlh_kamar' => 4 , 'tgl_masuk' => '2022-6-20' , 'tgl_keluar' => '2022-6-21' , 'lama_nginap' => 5 ,'total_harga' => 30000],
            ['no_transaksi' => 1236,'id_pengunjung' => '2024' , 'id_karyawan' => '20225' , 'jmlh_kamar' => 5 , 'tgl_masuk' => '2022-6-22' , 'tgl_keluar' => '2022-6-23' , 'lama_nginap' => 7 ,'total_harga' => 40000],
            ['no_transaksi' => 1237,'id_pengunjung' => '2025' , 'id_karyawan' => '20226' , 'jmlh_kamar' => 7 , 'tgl_masuk' => '2022-6-10' , 'tgl_keluar' => '2022-6-11' , 'lama_nginap' => 9 ,'total_harga' => 50000],
            ['no_transaksi' => 1238,'id_pengunjung' => '2026' , 'id_karyawan' => '20227' , 'jmlh_kamar' => 6 , 'tgl_masuk' => '2022-6-26' , 'tgl_keluar' => '2022-6-27' , 'lama_nginap' => 10 ,'total_harga' => 60000],
        ];

        // masukkan data ke db
        DB::table('transaksis')->insert($transaksi);
    }
}
