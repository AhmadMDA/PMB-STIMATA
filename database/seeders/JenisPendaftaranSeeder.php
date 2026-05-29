<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisPendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('jenis_pendaftaran')->insert([
            ['id' => '1','nama_jenis_pendaftaran' => 'Peserta Didik Baru', 'slug' => 'PDB' , 'id_jenis_pendaftaran' => '1', 'created_at' => now(),'updated_at' => now()],
            ['id' => '2','nama_jenis_pendaftaran' => 'Beasiswa', 'slug' => 'BSW' , 'id_jenis_pendaftaran' => '2', 'created_at' => now(),'updated_at' => now()],
            ['id' => '3','nama_jenis_pendaftaran' => 'Rekognisi Pembelajaran Lampau', 'slug' => 'RPL' , 'id_jenis_pendaftaran' => '3', 'created_at' => now(),'updated_at' => now()],
            ['id' => '4','nama_jenis_pendaftaran' => 'Alih Jenjang', 'slug' => 'AJJ' , 'id_jenis_pendaftaran' => '4', 'created_at' => now(),'updated_at' => now()],
        ]);
    }
}
