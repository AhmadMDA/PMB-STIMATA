<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrangTua extends Model
{
    use HasFactory;

    protected $table = 'orang_tua';
    protected $fillable = ['id_camaba', 'nama_ayah', 'nama_ibu', 'penerima_kps', 'jenis_tinggal'];

    public $timestamps = false;
}
