<?php

namespace Database\Seeders;

use App\Models\DataLain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataLainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DataLain::create([
            'id_camaba' => 1,
            'pas_foto' => 'path/to/foto1.jpg',
            'foto_ktp' => 'path/to/ktp1.jpg',
            'alat_transportasi' => 'Sepeda Motor',
        ]);

        DataLain::create([
            'id_camaba' => 2,
            'pas_foto' => 'path/to/foto2.jpg',
            'foto_ktp' => 'path/to/ktp2.jpg',
            'alat_transportasi' => 'Mobil',
        ]);

    }
}
