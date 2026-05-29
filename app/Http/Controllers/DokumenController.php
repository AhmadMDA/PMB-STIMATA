<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

// class DokumenController extends Controller
// {
//     //
//     public function store(Request $request)
//     {
//         // ($request->all());
//         // $validatedData = $request->validate([
//         //     'judul' => 'required|string|max:255',
//         //     'jenis' => 'required|string|max:255',
//         //     'tahun' => 'required|numeric',
//         //     'penyelenggara' => 'required|string|max:255',
//         //     'jabatan' => 'nullable|string|max:255',
//         //     'file' => 'nullable|file|mimes:png,jpg,jpeg|max:5120', // Max 5MB
//         // ]);

//         // // Simpan file jika ada
//         // if ($request->hasFile('file')) {
//         //     $validatedData['file'] = $request->file('file')->store('dokumen', 'public');
//         // }

//         // $dokumen = Dokumen::create($validatedData);
//         // $request->validate([
//         //     'judul' => 'required|string|max:255',
//         //     'jenis' => 'required|string',
//         //     'tahun' => 'required|integer',
//         //     'penyelenggara' => 'required|string|max:255',
//         //     'jabatan' => 'nullable|string|max:255',
//         //     'file' => 'nullable|file|mimes:png,jpg,jpeg|max:5120', // Max 5MB
//         // ]);
//         $validator = Validator::make($request->all(), [
//             'judul' => 'required|string|max:255',
//             'penyelenggara' => 'required|string|max:255',
//             'tahun' => 'required|integer',
//             'jenis' => 'required|string',
//             'jabatan' => 'nullable|string|max:255',
//             'file' => 'required|file|mimes:png,jpg,jpeg|max:5120', // Maks 5MB
//         ]);

//         if ($validator->fails()) {
//             return response()->json([
//                 'success' => false,
//                 'errors' => $validator->errors(),
//             ], 422);
//         }

//         // Simpan dokumen
//         // $dokumen = new Dokumen();
//         // $dokumen->judul = $request->judul;
//         // $dokumen->jenis = $request->jenis;
//         // $dokumen->tahun = $request->tahun;
//         // $dokumen->penyelenggara = $request->penyelenggara;
//         // $dokumen->jabatan = $request->jabatan;

//         // // Simpan file jika ada
//         // if ($request->hasFile('file')) {
//         //     $filePath = $request->file('file')->store('dokumen', 'public');
//         //     $dokumen->file = $filePath;
//         // }

//         // $dokumen->id_user = auth()->id(); // Menyimpan ID pengguna yang sedang login
//         // $dokumen->save();

//         return response()->json(['success' => true, 'data' => $request->all()] );
//         // $request->validate([
//         //     'judul' => 'required|string|max:255',
//         //     'jenis' => 'required|string',
//         //     'tahun' => 'required|integer',
//         //     'penyelenggara' => 'required|string|max:255',
//         //     'jabatan' => 'nullable|string|max:255',
//         //     'file' => 'nullable|file|mimes:png,jpg,jpeg|max:5120', // Max 5MB
//         // ]);

//         // // Simpan dokumen
//         // $dokumen = new Dokumen();
//         // $dokumen->judul = $request->judul;
//         // $dokumen->jenis = $request->jenis;
//         // $dokumen->tahun = $request->tahun;
//         // $dokumen->penyelenggara = $request->penyelenggara;
//         // $dokumen->jabatan = $request->jabatan;

//         // // Simpan file jika ada
//         // if ($request->hasFile('file')) {
//         //     $filePath = $request->file('file')->store('dokumen', 'public');
//         //     $dokumen->file = $filePath;
//         // }

//         // $dokumen->id_user = auth()->id(); // Menyimpan ID pengguna yang sedang login
//         // $dokumen->save();

//         // return response()->json($dokumen);
//     }

//     public function fetch()
//     {
//         $dokumen = Dokumen::all();
//         return response()->json(['success' => true, 'data' => $dokumen]);
//     }
// }
class DokumenController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'jenis' => 'required|string',
            'tahun' => 'required|integer',
            'penyelenggara' => 'nullable|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'file' => 'required|file|mimes:pdf|max:5120', // Max 5MB
        ]);
    
        // Simpan dokumen
        $dokumen = new Dokumen();
        $dokumen->judul = $request->judul;
        $dokumen->jenis = $request->jenis;
        $dokumen->tahun = $request->tahun;
        $dokumen->penyelenggara = $request->penyelenggara;
        $dokumen->jabatan = $request->jabatan;
    
        // Simpan file jika ada
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('dokumen', 'public');
            $dokumen->file = $filePath;
        }
    
        $dokumen->id_user = auth()->id(); // Menyimpan ID pengguna yang sedang login
        $dokumen->save();
    
        // return response()->json(['success' => true, 'data' => $dokumen]);
        return response()->json(['success' => true, 'data' => $request->all(), 'data1' => $dokumen]);
    }
    /**
     * Fetch all records.
     */
    public function fetch()
    {
        try {
            $dokumen = Dokumen::where('id_user', auth()->id())->get();
            

            return response()->json([
                'success' => true,
                'data' => $dokumen,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mengambil data.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function destroy($id)
    {
        // Find the document by ID
        $dokumen = Dokumen::find($id);

        if (!$dokumen) {
            return response()->json(['success' => false, 'message' => 'Document not found.'], 404);
        }

        // Optionally, delete the file from storage if it exists
        if ($dokumen->file) {
            Storage::disk('public')->delete($dokumen->file);
        }

        // Delete the document from the database
        $dokumen->delete();

        return response()->json(['success' => true, 'message' => 'Document deleted successfully.']);
    }
    public function fetchDokumen()
    {
        try {
            $dokumen = Dokumen::where('id_user', auth()->id())->get();
            

            return response()->json([
                $dokumen
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mengambil data.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}