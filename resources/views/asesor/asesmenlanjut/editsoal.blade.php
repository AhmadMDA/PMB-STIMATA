@extends('layouts.template')

@section('content')
    <div class="modal fade modal-xl" tabindex="-1" id="modal_edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Soal Asesmen Lanjut</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body p-9">


                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Edit Soal Tulis</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="text" name="company" class="form-control form-control-lg form-control-solid"
                                placeholder="" value="">
                            {{-- <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div> --}}
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Edit SoaL Praktek</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="text" name="company" class="form-control form-control-lg form-control-solid"
                                placeholder="" value="">
                            {{-- <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div> --}}
                        </div>
                        <!--end::Col-->
                    </div>
                </div>

                <div class="modal-footer">
                    {{-- <div class="row mb-7"> --}}
                    <!--begin::Label-->
                    <!--end::Label-->

                    {{-- </div> --}}
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">Kembali</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body border-top p-9">


            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">NAMA PERGURUAN TINGGI</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">STMIK PPKIA Pradnya Paramida</span>
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Program Studi </label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">S1 Teknologi Inforrmasi</span>
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Nama Calon Mahasiswa</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">Max Verstappen</span>
                </div>
                <!--end::Col-->
            </div>



            <div class="row mb-7"></div>

            <h3 class="mb-8 mt-8 text-gray-900 flex-grow-1">Daftar Mata Kuliah</h3>
            <div class="table-responsive">
                <table class="table 7 table-row-bordered table-border-dark">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-900 border-bottom border-gray-400">
                            <th>No</th>
                            <th>Kode Mata Kuliah</th>
                            <th>Nama Mata Kuliah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">MKT1-0985</td>
                            <td class="align-middle">Algoritma dan Kompleksitas</td>
                            <td class="align-middle "><button data-bs-toggle="modal" data-bs-target="#modal_edit"
                                    class="btn btn-primary btn-sm">Edit</button></td>
                        </tr>
                        <tr>
                            <td class="align-middle">2</td>
                            <td class="align-middle">MKT1-0985</td>
                            <td class="align-middle">Praktikum Algoritma dan Kompleksitas</td>
                            <td class="align-middle "><button data-bs-toggle="modal" data-bs-target="#modal_edit"
                                    class="btn btn-primary btn-sm">Edit</button></td>
                        </tr>
                        <tr>
                            <td class="align-middle">3</td>
                            <td class="align-middle">MKT1-0985</td>
                            <td class="align-middle">Sistem Basis Data</td>
                            <td class="align-middle "><button data-bs-toggle="modal" data-bs-target="#modal_edit"
                                    class="btn btn-primary btn-sm">Edit</button></td>
                        </tr>
                        <tr>
                            <td class="align-middle">4</td>
                            <td class="align-middle">MKT1-0985</td>
                            <td class="align-middle">Pemrograman Web</td>
                            <td class="align-middle "><button data-bs-toggle="modal" data-bs-target="#modal_edit"
                                    class="btn btn-primary btn-sm">Edit</button></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <a wire:navigate href="{{ route('asesor.asesmenlanjut') }}" type="reset"
                class="btn btn-light btn-active-light-primary me-2">Kembali</a>
        </div>
    </div>
@endsection
@push('style')
    @livewireStyles()
@endpush
@push('script')
    @livewireScripts()
@endpush
