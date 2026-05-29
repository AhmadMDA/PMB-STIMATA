<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('prodi')->insert([
            ['id' => '1' ,'nama_prodi' => 'Teknik Informatika' , 'slug' => 'teknik-informatika' , 'kode_prodi' => 'TI' , 'kelas' => '4A', 'created_at' => now(),'updated_at' => now()],
            ['id' => '2' ,'nama_prodi' => 'Sistem Informasi' , 'slug' => 'sistem-informasi' , 'kode_prodi' => 'SI' , 'kelas' => '4A', 'created_at' => now(),'updated_at' => now()],
            ['id' => '3' ,'nama_prodi' => 'Manajemen' , 'slug' => 'manajemen' , 'kode_prodi' => 'MA' , 'kelas' => '4A', 'created_at' => now(),'updated_at' => now()],
        ]);
    }
}
