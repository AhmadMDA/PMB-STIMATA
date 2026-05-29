<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPembiayaanModel extends Model
{
    use HasFactory;

    protected $table = 'jenis_pembiayaan';

    protected $fillable = [
        'slug','id_jenis_pembiayaan', 'nama_jenis_pembiayaan'
    ];

    // Relasi ke Camaba
    public function camaba()
    {
        return $this->hasMany(CamabaModel::class, 'id_jenis_pembiayaan');
    }
}