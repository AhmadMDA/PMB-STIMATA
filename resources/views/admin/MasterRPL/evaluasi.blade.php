@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-tools">
            <label class="text-gray-700 font-medium">Filter :</label><div class="flex items-center space-x-2"></div>
            
    <div class="relative">
    <select class="appearance-none bg-gray-200 text-gray-600 px-4 py-2 pr-8 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-300">
      <option>Nama Form</option>
      <option>Form 1</option>
      <option>Form 2</option>
      <option>Form 3</option>
    </select>
    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
    </div>
  </div>
</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table gs-7 gy-7 gx-7 table-row-bordered table-row-gray-{100-900}">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-900 border-bottom border-gray-400">
                            <th>No</th>
                            <th>Kode Matkul</th>
                            <th>Matkul</th>
                            <th>SKS</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">12345</td>
                            <td class="align-middle">Sistem Basis Data</td>
                            <td class="align-middle">20</td>
                            <td class="align-middle text-center">
                                <button data-bs-toggle="modal"
                                data-bs-target="#modal_evaluasi"class="btn btn-primary btn-sm text-center">Tambah</button>
                                <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal" class="btn btn-danger btn-sm text-center">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                        <td class="align-middle">2</td>
                            <td class="align-middle">12345</td>
                            <td class="align-middle">Sistem Basis Data</td>
                            <td class="align-middle">20</td>
                            <td class="align-middle text-center">
                                <a href="/admin/prosesrpl/daftar/edit" class="btn btn-primary btn-sm text-center" >Tambah</a>
                                <a href="/admin/prosesrpl/daftar/edit" class="btn btn-danger btn-sm ">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                        <td class="align-middle">3</td>
                            <td class="align-middle">12345</td>
                            <td class="align-middle">Sistem Basis Data</td>
                            <td class="align-middle">20</td>
                            <td class="align-middle text-center">
                                <a href="/admin/prosesrpl/daftar/edit" class="btn btn-primary btn-sm text-center" >Tambah</a>
                                <a href="/admin/prosesrpl/daftar/edit" class="btn btn-danger btn-sm ">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
                </div>
                <div class="modal fade modal-xl" tabindex="-1" id="modal_evaluasi">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Formulir Evaluasi Diri</h3>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body p-9">
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label for="kode_mata_kuliah" class="col-lg-4 fw-semibold text-muted">KODE MATA KULIAH</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <input type="text" id="kode_mata_kuliah" class="form-control" placeholder="Masukkan Kode Mata Kuliah">
                    </div>
                    <!--end::Col-->
                </div>

                <div class="row mb-10">
                    <!--begin::Label-->
                    <label for="nama_mata_kuliah" class="col-lg-4 fw-semibold text-muted">NAMA MATA KULIAH</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <input type="text" id="nama_mata_kuliah" class="form-control" placeholder="Masukkan Nama Mata Kuliah">
                    </div>
                    <!--end::Col-->
                </div>

                <!-- Tabel yang ada tetap dipertahankan -->
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle border-dark" id="evaluationTable">
                        <thead>
                            <tr class="fw-semibold fs-6">
                                <th class="align-middle" rowspan="2">Kemampuan Akhir yang Diharapkan / Capaian Pembelajaran Mata Kuliah</th>
                                <th class="align-middle" colspan="3">Profisiensi pengetahuan dan keterampilan saat ini</th>
                                <th class="align-middle" colspan="4">Hasil Evaluasi Asesor</th>
                                <th class="align-middle" rowspan="2">Bukti dokumen yang disampaikan</th>
                                <th class="align-middle" rowspan="2">Aksi</th> <!-- Kolom untuk Hapus -->
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
                                <td class="align-middle text-start">Menjelaskan apa itu efisiensi algoritma dan pentingnya analisis algoritma</td>
                                <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                <td class="align-middle"><input type="checkbox" class="form-check-input" checked disabled></td>
                                <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                <td class="align-middle"><input type="checkbox" class="form-check-input" disabled></td>
                                <td class="align-middle">Sertifikat_Algoritma.pdf</td>
                                <td class="align-middle">
                                    <button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(this)">Hapus</button>
                                </td>
                            </tr>
                            <!-- Tambahan baris lainnya -->
                        </tbody>
                    </table>
                </div>

                <!-- Tombol Tambah Kolom -->
                <button type="button" class="btn btn-secondary mt-3" onclick="addRow()">Tambah Kolom</button>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">Kembali</button>
                <button type="button" class="btn btn-primary" onclick="saveData()">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    function addRow() {
        // Ambil tabel dan buat baris baru
        const table = document.getElementById("evaluationTable").getElementsByTagName("tbody")[0];
        const newRow = table.insertRow();

        // Tambahkan sel ke baris baru
        let cell1 = newRow.insertCell(0);
        cell1.innerHTML = '<input type="text" class="form-control" placeholder="Deskripsi Capaian">';

        // Tambahkan checkbox untuk kolom "Profisiensi"
        for (let i = 1; i <= 7; i++) {
            let cell = newRow.insertCell(i);
            cell.className = "align-middle";
            cell.innerHTML = '<input type="checkbox" class="form-check-input">';
        }

        // Tambahkan kolom "Bukti Dokumen"
        let cell9 = newRow.insertCell(8);
        cell9.innerHTML = '<input type="text" class="form-control" placeholder="Nama Dokumen">';

        // Tambahkan kolom "Aksi" dengan tombol Hapus
        let cell10 = newRow.insertCell(9);
        cell10.className = "align-middle";
        cell10.innerHTML = '<button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(this)">Hapus</button>';
    }

    function deleteRow(button) {
        // Hapus baris saat tombol Hapus ditekan
        const row = button.closest("tr");
        row.remove();
    }

    function saveData() {
        // Fungsi untuk menyimpan data, di sini Anda bisa menambahkan logika penyimpanan
        alert("Data berhasil disimpan!");
    }
</script>



            </div>
        </div>
    </div>
    
@endsection
@push('style')
    @livewireStyles
@endpush
@push('script')
    @livewireScripts
@endpush