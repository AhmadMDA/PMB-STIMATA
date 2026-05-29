<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $table = 'dokumen';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'judul',
        'jenis',
        'tahun',
        'penyelenggara',
        'jabatan',
        'file',
        'id_user', // Foreign key ke tabel users
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
