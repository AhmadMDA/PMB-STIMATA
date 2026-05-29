@extends('layouts.template')
@section('content')

<div id = "content2" class="card card-outline card-primary">
        <div class="card-body">
            <div class="table-responsive">  
                <table class="table gs-7 gy-7 gx-7 table-row-bordered table-row-gray-{100-900}">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-900 border-bottom border-gray-400">
                            <th>No</th>
                            <th>Kode Mata Kuliah</th>
                            <th>Nama Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Nilai Huruf</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">MKTI-0985</td>
                            <td class="align-middle">Algoritma dan Kompleksitas</td>
                            <td class="align-middle">20</td>
                            <td class="align-middle">A</td>
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