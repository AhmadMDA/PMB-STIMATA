@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-tools">
                <a href="/admin/masterrpl/aplikasi/tambah"class="btn btn-primary btn-sm mt-6 px-10">Tambah +</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table gs-7 gy-7 gx-7 table-row-bordered table-row-gray-{100-900}">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-900 border-bottom border-gray-400">
                            <th>No</th>
                            <th>Nama Formulir</th>
                            <th>Prodi</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">Max Verstappen</td>
                            <td class="align-middle">D4</td>
                            <td class="align-middle text-center">
                                <button data-modal-target="small-modal" data-modal-toggle="small-modal" class="btn btn-dark btn-sm text-center">Edit</button>
                                <a href class="btn btn-danger btn-sm ">Non-Active</a>
                            </td>
                        </tr>
                        <tr>
                        <td class="align-middle">2</td>
                            <td class="align-middle">Max Verstappen</td>
                            <td class="align-middle">D4</td>
                            <td class="align-middle text-center">
                                <button data-modal-target="small-modal" data-modal-toggle="small-modal" class="btn btn-dark btn-sm text-center">Edit</button>
                                <a href class="btn btn-danger btn-sm ">Non-Active</a>
                            </td>
                        </tr>
                        <tr>
                        <td class="align-middle">3</td>
                            <td class="align-middle">Max Verstappen</td>
                            <td class="align-middle">D4</td>
                            <td class="align-middle text-center">
                                <button data-modal-target="small-modal" data-modal-toggle="small-modal" class="btn btn-dark btn-sm text-center">Edit</button>
                                <a href class="btn btn-danger btn-sm ">Non-Active</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Small Modal -->
    <div id="small-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Ubah Form Aplikasi
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="small-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                <div class="col-md-8">
                        <form method="POST" action="/mahasiswa">
                            @csrf
                            <div class="form-group">
                                <label>No</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label>Nama Formulir</label>
                                <input type="text" class="form-control" name="namaformulir" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label>Prodi</label>
                                <input type="text" class="form-control" name="prodi" value="{{ old('email') }}">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="small-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                    <button data-modal-hide="small-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                </div>
            </div>
        </div>
    </div>

    
    



@endsection
@push('css')
@endpush
@push('js')
@endpush
