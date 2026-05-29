@extends('layouts.template')
@section('content')
@php
    $navItems = [
        ['text' => 'Daftar Mahasiswa', 'href' => '#', 'target' => '#content1', 'active' => true],
        ['text' => 'Transkrip Nilai', 'href' => '/', 'target' => '#content2', 'active' => false],
    ];

    @endphp
    
    <!-- Navigasi -->
    <x-horizontal-navbar 
        :items="$navItems" 
        active-background-color="bg-white" 
        active-text-color="text-black"
        :default-active-item="0"/>

    <div id = "content1" class="card card-outline card-primary">
        <div class="card-body">
            <div class="table-responsive">  
                <table class="table gs-7 gy-7 gx-7 table-row-bordered table-row-gray-{100-900}">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-900 border-bottom border-gray-400">
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Status</th>
                            <th>Asesor 1</th>
                            <th>Asesor 2</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">Max Verstappen</td>
                            <td class="align-middle"><span class="badge badge-light-success badge-lg">Terdaftar</span></td>
                            <td class="align-middle">Valentino Rossi</td>
                            <td class="align-middle">Marc Marques</td>
                            <td class="align-middle text-center">
                                <a href="/admin/prosesrpl/daftar/edit" class="btn btn-dark btn-sm text-center" >Edit</a>
                                <a href="/admin/prosesrpl/daftar/edit" class="btn btn-danger btn-sm ">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">2</td>
                            <td class="align-middle">Max Verstappen</td>
                            <td class="align-middle"><span class="badge badge-light-primary badge-lg">Diterima</span></td>
                            <td class="align-middle">Valentino Rossi</td>
                            <td class="align-middle">Marc Marques</td>
                            <td class="align-middle text-center">
                                <a href="/admin/prosesrpl/daftar/edit" class="btn btn-dark btn-sm text-center" >Edit</a>
                                <a href="/admin/prosesrpl/daftar/edit" class="btn btn-danger btn-sm ">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">3</td>
                            <td class="align-middle">Max Verstappen</td>
                            <td class="align-middle"><span class="badge badge-light-warning badge-lg">Asesmen</span></td>
                            <td class="align-middle">Valentino Rossi</td>
                            <td class="align-middle">Marc Marques</td>
                            <td class="align-middle text-center">
                                <a href="/admin/prosesrpl/daftar/edit" class="btn btn-dark btn-sm text-center" >Edit</a>
                                <a href="/admin/prosesrpl/daftar/edit" class="btn btn-danger btn-sm ">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
@push('css')
@endpush
@push('js')
@endpush