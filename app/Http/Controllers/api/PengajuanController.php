<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function show($id)
    {
        $data = DB::table('pengajuan_pendaftaran as p')
            ->join('camaba as c', 'p.id_camaba', '=', 'c.id')
            ->join('program_studi as ps', 'p.id_prodi', '=', 'ps.id')
            ->where('p.id_user', $id)
            ->select(
                'c.nama as nama_mahasiswa',
                'p.jenis_masuk',
                'p.semester_masuk',
                'p.tahun_akademik',
                'ps.nama as program_studi',
                'p.status',
                'p.id'
            )
            ->get();
        
        return response()->json($data, 200);
    }

}
