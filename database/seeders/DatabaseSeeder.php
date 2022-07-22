<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\withoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

                PostTableSeeder::class,
        ]);

        $this->call([

                SiswaTableSeeder::class,
        ]);

        $this->call([

                PesertaTableSeeder::class,
        ]);

        $this->call([

                PelajaranTableSeeder::class,
        ]);
        $this->call([

                KaryawanTableSeeder::class,
        ]);
        $this->call([

                PengunjungTableSeeder::class,
        ]);
        $this->call([

                TransaksiTableSeeder::class,
        ]);
        $this->call([

                Detail_TransaksiTableSeeder::class,
        ]);
        $this->call([

                KamarTableSeeder::class,
        ]);
    }
}
