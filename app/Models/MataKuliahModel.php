<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliahModel extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';

    // Primary key

    protected $fillable = [
        'kode_mtk', 'nama_mtk', 'sks' , 'slug' , 'smt' , 'status'
    ];

    // Jika ada relasi ke tabel lain, misalnya ke Prodi
    public function prodi()
    {
        return $this->belongsTo(ProdiModel::class, 'id_prodi');
    }

    // Relasi ke Camaba (jika ada relasi antar camaba dan matakuliah)
    public function camaba()
    {
        return $this->hasMany(CamabaModel::class, 'id_matakuliah'); // Jika ada foreign key di camaba
    }
}
