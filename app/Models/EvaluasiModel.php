<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluasiModel extends Model
{
    use HasFactory;
    protected $table = 'evaluasi';

    // Primary Key
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi
    protected $fillable = [
        'id_matkulaplikasi',
        'id_sub_cpmk',
        'kompetensi',
    ];

    // Menonaktifkan timestamps jika tabel tidak memiliki kolom created_at dan updated_at
    public $timestamps = false;

    /**
     * Relasi dengan model lain (jika ada).
     */

    // Contoh relasi ke model MatkulAplikasi
    public function matkulAplikasi()
    {
        return $this->belongsTo(MatkulAplikasiModel::class, 'id_matkulaplikasi');
    }

    // Contoh relasi ke model SubCpmk
    // public function subSpmk()
    // {
    //     return $this->belongsTo(SubSpmk::class, 'id_sub_spmk');
    // }
}
