@extends('layouts.template')
@push('style')
    @livewireStyles
@endpush
@section('content')
    <div class="modal fade modal-xl" tabindex="-1" id="modal_edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Jadwal Asesmen Lanjut</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body p-9">


                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Edit Jadwal</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <button id="kt_td_picker_button" class="btn btn-flex flex-center btn-primary">
                                Pick date & time
                                <i class="ki-duotone ki-calendar-8 fs-2 ms-3 pe-0"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span></i>
                            </button>
                            {{-- <input type="date" name="company" class="form-control form-control-lg form-control-solid"
                                placeholder="" value=""> --}}
                            <div class="input-group" id="kt_td_picker_simple" data-td-target-input="nearest"
                                data-td-target-toggle="nearest">
                                <input id="kt_td_picker_basic_input" type="text" class="form-control"
                                    data-td-target="#kt_td_picker_basic" />
                                <span class="input-group-text" data-td-target="#kt_td_picker_basic"
                                    data-td-toggle="datetimepicker">
                                    <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </span>
                            </div>
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
        <div class="card-body">
            <div class="table-responsive">
                <table class="table  gx-7 table-row-bordered table-row-gray-{100-900}">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-900 border-bottom border-gray-400">
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Jadwal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Max Verstappen</td>
                            <td>22-08-2024</td>
                            <td><button data-bs-toggle="modal" data-bs-target="#modal_edit"
                                    class="btn btn-primary btn-sm">Edit Jadwal</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Max Verstappen</td>
                            <td>22-08-2024</td>
                            <td><button data-bs-toggle="modal" data-bs-target="#modal_edit"
                                    class="btn btn-primary btn-sm">Edit Jadwal</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Max Verstappen</td>
                            <td>22-08-2024</td>
                            <td><button data-bs-toggle="modal" data-bs-target="#modal_edit"
                                    class="btn btn-primary btn-sm">Edit Jadwal</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script></script>
@endsection
@push('script')
    @livewireScripts
    <script data-navigate-once>
        document.addEventListener('livewire:navigated', () => {

            
            new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_basic"), {
                //put your config here
            });
            new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_button"), {
                //put your config here
            });
        })
    </script>
@endpush
