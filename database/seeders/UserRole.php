<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRole extends Seeder
{
    public function run()
    {
        DB::table('role')->insert([
            [
                'level' => 1,
                'role' => 'Admin',
                'deskripsi' => 'Administrator System',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level' => 2,
                'role' => 'Asesor',
                'deskripsi' => 'Asesor Pendaftaran',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level' => 3,
                'role' => 'User',
                'deskripsi' => 'Calon Mahasiswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
