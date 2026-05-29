@extends('layouts.user-template')
@section('content')

@section('title')
    Beasiswa | {{ Auth::user()->name }}
@endsection
@section('breadcrumb', 'Beasiswa')

@section('content')
    <style>
        .btn-upload {
            color: white;
            border-radius: 0.375rem 0 0 0.375rem;
            border-right: none;
        }

        .file-name {
            background-color: #f8f9fa;
            border-radius: 0 0.375rem 0.375rem 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .custom-select {
            appearance: none;
            padding: 5px 30px 5px 10px;
            border-radius: 15px;
            font-size: 14px;
            font-weight: bold;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E") no-repeat right 8px center / 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            width: auto;
            min-width: 150px;
            max-width: 200px;
            height: auto;
            min-height: 22px;
            padding: 2px 30px 2px 10px;
            line-height: 18px; 
        }
        .custom-select:focus { outline: none; box-shadow: 0 0 0 2px rgba(0,123,255,.25); }
        .custom-select.ijazah { border: 1px solid #FF8F00; background-color: #FFF7E9; color: #FF8F00; }
        .custom-select.transkip { border: 1px solid #4ECD79; background-color: #F0FDF9; color: #4ECD79; }
        .custom-select.sertifikat { border: 1px solid #5B8CFF; background-color: #E9F3FF; color: #5B8CFF; }
        .custom-select.lain { border: 1px solid #9D6FED; background-color: #F8F5FF; color: #9D6FED; }
        .custom-select option {
            font-size: 14px;
            padding: 5px 10px;
        }
    </style>
    
    @php
    $navItems = [
        ['text' => 'Petunjuk', 'href' => '#', 'target' => '#content1', 'active' => true],
        ['text' => 'Profil Diri', 'href' => '#', 'target' => '#content2', 'active' => false],
        ['text' => 'Bukti Pembayaran', 'href' => '#', 'target' => '#content3', 'active' => false],
        ['text' => 'Dokumen Pelengkap', 'href' => '#', 'target' => '#content4', 'active' => false],
    ];

    @endphp

    <x-horizontal-navbar 
        :items="$navItems" 
        active-background-color="bg-primary" 
        active-text-color="text-white"
        :default-active-item="0"
    />

    <!-- Content 1 -->
    <div id="content1" class="content-section">
        <x-card :header="'Petunjuk'">
            <ol>
                <li>Mengisi Pendaftaran mahasiswa baru secara online melalui url: <a href="http://bit.ly/maba_stimata" target="_blank">bit.ly/maba_stimata</a></li>
                <li>Download beberapa formulir berikut:
                    <ul>
                        <li>Prodi TI >> Formulir Aplikasi (<a href="#">klik disini</a>), Formulir Assesmen Mandiri (<a href="#">klik disini</a>), dan Formulir Riwayat Hidup (<a href="#">klik disini</a>);</li>
                        <li>Prodi SI >> Formulir Aplikasi (<a href="#">klik disini</a>), Formulir Assesmen Mandiri (<a href="#">klik disini</a>), dan Formulir Riwayat Hidup (<a href="#">klik disini</a>);</li>
                    </ul>
                </li>
                <li>Isi setiap formulir dengan sejujurnya dan selengkapnya;</li>
                <li>Kirim formulir ke email <a href="mailto:pmb@stimata.ac.id">pmb@stimata.ac.id</a> dengan judul “PMB RPL – nama anda” atau wa ke 087730003828</li>
            </ol>
            <p><strong>Keterangan:</strong></p>
            <ul>
                <li>Formulir aplikasi adalah formulir berisi biodata secara umum;</li>
                <li>Formulir Assesmen mandiri adalah formulir penetapan kemampuan pengetahuan, ketrampilan dan keahlian sesuai dengan riwayat hidup disertai dengan bukti-bukti (transkrip nilai, sertifikat, pengalaman kerja, dll);</li>
                <li>Formulir Riwayat Hidup berisi data pendidikan, pelatihan, sertifikasi dan pengalaman kerja anda.</li>
            </ul>
        </x-card>

        <div class="d-flex justify-content-end mt-5">
            <button type="submit" class="btn btn-primary" id="nextButton">Berikutnya</button>
        </div>
    </div>

    <!-- Content 2 -->
    <div id="content2" class="content-section d-none">
        <x-card :header="'Profil Diri'">
            <div class="row mb-0">
                <div class="col-md-6 mb-15 mb-xl-0 pe-5">
                    <h3 class="mb-5 fw-bolder">Data Pribadi</h3>
                    <div class="py-2">
                        <p class="my-0 fs-4 fw-bold">Nama Lengkap</p>
                        <p class="my-0 fs-5 fw-bold text-gray-600">Max Verstappen</p>
                    </div>
                    <div class="py-2">
                        <p class="my-0 fs-4 fw-bold">Tempat / Tanggal Lahir</p>
                        <p class="my-0 fs-5 fw-bold text-gray-600">Hasselt / 30 September 1997</p>
                    </div>
                    <div class="py-2">
                        <p class="my-0 fs-4 fw-bold">Jenis Kelamin</p>
                        <p class="my-0 fs-5 fw-bold text-gray-600">Pria</p>
                    </div>
                    <div class="py-2">
                        <p class="my-0 fs-4 fw-bold">Kebangsaan</p>
                        <p class="my-0 fs-5 fw-bold text-gray-600">WNA (Warga Negara Asing)</p>
                    </div>
                    <div class="py-2">
                        <p class="my-0 fs-4 fw-bold">Alamat Rumah</p>
                        <p class="my-0 fs-5 fw-bold text-gray-600">Jln. Merdeka No 45, Belanda</p>
                    </div>
                    <div class="py-2">
                        <p class="my-0 fs-4 fw-bold">Nomor Telepon</p>
                        <p class="my-0 fs-5 fw-bold text-gray-600">082214909090</p>
                    </div>
                    <div class="py-2">
                        <p class="my-0 fs-4 fw-bold">Email</p>
                        <p class="my-0 fs-5 fw-bold text-gray-600">hatelando@gmail.com</p>
                    </div>
                </div>
                

                <div class="col-md-6 mb-15 mb-xl-0 pe-5">
                    <h3 class="mb-5 fw-bold">Data Pendidikan</h3>
                    <div class="py-2">
                        <p class="my-0 fs-4 fw-bold">Pendidikan Terakhir</p>
                        <p class="my-0 fs-5 fw-bold text-gray-600">SMK (Sekolah Menengah Kejuruan)</p>
                    </div>
                    <div class="py-2">
                        <p class="my-0 fs-4 fw-bold">Nama Perguruan Tinggi / Sekolah</p>
                        <p class="my-0 fs-5 fw-bold text-gray-600">SMK Negeri 5 Hasselt</p>
                    </div>
                    <div class="py-2">
                        <p class="my-0 fs-4 fw-bold">Program Studi</p>
                        <p class="my-0 fs-5 fw-bold text-gray-600">Rancangan Perangkat Lunak</p>
                    </div>
                    <div class="py-2">
                        <p class="my-0 fs-4 fw-bold">Tahun Lulus</p>
                        <p class="my-0 fs-5 fw-bold text-gray-600">2018</p>
                    </div>
                </div>
            </div>

            <div class="card-footer px-0">
                <div class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" id="setuju" />
                    <label class="form-check-label ps-2 text-dark" for="setuju">Saya setuju bahwa profil saya telah sesuai</label>
                </div>
            </div>
        </x-card>

        <div class="d-flex justify-content-between mt-5">
            <button type="submit" class="btn btn-secondary" id="previousButton">Sebelumnya</button>
            <button type="submit" class="btn btn-primary" id="nextButton">Berikutnya</button>
        </div>
    </div>

    <!-- Content 3 -->
    <div id="content3" class="content-section d-none">
        <x-card :header="'Upload Bukti Pembayaran'">
            <form action="">
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Upload Bukti/Dokumen Pembayaran</label>
                    <div class="col-lg-8 fv-row">
                        <div class="input-group">
                            <label class="btn btn-primary btn-upload">
                                Pilih File (Max 5 mb)
                                <input type="file" id="fileInput" class="d-none">
                            </label>
                            <div id="fileName" class="form-control file-name">Belum ada file dipilih</div>
                        </div>
                        <small class="text-muted">Tipe file: png, jpg, jpeg</small>
                    </div>
                </div>
            </form>
        </x-card>

        <div class="d-flex justify-content-between mt-5">
            <button type="submit" class="btn btn-secondary" id="previousButton">Sebelumnya</button>
            <button type="submit" class="btn btn-primary" id="nextButton">Berikutnya</button>
        </div>
    </div>

    <!-- Content 4 -->
    <div id="content4" class="content-section d-none">
        <x-card :header="'Dokumen Pelengkap'">
            <p>Upload dokumen atau berkas sesuai dengan ketentuan / petunjuk dengan menekan tombol tambah dokumen</p>

            <div class="d-flex justify-content-end mt-5">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_dokumen-pelengkap">
                    <i class="ki-duotone ki-file-up">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>Tambah Dokumen
                </button>
            </div>
            
            <x-modal id="kt_dokumen-pelengkap" title="Dokumen Pelengkap" size="modal-lg">
                <form class="form" action="#" id="kt_form_dokumen-pelengkap">
                    <div class="scroll-y me-n7 pe-7" id="kt_dokumen-pelengkap_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_dokumen-pelengkap_header" data-kt-scroll-wrappers="#kt_dokumen-pelengkap_scroll" data-kt-scroll-offset="300px">
                        <!-- Nama Dokumen -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Nama Dokumen</span>
                            </label>
                            <input type="text" name="nama-dokumen" class="form-control form-control-lg form-control-solid" placeholder="Nama Dokumen" value="Ijazah terakhir Max Verstappen" />
                        </div>
                        <!-- Jenis Dokumen -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Jenis Dokumen</span>
                            </label>
                            <select name="periode" data-control="select2" data-dropdown-parent="#kt_dokumen-pelengkap" data-placeholder="Pilih Periode..." class="form-select form-select-solid">
                                <option value=""> Pilih Jenis Dokumen ...</option>
                                <option value="ijazah">Ijazah Terakhir</option>
                                <option value="transkip">Transkip Nilai</option>
                                <option value="sertifikat">Sertifikat</option>
                                <option value="lain">Dokumen Lain</option>
                            </select>
                        </div>
                        <!-- Upload Dokumen Pelengkap -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Upload Dokumen</span>
                            </label>
                            <div class="col-lg-8 fv-row" style="width: 100%;">
                                <div class="input-group">
                                    <label class="btn btn-primary btn-upload">
                                        Pilih File (Max 5 mb)
                                        <input type="file" id="docfileInput" class="d-none">
                                    </label>
                                    <div id="docfilename" class="form-control file-name">Belum ada file dipilih</div>
                                </div>
                                <small class="text-muted">Tipe file: pdf, png, jpg, jpeg</small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer flex-center">
                        <button type="reset" id="kt_dokumen-pelengkap_cancel" class="btn btn-light me-3">Batal</button>
                        <button type="submit" id="kt_dokumen-pelengkap_submit" class="btn btn-primary">
                            <span class="indicator-label">Simpan</span>
                            <span class="indicator-progress">Silahkan Tunggu... 
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </x-modal>

            <div class="table-responsive mt-5">
                <table id="tb_dokumen-pelengkap" class="table table-bordered gy-5">
                    <thead>
                        <tr class="text-black fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-60px text-center">No</th>
                            <th class="min-w-400px text-center">Nama Dokumen</th>
                            <th class="min-w-125px text-center">Ukuran</th>
                            <th class="min-w-125px text-center">Jenis Dokumen</th>
                            <th class="min-w-125px text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-start">Ijazah terakhir Max Verstappen</td>
                            <td class="text-center">2.5 mb</td>
                            <td class="text-center">
                                <select class="custom-select default" id="dokumenselect">
                                    <option value="" disabled selected>Pilih Jenis Dokumen</option>
                                    <option value="ijazah">Ijazah Terakhir</option>
                                    <option value="transkip">Transkip Nilai</option>
                                    <option value="sertifikat">Sertifikat</option>
                                    <option value="lain">Dokumen Lain</option>
                                </select>
                            </td>
                            <td class="text-center">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Pilih Aksi 
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="apps/user-management/users/view.html" class="menu-link px-3">Lihat</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </x-card>

        <div class="d-flex justify-content-between mt-5">
            <button type="submit" class="btn btn-secondary" id="previousButton">Sebelumnya</button>
            <button type="submit" class="btn btn-primary" id="submitbeasiswa">Simpan</button>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Upload Pembayaran
            $('#fileInput').on('change', function () {
                const fileName = $(this).prop('files')[0]?.name || 'Belum ada file dipilih';
                $('#fileName').text(fileName);
            });

            // Dokumen Pelengkap
            $('#docfileinput').on('change', function () {
                const docfileName = $(this).prop('files')[0]?.name || 'Belum ada file dipilih';
                $('#docfileName').text(docfileName);
            });

            // Dropdown Dokumen
            $('.custom-select').on('change', function () {
                $(this).attr('class', 'custom-select ' + $(this).val());
            });
        });
    </script>
    
@endsection