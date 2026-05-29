@extends('layouts.template')
@push('style')
    @livewireStyles()
@endpush
@section('content')
    <div class="modal fade modal-xl" tabindex="-1" id="modal_rekapitulasi">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Rekapitulasi Peserta</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body p-9">
                    {{-- <div class="card-body border-top p-9"> --}}
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
                                    <label class="col-lg-4 fw-semibold text-muted">Program Pendidikan sebelumnya </label>
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
                                    <label class="col-lg-4 fw-semibold text-muted">Kurikulum di prodi sebelumnya</label>
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
                                        <th class="align-middle">No</th>
                                        <th class="align-middle">Kode Mata Kuliah</th>
                                        <th class="align-middle">Nama Mata Kuliah</th>
                                        <th class="align-middle">Skor Hasil Asesmen</th>
                                        <th class="align-middle">Skor rata rata asesmen</th>
                                        <th class="align-middle">Keterangan</th>
                                    </tr>
                                    {{-- <tr class="fw-semibold fs-6">
                                        <th class="align-middle">Asesor RPL 1</th>
                                        <th class="align-middle">Asesor RPL 2</th>
                                    </tr> --}}
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle text-start">1</td>
                                        <td class="align-middle text-start">MKTI-2019</td>
                                        <td class="align-middle text-start">Algoritma dan Programming</td>
                                        <td class="align-middle text-start">A</td>
                                        <td class="align-middle text-start"> <input type="text" name="company" class="form-control form-control-lg form-control-solid"
                                placeholder="Masukan Nilai" value=""></td>
                                        <td class="align-middle text-start">keterangan</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle text-start">1</td>
                                        <td class="align-middle text-start">MKTI-2019</td>
                                        <td class="align-middle text-start">Algoritma dan Programming</td>
                                        <td class="align-middle text-start">A</td>
                                        <td class="align-middle text-start"> <input type="text" name="company" class="form-control form-control-lg form-control-solid"
                                placeholder="Masukan Nilai" value=""></td>
                                        <td class="align-middle text-start">keterangan</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle text-start">1</td>
                                        <td class="align-middle text-start">MKTI-2019</td>
                                        <td class="align-middle text-start">Algoritma dan Programming</td>
                                        <td class="align-middle text-start">A</td>
                                        <td class="align-middle text-start"> <input type="text" name="company" class="form-control form-control-lg form-control-solid"
                                placeholder="Masukan Nilai" value=""></td>
                                        <td class="align-middle text-start">keterangan</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle text-start">1</td>
                                        <td class="align-middle text-start">MKTI-2019</td>
                                        <td class="align-middle text-start">Algoritma dan Programming</td>
                                        <td class="align-middle text-start">A</td>
                                        <td class="align-middle text-start"> <input type="text" name="company" class="form-control form-control-lg form-control-solid"
                                placeholder="Masukan Nilai" value=""></td>
                                        <td class="align-middle text-start">keterangan</td>
                                    </tr>
                                    <tr class="border-none">
                                        <td colspan="3" class="align-middle text-start border-none"></td>
                                        <td class="align-middle text-start">Total</td>
                                        <td class="align-middle text-start">A</td>
                                        <td class="align-middle text-start"></td>
                                    </tr>
            
                                </tbody>
                            </table>
                        </div>
                    {{-- </div> --}}
                    
                </div>

                <div class="modal-footer">
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
        <div class="card-body">
            <div class="table-responsive">
                <table class="table  gx-7 table-row-bordered table-row-gray-{100-900}">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-900 border-bottom border-gray-400">
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Max Verstappen</td>
                            <td><button data-bs-toggle="modal" data-bs-target="#modal_rekapitulasi"  class="btn btn-primary btn-sm">Rekap Nilai</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Max Verstappen</td>
                            <td><button data-bs-toggle="modal" data-bs-target="#modal_rekapitulasi"  class="btn btn-primary btn-sm">Rekap Nilai</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Max Verstappen</td>
                            <td><button data-bs-toggle="modal" data-bs-target="#modal_rekapitulasi"  class="btn btn-primary btn-sm">Rekap Nilai</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('script')
    @livewireScripts()
@endpush
