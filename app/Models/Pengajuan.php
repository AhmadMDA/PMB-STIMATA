<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_pendaftaran';
    protected $fillable = ['id_camaba', 'jenis_masuk', 'tahun_akademik', 'id_prodi', 'status'];

    public $timestamps = false;
}
		