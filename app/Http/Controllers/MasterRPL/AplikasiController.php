<?php

namespace App\Http\Controllers\MasterRPL;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AplikasiController extends Controller
{
    public function index() {
        $breadcrumb = (object) [
            'title' => 'Form Aplikasi',
            'list' => ['Master RPL', 'Form Aplikasi']
        ];

        $activeMenu = 'form_aplikasi';

        return view('admin.MasterRPL.aplikasi', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }

    public function store() {
        $breadcrumb = (object) [
            'title' => 'Form Tambah',
            'list' => ['Master RPL', 'Form Aplikasi','Form Tambah']
        ];

        $activeMenu = 'form_tambah';

        return view('admin.MasterRPL.tambah', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
