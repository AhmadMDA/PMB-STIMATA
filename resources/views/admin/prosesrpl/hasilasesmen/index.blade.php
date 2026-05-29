@extends('layouts.template')
@push('style')
    @livewireStyles()
@endpush
@section('content')
    <div class="modal fade modal-xl" tabindex="-1" id="modal_evaluasi">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Evaluasi Diri Peserta</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body p-9">



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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">MKT1-0985</td>
                                    <td class="align-middle">Algoritma dan Kompleksitas</td>
                                    <td class="align-middle "><button data-bs-stacked-modal="#modal_asesor"
                                            class="btn btn-primary">Lihat Asesor 1</button><button href=""
                                            class="btn btn-primary ms-3">Lihat Asesor 2</button></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">2</td>
                                    <td class="align-middle">MKT1-0985</td>
                                    <td class="align-middle">Praktikum Algoritma dan Kompleksitas</td>
                                    <td class="align-middle"><button data-bs-stacked-modal="#modal_asesor"
                                            class="btn btn-primary">Lihat Asesor 1</button><button href=""
                                            class="btn btn-primary ms-3">Lihat Asesor 2</button></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">3</td>
                                    <td class="align-middle">MKT1-0985</td>
                                    <td class="align-middle">Sistem Basis Data</td>
                                    <td class="align-middle"><button data-bs-stacked-modal="#modal_asesor"
                                            class="btn btn-primary">Lihat Asesor 1</button><button href=""
                                            class="btn btn-primary ms-3">Lihat Asesor 2</button></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">4</td>
                                    <td class="align-middle">MKT1-0985</td>
                                    <td class="align-middle">Pemrograman Web</td>
                                    <td class="align-middle"><button data-bs-stacked-modal="#modal_asesor"
                                            class="btn btn-primary">Lihat Asesor 1</button><button href=""
                                            class="btn btn-primary ms-3">Lihat Asesor 2</button></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">5</td>
                                    <td class="align-middle">MKT1-0985</td>
                                    <td class="align-middle">Logika Informatika</td>
                                    <td class="align-middle"><button data-bs-stacked-modal="#modal_asesor"
                                            class="btn btn-primary">Lihat Asesor 1</button><button href=""
                                            class="btn btn-primary ms-3">Lihat Asesor 2</button></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">6</td>
                                    <td class="align-middle">MKT1-0985</td>
                                    <td class="align-middle">Algoritma dan Basis Data</td>
                                    <td class="align-middle"><button data-bs-stacked-modal="#modal_asesor"
                                            class="btn btn-primary">Lihat Asesor 1</button><button href=""
                                            class="btn btn-primary ms-3">Lihat Asesor 2</button></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"
                        aria-label="Close">Kembali</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-xl" tabindex="-1" id="modal_asesor">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Formulir Evaluasi Diri </h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
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
                                    <th class="align-middle" colspan="3">Profisiensi pengetahuan dan
                                        keterampilan saat ini</th>
                                    <th class="align-middle" colspan="4">Hasil Evaluasi Asesor</th>
                                    <th class="align-middle" rowspan="2">Bukti dokumen yang disampaikan</th>
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
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle">Sertifikat_Algoritma.pdf</td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-start">Menjelaskan apa itu efisiensi algoritma dan
                                        pentingnya analisis algoritma</td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle">Sertifikat_Algoritma.pdf</td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-start">Menjelaskan apa itu efisiensi algoritma dan
                                        pentingnya analisis algoritma</td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled
                                            class="background-primary"></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle">Sertifikat_Algoritma.pdf</td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-start">Menjelaskan apa itu efisiensi algoritma dan
                                        pentingnya analisis algoritma</td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle">Sertifikat_Algoritma.pdf</td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-start">Menjelaskan apa itu efisiensi algoritma dan
                                        pentingnya analisis algoritma</td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                    <td class="align-middle">Sertifikat_Algoritma.pdf</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"
                        aria-label="Close">Kembali</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-xl" tabindex="-1" id="modal_rekapitulasi">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Rekapitulasi Peserta</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body p-9">



                    <div class="row">
                        <div class="col">

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
                        </div>
                        <div class="col"></div>
                    </div>
                    {{-- <div class="row mb-7"></div> --}}
                    <div class="row mb-7">
                        <div class="col">
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
                        </div>
                        <div class="col">
                            <div class="row mb-7 mt-10">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Jenjang Pendidikan</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">STMIK PPKIA Pradnya Paramita </span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Program Pendidikan sebelumnya
                                </label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">S-1 Teknologi Informasi</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Jenjang KKNI yang dituju</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">KKNI 4</span>
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Kurikulum di prodi
                                    sebelumnya</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">MERDEKA 2024</span>
                                </div>
                                <!--end::Col-->
                            </div>

                        </div>
                    </div>




                    <div class="row mb-7"></div>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center align-middle border-dark">
                            <thead>
                                <tr class="fw-semibold fs-6">
                                    <th class="align-middle" rowspan="2">No</th>
                                    <th class="align-middle" rowspan="2">Kode Mata Kuliah</th>
                                    <th class="align-middle" rowspan="2">Nama Mata Kuliah</th>
                                    <th class="align-middle" colspan="2">Skor Hasil Asesmen</th>
                                    <th class="align-middle" rowspan="2">Skor rata rata asesmen</th>
                                    <th class="align-middle" rowspan="2">Keterangan</th>
                                </tr>
                                <tr class="fw-semibold fs-6">
                                    <th class="align-middle">Asesor RPL 1</th>
                                    <th class="align-middle">Asesor RPL 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle text-start">1</td>
                                    <td class="align-middle text-start">MKTI-2019</td>
                                    <td class="align-middle text-start">Algoritma dan Programming</td>
                                    <td class="align-middle text-start">A</td>
                                    <td class="align-middle text-start">B</td>
                                    <td class="align-middle text-start">A</td>
                                    <td class="align-middle text-start">keterangan</td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-start">1</td>
                                    <td class="align-middle text-start">MKTI-2019</td>
                                    <td class="align-middle text-start">Algoritma dan Programming</td>
                                    <td class="align-middle text-start">A</td>
                                    <td class="align-middle text-start">B</td>
                                    <td class="align-middle text-start">A</td>
                                    <td class="align-middle text-start">keterangan</td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-start">1</td>
                                    <td class="align-middle text-start">MKTI-2019</td>
                                    <td class="align-middle text-start">Algoritma dan Programming</td>
                                    <td class="align-middle text-start">A</td>
                                    <td class="align-middle text-start">B</td>
                                    <td class="align-middle text-start">A</td>
                                    <td class="align-middle text-start">keterangan</td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-start">1</td>
                                    <td class="align-middle text-start">MKTI-2019</td>
                                    <td class="align-middle text-start">Algoritma dan Programming</td>
                                    <td class="align-middle text-start">A</td>
                                    <td class="align-middle text-start">B</td>
                                    <td class="align-middle text-start">A</td>
                                    <td class="align-middle text-start">keterangan</td>
                                </tr>
                                <tr class="border-none">
                                    <td colspan="3" class="align-middle text-start border-none"></td>
                                    <td colspan="2" class="align-middle text-start">Total</td>
                                    <td class="align-middle text-start">A</td>
                                    <td class="align-middle text-start"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"
                        aria-label="Close">Kembali</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-xl" tabindex="-1" id="modal_perolehan">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Perolehan SKS Peserta</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body p-9">

                    <div class="row">
                        <div class="col">

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
                        </div>
                        <div class="col"></div>
                    </div>
                    {{-- <div class="row mb-7"></div> --}}
                    <div class="row mb-7">
                        <div class="col">
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
                        </div>
                        <div class="col">
                            <div class="row mb-7 mt-10">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Jenjang Pendidikan</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">STMIK PPKIA Pradnya Paramita </span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Program Pendidikan sebelumnya
                                </label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">S-1 Teknologi Informasi</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Jenjang KKNI yang dituju</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">KKNI 4</span>
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Kurikulum di prodi
                                    sebelumnya</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">MERDEKA 2024</span>
                                </div>
                                <!--end::Col-->
                            </div>

                        </div>
                    </div>




                    <div class="row mb-7"></div>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center align-middle border-dark">
                            <thead>
                                <tr class="fw-semibold fs-6">
                                    <th class="align-middle" rowspan="2">No</th>
                                    <th class="align-middle" rowspan="2">Kode Mata Kuliah</th>
                                    <th class="align-middle" rowspan="2">Nama Mata Kuliah</th>
                                    <th class="align-middle" colspan="2">Hasil Asesmen</th>
                                    <th class="align-middle" rowspan="2">Nilai Huruf</th>
                                    <th class="align-middle" rowspan="2">Status</th>
                                </tr>
                                <tr class="fw-semibold fs-6">
                                    <th class="align-middle">Transfer SKS</th>
                                    <th class="align-middle">Perolehan SKS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle text-start">1</td>
                                    <td class="align-middle text-start">MKTI-2019</td>
                                    <td class="align-middle text-start">Algoritma dan Programming</td>
                                    <td class="align-middle text-start">2</td>
                                    <td class="align-middle text-start"><input type="text" name=""
                                            id="" class="form-control" style="width: 6rem"></td>
                                    <td class="align-middle text-start">A</td>
                                    <td class="align-middle text-start"></td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-start">1</td>
                                    <td class="align-middle text-start">MKTI-2019</td>
                                    <td class="align-middle text-start">Algoritma dan Programming</td>
                                    <td class="align-middle text-start">2</td>
                                    <td class="align-middle text-start"><input type="text" name=""
                                            id="" class="form-control" style="width: 6rem"></td>
                                    <td class="align-middle text-start">A</td>
                                    <td class="align-middle text-start"></td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-start">1</td>
                                    <td class="align-middle text-start">MKTI-2019</td>
                                    <td class="align-middle text-start">Algoritma dan Programming</td>
                                    <td class="align-middle text-start">2</td>
                                    <td class="align-middle text-start"><input type="text" name=""
                                            id="" class="form-control" style="width: 6rem"></td>
                                    <td class="align-middle text-start">A</td>
                                    <td class="align-middle text-start"></td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-start">1</td>
                                    <td class="align-middle text-start">MKTI-2019</td>
                                    <td class="align-middle text-start">Algoritma dan Programming</td>
                                    <td class="align-middle text-start">2</td>
                                    <td class="align-middle text-start"><input type="text" name=""
                                            id="" class="form-control" style="width: 6rem"></td>
                                    <td class="align-middle text-start">A</td>
                                    <td class="align-middle text-start"></td>
                                </tr>


                            </tbody>
                        </table>

                    </div>

                </div>

                <div class="modal-footer">
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
        <div class="card-body">
            <div class="table-responsive">
                <table class="table gs-7 gy-7 gx-7 table-row-bordered table-row-gray-{100-900}">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-900 border-bottom border-gray-400">
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Evaluasi Diri</th>
                            <th>Rekapitulasi Asesor</th>
                            <th>Perolehan SKS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">Max Verstappen</td>
                            <td class="align-middle"><button class="btn btn-light-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal_evaluasi">Lihat Evaluasi
                                    Diri</button></td>
                            <td class="align-middle"><button class="btn btn-light-info btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal_rekapitulasi">Lihat Rekapitulasi</button>
                            </td>
                            <td class="align-middle"><button class="btn btn-light-dark btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal_perolehan">Perolehan SKS</button></td>
                        </tr>
                        <tr>
                            <td class="align-middle">2</td>
                            <td class="align-middle">Max Verstappen</td>
                            <td class="align-middle"><button class="btn btn-light-primary btn-sm">Lihat Evaluasi
                                    Diri</button></td>
                            <td class="align-middle"><button class="btn btn-light-info btn-sm">Lihat Rekapitulasi</button>
                            </td>
                            <td class="align-middle"><button class="btn btn-light-dark btn-sm">Perolehan SKS</button></td>
                        </tr>
                        <tr>
                            <td class="align-middle">3</td>
                            <td class="align-middle">Max Verstappen</td>
                            <td class="align-middle"><button class="btn btn-light-primary btn-sm">Lihat Evaluasi
                                    Diri</button></td>
                            <td class="align-middle"><button class="btn btn-light-info btn-sm">Lihat Rekapitulasi</button>
                            </td>
                            <td class="align-middle"><button class="btn btn-light-dark btn-sm">Perolehan SKS</button></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script></script>
@endsection
@push('script')
    @livewireScripts()
@endpush
