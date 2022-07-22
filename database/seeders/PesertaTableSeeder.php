<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\withoutModelEvents;

class PesertaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            
            ['no' => 2001 , 'kode_mp' => 'MP01'],
            ['no' => 2002 , 'kode_mp' => 'MP02'],
            ['no' => 2003 , 'kode_mp' => 'MP01'],
            ['no' => 2004 , 'kode_mp' => 'MP02'],
            ['no' => 2005 , 'kode_mp' => 'MP01'],
            ['no' => 2006 , 'kode_mp' => 'MP03'],
           
        ];

        // masukkan data ke db
        DB::table('pesertas')->insert($data);
    }
}
