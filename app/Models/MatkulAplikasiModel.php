<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatkulAplikasiModel extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'matakuliah_aplikasi';

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'id';

    // If your primary key is not an incrementing integer, set the following
    public $incrementing = true;


    // Specify the fillable attributes (columns that can be mass-assigned)
    protected $fillable = [
        'id_user',
        'kode_mtk',
        'kompetensi',
        'keterangan',
        'created_at',
        'updated_at'
    ];
}
