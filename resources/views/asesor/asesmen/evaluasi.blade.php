@extends('layouts.template')

@section('content')
    <div class="modal fade modal-xl" tabindex="-1" id="modal_asesor">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Evaluasi Diri Mahasiswa</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body p-9">



                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">KODE MATA KULIAH</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">MKTI-0985 </span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-10">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">NAMA MATA KULIAH</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">Algoritma daan Kompleksitas</span>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row mb-7 mt-10">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Nama Calon Mahasiswa</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">Max Verstappen</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Nama Asesor</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">Lewis Hamilton</span>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered text-center align-middle border-dark">
                            <thead>
                                <tr class="fw-semibold fs-6">
                                    <th class="align-middle" rowspan="2">Kemampuan Akhir yang Diharapkan /
                                        Capaian Pembelajaran Mata Kuliah</th>
                                    <th class="align-middle" colspan="3">Profisiensi pengetahuan dan keterampilan
                                        saat ini</th>
                                    <th class="align-middle" colspan="4">Hasil Evaluasi Asesor</th>
                                    <th class="align-middle" rowspan="2">Bukti dokumen yang disampaikan</th>
                                    <th class="align-middle" rowspan="2">Nilai</th>
                                </tr>
                                <tr class="fw-semibold fs-6">
                                    <th class="align-middle">Sangat Baik</th>
                                    <th class="align-middle">Baik</th>
                                    <th class="align-middle">Tidak Pernah</th>
                                    <th class="align-middle">V</th>
                                    <th class="align-middle">A</th>
                                    <th class="align-middle">T</th>
                                    <th class="align-middle">M</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle text-start">Menjelaskan apa itu efisiensi algoritma dan
                                        pentingnya analisis algoritma</td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked
                                            disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked
                                            disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input"></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input"></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input"></td>
                                    <td class="align-middle"><a href=""
                                            class="text-link">Sertifikat_Algoritma.pdf</a></td>
                                    <td> <input type="text" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-start">Menjelaskan apa itu efisiensi algoritma dan
                                        pentingnya analisis algoritma</td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked
                                            disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked
                                            disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input"></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input"></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="align-middle"><a href=""
                                            class="text-link">Sertifikat_Algoritma.pdf</a></td>
                                    <td> <input type="text" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-start">Menjelaskan apa itu efisiensi algoritma dan
                                        pentingnya analisis algoritma</td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked
                                            disabled class="background-primary"></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked
                                            disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="align-middle"><a href=""
                                            class="text-link">Sertifikat_Algoritma.pdf</a></td>
                                    <td> <input type="text" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-start">Menjelaskan apa itu efisiensi algoritma dan
                                        pentingnya analisis algoritma</td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked
                                            disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked
                                            disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="align-middle"><a href=""
                                            class="text-link">Sertifikat_Algoritma.pdf</a></td>
                                    <td> <input type="text" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-start">Menjelaskan apa itu efisiensi algoritma dan
                                        pentingnya analisis algoritma</td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked
                                            disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked
                                            disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input">
                                    </td>
                                    <td class="align-middle"><a href=""
                                            class="text-link">Sertifikat_Algoritma.pdf</a></td>
                                    <td> <input type="text" class="form-control" /></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

                <div class="modal-footer">
                    {{-- <div class="row mb-7"> --}}
                    <!--begin::Label-->
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="inline-block me-4">
                        <label class="fw-semibold me-4">Asesmen Lanjut?</label>
                        <input type="checkbox" class="form-check-input" style="border: solid 1px black">

                    </div>
                    <!--end::Col-->
                    {{-- </div> --}}
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"
                        aria-label="Close">Kembali</button>
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
                <label class="col-lg-4 fw-semibold text-muted">Perguruan Tinggi</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">STMIK PPKIA Pradnya Paramita </span>
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-10">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Progam Studi</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">Teknologi Informasi</span>
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-7"></div>

            <div class="row mb-7 mt-10">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Nama Lengkap</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">Max Verstappen</span>
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Tempat / Tanggal Lahir</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">Malang/22-05-2002</span>
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Alamat Rumah</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">RT 4 RW 1, Desa Tunjung</span>
                </div>
                <!--end::Col-->
            </div>

            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">No Telpon</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">089888924536</span>
                </div>
                <!--end::Col-->
            </div>

            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Email</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">max@gmail.com</span>
                </div>
                <!--end::Col-->
            </div>


            <div class="row mb-7"></div>

            <h3 class="mb-8 mt-8 text-gray-900 flex-grow-1">Daftar Mata Kuliah</h3>
            <div class="table-responsive">
                <table class="table gs-7 gy-7 gx-7 table-row-bordered table-row-gray-{100-900}">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-900 border-bottom border-gray-400">
                            <th>No</th>
                            <th>Kode Mata Kuliah</th>
                            <th>Nama Mata Kuliah</th>
                            <th>Sudah Dinilai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">MKT1-0985</td>
                            <td class="align-middle">Algoritma dan Kompleksitas</td>
                            <td class="align-middle"><input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault" checked disabled /></td>
                            <td class="align-middle "><a href="/admin/prosesrpl/hasil/evaluasi/asesor"
                                    class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal_asesor">Nilai
                                    Evaluasi</a></td>
                        </tr>
                        <tr>
                            <td class="align-middle">2</td>
                            <td class="align-middle">MKT1-0985</td>
                            <td class="align-middle">Praktikum Algoritma dan Kompleksitas</td>
                            <td class="align-middle"><input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault" checked disabled /></td>
                            <td class="align-middle "><a href="/admin/prosesrpl/hasil/evaluasi/asesor"
                                    class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal_asesor">Nilai
                                    Evaluasi</a></td>
                        </tr>
                        <tr>
                            <td class="align-middle">3</td>
                            <td class="align-middle">MKT1-0985</td>
                            <td class="align-middle">Sistem Basis Data</td>
                            <td class="align-middle"><input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault" checked disabled /></td>
                            <td class="align-middle "><a href="/admin/prosesrpl/hasil/evaluasi/asesor"
                                    class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal_asesor">Nilai
                                    Evaluasi</a></td>
                        </tr>
                        <tr>
                            <td class="align-middle">4</td>
                            <td class="align-middle">MKT1-0985</td>
                            <td class="align-middle">Pemrograman Web</td>
                            <td class="align-middle"><input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault" checked disabled /></td>
                            <td class="align-middle "><a href="/admin/prosesrpl/hasil/evaluasi/asesor"
                                    class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal_asesor">Nilai
                                    Evaluasi</a></td>
                        </tr>
                        <tr>
                            <td class="align-middle">5</td>
                            <td class="align-middle">MKT1-0985</td>
                            <td class="align-middle">Logika Informatika</td>
                            <td class="align-middle"><input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault" disabled /></td>
                            <td class="align-middle "><a href="/admin/prosesrpl/hasil/evaluasi/asesor"
                                    class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal_asesor">Nilai
                                    Evaluasi</a></td>
                        </tr>
                        <tr>
                            <td class="align-middle">6</td>
                            <td class="align-middle">MKT1-0985</td>
                            <td class="align-middle">Algoritma dan Basis Data</td>
                            <td class="align-middle"><input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault" disabled /></td>
                            <td class="align-middle "><a href="/admin/prosesrpl/hasil/evaluasi/asesor"
                                    class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal_asesor">Nilai
                                    Evaluasi</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <a wire:navigate href="{{ route('asesor.asesmen') }}" type="reset"
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
