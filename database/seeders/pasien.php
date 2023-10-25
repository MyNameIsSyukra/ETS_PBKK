<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pasien extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Pasien Pertama',
                'usia' => '30',
                'status' => 'Lajang',
                'tempat/tanggallahir' => 'Jakarta, 1993-05-15',
                'foto' => 'pasien1.jpg',
            ],
            [
                'nama' => 'Pasien Kedua',
                'usia' => '45',
                'status' => 'Menikah',
                'tempat/tanggallahir' => 'Surabaya, 1980-08-20',
                'foto' => 'pasien2.jpg',
            ],
            // Tambahkan data pasien lainnya di sini
        ];

        // Masukkan data ke tabel data_pasien
        DB::table('data_pasien')->insert($data);
    }
}