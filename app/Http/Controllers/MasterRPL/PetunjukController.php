<?php

namespace App\Http\Controllers\MasterRPL;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetunjukController extends Controller
{
    public function index() {
        $breadcrumb = (object) [
            'title' => 'Form Petunjuk',
            'list' => ['Master RPL', 'Form Petunjuk']
        ];

        $activeMenu = 'form_petunjuk';

        return view('admin.MasterRPL.petunjuk', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
