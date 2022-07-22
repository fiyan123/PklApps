<?php

namespace App\Http\Controllers;

class LatihanController extends Controller
{
    public function menu()
    {

        $menu = [

            [
                'nama' => 'beranda',
            ],

            [
                'nama' => 'Berita',
                'kategori' => [

                    [
                        'nama_kategori' => 'Olahraga',
                        'menu' => ['Sepak bola', 'Bulu tangkis'],
                    ],

                    [
                        'nama_kategori' => 'Manca negara',
                    ],
                ],
            ],

            [
                'nama' => 'Tentang',
            ],

        ];

        // dd($menu);
        return view('pages.menu', ['menu' => $menu]);
    }

    public function kampus()
    {
        $kampus = [

            [

                'nama' => 'Yusuf Bachtiar',
                'mata_kuliah' => 'Pemrograman Mobile',

                'mahasiswa' => [

                    ['nama' => 'Muhammad Soleh', 'nilai' => 78],
                    ['nama' => 'Jujun Junaedi', 'nilai' => 85],
                    ['nama' => 'Mamat Alkatiri', 'nilai' => 90],
                    ['nama' => 'Ubay holin', 'nilai' => 87],
                    ['nama' => 'Fadilah', 'nilai' => 95],
                ],
            ],

            [
                'nama' => 'Yaris Riyadi Yusuf',
                'mata_kuliah' => 'Pemrograman Web',

                'mahasiswa' => [

                    ['nama' => 'Alfred Mctomminay', 'nilai' => 67],
                    ['nama' => 'Bruno Kasmis', 'nilai' => 90],
                    ['nama' => 'Akid Hendra', 'nilai' => 50],
                    ['nama' => 'Dany Irawan', 'nilai' => 70],
                    ['nama' => 'Chandra Mega Putra', 'nilai' => 60],
                ],
            ],

        ];

        //dd($dosenpembimbing);
        return view('pages.kampus', ['kampus' => $kampus]);
    }

    public function televisi()
    {
        $tv = [

            [
                'nama' => 'Net TV',
                'jadwal_mulai' => [

                    ['nama_program' => 'Good Morning', 'jam_tayang' => '06.00 wib', 'tanggal_tayang' => '12-6-2022'],
                    ['nama_program' => 'Good Afternon', 'jam_tayang' => '12.00 wib', 'tanggal_tayang' => '11-6-2022'],
                    ['nama_program' => 'Good Evening', 'jam_tayang' => '16.00 wib', 'tanggal_tayang' => '10-6-2022'],

                ],
            ],

            [
                'nama' => 'TVRI',
                'jadwal_mulai' => [

                    ['nama_program' => 'Jejak Islam', 'jam_tayang' => '04.00 wib', 'tanggal_tayang' => '10-6-2022'],
                    ['nama_program' => 'Jejak Negri', 'jam_tayang' => '11.00 wib', 'tanggal_tayang' => '9-6-2022'],
                    ['nama_program' => 'Jejak Sejarah', 'jam_tayang' => '13.00 wib', 'tanggal_tayang' => '11-6-2022'],
                    
                ],
            ],

            [
                'nama' => 'BEINSPORT',
                'jadwal_mulai' => [

                    ['nama_program' => 'Adu Nasib', 'jam_tayang' => '22.00 wib', 'tanggal_tayang' => '17-1-2022'],
                    ['nama_program' => 'Roda Hoki', 'jam_tayang' => '18.00 wib', 'tanggal_tayang' => '10-1-2022'],
                    ['nama_program' => 'GameShow', 'jam_tayang' => '20.00 wib', 'tanggal_tayang' => '11-1-2022'],
                ],
            ],

            [
                'nama' => 'Ochannel',
                'jadwal_mulai' => [

                    ['nama_program' => 'Noob Ngga Aktif', 'jam_tayang' => '09.00 wib', 'tanggal_tayang' => '10-1-2021'],
                    ['nama_program' => 'Esport', 'jam_tayang' => '10.00 wib', 'tanggal_tayang' => '29-1-2021'],
                    ['nama_program' => 'Kail Pancing', 'jam_tayang' => '16.00 wib', 'tanggal_tayang' => '19-1-2021'],
                ],
            ],

            [
                'nama' => 'Indosiar',
                'jadwal_mulai' => [

                    ['nama_program' => 'Dangdut Pagi', 'jam_tayang' => '08:00 WIB', 'tanggal_tayang' => '16-6-2021'],
                    ['nama_program' => 'Dangdut Sore', 'jam_tayang' => '16:00 WIB', 'tanggal_tayang' => '15-6-2021'],
                    ['nama_program' => 'Dangdut Malam', 'jam_tayang' => '08:00 WIB', 'tanggal_tayang' => '17-6-2021'],
                ],
            ],
        ];
        // dd($tv);
        return view('pages.televisi', ['tv' => $tv]);
    }
}
