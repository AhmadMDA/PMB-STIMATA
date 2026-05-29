@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body border-top p-9">
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
                            style="background-image: url( {{ asset('keen/assets/media/avatars/300-1.jpg') }})"></div>
                        <!--end::Preview existing avatar-->

                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar"
                            data-bs-original-title="Change avatar" data-kt-initialized="1">
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
                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar"
                            data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                        </span>
                        <!--end::Cancel-->

                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar"
                            data-bs-original-title="Remove avatar" data-kt-initialized="1">
                            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
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
            <!--end::Col-->
        </div>
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <a href="/admin/prosesrpl/daftar" type="reset" class="btn btn-light btn-active-light-primary me-2">Batal</a>
            <a type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</a>
        </div>
    </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
@endpush
