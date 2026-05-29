@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table gs-7 gy-7 gx-7 table-row-bordered table-row-gray-{100-900}">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-900 border-bottom border-gray-400">
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="text-center">Profil User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">Ashraf Nawaf</td>
                            <td class="align-middle">ashrafnawaf07@gmail.com</td>
                            <td class="align-middle">Admin</td>
                            <td class="align-middle text-center">
                            <img src="/images/Group 18.png" alt="Deskripsi Gambar" class="w-full h-auto">
                            </td>
                        </tr>
                        <tr>
                        <td class="align-middle">2</td>
                            <td class="align-middle">Iqbal Ramadhan</td>
                            <td class="align-middle">iqbalramdahan@gmail.com</td>
                            <td class="align-middle">Admin</td>
                            <td class="align-middle text-center">
                                <img src="/images/Group 18.png" alt="Deskripsi Gambar" class="w-full h-auto">
                            </td>
                        </tr>
                        <tr>
                        <td class="align-middle">3</td>
                            <td class="align-middle">Maulana Akbar</td>
                            <td class="align-middle">maulanaakbar@gmail.com</td>
                            <td class="align-middle">Admin</td>
                            <td class="align-middle text-center">
                                <a href="/admin/user/infouser/"><img src="/images/Group 18.png" alt="Deskripsi Gambar" class="w-full h-auto"></a> 
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-primary btn-sm mt-6 px-10">Tambah +</button>
            </div>
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
@endpush