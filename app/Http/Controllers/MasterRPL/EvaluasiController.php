<?php

namespace App\Http\Controllers\MasterRPL;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvaluasiController extends Controller
{
    public function index() {
        $breadcrumb = (object) [
            'title' => 'Form Evaluasi Diri',
            'list' => ['Master RPL', 'Form Evaluasi Diri']
        ];

        $activeMenu = 'form_evaluasi';

        return view('admin.MasterRPL.evaluasi', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
