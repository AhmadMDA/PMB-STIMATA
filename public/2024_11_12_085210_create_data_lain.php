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
        Schema::create('data_lain', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_camaba')->constrained('camaba')->onDelete('cascade');
            $table->string('pas_foto');
            $table->string('foto_ktp');
            $table->enum('alat_transportasi', ['Angkutan', 'Bus Umum', 'Ojek', 'Sepeda Motor', 'Mobil', 'Sepeda', 'Jalan Kaki']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_lain');
    }
};
