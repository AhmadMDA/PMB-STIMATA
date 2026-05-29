@extends('layouts.user-template')
@section('content')

@section('title')
    RPL | {{ Auth::user()->name }}
@endsection
@section('breadcrumb', 'Rekognisi Pembelajaran Lampau')

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

        .custom-select:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(0, 123, 255, .25);
        }

        .custom-select.default {
            border: 1px solid #000;
            background-color: #f0f0f0;
            color: #000;
        }

        .custom-select.transfer {
            border: 1px solid #FF8F00;
            background-color: #FFF7E9;
            color: #FF8F00;
        }

        .custom-select.perolehan {
            border: 1px solid #4ECD79;
            background-color: #F0FDF9;
            color: #4ECD79;
        }

        .custom-select option {
            font-size: 14px;
            padding: 5px 10px;
        }
    </style>

    @php
        $navItems = [
            ['text' => 'Petunjuk', 'href' => '#', 'target' => '#content1', 'active' => true],
            ['text' => 'Aplikasi', 'href' => '#', 'target' => '#content2', 'active' => false],
            ['text' => 'Portofolio', 'href' => '#', 'target' => '#content3', 'active' => false],
            ['text' => 'Evaluasi Diri', 'href' => '#', 'target' => '#content4', 'active' => false],
            ['text' => 'Asesmen', 'href' => '#', 'target' => '#content5', 'active' => false],
            ['text' => 'Asesmen Lanjut', 'href' => '#', 'target' => '#content6', 'active' => false],
            ['text' => 'Hasil Asesmen', 'href' => '#', 'target' => '#content7', 'active' => false],
        ];

    @endphp
    {{-- <div class="page-loader flex-column bg-dark bg-opacity-25">
        <span class="spinner-border text-primary" role="status"></span>
        <span class="text-gray-800 fs-6 fw-semibold mt-5">Loading...</span>
    </div> --}}

    <x-horizontal-navbar :items="$navItems" active-background-color="bg-primary" active-text-color="text-white"
        :default-active-item="0" />

    <!-- Content 1 -->
    <div id="content1" class="content-section">
        <x-card :header="'Petunjuk'">
            <ol>
                <li>Mengisi Pendaftaran mahasiswa baru secara online melalui url: <a href="http://bit.ly/maba_stimata"
                        target="_blank">bit.ly/maba_stimata</a></li>
                <li>Download beberapa formulir berikut:
                    <ul>
                        <li>Prodi TI >> Formulir Aplikasi (<a href="#">klik disini</a>), Formulir Assesmen Mandiri (<a
                                href="#">klik disini</a>), dan Formulir Riwayat Hidup (<a href="#">klik
                                disini</a>);</li>
                        <li>Prodi SI >> Formulir Aplikasi (<a href="#">klik disini</a>), Formulir Assesmen Mandiri (<a
                                href="#">klik disini</a>), dan Formulir Riwayat Hidup (<a href="#">klik
                                disini</a>);</li>
                    </ul>
                </li>
                <li>Isi setiap formulir dengan sejujurnya dan selengkapnya;</li>
                <li>Kirim formulir ke email <a href="mailto:pmb@stimata.ac.id">pmb@stimata.ac.id</a> dengan judul “PMB RPL –
                    nama anda” atau wa ke 087730003828</li>
            </ol>
            <p><strong>Keterangan:</strong></p>
            <ul>
                <li>Formulir aplikasi adalah formulir berisi biodata secara umum;</li>
                <li>Formulir Assesmen mandiri adalah formulir penetapan kemampuan pengetahuan, ketrampilan dan keahlian
                    sesuai dengan riwayat hidup disertai dengan bukti-bukti (transkrip nilai, sertifikat, pengalaman kerja,
                    dll);</li>
                <li>Formulir Riwayat Hidup berisi data pendidikan, pelatihan, sertifikasi dan pengalaman kerja anda.</li>
            </ul>
        </x-card>

        <div class="d-flex justify-content-end mt-5">
            <button type="submit" class="btn btn-primary" id="nextButton">Berikutnya</button>
        </div>
    </div>

    <!-- Content 2 -->
    <div id="content2" class="content-section d-none">
        <x-card :header="'Rincian Data Mahasiswa'">
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
        </x-card>

        <x-card :header="'Daftar Dokumen Pendukung'">

            <form action="" method="POST" enctype="multipart/form-data" id="tambahdokumen">
                @csrf
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Judul</label>
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="judul" class="form-control form-control-lg form-control-solid"
                            placeholder="Judul" />
                        <div class="text-danger" id="error-judul"></div> <!-- Tempat untuk menampilkan error -->
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Penyelenggara</label>
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="penyelenggara" class="form-control form-control-lg form-control-solid"
                            placeholder="Penyelenggara" />
                        <div class="text-danger" id="error-penyelenggara"></div> <!-- Tempat untuk menampilkan error -->
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Tahun</label>
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="tahun" class="form-control form-control-lg form-control-solid"
                            placeholder="Tahun" />
                        <div class="text-danger" id="error-tahun"></div> <!-- Tempat untuk menampilkan error -->
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Jenis Dokumen</label>
                    <div class="col-lg-8 fv-row">
                        <select name="jenis" aria-label="Pilih Jenis Dokumen" data-control="select2"
                            data-placeholder="Pilih Jenis Dokumen.." class="form-select form-select-solid form-select-lg">
                            <option value="">Pilih Jenis Dokumen</option>
                            <option value="Pelatihan Profesional">Pelatihan Profesional</option>
                            <option value="Konferensi / Seminar / Lokakarya / Simposium">Konferensi / Seminar / Lokakarya /
                                Simposium</option>
                            <option value="Penghargaan / Piagam">Penghargaan / Piagam</option>
                            <option value="Organisasi Profesi / Ilmiah">Organisasi Profesi / Ilmiah</option>
                            <option value="Daftar Riwayat Pekerjaan / Pengalaman Kerja">Daftar Riwayat Pekerjaan /
                                Pengalaman Kerja</option>
                        </select>
                        <div class="text-danger" id="error-jenis"></div> <!-- Tempat untuk menampilkan error -->
                    </div>
                </div>
                <!-- Tambahkan elemen error untuk input lainnya dengan cara yang sama -->

                <div class="row mb-6">

                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Jabatan</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="jabatan" class="form-control form-control-lg form-control-solid"
                            placeholder="Jabatan" />
                        <div class="text-danger" id="error-jabatan"></div>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Upload Bukti/Dokumen
                        Pendukung</label>
                    <div class="col-lg-8 fv-row">
                        <div class="input-group">
                            <label class="btn btn-primary btn-upload">
                                Pilih File (Max 5 mb)
                                <input type="file" id="fileInput" name="file" class="d-none">
                            </label>
                            <div id="fileName" class="form-control file-name">Belum ada file dipilih</div>
                        </div>
                        <small class="text-muted">Tipe file:pdf</small>
                        <div class="text-danger" id="error-file"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <p class="my-2 mt-5 fs-4 fw-bold">List Dokumen Pendukung</p>
            <div class="table-responsive "style="max-height: 300px; overflow-y: auto;">

                <table id="tabel_dokumen" class="table table-row-bordered gy-5 overflow-auto  h-300px">
                    <thead style="position: sticky; top: 0; background-color: white; z-index: 1;">
                        <tr class="text-black fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px text-center">Nomor</th>
                            <th class="min-w-125px text-center">Judul</th>
                            <th class="min-w-125px ">Jenis Dokumen</th>
                            <th class="w-50px text-center">Tahun</th>
                            <th class="w-50px text-center">Penyelenggara</th>
                            <th class="w-50px text-center">Jabatan</th>
                            <th class="min-w-125px text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody id="tabel_isi_dokumen" class="">

                    </tbody>
                </table>
            </div>
            <script>
                function fetchDokumenn() {
                    $.ajax({
                        url: '{{ route('dokumen.fetch') }}',
                        type: 'GET',
                        success: function(response) {

                            if (response.success) {
                                let rows = '';
                                response.data.forEach((item, index) => {
                                    rows += `
                                            <tr>
                                                <td class="text-center">${index + 1}</td>
                                                <td class="text-center">${item.judul}</td>
                                                <td>${item.jenis}</td>
                                                <td class="text-center">${item.tahun}</td>
                                                <td class="text-center">${item.penyelenggara}</td>
                                                <td class="text-center">${item.jabatan || '-'}</td>
                                                <td class="text-center">
                                                    ${item.file ? `<a href="/storage/${item.file}" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" target="_blank">Lihat</a>` : '-'}
                                                    <button onclick="deleteDokumen(${item.id})" class="btn btn-light-danger btn-active-light-danger btn-flex btn-center btn-sm" >Hapus</button >
                                                </td>
                                            </tr>
                                        `;
                                });
                                $('#tabel_isi_dokumen').html(rows);
                            }
                        },
                        error: function() {
                            alert('Terjadi kesalahan saat mengambil data!');
                        }
                    });
                }

                function deleteDokumen(id) {
                    console.log("sdadasdasdad")
                    if (confirm('Are you sure you want to delete this document?')) {
                        $.ajax({
                            url: `/api/dokumen/${id}`, // Adjust the URL as necessary
                            type: 'DELETE',
                            success: function(response) {
                                if (response.success) {
                                    alert(response.message);
                                    fetchDokumenn(); // Refresh the document list
                                }
                            },
                            error: function(xhr) {
                                console.error(xhr);
                                alert('An error occurred while deleting the document.');
                            }
                        });
                    }
                }
                $(document).ready(function() {
                    const loadingEl = document.createElement("div");
                    document.body.prepend(loadingEl);
                    loadingEl.classList.add("page-loader");
                    loadingEl.classList.add("flex-column");
                    loadingEl.classList.add("bg-dark");
                    loadingEl.classList.add("bg-opacity-25");
                    loadingEl.innerHTML = `
                            <span class="spinner-border text-primary" role="status"></span>
                            <span class="text-gray-800 fs-6 fw-semibold mt-5">Loading...</span>
                        `;
                    KTApp.hidePageLoading();
                    // Fetch data on page load
                    fetchDokumen();


                    // Handle form submission
                    $('#tambahdokumen').on('submit', function(e) {
                        e.preventDefault();

                        // Create a FormData object
                        let formData = new FormData(this);
                        formData.append('_token', $('input[name="_token"]').val()); // CSRF Token

                        // Debug data untuk memastikan nilai sudah benar
                        console.log([...formData]); // Menampilkan data FormData
                        KTApp.showPageLoading();
                        $.ajax({
                            url: '{{ route('dokumen.store') }}',
                            type: 'POST',
                            data: formData,
                            contentType: false, // Penting untuk mengatur ini ke false
                            processData: false, // Penting untuk mengatur ini ke false
                            success: function(response) {
                                if (response.success) {
                                    console.log(response);
                                    fetchDokumen(); // Memanggil fungsi untuk mengambil data terbaru
                                    $('#tambahdokumen')[0].reset(); // Reset form
                                    $('#error-judul').text('');
                                    $('#error-tahun').text('');
                                    $('#error-penyelenggara').text('');
                                    $('#error-file').text('');
                                    $('#error-jenis').text('');
                                    toastr.success(
                                        "Dokumen berhasil di tambahkan",
                                        "Berhasil");
                                    KTApp.hidePageLoading();
                                    loadingEl.remove();
                                }
                            },
                            error: function(xhr) {
                                // Kosongkan pesan kesalahan sebelumnya
                                $('#error-judul').text('');
                                $('#error-tahun').text('');
                                $('#error-penyelenggara').text('');
                                $('#error-file').text('');
                                $('#error-jenis').text('');
                                // Tambahkan elemen error lainnya sesuai kebutuhan
                                try {

                                    if (xhr.status === 422) { // Status 422 untuk Unprocessable Entity
                                        const errors = xhr.responseJSON
                                            .errors; // Mengambil kesalahan dari respons
                                        console.log(errors)
                                        toastr.error(
                                            "Dokumen gagal di tambahkan",
                                            "Gagal");
                                        for (const key in errors) {
                                            if (errors.hasOwnProperty(key)) {
                                                // Menampilkan pesan kesalahan di elemen yang sesuai
                                                $('#error-' + key).text(errors[key].join(', '));
                                            }
                                        }
                                        KTApp.hidePageLoading();
                                        loadingEl.remove();
                                    }
                                } catch (error) {

                                    console.log(xhr);
                                    KTApp.hidePageLoading();
                                    loadingEl.remove();
                                }
                            }
                        });
                    });



                    // Fetch dokumen
                    function fetchDokumen() {
                        $.ajax({
                            url: '{{ route('dokumen.fetch') }}',
                            type: 'GET',
                            success: function(response) {

                                if (response.success) {
                                    let rows = '';
                                    response.data.forEach((item, index) => {
                                        rows += `
                                            <tr>
                                                <td class="text-center">${index + 1}</td>
                                                <td class="text-center">${item.judul}</td>
                                                <td>${item.jenis}</td>
                                                <td class="text-center">${item.tahun}</td>
                                                <td class="text-center">${item.penyelenggara}</td>
                                                <td class="text-center">${item.jabatan || '-'}</td>
                                                <td class="text-center">
                                                    ${item.file ? `<a href="/storage/${item.file}" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" target="_blank">Lihat</a>` : '-'}
                                                    <button onclick="deleteDokumen(${item.id})" class="btn btn-light-danger btn-active-light-danger btn-flex btn-center btn-sm" >Hapus</button >
                                                </td>
                                            </tr>
                                        `;
                                    });
                                    $('#tabel_isi_dokumen').html(rows);
                                }
                            },
                            error: function() {
                                alert('Terjadi kesalahan saat mengambil data!');
                            }
                        });
                    }

                });
            </script>

        </x-card>

        <x-card :header="'Daftar Mata Kuliah'">

            <p class="my-2 fs-4 fw-bold">Mata Kuliah Yang dipilih</p>
            <div class="table-responsive">
                <table id="tb_matkul_pilih" class="table table-row-bordered gy-5">
                    <thead>
                        <tr class="text-black fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px text-center">Nomor</th>
                            <th class="min-w-125px text-center">Kode Mata Kuliah</th>
                            <th class="min-w-125px text-center">Nama Mata Kuliah</th>
                            <th class="w-50px text-center">SKS</th>
                            <th class="min-w-125px text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tbody_pilih">
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">MKT1-0985</td>
                            <td class="text-center">Algoritma dan Kompleksitas</td>
                            <td class="text-center">2</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center align-items-center gap-3">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" id="ya_ajukan" />
                                        <label class="form-check-label ps-2 text-dark" for="ya_ajukan">Ya</label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" id="tidak_ajukan" />
                                        <label class="form-check-label ps-2 text-dark" for="tidak_ajukan">Tidak</label>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-center">MKT1-0985</td>
                            <td class="text-center">Algoritma dan Kompleksitas</td>
                            <td class="text-center">2</td>
                            <td class="text-center">

                            </td>
                            <td class="text-center">
                                <a href="#"
                                    class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Pilih Aksi
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a class="menu-link px-3" data-bs-toggle="modal"
                                            data-bs-target="#modal_evaluasidiri">Detail Evaluasi</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Upload Bukti</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="my-2 fs-4 fw-bold">Mata Kuliah Tersedia</p>
            <div class="d-flex align-items-center position-relative mb-5">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <input type="text" data-kt-user-table-filter="search" id="search-matakuliah"
                    class="form-control form-control-solid w-250px ps-13" placeholder="Cari mata kuliah">
            </div>


            <div class="table-responsive "style="max-height: 300px; overflow-y: auto;">

                <table id="tb_matakuliah" class="table table-row-bordered gy-5 overflow-auto  h-300px">
                    <thead style="position: sticky; top: 0; background-color: white; z-index: 1;">
                        <tr class="text-black fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px text-center">Nomor</th>
                            <th class="min-w-125px text-center">Kode Mata Kuliah</th>
                            <th class="min-w-125px ">Nama Mata Kuliah</th>
                            <th class="w-50px text-center">SKS</th>
                            <th class="min-w-125px text-center">Mengajukan RPL</th>
                        </tr>
                    </thead>

                    <tbody id="tb_matakuliah_body" class="">

                    </tbody>
                </table>
                <script>
                    $(document).ready(function() {
                        let pilihan = [];

                        function pilihanMatkul() {
                            $.ajax({
                                url: "{{ route('api.showMatkul', auth()->user()->id) }}",
                                type: "GET",
                                dataType: "json",
                                // data: {
                                //     id: {{ Auth::user()->id }}
                                // },
                                success: function(data) {
                                    const tbody = $("#tbody_pilih");
                                    tbody.empty(); // Kosongkan tbody sebelum diisi dengan data baru
                                    // pilihan = [];
                                    // Iterasi setiap mata kuliah yang diterima dari data
                                    $.each(data, function(index, item) {
                                        // Buat baris <tr> baru
                                        const row = `
                                            <tr>
                                                <td class="text-center">${index + 1}</td>
                                                <td id="kode_pilih" class="text-center">${item.kode_mtk}</td>
                                                <td class="text-center">${item.nama_mtk}</td>
                                                <td class="text-center">${item.sks}</td>
                                                
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-value="${item.id}" data-bs-toggle="modal"
                                            data-bs-target="#modal_evaluasidiri" id="detail_evaluasi">Evaluasi</a>
                                                    
                                                </td>
                                            </tr>
                                        `;

                                        // Tambahkan baris ke dalam tbody
                                        tbody.append(row);
                                    });

                                    $('#tbody_pilih #kode_pilih').each(function() {
                                        const kodePilih = $(this).text()
                                            .trim(); // Ambil teks dari elemen td dan hapus spasi tambahan
                                        console.log(kodePilih); // Lihat hasilnya di console
                                        pilihan.push(kodePilih); // Tambahkan teks ke dalam array pilihan
                                    });
                                },
                                error: function(xhr, status, error) {
                                    console.error('Terjadi kesalahan:', error);
                                    alert('Gagal mengambil data');
                                }
                            });
                        }
                        pilihanMatkul();
                        $('#tbody_pilih #kode_pilih').each(function() {
                            const kodePilih = $(this).text().trim();
                            console.log(kodePilih) // Ambil teks dari elemen td dan hapus spasi tambahan
                            pilihan.push(kodePilih); // Tambahkan teks ke dalam array pilihan
                        });

                        console.log(pilihan);
                        $.ajax({
                            url: "{{ route('api.matakuliah', auth()->user()->id) }}",
                            type: "GET",
                            dataType: "json",
                            data: {
                                id: {{ Auth::user()->id }}
                            },
                            success: function(data) {
                                console.log(data);

                                // Perbarui tabel saat ada input pencarian
                                $('#search-matakuliah').on('input', function() {
                                    let searchValue = $(this).val().toLowerCase();
                                    $('#tb_matakuliah_body').empty();

                                    // Filter data berdasarkan pencarian
                                    let filteredData = data.filter(function(item) {
                                        return item.nama_mtk.toLowerCase().includes(
                                                searchValue) ||
                                            item.kode_mtk.toLowerCase().includes(
                                                searchValue);
                                    });

                                    // Render data menggunakan map
                                    let rows = filteredData.map(function(item, index) {
                                        return `
                                                <tr>
                                                    <td class="text-center">${index + 1}</td>
                                                    <td class="text-center">${item.kode_mtk}</td>
                                                    <td class="">${item.nama_mtk}</td>
                                                    <td class="text-center">${item.sks}</td>
                                                    <td class="text-center">
                                                        <div class="d-flex justify-content-center align-items-center gap-3">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input mtk-checkbox" type="checkbox" ${item.isPilih ? 'checked' : ''} data-value="${item.kode_mtk}" />
                                                                <label class="form-check-label ps-2 text-dark">Ya</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            `;
                                    }).join('');

                                    // Tampilkan data ke dalam tbody
                                    $('#tb_matakuliah_body').html(rows);

                                    // Tampilkan pesan jika data tidak ditemukan
                                    if (filteredData.length === 0) {
                                        $('#tb_matakuliah_body').append(`
                                                <tr>
                                                    <td colspan="5" class="text-center">Data tidak ditemukan</td>
                                                </tr>
                                            `);
                                    }
                                });

                                // Render data awal menggunakan map
                                let initialRows = data.map(function(item, index) {
                                    isPilih = false;
                                    return `
                                            <tr>
                                                <td class="text-center">${index + 1}</td>
                                                <td class="text-center">${item.kode_mtk}</td>
                                                <td class="">${item.nama_mtk}</td>
                                                <td class="text-center">${item.sks}</td>
                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center align-items-center gap-3">
                                                        <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input mtk-checkbox" type="checkbox" data-value="${item.kode_mtk}"  ${item.isPilih ? 'checked' : ''}  />
                                                            <label class="form-check-label ps-2 text-dark">Ya</label>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        `;
                                }).join('');
                                $('#tb_matakuliah_body').html(initialRows);

                                // Tambahkan event listener ke checkbox
                                $('#tb_matakuliah_body').on('change', '.mtk-checkbox', function() {
                                    if ($(this).is(':checked')) {
                                        kode_mtk = $(this).data('value');
                                        $.ajax({
                                            url: "{{ route('api.storeMatkul') }}", // Ganti dengan route API yang sesuai
                                            type: "POST",
                                            dataType: "json",
                                            data: {
                                                kode_mtk: kode_mtk, // Kirim data
                                                id_user: {{ Auth::user()->id }}, // Kirim data
                                                _token: '{{ csrf_token() }}' // Jangan lupa kirim CSRF token jika dibutuhkan
                                            },
                                            success: function(response) {
                                                // alert('Matakuliah berhasil dikirim');
                                                pilihanMatkul();
                                                toastr.success(
                                                    "Matakuliah berhasil di tambahkan",
                                                    "Berhasil");
                                            },
                                            // error: function(xhr, status, error) {
                                            //     console.error('Terjadi kesalahan:', error);
                                            //     alert('Gagal mengirim data');
                                            // }
                                        });
                                    } else {
                                        kode_mtk = $(this).data('value');
                                        $.ajax({
                                            url: "{{ route('api.destroyMatkul') }}", // Ganti dengan route API yang sesuai
                                            type: "DELETE",
                                            dataType: "json",
                                            data: {
                                                kode_mtk: kode_mtk, // Kirim data
                                                id_user: {{ Auth::user()->id }}, // Kirim data
                                                _token: '{{ csrf_token() }}' // Jangan lupa kirim CSRF token jika dibutuhkan
                                            },
                                            success: function(response) {
                                                console.log('Data berhasil Dihapus:', response);
                                                pilihanMatkul();
                                                toastr.success("Matakuliah berhasil di hapus",
                                                    "Berhasil");
                                            },
                                            // error: function(xhr, status, error) {
                                            //     console.error('Terjadi kesalahan:', error);
                                            //     alert('Gagal mengirim data');
                                            // }
                                        });
                                    }
                                });
                            }
                        });
                    });
                </script>
            </div>
        </x-card>

        <x-modal id="modal_evaluasidiri" title="Evaluasi Diri" size="modal-xl">
            <form action="" id="form_eval" method="POST">
                @csrf
                @method('PUT')
                <div class="table-responsive">
                    <table id="tb_modalevaluasi1" class="table gy-1">
                        <tbody>
                            <tr>
                                <td class="fw-bold fs-4">Kode Mata Kuliah</td>
                                <td id="kode_mtk" class="fw-bold fs-4">MKT1-0985</td>
                            </tr>
                            <tr>
                                <td class="fw-bold fs-4">Nama Mata Kuliah</td>
                                <td id="nama_mtk" class="fw-bold fs-4">Algoritma dan Kompleksitas</td>
                            </tr>
                            <tr>
                                <td class="fw-bold fs-4">Nama Calon Mahasiswa</td>
                                <td id="calon_mhs" class="fw-bold fs-4">Max Verstappen</td>
                            </tr>
                            <tr>
                                <td class="fw-bold fs-4">Keterangan</td>
                                <input type="hidden" name="id_matkulaplikasi">
                                <td class="fw-bold fs-4"><select class="custom-select default" name="keterangan" required
                                        id="selectKeterangan">
                                        {{-- <option value="" disabled selected>Pilih SKS</option> --}}
                                        <option value="transfer" selected>Transfer SKS</option>
                                        <option value="perolehan">Perolehan SKS</option>
                                    </select></td>
                            </tr>
                        </tbody>
                    </table>

                    <table id="tb_modalevaluasi2" class="table table-bordered gy-3 mt-6">
                        <thead>
                            <tr>
                                <th class="fs-5 fw-bold text-center">No.</th>
                                <th class="fs-5 fw-bold text-center">Kompetensi</th>
                                <th class="fs-5 fw-bold text-center">Kode Sub CPMK</th>
                                <th class="fs-5 fw-bold text-center">Sub Kompetensi</th>
                                <th class="fs-5 fw-bold text-center">Sangat Baik</th>
                                <th class="fs-5 fw-bold text-center">Baik</th>
                                <th class="fs-5 fw-bold text-center">Tidak Pernah</th>
                                <th class="fs-5 fw-bold text-center" style="width: 200px">Bukti Dokumen</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="modal-footer flex-center">
                        <button type="reset" id="" class="btn btn-light me-3">Batal</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Silahkan Tunggu...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </div>
            </form>
        </x-modal>
        <script>
            $(document).ready(function() {
                $('#modal_evaluasidiri').on('shown.bs.modal', function(event) {
                    var button = $(event.relatedTarget);
                    var modal = $(this);
                    var id_user = {{ Auth::user()->id }};
                    var id_matkulaplikasi = button.data('value');
                    $('input[name="id_matkulaplikasi"]').val(id_matkulaplikasi);
                    // $('#sksSelect').val('');
                    // Clear previous data
                    $.ajax({
                        url: "{{ route('api.showEvaluasi') }}",
                        type: "GET",
                        dataType: "json",
                        data: {
                            'id_user': id_user,
                            'id_matkulaplikasi': id_matkulaplikasi,
                            '_token': '{{ csrf_token() }}'
                        },

                        success: function(data) {
                            console.log(data.evaluasi);
                            console.log(data.keterangan)
                            $('#tb_modalevaluasi2 tbody').empty();

                            // Update modal header data
                            $('#kode_mtk').text(data.kode_mk);
                            $('#nama_mtk').text(data.nama_matkul);
                            $('#calon_mhs').text(data.nama);

                            if (data.keterangan) {
                                $('#selectKeterangan').val(data.keterangan); // Set nilai sesuai dengan data.keterangan
                            } else {
                                $('#selectKeterangan').val(
                                ''); // Atur default jika data.keterangan tidak ada
                            }
                            // Update Kompetensi table
                            var tableBody = $('#tb_modalevaluasi2 tbody');
                            data.cpmk.forEach(function(cpmk, index) {
                                // Add CPMK row
                                var cpmkRow = `
                                    <tr>
                                        <td class="fs-5 text-center" rowspan="${cpmk.sub_cpmk.length + 1}">${index + 1}</td>
                                        <td class="fs-5" rowspan="${cpmk.sub_cpmk.length + 1}">${cpmk.uraian}</td>
                                    </tr>
                                `;
                                tableBody.append(cpmkRow);

                                // Add Sub CPMK rows
                                cpmk.sub_cpmk.forEach(function(subCpmk) {
                                    var groupName =
                                        `kompetensi_${subCpmk.kode_sub_cpmk}`;
                                    var subCpmkRow = `
                                        <tr>
                                            <td class="fs-5">${subCpmk.kode_sub_cpmk}</td>
                                            <td class="fs-5">${subCpmk.uraian_sub}</td>
                                            <td>
                                                <div class="form-check form-check-sm d-flex justify-content-center">
                                                    <input class="form-check-input" type="radio" name="${groupName}" value="sangat_baik" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-sm d-flex justify-content-center">
                                                    <input class="form-check-input" type="radio" name="${groupName}" value="baik" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-sm d-flex justify-content-center">
                                                    <input class="form-check-input" type="radio" name="${groupName}" value="tidak_pernah" />
                                                </div>
                                            </td>
                                            <td class="fs-5">
                                                <select name="dokumen_${subCpmk.kode_sub_cpmk}" aria-label="Pilih Dokumen" data-control="select2"
                                                    data-placeholder="Pilih Dokumen.." id="documentSelect_${subCpmk.kode_sub_cpmk}" class="form-select form-select-solid form-select-lg">
                                                </select>
                                            </td>
                                        </tr>
                                    `;
                                    tableBody.append(subCpmkRow);

                                    // Set kompetensi berdasarkan data.evaluasi
                                    var evaluasi = data.evaluasi.find(e => e
                                        .id_sub_cpmk === subCpmk.kode_sub_cpmk);
                                    if (evaluasi) {
                                        // Set radio button yang dipilih
                                        $(`input[name="${groupName}"][value="${evaluasi.kompetensi}"]`)
                                            .prop('checked', true);

                                        // Fetch documents for the dropdown
                                        $.ajax({
                                            url: "{{ route('dokumen.fetchDokumen') }}",
                                            type: "GET",
                                            dataType: "json",
                                            success: function(documents) {
                                                var documentSelect = $(
                                                    `#documentSelect_${subCpmk.kode_sub_cpmk}`
                                                );
                                                documentSelect.empty();
                                                documentSelect.append(
                                                    `<option value="" selected disabled>Pilih Dokumen</option>`
                                                );
                                                documents.forEach(
                                                    function(doc) {
                                                        doc.forEach(
                                                            function(
                                                                d
                                                            ) {
                                                                var selected =
                                                                    evaluasi.id_dokumen == d.id ?
                                                                    'selected' :
                                                                    '';
                                                                documentSelect
                                                                    .append(
                                                                        `<option value="${d.id}" ${selected}>${d.judul}</option>`
                                                                    );
                                                            });
                                                    });
                                            },
                                            error: function() {
                                                console.error(
                                                    'Failed to fetch documents.'
                                                );
                                            }
                                        });
                                    }
                                });
                            });
                        }

                    });
                    $('#form_eval').on('submit', function(e) {
                        e.preventDefault(); // Prevent the default form submission

                        // Serialize the form data
                        var formData = $(this).serialize();
                        // $.ajax({
                        //     url: "{{ route('api.showEvaluasi') }}",
                        //     type: "GET",
                        //     dataType: "json",
                        //     data: {
                        //         'id_user': id_user,
                        //         'id_matkulaplikasi': id_matkulaplikasi,
                        //         '_token': '{{ csrf_token() }}'
                        //     },
                        //     success: function(data) {}
                        // });
                        // Send the AJAX request
                        $.ajax({
                            url: "{{ route('api.insertEvaluasi') }}", // Replace with your actual route
                            type: "PUT",
                            data: formData,
                            success: function(response) {
                                console.log(response)
                                // Handle success response
                                // alert('Form submitted successfully!');
                                toastr.success(
                                    "Evaluasi berhasil di tambahkan",
                                    "Berhasil"
                                )
                                // Optionally, you can close the modal or reset the form
                                // $('#modal_evaluasidiri').modal('hide');
                                // $('#form_eval')[0].reset();
                            },
                            error: function(xhr) {
                                // Handle error response
                                var errors = xhr.responseJSON.errors;
                                if (errors) {
                                    // Display validation errors
                                    $.each(errors, function(key, value) {
                                        alert(value[
                                            0]); // Display the first error message
                                    });
                                } else {
                                    alert('An error occurred. Please try again.');
                                }
                            }
                        });
                    });
                });
            });
        </script>



        <x-card :header="'Upload Bukti Pembayaran'">
            <form action="">
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Upload Bukti/Dokumen
                        Pembayaran</label>
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

        <x-card :header="'Validasi Data'">
            <p class="fs-5">Pastikan data kamu sudah terisi sesuai dengan yang kamu inginkan, kemudian silahkan klik
                pernyataan berikut untuk bisa melangkah ke tahap berikutnya</p>
            <div class="form-check form-check-custom form-check-solid mb-4">
                <input class="form-check-input" type="checkbox" id="setuju" />
                <label class="form-check-label ps-2 text-dark" for="setuju">Saya Setuju dengan Data yang saya
                    isi</label>
            </div>
        </x-card>

        <div class="d-flex justify-content-between mt-5">
            <button type="submit" class="btn btn-secondary" id="previousButton">Sebelumnya</button>
            <button type="submit" class="btn btn-primary" id="nextButton">Berikutnya</button>
        </div>
    </div>

    <!-- Content 3 -->
    <div id="content3" class="content-section d-none">
        <x-card :header="'Identitas Diri'">
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">Nama Lengkap</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-muted">Max Verstappen</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">Tempat / Tanggal Lahir</label>
                <div class="col-lg-8 fv-row">
                    <span class="fw-bold fs-6 text-muted">Hasselt / 30 September 1997</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">Jenis Kelamin</label>
                <div class="col-lg-8 fv-row">
                    <span class="fw-bold fs-6 text-muted">Pria</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">Status
                    <span class="ms-1" data-bs-toggle="tooltip" title="Pilih status perkawinan anda">
                        <i class="ki-duotone ki-information fs-7">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span></label>

                <div class="col-lg-8 d-flex align-items-center">
                    <select name="statusperkawinan" aria-label="Pilih Status Perkawinan" data-control="select2"
                        data-placeholder="Pilih Status Perkawinan.." class="form-select form-select-solid form-select-sm">
                        <option value="Lajang">Lajang</option>
                        <option value="Menikah">Menikah</option>
                    </select>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">Agama</label>
                <div class="col-lg-8 fv-row">
                    <span class="fw-bold fs-6 text-muted">Kristen</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">Pekerjaan
                    <span class="ms-1" data-bs-toggle="tooltip" title="Pilih pekerjaan sesuai kondisi anda">
                        <i class="ki-duotone ki-information fs-7">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span></label>

                <div class="col-lg-8 d-flex align-items-center">
                    <select name="pekerjaan" aria-label="Pilih Pekerjaan" data-control="select2"
                        data-placeholder="Pilih Perkawinan.." class="form-select form-select-solid form-select-sm">
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Siswa">Siswa</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="Freelance">Freelance</option>
                    </select>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">Alamat Rumah</label>
                <div class="col-lg-8 fv-row">
                    <span class="fw-bold fs-6 text-muted">Jln. Merdeka No 45, Belanda</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">Nomor Telepon</label>
                <div class="col-lg-8 fv-row">
                    <span class="fw-bold fs-6 text-muted">082214909909</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">Email</label>
                <div class="col-lg-8 fv-row">
                    <span class="fw-bold fs-6 text-muted">hatelando@gmail.com</span>
                </div>
            </div>
        </x-card>

        <x-card :header="'Riwayat pendidikan'">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#kt_riwayat-pendidikan">
                <i class="ki-duotone ki-plus fs-2"></i>Tambah
            </button>

            <x-modal id="kt_riwayat-pendidikan" title="Riwayat Pendidikan" size="modal-lg">
                <form class="form" action="#" id="kt_form_riwayat-pendidikan">
                    <div class="scroll-y me-n7 pe-7" id="kt_riwayat-pendidikan_scroll" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_riwayat-pendidikan_header"
                        data-kt-scroll-wrappers="#kt_riwayat-pendidikan_scroll" data-kt-scroll-offset="300px">
                        <!-- Nama Sekolah -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Nama Sekolah</span>
                            </label>
                            <input type="text" name="nama-sekolah"
                                class="form-control form-control-lg form-control-solid" placeholder="Nama Sekolah"
                                value="SMKN 1 Hasselt" />
                        </div>
                        <!-- Tahun -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Tahun</span>
                            </label>
                            <select name="tahun" data-control="select2" data-dropdown-parent="#kt_riwayat-pendidikan"
                                data-placeholder="Pilih Tahun Akademik..." class="form-select form-select-solid">
                                <option value="">Pilih Tahun ...</option>
                                <option value="2024/2025">2017</option>
                                <option value="2025/2026">2018</option>
                                <option value="2026/2027">2020</option>
                                <option value="2026/2027">2021</option>
                            </select>
                        </div>
                        <!-- Jurusan / Program Studi -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Jurusan / Program Studi</span>
                            </label>
                            <input type="text" name="jurusan" class="form-control form-control-lg form-control-solid"
                                placeholder="Jurusan / Program Studi" value="Rekayasa Perangkat Lunak" />
                        </div>
                    </div>
                    <div class="modal-footer flex-center">
                        <button type="reset" id="kt_riwayat-pendidikan_cancel"
                            class="btn btn-light me-3">Batal</button>
                        <button type="submit" id="kt_riwayat-pendidikan_submit" class="btn btn-primary">
                            <span class="indicator-label">Simpan</span>
                            <span class="indicator-progress">Silahkan Tunggu...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </x-modal>

            <div class="table-responsive mt-5">
                <table id="tb_riwayat_pendidikqan" class="table table-bordered gy-5">
                    <thead>
                        <tr class="text-black fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-60px text-center">No</th>
                            <th class="min-w-125px text-center">Nama Sekolah</th>
                            <th class="min-w-125px text-center">Tahun</th>
                            <th class="min-w-125px text-center">Jurusan / Program Studi</th>
                            <th class="min-w-125px text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-start">SMK Negeri 5 Hasselt</td>
                            <td class="text-center w-8px">2018</td>
                            <td class="text-start">Rancangan Perangkat Lunak</td>
                            <td class="text-center">
                                <a href="#"
                                    class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Pilih Aksi
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-start">Institut Teknologi Belanda</td>
                            <td class="text-center w-8px">2020</td>
                            <td class="text-start">Teknik Informatika</td>
                            <td class="text-center">
                                <a href="#"
                                    class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Pilih Aksi
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </x-card>

        <x-card :header="'Pelatihan Profesional'">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_pelatihan">
                <i class="ki-duotone ki-plus fs-2"></i>Tambah
            </button>

            <x-modal id="kt_pelatihan" title="Pelatihan Profesional" size="modal-lg">
                <form class="form" action="#" id="kt_form_pelatihan">
                    <div class="scroll-y me-n7 pe-7" id="kt_pelatihan_scroll" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_pelatihan_header" data-kt-scroll-wrappers="#kt_pelatihan_scroll"
                        data-kt-scroll-offset="300px">
                        <!-- Jenis -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Jenis Pelatihan</span>
                            </label>
                            <select name="jenis" data-control="select2" data-dropdown-parent="#kt_pelatihan"
                                data-placeholder="Pilih Jenis Pelatihan..." class="form-select form-select-solid">
                                <option value="">Pilih Jenis ...</option>
                                <option value="Internal Kampus / Sekolah">Internal Kampus / Sekolah</option>
                                <option value="Regional">Regional</option>
                                <option value="Nasional">Nasional</option>
                                <option value="Internasional">Internasional</option>
                            </select>
                        </div>
                        <!-- Penyelenggara -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Penyelenggara</span>
                            </label>
                            <input type="text" name="penyelenggara"
                                class="form-control form-control-lg form-control-solid" placeholder="Penyelenggara"
                                value="Red Bull Racing F1 Team" />
                        </div>
                        <!-- Jangka Waktu -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Jangka Waktu</span>
                            </label>
                            <select name="jangka-waktu" data-control="select2" data-dropdown-parent="#kt_pelatihan"
                                data-placeholder="Pilih Jenis Jangka Waktu..." class="form-select form-select-solid">
                                <option value="">Pilih Jangka Waktu ...</option>
                                <option value="1 Bulan">1 Bulan</option>
                                <option value="2 Bulan">2 Bulan</option>
                                <option value="3 Bulan">3 Bulan</option>
                                <option value="4 Bulan">4 Bulan</option>
                                <option value="5 Bulan">5 Bulan</option>
                                <option value="6 Bulan">6 Bulan</option>
                                <option value="> 6 Bulan"> > 6 Bulan</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer flex-center">
                        <button type="reset" id="kt_pelatihan_cancel" class="btn btn-light me-3">Batal</button>
                        <button type="submit" id="kt_pelatihan_submit" class="btn btn-primary">
                            <span class="indicator-label">Simpan</span>
                            <span class="indicator-progress">Silahkan Tunggu...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </x-modal>

            <div class="table-responsive mt-5">
                <table id="tb_pelatihan" class="table table-bordered gy-5">
                    <thead>
                        <tr class="text-black fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-60px text-center">No</th>
                            <th class="min-w-125px text-center">Jenis Pelatihan</th>
                            <th class="min-w-125px text-center">Penyelenggara</th>
                            <th class="min-w-125px text-center">Jangka Waktu</th>
                            <th class="min-w-125px text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-start">Dalam Negeri</td>
                            <td class="text-center">Red Bull Racing F1 Team</td>
                            <td class="text-start">5 Bulan</td>
                            <td class="text-center">
                                <a href="#"
                                    class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Pilih Aksi
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </x-card>

        <x-card :header="'Konferensi / Seminar / Lokakarya / Simposium'">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_konferensi">
                <i class="ki-duotone ki-plus fs-2"></i>Tambah
            </button>

            <x-modal id="kt_konferensi" title="Konferensi / Seminar / Lokakarya / Simposium" size="modal-lg">
                <form class="form" action="#" id="kt_form_konferensi">
                    <div class="scroll-y me-n7 pe-7" id="kt_konferensi_scroll" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_konferensi_header"
                        data-kt-scroll-wrappers="#kt_konferensi_scroll" data-kt-scroll-offset="300px">
                        <!-- Judul Kegiatan -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Judul Kegiatan</span>
                            </label>
                            <input type="text" name="judul-kegiatan"
                                class="form-control form-control-lg form-control-solid" placeholder="Judul Kegiatan"
                                value="Seminar Informatika Red Bull" />
                        </div>
                        <!-- Penyelenggara -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Penyelenggara</span>
                            </label>
                            <input type="text" name="penyelenggara"
                                class="form-control form-control-lg form-control-solid" placeholder="Penyelenggara"
                                value="Red Bull Racing F1 Team" />
                        </div>
                        <!-- Status -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Status</span>
                            </label>
                            <select name="status-konferensi" data-control="select2" data-dropdown-parent="#kt_konferensi"
                                data-placeholder="Pilih Status..." class="form-select form-select-solid">
                                <option value="">Pilih Status ...</option>
                                <option value="Peserta">Peserta</option>
                                <option value="Panitia">Panitia</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer flex-center">
                        <button type="reset" id="kt_konferensi_cancel" class="btn btn-light me-3">Batal</button>
                        <button type="submit" id="kt_konferensi_submit" class="btn btn-primary">
                            <span class="indicator-label">Simpan</span>
                            <span class="indicator-progress">Silahkan Tunggu...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </x-modal>

            <div class="table-responsive mt-5">
                <table id="tb_konferensi" class="table table-bordered gy-5">
                    <thead>
                        <tr class="text-black fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-60px text-center">No</th>
                            <th class="min-w-125px text-center">Judul Kegiatan</th>
                            <th class="min-w-125px text-center">Penyelenggara</th>
                            <th class="min-w-125px text-center">Status</th>
                            <th class="min-w-125px text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-start">Seminar Informatika Red Bull</td>
                            <td class="text-center">Redbull Racing F1 Team</td>
                            <td class="text-start">Peserta</td>
                            <td class="text-center">
                                <a href="#"
                                    class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Pilih Aksi
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </x-card>

        <x-card :header="'Penghargaan / Piagam'">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_penghargaan">
                <i class="ki-duotone ki-plus fs-2"></i>Tambah
            </button>

            <x-modal id="kt_penghargaan" title="Penghargaan / Piagam" size="modal-lg">
                <form class="form" action="#" id="kt_form_penghargaan">
                    <div class="scroll-y me-n7 pe-7" id="kt_penghargaan_scroll" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_penghargaan_header"
                        data-kt-scroll-wrappers="#kt_penghargaan_scroll" data-kt-scroll-offset="300px">
                        <!-- Bentuk Penghargaan -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Bentuk Penghargaan</span>
                            </label>
                            <input type="text" name="bentuk-penghargaan"
                                class="form-control form-control-lg form-control-solid" placeholder="Bentuk Penghargaan"
                                value="Pembalap Terbaik" />
                        </div>
                        <!-- Pemberi -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Pemberi</span>
                            </label>
                            <input type="text" name="pemberi" class="form-control form-control-lg form-control-solid"
                                placeholder="Pemberi" value="Formula 1" />
                        </div>
                    </div>
                    <div class="modal-footer flex-center">
                        <button type="reset" id="kt_penghargaan_cancel" class="btn btn-light me-3">Batal</button>
                        <button type="submit" id="kt_penghargaan_submit" class="btn btn-primary">
                            <span class="indicator-label">Simpan</span>
                            <span class="indicator-progress">Silahkan Tunggu...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </x-modal>

            <div class="table-responsive mt-5">
                <table id="tb_penghargaan" class="table table-bordered gy-5">
                    <thead>
                        <tr class="text-black fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-60px text-center">No</th>
                            <th class="min-w-125px text-center">Bentuk Penghargaan</th>
                            <th class="min-w-125px text-center">Pemberi</th>
                            <th class="min-w-125px text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-start">Pembalap Terbaik</td>
                            <td class="text-center">Formula 1</td>
                            <td class="text-center">
                                <a href="#"
                                    class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Pilih Aksi
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </x-card>

        <x-card :header="'Organisasi Profesi / Ilmiah'">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_organisasi">
                <i class="ki-duotone ki-plus fs-2"></i>Tambah
            </button>

            <x-modal id="kt_organisasi" title="Organisasi Profesi / Ilmiah" size="modal-lg">
                <form class="form" action="#" id="kt_form_organisasi">
                    <div class="scroll-y me-n7 pe-7" id="kt_organisasi_scroll" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_organisasi_header"
                        data-kt-scroll-wrappers="#kt_organisasi_scroll" data-kt-scroll-offset="300px">
                        <!-- Jenis / Nama Organisasi -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Jenis / Nama Organisasi</span>
                            </label>
                            <input type="text" name="nama-organisasi"
                                class="form-control form-control-lg form-control-solid" placeholder="Nama Organisasi"
                                value="Red Bull Racing F1 Team" />
                        </div>
                        <!-- Jabatan/ Jenjang Keanggotaan -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Jabatan / Jenjang Keanggotaan</span>
                            </label>
                            <input type="text" name="jabatan-organisasi"
                                class="form-control form-control-lg form-control-solid" placeholder="Jabatan Organisasi"
                                value="Pembalap" />
                        </div>
                    </div>
                    <div class="modal-footer flex-center">
                        <button type="reset" id="kt_organisasi_cancel" class="btn btn-light me-3">Batal</button>
                        <button type="submit" id="kt_organisasi_submit" class="btn btn-primary">
                            <span class="indicator-label">Simpan</span>
                            <span class="indicator-progress">Silahkan Tunggu...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </x-modal>

            <div class="table-responsive mt-5">
                <table id="tb_organisasi" class="table table-bordered gy-5">
                    <thead>
                        <tr class="text-black fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-60px text-center">No</th>
                            <th class="min-w-125px text-center">Jenis / Nama Organisasi</th>
                            <th class="min-w-125px text-center">Jabatan/ Jenjang Keanggotaan</th>
                            <th class="min-w-125px text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-start">Red Bull Racing F1 Team</td>
                            <td class="text-center">Programmer</td>
                            <td class="text-center">
                                <a href="#"
                                    class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Pilih Aksi
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </x-card>

        <x-card :header="'Daftar Riwayat Pekerjaan / Pengalaman Kerja'">
            <p>
                Pada bagian ini, diisi dengan pengalaman kerja yang anda miliki yang relevan dengan mata kuliah yang akan
                dinilai.
                Tambah data pengalaman kerja saudara dimulai dari urutan paling akhir (terkini).
            </p>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_pengalaman">
                <i class="ki-duotone ki-plus fs-2"></i>Tambah
            </button>

            <x-modal id="kt_pengalaman" title="Daftar Riwayat Pekerjaan / Pengalaman Kerja" size="modal-lg">
                <form class="form" action="#" id="kt_form_pengalaman">
                    <div class="scroll-y me-n7 pe-7" id="kt_pengalaman_scroll" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_pengalaman_header"
                        data-kt-scroll-wrappers="#kt_pengalaman_scroll" data-kt-scroll-offset="300px">
                        <!-- Nama dan Alamat Institusi / Perusahaan -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Nama dan Alamat Institusi / Perusahaan</span>
                            </label>
                            <input type="text" name="nama-institusi"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Nama dan alamat institusi"
                                value="Red Bull Racing F1 Team / Milton Keynes, Inggris" />
                        </div>
                        <!-- Periode -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Periode</span>
                            </label>
                            <select name="periode" data-control="select2" data-dropdown-parent="#kt_pengalaman"
                                data-placeholder="Pilih Periode..." class="form-select form-select-solid">
                                <option value="">Pilih Periode ...</option>
                                <option value="1 Bulan">1 Bulan</option>
                                <option value="2 Bulan">2 Bulan</option>
                                <option value="3 Bulan">3 Bulan</option>
                                <option value="4 Bulan">4 Bulan</option>
                                <option value="5 Bulan">5 Bulan</option>
                                <option value="6 Bulan">6 Bulan</option>
                                <option value="> 6 Bulan"> > 6 Bulan</option>
                            </select>
                        </div>
                        <!-- Posisi / Jabatan -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Posisi / Jabatan</span>
                            </label>
                            <input type="text" name="posisi-pengalaman"
                                class="form-control form-control-lg form-control-solid" placeholder="Posisi / Jabatan"
                                value="Pembalap" />
                        </div>
                        <!-- Uraian Tugas utama posisi tersebut -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Uraian Tugas utama posisi tersebut</span>
                            </label>
                            <input type="textarea" name="tugas-pengalaman"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Uraian Tugas utama posisi tersebut"
                                value="Membalap dalam satu musim penuh untuk setiap tahun kontrak" />
                        </div>
                    </div>
                    <div class="modal-footer flex-center">
                        <button type="reset" id="kt_pengalaman_cancel" class="btn btn-light me-3">Batal</button>
                        <button type="submit" id="kt_pengalaman_submit" class="btn btn-primary">
                            <span class="indicator-label">Simpan</span>
                            <span class="indicator-progress">Silahkan Tunggu...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </x-modal>

            <div class="table-responsive mt-5">
                <table id="tb_pengalaman" class="table table-bordered gy-5">
                    <thead>
                        <tr class="text-black fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-60px text-center">No</th>
                            <th class="w-250px text-center">Nama dan Alamat Institusi / Perusahaan</th>
                            <th class="min-w-125px text-center">Periode</th>
                            <th class="min-w-125px text-center">Posisi / Jabatan</th>
                            <th class="min-w-400px text-center">Uraian Tugas utama posisi tersebut</th>
                            <th class="min-w-125px text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-start">Red Bull Racing F1 Team / Milton Keynes, Inggris</td>
                            <td class="text-center">6 Bulan</td>
                            <td class="text-center">Pembalap</td>
                            <td class="text-center">Membalap dalam satu musim penuh untuk setiap tahun kontrak</td>
                            <td class="text-center">
                                <a href="#"
                                    class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Pilih Aksi
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="apps/user-management/users/view.html" class="menu-link px-3">Lihat</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Hapus</a>
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
            <button type="submit" class="btn btn-primary" id="nextButton">Berikutnya</button>
        </div>
    </div>

    <!-- Content 4 -->
    <div id="content4" class="content-section d-none">
        <x-card :header="'Evaluasi Diri'">
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">Nama Perguruan Tinggi</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-muted">STMIK PPKIA Pradnya Paramita</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">Program Studi</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-muted">S1 - Teknologi Informasi</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">Nama Calon</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-muted">Max Verstappen</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">Tempat / Tanggal Lahir</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-muted">Hasselt / 22-05-2002</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">Alamat Rumah</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-muted">Jln. Merdeka No 45, Belanda</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">No Telpon</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-muted">082214909909</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-gray-800 fs-5">Email</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-muted">hatelando@gmail.com</span>
                </div>
            </div>
        </x-card>

        <x-card :header="'Daftar Mata Kuliah'">
            <div class="table-responsive">
                <table id="tb_daftarmk" class="table table-row-bordered gy-5">
                    <thead>
                        <tr class="text-black fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-60px text-center">Nomor</th>
                            <th class="min-w-125px text-center">Kode Mata Kuliah</th>
                            <th class="min-w-125px text-center">Nama Mata Kuliah</th>
                            <th class="min-w-125px text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </x-card>

        <x-modal id="kt_evaluasidiris" title="Evaluasi Diri" size="modal-xl">
            <div class="table-responsive">
                <table id="tb_modalevaluasi1" class="table gy-1">
                    <tbody>
                        <tr>
                            <td class="fw-bold fs-4">Kode Mata Kuliah</td>
                            <td class="fw-bold fs-4">MKT1-0985</td>
                        </tr>
                        <tr>
                            <td class="fw-bold fs-4">Nama Mata Kuliah</td>
                            <td class="fw-bold fs-4">Algoritma dan Kompleksitas</td>
                        </tr>
                        <tr>
                            <td class="fw-bold fs-4">Nama Calon Mahasiswa</td>
                            <td class="fw-bold fs-4">Max Verstappen</td>
                        </tr>
                    </tbody>
                </table>

                <table id="tb_modalevaluasi2" class="table table-bordered gy-3 mt-6">
                    <thead>
                        <tr>
                            <th class="fs-5 fw-bold text-center">No.</th>
                            <th class="fs-5 fw-bold text-center">Kompetensi</th>
                            <th class="fs-5 fw-bold text-center">Sangat Baik</th>
                            <th class="fs-5 fw-bold text-center">Baik</th>
                            <th class="fs-5 fw-bold text-center">Tidak Pernah</th>
                            <th class="fs-5 fw-bold text-center">Bukti Dokumen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fs-5 text-center">1</td>
                            <td class="fs-5">Menjelaskan apa itu efisiensi algoritma</td>
                            <td>
                                <div class="form-check form-check-sm d-flex justify-content-center">
                                    <input class="form-check-input" type="checkbox" value="" id="eval_sb" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-sm d-flex justify-content-center">
                                    <input class="form-check-input" type="checkbox" value="" id="eval_b" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-sm d-flex justify-content-center">
                                    <input class="form-check-input" type="checkbox" value="" id="eval_tp" />
                                </div>
                            </td>
                            <td class="fs-5"><a href="#">Sertifikat1.pdf</a></td>
                        </tr>
                        <tr>
                            <td class="fs-5 text-center">2</td>
                            <td class="fs-5">Menjelaskan apa itu optimasi algoritma</td>
                            <td>
                                <div class="form-check form-check-sm d-flex justify-content-center">
                                    <input class="form-check-input" type="checkbox" value="" id="eval_sb" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-sm d-flex justify-content-center">
                                    <input class="form-check-input" type="checkbox" value="" id="eval_b" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-sm d-flex justify-content-center">
                                    <input class="form-check-input" type="checkbox" value="" id="eval_tp" />
                                </div>
                            </td>
                            <td class="fs-5"><a href="#">Sertifikat2.pdf</a></td>
                        </tr>
                    </tbody>
                </table>

                <div class="modal-footer flex-center">
                    <button type="reset" id="kt_evaluasi_cancel" class="btn btn-light me-3">Batal</button>
                    <button type="submit" id="kt_evaluasi_submit" class="btn btn-primary">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Silahkan Tunggu...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </div>
        </x-modal>

        <div class="d-flex justify-content-between mt-5">
            <button type="submit" class="btn btn-secondary" id="previousButton">Sebelumnya</button>
            <button type="submit" class="btn btn-primary" id="nextButton">Berikutnya</button>
        </div>
    </div>

    <!-- Content 5 -->
    <div id="content5" class="content-section d-none">
        <x-card :header="'Assesmen'">
            <div class="table-responsive">
                <table id="tb_assesmen" class="table table-row-bordered gy-5">
                    <thead>
                        <tr class="text-black fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-60px text-center">Nomor</th>
                            <th class="min-w-125px text-center">Kode Mata Kuliah</th>
                            <th class="min-w-125px text-center">Nama Mata Kuliah</th>
                            <th class="min-w-125px text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">MKT1-0985</td>
                            <td class="text-center">Algoritma dan Kompleksitas</td>
                            <td class="text-center">
                                <div class="badge badge-light-success fw-bold p-3">Selesai</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-center">MKT1-0985</td>
                            <td class="text-center">Algoritma dan Kompleksitas</td>
                            <td class="text-center">
                                <div class="badge badge-light-warning fw-bold p-3">Menunggu</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td class="text-center">MKT1-0985</td>
                            <td class="text-center">Algoritma dan Kompleksitas</td>
                            <td class="text-center">
                                <div class="badge badge-light-warning fw-bold p-3">Menunggu</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td class="text-center">MKT1-0985</td>
                            <td class="text-center">Algoritma dan Kompleksitas</td>
                            <td class="text-center">
                                <div class="badge badge-light-warning fw-bold p-3">Menunggu</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td class="text-center">MKT1-0985</td>
                            <td class="text-center">Algoritma dan Kompleksitas</td>
                            <td class="text-center">
                                <div class="badge badge-light-warning fw-bold p-3">Menunggu</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td class="text-center">MKT1-0985</td>
                            <td class="text-center">Algoritma dan Kompleksitas</td>
                            <td class="text-center">
                                <div class="badge badge-light-warning fw-bold p-3">Menunggu</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td class="text-center">MKT1-0985</td>
                            <td class="text-center">Algoritma dan Kompleksitas</td>
                            <td class="text-center">
                                <div class="badge badge-light-warning fw-bold p-3">Menunggu</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td class="text-center">MKT1-0985</td>
                            <td class="text-center">Algoritma dan Kompleksitas</td>
                            <td class="text-center">
                                <div class="badge badge-light-warning fw-bold p-3">Menunggu</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">9</td>
                            <td class="text-center">MKT1-0985</td>
                            <td class="text-center">Algoritma dan Kompleksitas</td>
                            <td class="text-center">
                                <div class="badge badge-light-warning fw-bold p-3">Menunggu</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">10</td>
                            <td class="text-center">MKT1-0985</td>
                            <td class="text-center">Algoritma dan Kompleksitas</td>
                            <td class="text-center">
                                <div class="badge badge-light-warning fw-bold p-3">Menunggu</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">11</td>
                            <td class="text-center">MKT1-0985</td>
                            <td class="text-center">Algoritma dan Kompleksitas</td>
                            <td class="text-center">
                                <div class="badge badge-light-warning fw-bold p-3">Menunggu</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </x-card>

        <div class="d-flex justify-content-between mt-5">
            <button type="submit" class="btn btn-secondary" id="previousButton">Sebelumnya</button>
            <button type="submit" class="btn btn-primary" id="nextButton">Berikutnya</button>
        </div>
    </div>

    <!-- Content 6 -->
    <div id="content6" class="content-section d-none">
        <x-card :header="'Asesmen Lanjut'">
            <div class="table-responsive">
                <table id="tb_assesmen_lanjut" class="table table-row-bordered gy-5">
                    <thead>
                        <tr class="text-black fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-60px text-center">Nomor</th>
                            <th class="min-w-125px text-center">Kegiatan</th>
                            <th class="min-w-125px text-center">Waktu Pelaksanaan</th>
                            <th class="min-w-125px text-center">Tanggal Pelaksanaan</th>
                            <th class="min-w-125px text-center">Link Ujian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">Assesmen Lanjut</td>
                            <td class="text-center">08.00 - 10.00</td>
                            <td class="text-center">18 September 2024</td>
                            <td class="text-center"><a href="https://www.example.com">https://www.example.com</a></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-center">Assesmen Lanjut</td>
                            <td class="text-center">10.00 - 12.00</td>
                            <td class="text-center">18 September 2024</td>
                            <td class="text-center"><a href="https://www.example.com">https://www.example.com</a></td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td class="text-center">Assesmen Lanjut</td>
                            <td class="text-center">08.00 - 10.00</td>
                            <td class="text-center">19 September 2024</td>
                            <td class="text-center"><a href="https://www.example.com">https://www.example.com</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </x-card>

        <div class="d-flex justify-content-between mt-5">
            <button type="submit" class="btn btn-secondary" id="previousButton">Sebelumnya</button>
            <button type="submit" class="btn btn-primary" id="nextButton">Berikutnya</button>
        </div>
    </div>

    <!-- Content 7 -->
    <div id="content7" class="content-section d-none">
        <x-card :header="'Hasil Asesmen'">
            <div class="table-responsive">
                <table id="tb_hasil" class="table table-row-bordered gy-5">
                    <thead>
                        <tr class="text-black fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-60px text-center">Nomor</th>
                            <th class="min-w-125px text-center">Kode Mata Kuliah</th>
                            <th class="min-w-125px text-center">Nama Mata Kuliah</th>
                            <th class="min-w-125px text-center">SKS</th>
                            <th class="min-w-125px text-center">Keterangan</th>
                            <th class="min-w-125px text-center">Nilai Huruf</th>
                            <th class="min-w-125px text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">MKT1-0985</td>
                            <td class="text-center">Algoritma dan Kompleksitas</td>
                            <td class="text-center">2</td>
                            <td class="text-center">Transfer SKS</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <div class="badge badge-light-success fw-bold p-3">Selesai</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-center">MKT1-0985</td>
                            <td class="text-center">Praktikum Algoritma dan Kompleksitas</td>
                            <td class="text-center">2</td>
                            <td class="text-center">Perolehan SKS</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <div class="badge badge-light-warning fw-bold p-3">Menunggu</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </x-card>

        {{-- <div class="d-flex justify-content-between mt-5">
            <button type="submit" class="btn btn-secondary" id="previousButton">Sebelumnya</button>
            <button type="submit" class="btn btn-primary" id="submitrpl">Simpan</button>
        </div> --}}
    </div>

    <script>
        $(document).ready(function() {
            // Upload Bukti Bayar
            $('#fileInput').on('change', function() {
                const fileName = $(this).prop('files')[0]?.name || 'Belum ada file dipilih';
                $('#fileName').text(fileName);
            });

            // Modal Evaluasi Diri - Batalkan
            $('#kt_evaluasi_cancel').on('click', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: 'Perubahan Anda akan dibatalkan.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, batalkan!',
                    cancelButtonText: 'Tidak'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire('Dibatalkan!', 'Perubahan telah dibatalkan.', 'success');
                    }
                });
            });

            // Modal Evaluasi Diri - Submit
            $('#kt_evaluasi_submit').on('click', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: 'Pastikan data sudah benar sebelum disubmit.',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, submit!',
                    cancelButtonText: 'Tidak'
                }).then((result) => {
                    if (result.isConfirmed) {
                        const submitButton = $('#kt_evaluasi_submit');
                        submitButton.find('.indicator-label').hide();
                        submitButton.find('.indicator-progress').show();

                        setTimeout(() => {
                            submitButton.find('.indicator-label').show();
                            submitButton.find('.indicator-progress').hide();

                            Swal.fire('Berhasil!', 'Data Anda berhasil disubmit.',
                                'success');
                        }, 2000);
                    }
                });
            });

            // Dropdown SKS
            $('.custom-select').on('change', function() {
                $(this).attr('class', 'custom-select ' + $(this).val());
            });
        });
    </script>


@endsection
