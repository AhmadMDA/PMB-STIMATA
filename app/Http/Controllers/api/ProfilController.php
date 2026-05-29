<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\CamabaModel;
use App\Models\OrangTua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function show($id) {
        $data = CamabaModel::where('id_user', $id)->first();
        
        
        return response()->json($data, 200);
    }

    public function update(Request $request, $id) {
        $data = CamabaModel::where('id_user', $id)->first();

        if (!$data) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $validated = $request->validate([
            'slug' => 'nullable|string|max:255',
            'id_user' => 'nullable|numeric',
            'no_pendaftaran' => 'nullable|string|max:20',
            'id_jenis_pendaftaran' => 'nullable|numeric',
            'id_jenis_pembiayaan' => 'nullable|numeric',
            'id_prodi' => 'nullable|numeric',
            'periode_masuk' => 'nullable|in:Gasal,Genap',
            'nama_lengkap' => 'nullable|string|max:255',
            'jenis_kelamin' => 'nullable|in:Laki-Laki,Perempuan',
            'tmp_lahir' => 'nullable|string|max:255',
            'tgl_lahir' => 'nullable|date',
            'agama' => 'nullable|in:ISLAM,PROTESTAN,KATOLIK,HINDU,BUDHA,KHONGHUCU',
            'kewarganegaraan' => 'nullable|in:WNI,WNA',
            'no_ktp' => 'nullable|string|max:20',
            'nisn' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
            'no_hp' => 'nullable|string|max:20',
            'no_wa' => 'nullable|string|max:20',
            'asal_sma' => 'nullable|string|max:200',
            'tahun_lulus' => 'nullable|string|max:4',
            'asal_pt' => 'nullable|string|max:200',
            'prodi_pt' => 'nullable|string|max:200',
            'nama_ayah' => 'nullable|string|max:255',
            'nama_ibu' => 'nullable|string|max:255',
            'penerima_kps' => 'nullable|in:Ya,Tidak',
            'jenis_tinggal' => 'nullable|in:Bersama Orang Tua,Bersama Wali,Kost,Pondok Pesantren',
            'pas_foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'foto_ktp' => 'nullable|string|max:255',
            'alat_transportasi' => 'nullable|in:Angkutan,Bus Umum,Ojek,Sepeda Motor,Mobil,Sepeda,Jalan Kaki'
        ]);

    // Foto
    if ($request->hasFile('pas_foto')) {
        if ($data->pas_foto && Storage::exists('public/' . $data->pas_foto)) {
            Storage::delete('public/' . $data->pas_foto);
        }

        $file = $request->file('pas_foto');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('photos', $filename, 'public');
        
        $validated['pas_foto'] = $path;
    }

        $data->update($validated);
        return response()->json([
            'message' => 'Data updated successfully',
            'pas_foto' => $data->pas_foto ? asset('storage/' . $data->pas_foto) : null
        ], 200);
    }
}
