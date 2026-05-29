<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPendaftaranModel extends Model
{
    use HasFactory;
    protected $table = 'jenis_pendaftaran';

    protected $fillable = [
        'slug', 'nama_jenis_pendaftaran'
    ];

    // Relasi ke Camaba
    public function camabas()
    {
        return $this->hasMany(CamabaModel::class, 'id_jenis_pendaftaran');
    }

}
