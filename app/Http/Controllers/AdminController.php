<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index() {
        $breadcrumb = (object) [
            'title' => 'Daftar Jumlah Pendaftar',
            'list' => ['Dashboard' , 'Home']
        ];
        $page = (object) [
            'title' => 'Daftar Barang yang terdaftar dalam sistem'
        ];
        // $kategori = KategoriModel::all();

        $activeMenu = 'dashboard';

        // dd(BarangModel::select('barang_id', 'barang_kode', 'barang_nama', 'harga_jual', 'harga_beli', 'kategori_id')->with('kategori')->where('kategori_id', 2));
        // dd(BarangModel::all()->toArray());
        // dd($kategori);

        return view('admin.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
    public function daftar() {
        $breadcrumb = (object) [
            'title' => 'Daftar Peserta',
            'list' => ['Proses RPL', 'Daftar Peserta']
        ];
        $page = (object) [
            'title' => 'Daftar Barang yang terdaftar dalam sistem'
        ];
        // $kategori = KategoriModel::all();

        $activeMenu = 'daftar_peserta';

        // dd(BarangModel::select('barang_id', 'barang_kode', 'barang_nama', 'harga_jual', 'harga_beli', 'kategori_id')->with('kategori')->where('kategori_id', 2));
        // dd(BarangModel::all()->toArray());
        // dd($kategori);

        return view('admin.prosesrpl.daftarpeserta.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
    
    public function hasil() {
        $breadcrumb = (object) [
            'title' => 'Hasil Asesmen',
            'list' => ['Proses RPL', 'Hasil Asesmen']
        ];
        $page = (object) [
            'title' => 'Daftar hasil asesmen calon peserta'
        ];
        // $kategori = KategoriModel::all();

        $activeMenu = 'hasil_asesmen';

        // dd(BarangModel::select('barang_id', 'barang_kode', 'barang_nama', 'harga_jual', 'harga_beli', 'kategori_id')->with('kategori')->where('kategori_id', 2));
        // dd(BarangModel::all()->toArray());
        // dd($kategori);

        return view('admin.prosesrpl.hasilasesmen.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
    public function pesertadidikbaru() {
        $breadcrumb = (object) [
            'title' => 'Daftar Peserta Didik Baru ',
            'list' => ['Peserta Didik Baru']
        ];
        $page = (object) [
            'title' => 'Daftar Calon Mahasiswa Baru'
        ];
        // $kategori = KategoriModel::all();

        $activeMenu = 'pesertadidikbaru';

        // dd(BarangModel::select('barang_id', 'barang_kode', 'barang_nama', 'harga_jual', 'harga_beli', 'kategori_id')->with('kategori')->where('kategori_id', 2));
        // dd(BarangModel::all()->toArray());
        // dd($kategori);

        return view('admin.PesertaDidikBaru.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
    public function beasiswa() {
        $breadcrumb = (object) [
            'title' => 'Daftar Peserta Jalur Beasiswa',
            'list' => ['Beasiswa']
        ];
        $page = (object) [
            'title' => 'Daftar Calon Mahasiswa Jalur Beasiswa'
        ];
        // $kategori = KategoriModel::all();

        $activeMenu = 'beasiswa';

        // dd(BarangModel::select('barang_id', 'barang_kode', 'barang_nama', 'harga_jual', 'harga_beli', 'kategori_id')->with('kategori')->where('kategori_id', 2));
        // dd(BarangModel::all()->toArray());
        // dd($kategori);

        return view('admin.Beasiswa.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
    public function asesmenlanjut() {
        $breadcrumb = (object) [
            'title' => 'Daftar Peserta Asesmen Lanjut',
            'list' => ['Proses RPL' , 'Asesmen Lanjut']
        ];
        $page = (object) [
            'title' => 'Daftar Calon Mahasiswa Asesmen lanjut'
        ];
        // $kategori = KategoriModel::all();

        $activeMenu = 'asesmenlanjut';

        // dd(BarangModel::select('barang_id', 'barang_kode', 'barang_nama', 'harga_jual', 'harga_beli', 'kategori_id')->with('kategori')->where('kategori_id', 2));
        // dd(BarangModel::all()->toArray());
        // dd($kategori);

        return view('admin.prosesrpl.asesmenlanjut.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

}
