<?php

namespace Database\Factories;

use App\Models\JenisPembiayaanModel;
use App\Models\JenisPendaftaranModel;
use App\Models\ProdiModel;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CamabaModel>
 */
class CamabaModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    private function generateSchoolName($faker){
        $cities = ['Jakarta', 'Bandung', 'Surabaya', 'Medan', 'Yogyakarta', 'Malang', 'Semarang'];
        $schoolType = $faker->randomElement(['SMA', 'SMK' , 'SMA Negeri', 'SMK Negeri']);
        $schoolNumber = $faker->numberBetween(1, 20); // Random nomor sekolah
        $city = $faker->randomElement($cities); // Pilih kota dari array
        
        // Pola untuk sekolah negeri atau swasta
        // $schoolPattern = $faker->randomElement([
        //     "$schoolType Negeri $schoolNumber $city",
        //     // "$schoolType $faker->company"
        // ]);

        return "$schoolType Negeri $schoolNumber $city";
    }
    
    public function definition(): array
    {
        // $schoolName = $this->generateSchoolName($faker, $cities);
        $nama = $this->faker->name;
        $slug = Str::slug($nama, '-');
        return [
            //
            'id' => $this->faker->unique()->randomNumber(), // Relasikan dengan user jika ada
            'slug' => $slug,
            'id_user' => $this->faker->unique()->randomNumber(), // Relasikan dengan user jika ada
            'no_pendaftaran' => $this->faker->randomNumber(),
            'id_jenis_pendaftaran' => $this->faker->numberBetween(1,4), // Sesuaikan dengan seeder 'jenis_pendaftaran'
            'id_jenis_pembiayaan' => $this->faker->numberBetween(1,3),
            'id_prodi' => $this->faker->numberBetween(1,3),
            'periode_masuk' => $this->faker->randomElement(['Gasal', 'Genap']),
            'nama_lengkap' => $nama,
            'jenis_kelamin' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'tmp_lahir' => $this->faker->city,
            'tgl_lahir' => $this->faker->date(),
            'agama' => $this->faker->randomElement(['ISLAM', 'PROTESTAN', 'KATOLIK', 'HINDU', 'BUDHA', 'KHONGHUCU']),
            'kewarganegaraan' => $this->faker->randomElement(['WNI', 'WNA']),
            'no_ktp' => $this->faker->unique()->nik(),
            'nisn' => $this->faker->unique()->numerify('##########'),
            'alamat' => $this->faker->address,
            'no_hp' => $this->faker->phoneNumber,
            'no_wa' => $this->faker->phoneNumber,
            'asal_sma' => $this->generateSchoolName($this->faker),
            'tahun_lulus' => $this->faker->date(),
            'asal_pt' => $this->faker->company,
            'prodi_pt' => $this->faker->word,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
