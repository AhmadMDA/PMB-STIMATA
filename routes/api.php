<?php

use App\Http\Controllers\api\ApiRPLController;
use App\Http\Controllers\api\ProfilController;
use App\Http\Controllers\api\PengajuanController;
use App\Http\Controllers\DokumenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user/{id}', [ProfilController::class, 'show']);

Route::get('/matakuliah/{id}', [ApiRPLController::class, 'index'])->name('api.matakuliah'); 
Route::get('/showMatkul/{id}', [ApiRPLController::class, 'showMatkul'])->name('api.showMatkul');
Route::post('/storeMatkul', [ApiRPLController::class, 'storeMatkul'])->name('api.storeMatkul');
Route::delete('/destroyMatkul', [ApiRPLController::class, 'destroyMatkul'])->name('api.destroyMatkul');
Route::get('/showevaluasi', [ApiRPLController::class, 'showEvaluasi'])->name('api.showEvaluasi');
Route::put('/insertevaluasi', [ApiRPLController::class, 'insertEvaluasi'])->name('api.insertEvaluasi');

Route::delete('/dokumen/{id}', [DokumenController::class, 'destroy'])->name('dokumen.destroy');

// Route::get('/getDocuments', [DokumenController::class, 'fetchDokumen'])->name('api.getDocuments');

Route::put('/user/{id}', [ProfilController::class, 'update']);
Route::get('/pengajuan/{id}', [PengajuanController::class, 'show']);

