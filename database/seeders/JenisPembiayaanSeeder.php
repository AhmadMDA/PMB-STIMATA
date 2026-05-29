<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisPembiayaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('jenis_pembiayaan')->insert([
            ['id' => '1' ,'nama_jenis_pembiayaan' => 'Beasiswa' , 'slug' => 'beasiswa' , 'id_jenis_pembiayaan' => '1' , 'created_at' => now(),'updated_at' => now()],
            ['id' => '2' ,'nama_jenis_pembiayaan' => 'Mandiri' , 'slug' => 'mandiri' , 'id_jenis_pembiayaan' => '2' , 'created_at' => now(),'updated_at' => now()],
            ['id' => '3' ,'nama_jenis_pembiayaan' => 'Kerjasama' , 'slug' => 'kerjasama' , 'id_jenis_pembiayaan' => '3' , 'created_at' => now(),'updated_at' => now()],
        ]);
        
    }
}
