<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
class pasien extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Pasien Pertama',
                'usia' => '30',
                'status' => 'Lajang',
                'tempat_tanggallahir' => 'Jakarta, 1993-05-15',
                'foto' => 'pasien1.jpg',
            ],
            [
                'nama' => 'Pasien Kedua',
                'usia' => '45',
                'status' => 'Menikah',
                'tempat_tanggallahir' => 'Surabaya, 1980-08-20',
                'foto' => 'pasien2.jpg',
            ],
            // Tambahkan data pasien lainnya di sini
        ];

        // Masukkan data ke tabel data_pasien
        DB::table('data_pasien')->insert($data);
    }
}