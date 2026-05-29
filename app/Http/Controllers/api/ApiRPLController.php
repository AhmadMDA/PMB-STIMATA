<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\EvaluasiModel;
use App\Models\MatkulAplikasiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApiRPLController extends Controller
{
    //
    public function index($id) 
    {

        $data = json_decode(DB::table('matakuliah')->get());
        $pilih = json_decode(MatkulAplikasiModel::where('id_user', $id)->get());
        foreach ($data as $d) {
            $d->isPilih = false;
            foreach($pilih as $p) {
                if ($d->kode_mtk == $p->kode_mtk) {
                    $d->isPilih = true;
                }
            }
        }
        
        return response()->json($data, 200);
    }
    public function storeMatkul(Request $request)
    {
        $store = MatkulAplikasiModel::create([
            'id_user' => $request->id_user,
            'kode_mtk' => $request->kode_mtk,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $cpmk = DB::table('cpmk')->where('kode_mtk', $request->kode_mtk)->get();
        $subcpmk = [];
        foreach ($cpmk as  $value) {
            $sub = DB::table('sub_cpmk')->where('kode_cpmk', $value->kode_cpmk)->get();
            foreach ($sub as $key => $s) {
                // $subcpmk[] = [
                    // 'id_sub_cpmk' => $s->kode_sub_cpmk
                    $evaluasi = EvaluasiModel::create([
                        'id_matkulaplikasi' => $store->id,
                        'id_sub_cpmk' => $s->kode_sub_cpmk,     
                    ]);
                // ];
            }
            // $cpmk[$key]->sub_cpmk = $sub;
        }
        return response()->json(['success' => true , 'data' => $subcpmk], 200);
    }
    public function destroyMatkul(Request $request)
    {
        $id =  MatkulAplikasiModel::where('id_user', $request->id_user)->where('kode_mtk', $request->kode_mtk)->first();
        EvaluasiModel::where('id_matkulaplikasi', $id->id)->delete();
        $id->delete();
        return response()->json(['success' => true, 'message' => 'data berhasil dihapus'], 200);
    }

    public function showMatkul($id) {

        $data = MatkulAplikasiModel::where('id_user', $id)->get();
        foreach ($data as $key => $value) {
            $data[$key]['sks'] = DB::table('matakuliah')->where('kode_mtk', $value->kode_mtk)->first()->sks;
            $data[$key]['nama_mtk'] = DB::table('matakuliah')->where('kode_mtk', $value->kode_mtk)->first()->nama_mtk;
        }
        return response()->json($data, 200);
    }
    public function showEvaluasi(Request $request) {
        // dd($request->all());
        // dd(Auth::user());
        // $data = $request->all();
        $matkulaplikasi = MatkulAplikasiModel::find($request->id_matkulaplikasi);
        $evaluasi = EvaluasiModel::where('id_matkulaplikasi', $request->id_matkulaplikasi)->get();
        $cpmk = DB::table('cpmk')->where('kode_mtk', $matkulaplikasi->kode_mtk)->get();
        foreach ($cpmk as $key => $value) {
            $sub = DB::table('sub_cpmk')->where('kode_cpmk', $value->kode_cpmk)->get();
            foreach ($sub as $keyy => $s) {
                $kompetensi = EvaluasiModel::where('id_matkulaplikasi', $request->id_matkulaplikasi)->where('id_sub_cpmk', $s->kode_sub_cpmk)->first()->kompetensi;
                $sub[$keyy]->kompetensi = $kompetensi;
            }
            $cpmk[$key]->sub_cpmk = $sub;
        }

        return response()->json($data = [
            'kode_mk' => $matkulaplikasi->kode_mtk,
            'keterangan' => $matkulaplikasi->keterangan,
            'id_matkulaplikasi' => $matkulaplikasi->id,
            'evaluasi' => $evaluasi,
            'id_user' => $request->id_user,
            'nama_matkul' => DB::table('matakuliah')->where('kode_mtk', $matkulaplikasi->kode_mtk)->first()->nama_mtk,
            'nama' => DB::table('user')->where('id', $request->id_user)->first()->name,
            'cpmk' => $cpmk
        ], 200);
    }
    public function insertEvaluasi(Request $request) {
        // $data = EvaluasiModel::create([
        //     'id_matkulaplikasi' => $request->id_matkulaplikasi,
        //     'id_sub_cpmk' => $request->id_sub_cpmk,
        //     'kompetensi' => $request->kompetensi,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        MatkulAplikasiModel::find($request->id_matkulaplikasi)->update([
            'keterangan' => $request->keterangan
        ]);

        // Ambil semua data dari request
        $data = $request->all();

        // Filter keys yang diawali dengan 'dokumen' dan ekstrak kode CPMK
        $dokumenKeys = array_filter(array_keys($data), function ($key) {
            return str_starts_with($key, 'dokumen');
        });
        $dokumenCPMK = array_map(function ($key) {
            return str_replace('dokumen_', '', $key);
        }, $dokumenKeys);

        // Filter keys yang diawali dengan 'kompetensi' dan ekstrak kode CPMK
        $kompetensiKeys = array_filter(array_keys($data), function ($key) {
            return str_starts_with($key, 'kompetensi');
        });
        $kompetensiCPMK = array_map(function ($key) {
            return str_replace('kompetensi_', '', $key);
        }, $kompetensiKeys);

        foreach ($dokumenCPMK as $key => $value) {
            $dokumen = $data['dokumen_'.$value];
            $evaluasi = EvaluasiModel::where('id_matkulaplikasi', $request->id_matkulaplikasi)->where('id_sub_cpmk', $value)->first();
            $evaluasi->id_dokumen = $dokumen;
            $evaluasi->save();
        }

        foreach ($kompetensiCPMK as $key => $value) {
            $kompetensi = $data['kompetensi_'.$value];
            $evaluasi = EvaluasiModel::where('id_matkulaplikasi', $request->id_matkulaplikasi)->where('id_sub_cpmk', $value)->first();
            $evaluasi->kompetensi = $kompetensi;
            $evaluasi->save();
        }

        return response()->json($request->all(), 200);
    }
}
