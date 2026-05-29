@extends('layouts.user-template')
@section('content')

@section('title')
    Pengajuan | {{ Auth::user()->name }}
@endsection

@section('breadcrumb', 'Pengajuan')

@section('content')

    <!-- Modal Pengajuan -->
    <x-modal id="kt_pengajuan" title="Pengajuan" size="modal-lg">
		<form class="form" action="#" id="kt_form_pengajuan">
			<div class="scroll-y me-n7 pe-7" id="kt_pengajuan_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_pengajuan_header" data-kt-scroll-wrappers="#kt_pengajuan_scroll" data-kt-scroll-offset="300px">
				<!-- Jalur Masuk -->
				<div class="d-flex flex-column mb-5 fv-row">
					<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
						<span class="required">Jalur Masuk</span>
						<span class="ms-1" data-bs-toggle="tooltip" title="Pilih jalur masuk sesuai yang kamu inginkan">
							<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
							</i>
						</span>
					</label>
					<select name="jalur" data-control="select2" data-dropdown-parent="#kt_pengajuan" data-placeholder="Pilih Jalur Masuk..." class="form-select form-select-solid">
						<option value="">Pilih Jalur Masuk...</option>
						<option value="PDB">Peserta Didik Baru</option>
						<option value="Beasiswa">Beasiswa KIP / Yayasan</option>
						<option value="RPL">Rekognisi Pembelajaran Lampau (RPL)</option>
						<option value="Pindahan">Pindahan / Alih Jenjang</option>
					</select>
				</div>
				<!-- Semester Masuk -->
				<div class="d-flex flex-column mb-5 fv-row">
					<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
						<span class="required">Semester Masuk</span>
						<span class="ms-1" data-bs-toggle="tooltip" title="Pilih semester masuk sesuai yang kamu inginkan">
							<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
							</i>
						</span>
					</label>
					<select name="semester" data-control="select2" data-dropdown-parent="#kt_pengajuan" data-placeholder="Pilih Semester Masuk..." class="form-select form-select-solid">
						<option value="">Pilih Semester Masuk...</option>
						<option value="Ganjil">Ganjil</option>
						<option value="Genap">Genap</option>
					</select>
				</div>
				<!-- Tahun Akademik Masuk -->
				<div class="d-flex flex-column mb-5 fv-row">
					<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
						<span class="required">Tahun Akademik Masuk</span>
						<span class="ms-1" data-bs-toggle="tooltip" title="Pilih tahun akademik sesuai yang kamu inginkan">
							<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
							</i>
						</span>
					</label>
					<select name="tahun" data-control="select2" data-dropdown-parent="#kt_pengajuan" data-placeholder="Pilih Tahun Akademik..." class="form-select form-select-solid">
						<option value="">Pilih Tahun Akademik...</option>
						<option value="2024/2025">2024 / 2025</option>
						<option value="2025/2026">2025 / 2026</option>
						<option value="2026/2027">2026 / 2027</option>
					</select>
				</div>
				<!-- Program Studi -->
				<div class="d-flex flex-column mb-5 fv-row">
					<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
						<span class="required">Program Studi</span>
						<span class="ms-1" data-bs-toggle="tooltip" title="Pilih program studi sesuai yang kamu inginkan">
							<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
							</i>
						</span>
					</label>
					<select name="prodi" data-control="select2" data-dropdown-parent="#kt_pengajuan" data-placeholder="Pilih Program Studi..." class="form-select form-select-solid">
						<option value="">Pilih Program Studi...</option>
						<option value="D3 Sistem Informasi (REG PAGI)">D3 - Sistem Informasi (REG PAGI)</option>
						<option value="D3 Sistem Informasi (REG SORE  18.00-21.00 ONLINE, TERMASUK RPL)">D3 - Sistem Informasi (REG SORE  18.00-21.00 ONLINE, TERMASUK RPL)</option>
						<option value="S1 Sistem Informasi (REG PAGI)">S1 - Sistem Informasi (REG PAGI)</option>
						<option value="S1 Sistem Informasi (REG SORE  18.00-21.00 ONLINE, TERMASUK RPL)">S1 - Sistem Informasi (REG SORE  18.00-21.00 ONLINE, TERMASUK RPL)</option>
						<option value="S1 Teknologi Informasi (REG PAGI)">S1 - Teknologi Informasi (REG PAGI)</option>
						<option value="S1 Teknologi Informasi (REG SORE  18.00-21.00 ONLINE, TERMASUK RPL)">S1 - Teknologi Informasi (REG SORE  18.00-21.00 ONLINE, TERMASUK RPL)</option>
					</select>
				</div>
			</div>
			<div class="modal-footer flex-center">
				<button type="reset" id="kt_pengajuan_cancel" class="btn btn-light me-3">Batal</button>
				<button type="submit" id="kt_pengajuan_submit" class="btn btn-primary">
					<span class="indicator-label">Daftar</span>
					<span class="indicator-progress">Silahkan Tunggu... 
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				</button>
			</div>
		</form>
	</x-modal>

	<x-card :header="'Daftar Pengajuan Mahasiswa'">
		<x-slot name="addOn">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_pengajuan">
				<i class="ki-duotone ki-plus fs-2"></i>Pengajuan
			</button>
		</x-slot>

		<div class="table-responsive">
			<table id="tb_pengajuan" class="table table-row-bordered gy-5">
				<thead>
					<tr class="text-black fw-bold fs-7 text-uppercase gs-0">
						<th class="min-w-125px text-center">Nama Mahasiswa</th>
						<th class="min-w-125px text-center">Jenis Masuk</th>
						<th class="min-w-125px text-center">Semester Masuk</th>
						<th class="min-w-125px text-center">Tahun Akademik</th>
						<th class="min-w-125px text-center">Program Studi</th>
						<th class="min-w-125px text-center">Status</th>
						<th class="min-w-100px text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Max Verstappen</td>
						<td class="text-center">Rekognisi Pembelajaran Lampau</td>
						<td class="text-center">Ganjil</td>
						<td class="text-center">2024 / 2025</td>
						<td class="text-center">S1 - Teknologi Informasi</td>
						<td class="text-center">
							<div class="badge badge-light-purple fw-bold p-3">Asesmen Lanjut</div>
						</td>
						<td class="text-center">
							<a href="/pengajuan/rpl/" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" >Lihat Detail 
						</td>
					</tr>
					<tr>
						<td>Max Verstappen</td>
						<td class="text-center">Beasiswa</td>
						<td class="text-center">Ganjil</td>
						<td class="text-center">2024 / 2025</td>
						<td class="text-center">S1 - Teknologi Informasi</td>
						<td class="text-center">
							<div class="badge badge-light-green fw-bold p-3">Terdaftar</div>
						</td>
						<td class="text-center">
							<a href="/pengajuan/beasiswa/" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" >Lihat Detail 
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</x-card>

@endsection