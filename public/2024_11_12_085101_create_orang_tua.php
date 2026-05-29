<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orang_tua', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_camaba')->constrained('camaba')->onDelete('cascade');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->enum('penerima_kps', ['Ya', 'Tidak']);
            $table->enum('jenis_tinggal', ['Bersama Orang Tua', 'Bersama Wali', 'Kost', 'Pondok Pesantren']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orang_tua');
    }
};
