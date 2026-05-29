<?php

namespace Database\Seeders;

use App\Models\CamabaModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CamabaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CamabaModel::factory()->count(50)->create(); // Membuat 50 data camaba
    }
}
