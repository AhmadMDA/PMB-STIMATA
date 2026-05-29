<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('camaba')->truncate();
        DB::table('jenis_pendaftaran')->truncate();
        DB::table('jenis_pembiayaan')->truncate();
        DB::table('prodi')->truncate();
        DB::table('user')->truncate();
        DB::table('role')->truncate();
        DB::table('orang_tua')->truncate();
        DB::table('data_lain')->truncate();
        DB::table('pengajuan_pendaftaran')->truncate();
        

        DB::table('user')->insert([
            ['id' => '1' ,'name' => 'admin' , 'email' => 'admin@ui.ac.id', 'password' => Hash::make('12345') , 'created_at' => now(),'updated_at' => now(), 'level' => '1'],
            ['id' => '2' ,'name' => 'asesor' , 'email' => 'asesor@ui.ac.id', 'password' => Hash::make('12345') , 'created_at' => now(),'updated_at' => now(), 'level' => '2'],
            ['id' => '3' ,'name' => 'mahasiswa' , 'email' => 'mahasiswa@ui.ac.id', 'password' => Hash::make('12345') , 'created_at' => now(),'updated_at' => now(), 'level' => '3'],
            ['id' => '4' ,'name' => 'Rizqi Zamzami' , 'email' => 'rizqi@gmail.com', 'password' => Hash::make('rizqi123') , 'created_at' => now(),'updated_at' => now(), 'level' => '3'],
            ['id' => '5' ,'name' => 'Bangkit Maulana' , 'email' => 'bangkit@gmail.com', 'password' => Hash::make('bangkit123') , 'created_at' => now(),'updated_at' => now(), 'level' => '3'],
        ]);

        $this->call([
            JenisPendaftaranSeeder::class,
            JenisPembiayaanSeeder::class,
            ProdiSeeder::class,
            CamabaSeeder::class,
            UserRole::class,
            OrangTuaSeeder::class,
            DataLainSeeder::class,
            PengajuanSeeder::class,
        ]);
    }
}
