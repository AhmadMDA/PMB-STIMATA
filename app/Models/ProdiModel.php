<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdiModel extends Model
{
    use HasFactory;
    protected $table = 'prodi';

    protected $fillable = [
        'nama_prodi','slug','kelas' , 'kode_prodi'
    ];

    // Relasi ke Camaba
    public function camaba()
    {
        return $this->hasMany(CamabaModel::class, 'id_prodi');
    }
}

