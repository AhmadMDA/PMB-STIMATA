<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokumenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterRPL\PetunjukController;
use App\Http\Controllers\MasterRPL\AplikasiController;
use App\Http\Controllers\MasterRPL\EvaluasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PindahanController;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard');
// });
// Route::get('/admin', function () {
//     return view('dashboard');
// });
Route::get('/', function(){
    return view('welcome');
});


// Auth
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    
    Route::get('/register', function () {
        return view('auth.register');
    });
    
    Route::get('/reset-password', function () {
        return view('auth.reset-password');
    });
    
    Route::get('/new-password', function () {
        return view('auth.new-password');
    });
});

Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/register', [AuthController::class, 'store'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Admin
Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'user.level:1']
], function () {
    Route::get('/', [AdminController::class,'index'])->name('admin');
    
    // Proses RPL
    Route::group(['prefix'=>'prosesrpl'], function () {
        Route::group(["prefix" => "daftar"], function(){
            Route::get('/', [AdminController::class,'daftar'])->name('admin.daftar');
        });
        Route::group(["prefix" => 'hasil'], function(){
            Route::get('/', [AdminController::class,'hasil'])->name('admin.hasil');
        }); 
        Route::group(["prefix" => "asesmenlanjut"], function(){
            Route::get('/', [AdminController::class,'asesmenlanjut'])->name('admin.asesmenlanjut');
        });
    });

    // Master RPL
    Route::group(["prefix" => 'masterrpl'], function(){
        Route::group(["prefix" => "petunjuk"], function(){
            Route::get('/', [PetunjukController::class,'index']);
        });
        Route::group(["prefix" => "aplikasi"], function(){
            Route::get('/', [AplikasiController::class,'index']);
            Route::get('/tambah', [AplikasiController::class,'store']);
        });
        Route::group(["prefix" => "evaluasi"], function(){
            Route::get('/', [EvaluasiController::class,'index']);
        });
    });

    Route::group(["prefix" => "user"], function(){
        Route::get('/', [UserController::class,'index']);
        Route::get('/infouser', [UserController::class,'info']);
        

    });
    

    Route::get('/pindahan', [PindahanController::class,'index']);
    Route::get('/pesertadidikbaru', [AdminController::class,'pesertadidikbaru'])->name('admin.pesertadidikbaru');
    Route::get('/beasiswa', [AdminController::class,'beasiswa'])->name('admin.beasiswa');
});

// Asesor
Route::group([
    'prefix' => 'asesor',
    'middleware' => ['auth', 'user.level:2']
], function () {
    Route::get('/', [AsesorController::class, 'index'])->name('asesor');
    Route::group(["prefix" => "asesmen"], function(){
        Route::get('/', [AsesorController::class, 'asesmen'])->name('asesor.asesmen');
        Route::get('/evaluasi', [AsesorController::class, 'evaluasi'])->name('asesor.asesmen.evaluasi');
    });
    Route::group(["prefix" => "asesmenlanjut"], function(){
        Route::get('/', [AsesorController::class, 'asesmenlanjut'])->name('asesor.asesmenlanjut');
        Route::get('/soal', [AsesorController::class, 'editsoal'])->name('asesor.asesmenlanjut.soal');
    });
    Route::group(["prefix" => "rekapitulasi"], function(){
        Route::get('/', [AsesorController::class, 'rekapitulasi'])->name('asesor.rekapitulasi');
    });
});

// User Calon Mahasiswa
Route::group([
    'middleware' => ['auth', 'user.level:3']
], function () {
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');

    Route::get('/profil', function () {
        return view('user.profil');
    });

    Route::get('/pengajuan', function () {
        return view('user.pengajuan');
    });

    Route::prefix('pengajuan/rpl')->group(function () {
        Route::get('/', function () {
            return view('user.RPL.index');
        });
    });

    Route::prefix('pengajuan/beasiswa')->group(function () {
        Route::get('/', function () {
            return view('user.Beasiswa.index');
        });
    });
});

Route::post('/dokumen/store', [DokumenController::class, 'store'])->name('dokumen.store');
Route::get('/dokumen/fetch', [DokumenController::class, 'fetch'])->name('dokumen.fetch');
Route::get('/dokumen/fetchDokumen', [DokumenController::class, 'fetchDokumen'])->name('dokumen.fetchDokumen');

// Redirect
Route::get('/', function () {
    if (auth()->check()) {
        switch(auth()->user()->level) {
            case 1:
                return redirect()->route('admin');
            case 2:
                return redirect()->route('asesor');
            case 3:
                return redirect()->route('dashboard');
            default:
                return redirect()->route('login');
        }
    }
    return redirect()->route('login');
});

// // Admin
// Route::group(['prefix'=>'admin'], function () {
//     Route::get('/', [AdminController::class,'index'])->name('admin');
//     Route::group(["prefix" => 'prosesrpl'], function(){
//         Route::group(["prefix" => "daftar"], function(){
//             Route::get('/', [AdminController::class,'daftar'])->name('admin.daftar');
//             // Route::get('/aplikasi', [AdminController::class,'aplikasi']);
//             // Route::get('/edit', [AdminController::class,'edit']);
//         });
//         Route::group( ["prefix" => 'hasil'], function(){
//             Route::get('/', [AdminController::class,'hasil'])->name(('admin.hasil'));
//             // Route::get('/evaluasi', [AdminController::class,'evaluasi']);
//             // Route::get('/evaluasi/asesor', [AdminController::class,'asesor']);
//             // Route::get('/rekapitulasi', [AdminController::class,'rekapitulasi']);
//             // Route::get('/perolehansks', [AdminController::class,'perolehansks']);
            
//         }); 
//         Route::group(["prefix" => "asesmenlanjut"], function(){
//             Route::get('/', [AdminController::class,'asesmenlanjut'])->name('admin.asesmnenlanjut');
//             // Route::get('/aplikasi', [AdminController::class,'aplikasi']);
//             // Route::get('/edit', [AdminController::class,'edit']);
//         });
//     });


Route::group(["prefix" => "pengajuan"], function(){
    Route::get('/', [AsesorController::class, 'index'])->name('asesor1');
    Route::group(["prefix" => "asesmen"], function(){
        Route::get('/', [AsesorController::class, 'asesmen'])->name('asesor.asesmen1');
        Route::get('/evaluasi', [AsesorController::class, 'evaluasi'])->name('asesor.asesmen.evaluasi1');
    });
    Route::group(["prefix" => "asesmenlanjut"], function(){
        Route::get('/', [AsesorController::class, 'asesmenlanjut'])->name('asesor.asesmenlanjut1');
        Route::get('/soal', [AsesorController::class, 'editsoal'])->name('asesor.asesmenlanjut.soal1');
    });
    Route::group(["prefix" => "rekapitulasi"], function(){
        Route::get('/', [AsesorController::class, 'rekapitulasi'])->name('asesor.rekapitulasi1');
    });
});

//     Route::group(["prefix" => 'masterrpl'], function(){
//         Route::group(["prefix" => "petunjuk"], function(){
//             Route::get('/', [PetunjukController::class,'index']);
//         });
        
//         Route::group(["prefix" => "aplikasi"], function(){
//             Route::get('/', [AplikasiController::class,'index']);
//             Route::get('/tambah', [AplikasiController::class,'store']);
//         });
//         Route::group(["prefix" => "evaluasi"], function(){
//             Route::get('/', [EvaluasiController::class,'index']);
//         });
//     });
//     Route::get('/user', [UserController::class,'index']);
//     Route::get('/pindahan', [PindahanController::class,'index']);
//     Route::get('/pesertadidikbaru', [AdminController::class,'pesertadidikbaru'])->name('admin.pesertadidikbaru');
//     Route::get('/beasiswa', [AdminController::class,'beasiswa'])->name('admin.beasiswa');
// });


// // // Asesor
// Route::group(["prefix" => "asesor"], function(){
//     Route::get('/', [AsesorController::class, 'index'])->name('asesor');
//     Route::group(["prefix" => "asesmen"], function(){
//         Route::get('/', [AsesorController::class, 'asesmen'])->name('asesor.asesmen');
//         Route::get('/evaluasi', [AsesorController::class, 'evaluasi'])->name('asesor.asesmen.evaluasi');
//     });
//     Route::group(["prefix" => "asesmenlanjut"], function(){
//         Route::get('/', [AsesorController::class, 'asesmenlanjut'])->name('asesor.asesmenlanjut');
//         Route::get('/soal', [AsesorController::class, 'editsoal'])->name('asesor.asesmenlanjut.soal');
//     });
//     Route::group(["prefix" => "rekapitulasi"], function(){
//         Route::get('/', [AsesorController::class, 'rekapitulasi'])->name('asesor.rekapitulasi');
//     });
// });

// // User Calon Mahasiswa
// Route::get('/dashboard', function () {
//     return view('user.dashboard');
// })->middleware('auth')->name('dashboard');

// Route::get('/profil', function () {
//     return view('user.profil');
// });

// Route::group(["prefix" => "pengajuan"], function(){
//     Route::get('/', [AsesorController::class, 'index'])->name('asesor');
//     Route::group(["prefix" => "asesmen"], function(){
//         Route::get('/', [AsesorController::class, 'asesmen'])->name('asesor.asesmen');
//         Route::get('/evaluasi', [AsesorController::class, 'evaluasi'])->name('asesor.asesmen.evaluasi');
//     });
//     Route::group(["prefix" => "asesmenlanjut"], function(){
//         Route::get('/', [AsesorController::class, 'asesmenlanjut'])->name('asesor.asesmenlanjut');
//         Route::get('/soal', [AsesorController::class, 'editsoal'])->name('asesor.asesmenlanjut.soal');
//     });
//     Route::group(["prefix" => "rekapitulasi"], function(){
//         Route::get('/', [AsesorController::class, 'rekapitulasi'])->name('asesor.rekapitulasi');
//     });
// });

// Route::get('/pengajuan', function () {
//     return view('user.pengajuan');
// });

// Route::prefix('pengajuan/rpl')->group(function () {
//     Route::get('/', function () {
//         return view('user.RPL.index');
//     });
// });

// Route::prefix('pengajuan/beasiswa')->group(function () {
//     Route::get('/', function () {
//         return view('user.Beasiswa.index');
//     });
// });
