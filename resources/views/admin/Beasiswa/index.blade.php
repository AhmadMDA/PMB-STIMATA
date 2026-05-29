@extends('layouts.template')
@push('style')
    @livewireStyles
@endpush
@section('content')
    <div class="modal fade modal-xl" tabindex="-1" id="modal_detail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Detail Profile</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body p-9">
                    <div class="row mb-7">
                        <!--begin::Label-->
                        {{-- <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label> --}}
                        <label class="col-lg-4 fw-semibold text-muted">Avatar</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                style="background-image: url('/keen/demo1/assets/media/svg/avatars/blank.svg')">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url( {{ asset('keen/assets/media/avatars/300-1.jpg') }})">
                                </div>
                                <!--end::Preview existing avatar-->
                            </div>
                            <!--end::Image input-->

                            <!--begin::Hint-->
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Progam Studi</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">Teknologi Informasi</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Jenjang</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">Strata 1 (Sarjana Komputer)</span>
                        </div>
                        <!--end::Col-->
                    </div>
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
                    <h3 class="mb-8 mt-8 text-gray-900 flex-grow-1">Data Pribadi</h3>
                    <div class="row mb-7">
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
                        <label class="col-lg-4 fw-semibold text-muted">Jenis Kelamin</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">Pria</span>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Status</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">Lajang</span>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Kebangsaan</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">Indonesia</span>
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

                    <h3 class="mb-8 mt-8 text-gray-900 flex-grow-1">Data Pendidikan</h3>


                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Pendidikan Terakhir</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">SMA Negeri Monaco</span>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Nama Perguruan Tinggi/Sekolah</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">STMIK PPKIA Pradnya Praba</span>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Program Studi</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">Teknologi Informasi</span>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Tahun Lulus</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">2008</span>
                        </div>
                        <!--end::Col-->
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-xl" tabindex="-1" id="modal_edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Peserta</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body p-9">

                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        {{-- <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label> --}}
                        <label class="col-lg-4 fw-semibold text-muted">Avatar</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                style="background-image: url('/keen/demo1/assets/media/svg/avatars/blank.svg')">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url( {{ asset('keen/assets/media/avatars/300-1.jpg') }})">
                                </div>
                                <!--end::Preview existing avatar-->

                                <!--begin::Label-->
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                    aria-label="Change avatar" data-bs-original-title="Change avatar"
                                    data-kt-initialized="1">
                                    <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" name="avatar_remove">
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->

                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                    aria-label="Cancel avatar" data-bs-original-title="Cancel avatar"
                                    data-kt-initialized="1">
                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </span>
                                <!--end::Cancel-->

                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                    aria-label="Remove avatar" data-bs-original-title="Remove avatar"
                                    data-kt-initialized="1">
                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->

                            <!--begin::Hint-->
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->

                    <!-- Program Studi -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Program Studi</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="program_studi"
                                class="form-control form-control-lg form-control-solid" value="Teknologi Informasi">
                        </div>
                    </div>

                    <!-- Jenjang -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Jenjang</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="jenjang" class="form-control form-control-lg form-control-solid"
                                value="Strata 1 (Sarjana Komputer)">
                        </div>
                    </div>

                    <!-- Perguruan Tinggi -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Perguruan Tinggi</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="perguruan_tinggi"
                                class="form-control form-control-lg form-control-solid"
                                value="STMIK PPKIA Pradnya Paramita">
                        </div>
                    </div>

                    <h3 class="mb-8 mt-8 text-gray-900">Data Pribadi</h3>

                    <!-- Nama Lengkap -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Nama Lengkap</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="nama_lengkap"
                                class="form-control form-control-lg form-control-solid" value="Max Verstappen">
                        </div>
                    </div>

                    <!-- Tempat / Tanggal Lahir -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Tempat / Tanggal Lahir</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="ttl" class="form-control form-control-lg form-control-solid"
                                value="Malang/22-05-2002">
                        </div>
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Jenis Kelamin</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="jenis_kelamin"
                                class="form-control form-control-lg form-control-solid" value="Pria">
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Status</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="status" class="form-control form-control-lg form-control-solid"
                                value="Lajang">
                        </div>
                    </div>

                    <!-- Kebangsaan -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Kebangsaan</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="kebangsaan"
                                class="form-control form-control-lg form-control-solid" value="Indonesia">
                        </div>
                    </div>

                    <!-- Alamat Rumah -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Alamat Rumah</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="alamat_rumah"
                                class="form-control form-control-lg form-control-solid" value="RT 4 RW 1, Desa Tunjung">
                        </div>
                    </div>

                    <!-- No Telpon -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">No Telpon</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="no_telpon"
                                class="form-control form-control-lg form-control-solid" value="089888924536">
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Email</label>
                        <div class="col-lg-8 fv-row">
                            <input type="email" name="email" class="form-control form-control-lg form-control-solid"
                                value="max@gmail.com">
                        </div>
                    </div>

                    <h3 class="mb-8 mt-8 text-gray-900">Data Pendidikan</h3>

                    <!-- Pendidikan Terakhir -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Pendidikan Terakhir</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="pendidikan_terakhir"
                                class="form-control form-control-lg form-control-solid" value="SMA Negeri Monaco">
                        </div>
                    </div>

                    <!-- Nama Perguruan Tinggi/Sekolah -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Nama Perguruan Tinggi/Sekolah</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="nama_perguruan_tinggi"
                                class="form-control form-control-lg form-control-solid" value="STMIK PPKIA Pradnya Praba">
                        </div>
                    </div>

                    <!-- Program Studi -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Program Studi</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="program_studi"
                                class="form-control form-control-lg form-control-solid" value="Teknologi Informasi">
                        </div>
                    </div>

                    <!-- Tahun Lulus -->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Tahun Lulus</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="tahun_lulus"
                                class="form-control form-control-lg form-control-solid" value="2008">
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"
                        aria-label="Close">Close</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Calon Mahasiswa Jalur Beasiswa</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table gs-7 gy-7 gx-7 table-row-bordered table-row-gray-{100-900}">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-900 border-bottom border-gray-400">
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Jurusan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">Max Verstappen</td>
                            <td class="align-middle">Sistem Informasi Bisnis</td>
                            <td class="align-middle text-center">
                                <button data-bs-toggle="modal" data-bs-target="#modal_detail" class="btn btn-primary btn-sm">Detail</button>
                                <button data-bs-toggle="modal" data-bs-target="#modal_edit" class="btn btn-dark btn-sm text-center">Edit</button>
                                <button data-bs-toggle="modal" data-bs-target="#modal_edit" class="btn btn-danger btn-sm ">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">2</td>
                            <td class="align-middle">Max Verstappen</td>
                            <td class="align-middle">Sistem Informasi Bisnis</td>
                            <td class="align-middle text-center">
                                <button data-bs-toggle="modal" data-bs-target="#modal_detail" class="btn btn-primary btn-sm">Detail</button>
                                <button data-bs-toggle="modal" data-bs-target="#modal_edit" class="btn btn-dark btn-sm text-center">Edit</button>
                                <button data-bs-toggle="modal" data-bs-target="#modal_edit" class="btn btn-danger btn-sm ">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">3</td>
                            <td class="align-middle">Max Verstappen</td>
                            <td class="align-middle">Sistem Informasi Bisnis</td>
                            <td class="align-middle text-center">
                                <button data-bs-toggle="modal" data-bs-target="#modal_detail" class="btn btn-primary btn-sm">Detail</button>
                                <button data-bs-toggle="modal" data-bs-target="#modal_edit" class="btn btn-dark btn-sm text-center">Edit</button>
                                <button data-bs-toggle="modal" data-bs-target="#modal_edit" class="btn btn-danger btn-sm ">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('script')
    @livewireScripts
@endpush
