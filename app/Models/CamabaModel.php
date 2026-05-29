<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CamabaModel extends Model
{
    use HasFactory;

    protected $table = 'camaba';

    protected $fillable = [
        'slug', 'id_user', 'no_pendaftaran', 'id_jenis_pendaftaran', 
        'id_jenis_pembiayaan', 'id_prodi', 'periode_masuk', 'nama_lengkap',
        'jenis_kelamin', 'tmp_lahir', 'tgl_lahir', 'agama', 'kewarganegaraan',
        'no_ktp', 'nisn', 'alamat', 'no_hp', 'no_wa', 'asal_sma', 'tahun_lulus',
        'asal_pt', 'prodi_pt', 'nama_ayah', 'nama_ibu', 'penerima_kps', 'jenis_tinggal',
        'pas_foto', 'foto_ktp', 'alat_transportasi',
    ];

    // Relasi ke Jenis Pendaftaran
    public function jenisPendaftaran()
    {
        return $this->belongsTo(JenisPendaftaranModel::class, 'id_jenis_pendaftaran');
    }

    // Relasi ke Jenis Pembiayaan
    public function jenisPembiayaan()
    {
        return $this->belongsTo(JenisPembiayaanModel::class, 'id_jenis_pembiayaan');
    }

    // Relasi ke Prodi
    public function prodi()
    {
        return $this->belongsTo(ProdiModel::class, 'id_prodi');
    }

    // Relasi ke Orang Tua
    public function orangTua()
    {
        return $this->hasOne('App\Models\OrangTua', 'id_camaba');
    }

    // Relasi ke Data Lain
    public function dataLain()
    {
        return $this->hasOne('App\Models\DataLain', 'id_camaba');
    }

    // Relasi ke Pengajuan Pendaftaran
    public function pengajuan()
    {
        return $this->hasMany('App\Models\Pengajuan', 'id_camaba');
    }
}