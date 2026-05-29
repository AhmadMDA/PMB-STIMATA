<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLain extends Model
{
    use HasFactory;

    protected $table = 'data_lain';
    protected $fillable = ['id_camaba', 'pas_foto', 'foto_ktp', 'alat_transportasi'];
	
    public $timestamps = false;
}
