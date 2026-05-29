<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('camaba', function (Blueprint $table) {
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->enum('penerima_kps', ['Ya', 'Tidak']);
            $table->enum('jenis_tinggal', ['Bersama Orang Tua', 'Bersama Wali', 'Kost', 'Pondok Pesantren']);
            $table->string('pas_foto');
            $table->string('foto_ktp');
            $table->enum('alat_transportasi', ['Angkutan', 'Bus Umum', 'Ojek', 'Sepeda Motor', 'Mobil', 'Sepeda', 'Jalan Kaki']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('camaba', function (Blueprint $table) {
            //
        });
    }
};
