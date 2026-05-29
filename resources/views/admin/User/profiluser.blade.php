@extends('layouts.template')
@section('content')

@section('title', 'Profil Diri | Max Verstappen')
@section('breadcrumb', 'Profil Diri')

    <!-- Atas -->
    <div class="card card-flush mb-9" id="kt_user_profile_panel">
        <!--begin::Hero nav-->
        <div class="card-header rounded-top bgi-size-cover h-200px" style="background-position: 100% 50%; background-image:url('{{ asset('images/bg-profil.png') }}')"></div>
        <!--end::Hero nav-->
        <!--begin::Body-->
        <div class="card-body mt-n19">
            <!--begin::Details-->
            <div class="m-0">
                <!--begin: Pic-->
                <div class="d-flex flex-stack align-items-end pb-4 mt-n19">
                    <div class="symbol symbol-125px symbol-lg-150px symbol-fixed position-relative mt-n3">
                        <img src="{{ asset('images/Max.png') }}" alt="image" class="border border-white border-4" style="border-radius: 20px">
                        <div class="position-absolute translate-middle bottom-0 start-100 ms-n1 mb-9 bg-success rounded-circle h-15px w-15px"></div>
                    </div>
                    
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="d-flex flex-stack flex-wrap align-items-end">
                    <!--begin::User-->
                    <div class="d-flex flex-column">
                        <!--begin::Name-->
                        <div class="d-flex align-items-center mb-2">
                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-1">Max Verstappen</a>
                            <a href="#" class="" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Account is verified" data-bs-original-title="Account is verified" data-kt-initialized="1">
                                <i class="ki-duotone ki-verify fs-1 text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </div>
                        <!--end::Name-->
                        <!--begin::Text-->
                        <span class="fw-bold text-gray-600 fs-6 mb-2 d-block">S1 - Teknologi Informasi</span>
                        <!--end::Text-->
                    </div>
                    <!--end::User-->
                    <!--begin::Actions-->
                    <div class="d-flex">
                        <a href="/pengajuan/rpl" class="btn-sm btn-purple me-3" id="kt_drawer_chat_toggle">Rekognisi Pembelajaran Lampau</a>
                        <a href="/pengajuan/beasiswa" class="btn-sm btn-green me-3" id="kt_drawer_chat_toggle">Beasiswa</a>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Details-->
        </div>
    </div>

    @php
    $navItems = [
        ['text' => 'Data Pribadi', 'href' => '#', 'target' => '#content1', 'active' => true],
        ['text' => 'Latar Belakang Pendidikan', 'href' => '#', 'target' => '#content2', 'active' => false],
        ['text' => 'Data Orang Tua / Wali', 'href' => '#', 'target' => '#content3', 'active' => false],
        ['text' => 'Data Lain', 'href' => '#', 'target' => '#content4', 'active' => false],
    ];

    @endphp
    
    <!-- Navigasi -->
    <x-horizontal-navbar 
        :items="$navItems" 
        active-background-color="bg-white" 
        active-text-color="text-black"
        :default-active-item="0"
    />

    <!-- Bawah -->
    <!-- Data Pribadi -->
    <div id="content1" class="content-section">
        <x-card :header="'Ubah Data Pribadi'">
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form">
                    <!--begin::Card body-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Pas Foto Berwarna</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px" style="background-image:url('{{ asset('images/Max.png') }}')"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="ki-duotone ki-pencil fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Tipe file: png, jpg, jpeg</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama Lengkap</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Nama Awal" value="Max" />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Nama Akhir" value="Verstappen" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Jenis Kelamin</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="kelamin" aria-label="Pilih Jenis Kelamin" data-control="select2" data-placeholder="Pilih Jenis Kelamin.." class="form-select form-select-solid form-select-lg">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Tempat, Tangggal Lahir</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="tempatlahir" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Tempat Lahir" value="Hasselt, Belgia" />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <div class="input-group mb-5">
                                        <input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_daterangepicker_3"/>
                                        <span class="input-group-text border border-0" id="basic-addon2">
                                            <i class="ki-duotone ki-calendar">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                    </div>
                                    
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Agama</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="agama" aria-label="Pilih Agama" data-control="select2" data-placeholder="Pilih Agama.." class="form-select form-select-solid form-select-lg">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kewarganegaraan</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="negara" aria-label="Pilih Kewarganegaraan" data-control="select2" data-placeholder="Pilih Kewarganegaraan.." class="form-select form-select-solid form-select-lg">
                                <option value="WNI">WNI (Warga Negara Indonesia)</option>
                                <option value="WNA">WNI (Warga Negara Asing)</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Input group-->
                    <!-- KTP -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Nomor KTP</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Pastikan nomor KTP sudah sesuai">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="tel" name="ktp" class="form-control form-control-lg form-control-solid" placeholder="Nomor KTP" value="35097*********" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!-- Alamat -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Alamat</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="alamat" class="form-control form-control-lg form-control-solid" placeholder="Alamat" value="Jln. Merdeka No 45, Belanda" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!-- Email-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" value="hatelando@gmail.com" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!-- Telepon -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Nomor Telepon</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Nomor telepon harus aktif">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="tel" name="telepon" class="form-control form-control-lg form-control-solid" placeholder="Nomor Telepon" value="082214909909" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!-- WhatsApp -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Nomor WhatsApp</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Nomor whatsapp boleh berbeda dengan telepon">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="tel" name="whatsapp" class="form-control form-control-lg form-control-solid" placeholder="Nomor WhatsApp" value="082214909909" />
                        </div>
                        <!--end::Col-->
                    </div>

                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Batal</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
        </x-card>

        <x-card :header="'Ubah Metode Login'">
            <!--begin::Email Address-->
            <div class="d-flex flex-wrap align-items-center">
                <!--begin::Label-->
                <div id="kt_signin_email">
                    <div class="fs-6 fw-bold mb-1">Email</div>
                    <div class="fw-semibold text-gray-600">hatelando@gmail.com</div>
                </div>
                <!--end::Label-->
                <!--begin::Edit-->
                <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                    <!--begin::Form-->
                    <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                        <div class="row mb-6">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="fv-row mb-0">
                                    <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Masukkan Email Baru</label>
                                    <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="hatelando@gmail.com" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-0">
                                    <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Konfirmasi Password</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
                            <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-500 btn-active-light-primary px-6">Batal</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Edit-->
                <!--begin::Action-->
                <div id="kt_signin_email_button" class="ms-auto">
                    <button class="btn btn-light btn-active-light-primary">Ubah Email</button>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Email Address-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->
            <!--begin::Password-->
            <div class="d-flex flex-wrap align-items-center mb-10">
                <!--begin::Label-->
                <div id="kt_signin_password">
                    <div class="fs-6 fw-bold mb-1">Password</div>
                    <div class="fw-semibold text-gray-600">************</div>
                </div>
                <!--end::Label-->
                <!--begin::Edit-->
                <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                    <!--begin::Form-->
                    <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                        <div class="row mb-1">
                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Password Sekarang</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="newpassword" class="form-label fs-6 fw-bold mb-3">Password Baru</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Konfirmasi Password Baru</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
                                </div>
                            </div>
                        </div>
                        <div class="form-text mb-5">Minimal 8 karakter dengan kombinasi huruf, angka & simbol!</div>
                        <div class="d-flex">
                            <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
                            <button id="kt_password_cancel" type="button" class="btn btn-color-gray-500 btn-active-light-primary px-6">Batal</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Edit-->
                <!--begin::Action-->
                <div id="kt_signin_password_button" class="ms-auto">
                    <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Password-->
        </x-card>
    </div>
    
    <!-- Latar Belakang Pendidikan -->
    <div id="content2" class="content-section d-none">
        <x-card :header="'Ubah Latar Belakang pendidikan'">
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form">
                    <!-- Nama Sekolah -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama Sekolah</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <select name="jenis-sekolah" aria-label="Pilih Jenis Sekolah" data-control="select2" data-placeholder="Pilih Jenis Sekolah.." class="form-select form-select-solid form-select-lg">
                                        <option value="SMK">SMK (Sekolah Menengah Kejuruan)</option>
                                        <option value="SMA">SMA (Sekolah Menengah Atas)</option>
                                        <option value="MA">MA (Madrasah Aliyah)</option>
                                    </select>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="sekolah" class="form-control form-control-lg form-control-solid" placeholder="Sekolah" value="Negeri 5 Hasselt" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!-- Tahun Lulus -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Tahun Lulus</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="lulus-sekolah" aria-label="Pilih Tahun Lulus" data-control="select2" data-placeholder="Pilih Tahun Lulus.." class="form-select form-select-solid form-select-lg">
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!-- Asal Perguruan Tinggi -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Asal Perguruan Tinggi</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="asal-pt" class="form-control form-control-lg form-control-solid" placeholder="Asal Perguruan Tinggi" value="Institut Teknologi Belanda" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!-- Program Studi Sebelumnya -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Program Studi Sebelumnya</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="prodi-sebelumnya" class="form-control form-control-lg form-control-solid" placeholder="Program Studi Sebelumnya" value="S1 - Teknik Informatika" />
                        </div>
                        <!--end::Col-->
                    </div>

                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Batal</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
        </x-card>
    </div>

    <!-- Data Orang Tua / Wali -->
    <div id="content3" class="content-section d-none">
        <x-card :header="'Ubah Data Orang Tua / Wali'">
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form">
                    <!-- Nama Ayah -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Nama Ayah</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="ayah" class="form-control form-control-lg form-control-solid" placeholder="Nama Ayah" value="Joe Verstappen" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!-- Nama Ibu -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Nama Ibu</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="ibu" class="form-control form-control-lg form-control-solid" placeholder="Nama Ibu" value="Sophie Kumpen" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!-- Penerima Kartu Perlindungan Sosial (KPS) -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Penerima Kartu Perlindungan Sosial (KPS)</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="kps" aria-label="Pilih Penerimaan Kartu" data-control="select2" data-placeholder="Pilih Penerimaan Kartu.." class="form-select form-select-solid form-select-lg">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!-- Jenis Tinggal Selama Kuliah -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Jenis Tinggal Selama Kuliah</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="kps" aria-label="Pilih Jenis Tinggal" data-control="select2" data-placeholder="Pilih Jenis Tinggal.." class="form-select form-select-solid form-select-lg">
                                <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                                <option value="Bersama Wali">Bersama Wali</option>
                                <option value="Kost">Kost</option>
                                <option value="Asrama">Asrama</option>
                                <option value="Panti Asuhan">Panti Asuhan</option>
                                <option value="Pondok Pesantren">Pondok Pesantren</option>
                            </select>
                        </div>
                    </div>
                    
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Batal</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
        </x-card>
    </div>

    <!-- Data Lain -->
    <div id="content4" class="content-section d-none">
        <x-card :header="'Ubah Data Lain'">
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form">
                    <!-- Upload Foto KTP -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Upload Foto KTP</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper" style="width:323px; height: 204px; background-image:url('{{ asset('images/ktp.png') }}')"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="ki-duotone ki-pencil fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Tipe file: png, jpg, jpeg</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!-- Alat Transportasi -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Alat Transportasi</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="kps" aria-label="Pilih Alat Transportasi" data-control="select2" data-placeholder="Pilih Alat Transportasi.." class="form-select form-select-solid form-select-lg">
                                <option value="Angkutan/Bus Umum">Angkutan/Bus Umum</option>
                                <option value="Ojek">Ojek</option>
                                <option value="Sepeda Motor">Sepeda Motor</option>
                                <option value="Mobil Pribadi">Mobil Pribadi</option>
                                <option value="Sepeda Motor">Sepeda Motor</option>
                                <option value="Sepeda">Sepeda</option>
                                <option value="Jalan Kaki">Jalan Kaki</option>
                            </select>
                        </div>
                    </div>
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Batal</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
        </x-card>
    </div>

    <script>
        $("#kt_daterangepicker_3").daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            maxYear: parseInt(moment().format("YYYY"), 12),
            locale: {
                format: 'DD MMMM YYYY',
                monthNames: [
                    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                ],
                daysOfWeek: [
                    "Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"
                ]
            }
        });
    </script>

@endsection