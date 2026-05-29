<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $breadcrumb = (object) [
            'title' => 'Menu User',
            'list' => ['User']
        ];

        $activeMenu = 'user';

        return view('admin.User.index', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }

    public function store() {
        $breadcrumb = (object) [
            'title' => 'Tambah',
            'list' => ['User','Tambah']
        ];

        $activeMenu = 'tambah';

        return view('admin.User.tambahuser', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }


    public function info() {
        $breadcrumb = (object) [
            'title' => 'info',
            'list' => ['User','info']
        ];

        $activeMenu = 'userinfo';

        return view('admin.User.profiluser', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }


}
