<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dokter extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Dokter Pertama',
                'spesialis' => 'Spesialis Kedokteran Umum',
                'NID' => 'DOK001',
                'foto' => 'dokter1.jpg',
            ],
            [
                'nama' => 'Dokter Kedua',
                'spesialis' => 'Spesialis Penyakit Dalam',
                'NID' => 'DOK002',
                'foto' => 'dokter2.jpg',
            ],
            // Tambahkan data dokter lainnya di sini
        ];

        // Masukkan data ke tabel dokter
        DB::table('dokter')->insert($data);
    }
}