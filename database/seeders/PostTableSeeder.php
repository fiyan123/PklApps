<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\withoutModelEvents;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            
            ['title' => 'Tips Nikah Cepat','content' => 'assalaam studio'],
            ['title' => 'Harus menunda nikah?','content' => 'assalaam studio'],
            ['title' => 'Membangun visi misi keluarga','content' => 'assalaam studio'],
        ];

        // masukkan data ke db
        DB::table('posts')->insert($sampel);
    }
}
