<?php

namespace Database\Seeders;

use App\Models\OrangTua;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrangTuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        OrangTua::create([
            'id_camaba' => 1,
            'nama_ayah' => 'Bapaknya Rizam',
            'nama_ibu' => 'Ibunya Rizam',
            'penerima_kps' => 'Tidak',
            'jenis_tinggal' => 'Kost',
        ]);

        OrangTua::create([
            'id_camaba' => 2,
            'nama_ayah' => 'Bapaknya Bangkit',
            'nama_ibu' => 'Ibunya Bangkit',
            'penerima_kps' => 'Ya',
            'jenis_tinggal' => 'Kost',
        ]);

    }
}
