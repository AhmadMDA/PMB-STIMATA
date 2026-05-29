@extends('layouts.template')
@push('style')
    @livewireStyles
@endpush
@section('content')
    <div class="modal fade modal-xl" tabindex="-1" id="modal_aplikasi">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Formulir Aplikasi RPL</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body p-9">


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
                    <h3 class="mb-8 mt-8 text-gray-900 flex-grow-1">Daftar Mata Kuliah</h3>
                    <div class="table-responsive">
                        <table class="table gs-7 gy-7 gx-7 table-row-bordered table-row-gray-{100-900}">
                            <thead>
                                <tr class="fw-semibold fs-6 text-gray-900 border-bottom border-gray-400">
                                    <th>No</th>
                                    <th>Kode Mata Kuliah</th>
                                    <th>Nama Mata Kuliah</th>
                                    <th>SKS</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">MKT1-0985</td>
                                    <td class="align-middle">Algoritma dan Kompleksitas</td>
                                    <td class="align-middle">2</td>
                                    <td class="align-middle">Transfer SKS</td>
                                </tr>
                                <tr>
                                    <td class="align-middle">2</td>
                                    <td class="align-middle">MKT1-0985</td>
                                    <td class="align-middle">Praktikum Algoritma dan Kompleksitas</td>
                                    <td class="align-middle">2</td>
                                    <td class="align-middle">Perolehan SKS</td>
                                </tr>
                                <tr>
                                    <td class="align-middle">3</td>
                                    <td class="align-middle">MKT1-0985</td>
                                    <td class="align-middle">Sistem Basis Data</td>
                                    <td class="align-middle">2</td>
                                    <td class="align-middle">Transfer SKS</td>
                                </tr>
                                <tr>
                                    <td class="align-middle">4</td>
                                    <td class="align-middle">MKT1-0985</td>
                                    <td class="align-middle">Pemrograman Web</td>
                                    <td class="align-middle">2</td>
                                    <td class="align-middle">Perolehan SKS</td>
                                </tr>
                                <tr>
                                    <td class="align-middle">5</td>
                                    <td class="align-middle">MKT1-0985</td>
                                    <td class="align-middle">Logika Informatika</td>
                                    <td class="align-middle">2</td>
                                    <td class="align-middle">Perolehan SKS</td>
                                </tr>
                                <tr>
                                    <td class="align-middle">6</td>
                                    <td class="align-middle">MKT1-0985</td>
                                    <td class="align-middle">Algoritma dan Basis Data</td>
                                    <td class="align-middle">2</td>
                                    <td class="align-middle">Perolehan SKS</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"
                        aria-label="Close">Close</button>
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

                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">Max Smith</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Status</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="country" aria-label="Select a Country" data-control="select2"
                                data-placeholder="Pilih Status...."
                                class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Pilih Status</option>
                                <option value="AF">Mendaftar</option>
                                <option value="AX">Asesmen</option>
                                <option value="AL">Diterima</option>
                                <option value="DZ">Asesmen Lanjut</option>
                                <option value="AS">Rekapitulasi</option>
                                <option value="AD">Ditolak</option>
                            </select>
                        </div>

                    </div>
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Asesor </label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="country" aria-label="Select a Country" data-control="select2"
                                data-placeholder="Pilih Asesor 1...."
                                class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Pilih Asesor 2</option>
                                <option value="AF">Budi Santoso</option>
                                <option value="AX">Rina Maharani</option>
                                <option value="AL">Andi Wijaya</option>
                                <option value="DZ">Siti Nurhaliza</option>
                                <option value="AS">Joko Susilo</option>
                                <option value="AD">Dewi Anggraini</option>
                                <option value="AO">Hendra Pratama</option>
                                <option value="AI">Agus Suryanto</option>
                                <option value="AG">Fauzi Ramadhan</option>
                                <option value="AR">Tuti Handayani</option>
                                <option value="AM">Bayu Saputra</option>
                                <option value="AW">Wulan Kartika</option>
                                <option value="AU">Doni Kurniawan</option>
                                <option value="AT">Intan Permata</option>
                                <option value="AZ">Rahmat Hidayat</option>
                                <option value="BS">Farah Ayu</option>
                                <option value="BH">Aditya Nugroho</option>
                                <option value="BD">Susi Susanti</option>
                                <option value="BB">Eko Wahyudi</option>
                                <option value="BY">Lestari Dewi</option>
                                <option value="BE">Rizki Maulana</option>
                                <option value="BZ">Ahmad Fauzan</option>
                                <option value="BT">Ratna Dewi</option>
                                <option value="BO">Slamet Riyadi</option>
                                <option value="BR">Fitri Yulianti</option>

                                <option value="AD">Ditolak</option>
                            </select>
                        </div>

                    </div>
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Asesor 2</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="country" aria-label="Select a Country" data-control="select2"
                                data-placeholder="Pilih Asesor 2...."
                                class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Pilih Asesor 2</option>
                                <option value="AF">Budi Santoso</option>
                                <option value="AX">Rina Maharani</option>
                                <option value="AL">Andi Wijaya</option>
                                <option value="DZ">Siti Nurhaliza</option>
                                <option value="AS">Joko Susilo</option>
                                <option value="AD">Dewi Anggraini</option>
                                <option value="AO">Hendra Pratama</option>
                                <option value="AI">Agus Suryanto</option>
                                <option value="AG">Fauzi Ramadhan</option>
                                <option value="AR">Tuti Handayani</option>
                                <option value="AM">Bayu Saputra</option>
                                <option value="AW">Wulan Kartika</option>
                                <option value="AU">Doni Kurniawan</option>
                                <option value="AT">Intan Permata</option>
                                <option value="AZ">Rahmat Hidayat</option>
                                <option value="BS">Farah Ayu</option>
                                <option value="BH">Aditya Nugroho</option>
                                <option value="BD">Susi Susanti</option>
                                <option value="BB">Eko Wahyudi</option>
                                <option value="BY">Lestari Dewi</option>
                                <option value="BE">Rizki Maulana</option>
                                <option value="BZ">Ahmad Fauzan</option>
                                <option value="BT">Ratna Dewi</option>
                                <option value="BO">Slamet Riyadi</option>
                                <option value="BR">Fitri Yulianti</option>

                                <option value="AD">Ditolak</option>
                            </select>
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
            <h3 class="card-title">Calon Mahasiswa Rekognisi Pembelajaran Lampau</h3>
            <div class="card-tools"></div>
        </div>
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
                            <th>Aplikasi</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">Max Verstappen</td>
                            <td class="align-middle"><span class="badge badge-light-success badge-lg">Terdaftar</span>
                            </td>
                            <td class="align-middle">Valentino Rossi</td>
                            <td class="align-middle">Marc Marques</td>
                            <td class="align-middle"><button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal_aplikasi">Lihat Detail</button></td>
                            <td class="align-middle text-center">
                                <button class="btn btn-dark btn-sm text-center" data-bs-toggle="modal"
                                    data-bs-target="#modal_edit">Edit</button>
                                <button class="btn btn-danger btn-sm ">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">2</td>
                            <td class="align-middle">Max Verstappen</td>
                            <td class="align-middle"><span class="badge badge-light-primary badge-lg">Diterima</span></td>
                            <td class="align-middle">Valentino Rossi</td>
                            <td class="align-middle">Marc Marques</td>
                            <td class="align-middle"><button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal_aplikasi">Lihat Detail</button></td>
                            <td class="align-middle text-center">
                                <a class="btn btn-dark btn-sm text-center" data-bs-toggle="modal"
                                    data-bs-target="#modal_edit">Edit</a>
                                <a class="btn btn-danger btn-sm ">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">3</td>
                            <td class="align-middle">Max Verstappen</td>
                            <td class="align-middle"><span class="badge badge-light-warning badge-lg">Asesmen</span></td>
                            <td class="align-middle">Valentino Rossi</td>
                            <td class="align-middle">Marc Marques</td>
                            <td class="align-middle"><button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal_aplikasi">Lihat Detail</button></td>
                            <td class="align-middle text-center">
                                <a class="btn btn-dark btn-sm text-center" data-bs-toggle="modal"
                                    data-bs-target="#modal_edit">Edit</a>
                                <a class="btn btn-danger btn-sm ">Hapus</a>
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
