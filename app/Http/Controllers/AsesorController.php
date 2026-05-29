<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesorController extends Controller
{
    public function index() {
        $breadcrumb = (object) [
            'title' => 'Dashboard',
            'list' => ['Dashboard' , 'Home']
        ];
        $page = (object) [
            'title' => 'Daftar Asesmen para calon peserta'
        ];
        // $kategori = KategoriModel::all();

        $activeMenu = 'dashboard';

        // dd(BarangModel::select('barang_id', 'barang_kode', 'barang_nama', 'harga_jual', 'harga_beli', 'kategori_id')->with('kategori')->where('kategori_id', 2));
        // dd(BarangModel::all()->toArray());
        // dd($kategori);

        return view('asesor.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
    public function asesmen() {
        $breadcrumb = (object) [
            'title' => 'Daftar Peserta Asesmen',
            'list' => ['Asesor' , 'Asesmen']
        ];
        $page = (object) [
            'title' => 'Daftar Peserta'
        ];
        // $kategori = KategoriModel::all();

        $activeMenu = 'asesmen';

        // dd(BarangModel::select('barang_id', 'barang_kode', 'barang_nama', 'harga_jual', 'harga_beli', 'kategori_id')->with('kategori')->where('kategori_id', 2));
        // dd(BarangModel::all()->toArray());
        // dd($kategori);

        return view('asesor.asesmen.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
    public function evaluasi() {
        $breadcrumb = (object) [
            'title' => 'Daftar Mata Kuliah Peserta Asesmen',
            'list' => ['Asesor' , 'Asesmen' , 'Evaluasi Diri']
        ];
        $page = (object) [
            'title' => 'Evaluasi Diri Mahasiswa'
        ];
        // $kategori = KategoriModel::all();

        $activeMenu = 'asesmen';

        // dd(BarangModel::select('barang_id', 'barang_kode', 'barang_nama', 'harga_jual', 'harga_beli', 'kategori_id')->with('kategori')->where('kategori_id', 2));
        // dd(BarangModel::all()->toArray());
        // dd($kategori);

        return view('asesor.asesmen.evaluasi', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
    public function asesmenlanjut() {
        $breadcrumb = (object) [
            'title' => 'Daftar Peserta Asesmen Lanjut',
            'list' => ['Asesor' , 'Asesmen Lanjut']
        ];
        $page = (object) [
            'title' => 'Daftar Peserta Asesmen Lanjut'
        ];
        // $kategori = KategoriModel::all();

        $activeMenu = 'asesmenlanjut';

        // dd(BarangModel::select('barang_id', 'barang_kode', 'barang_nama', 'harga_jual', 'harga_beli', 'kategori_id')->with('kategori')->where('kategori_id', 2));
        // dd(BarangModel::all()->toArray());
        // dd($kategori);

        return view('asesor.asesmenlanjut.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
    public function editsoal() {
        $breadcrumb = (object) [
            'title' => 'Edit Soal Asesmen Lanjut',
            'list' => ['Asesor' , 'Asesmen Lanjut' , 'Edit Soal']
        ];
        $page = (object) [
            'title' => 'Edit Soal Asesmen Lanjut'
        ];
        // $kategori = KategoriModel::all();

        $activeMenu = 'asesmenlanjut';

        // dd(BarangModel::select('barang_id', 'barang_kode', 'barang_nama', 'harga_jual', 'harga_beli', 'kategori_id')->with('kategori')->where('kategori_id', 2));
        // dd(BarangModel::all()->toArray());
        // dd($kategori);

        return view('asesor.asesmenlanjut.editsoal', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
    public function rekapitulasi() {
        $breadcrumb = (object) [
            'title' => 'Daftar Peserta Rekapitulasi',
            'list' => ['Asesor' ,'Rekapitulasi']
        ];
        $page = (object) [
            'title' => 'Daftar Peserta Rekapitulasi'
        ];
        // $kategori = KategoriModel::all();

        $activeMenu = 'rekapitulasi';

        // dd(BarangModel::select('barang_id', 'barang_kode', 'barang_nama', 'harga_jual', 'harga_beli', 'kategori_id')->with('kategori')->where('kategori_id', 2));
        // dd(BarangModel::all()->toArray());
        // dd($kategori);

        return view('asesor.rekapitulasi.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
