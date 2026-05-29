<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PindahanController extends Controller
{
    public function index() {
        $breadcrumb = (object) [
            'title' => 'Pindahan/Alih Jenjang',
            'list' => ['Pindahan/Alih Jenjang']
        ];

        $activeMenu = 'pindahan';

        return view('admin.Pindahan.index', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
