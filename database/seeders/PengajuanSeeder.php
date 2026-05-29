<?php

namespace Database\Seeders;

use App\Models\Pengajuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Pengajuan::create([
            'id_camaba' => 1,
            'jenis_masuk' => 'Peserta Didik Baru',
            'tahun_akademik' => '2024/2025',
            'id_prodi' => 1,
        ]);

        Pengajuan::create([
            'id_camaba' => 2,
            'jenis_masuk' => 'Beasiswa KIP',
            'tahun_akademik' => '2023/2024',
            'id_prodi' => 2,
        ]);
    }
}
