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
        Schema::create('pengajuan_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_camaba')->constrained('camaba')->onDelete('cascade');
            $table->enum('jenis_masuk', ['Peserta Didik Baru', 'Beasiswa KIP', 'Rekognisi Pembelajaran Lampau', 'Alih Jenjang']);
            $table->string('tahun_akademik', 9); // Format: '2024/2025'
            $table->foreignId('id_prodi')->constrained('prodi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_pendaftaran');
    }
};
