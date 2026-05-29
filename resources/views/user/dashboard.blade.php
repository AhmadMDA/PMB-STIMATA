@extends('layouts.user-template')
@section('content')

@section('title')
    Dashboard | {{ Auth::user()->name }}
@endsection

@section('breadcrumb', 'Dashboard')

@section('content')
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
						<option value="D3 - Sistem Informasi (REG PAGI)">D3 - Sistem Informasi (REG PAGI)</option>
						<option value="D3 - Sistem Informasi (REG SORE  18.00-21.00 ONLINE, TERMASUK RPL)">D3 - Sistem Informasi (REG SORE  18.00-21.00 ONLINE, TERMASUK RPL)</option>
						<option value="S1 - Sistem Informasi (REG PAGI)">S1 - Sistem Informasi (REG PAGI)</option>
						<option value="S1 - Sistem Informasi (REG SORE  18.00-21.00 ONLINE, TERMASUK RPL)">S1 - Sistem Informasi (REG SORE  18.00-21.00 ONLINE, TERMASUK RPL)</option>
						<option value="S1 - Teknologi Informasi (REG PAGI)">S1 - Teknologi Informasi (REG PAGI)</option>
						<option value="S1 - Teknologi Informasi (REG SORE  18.00-21.00 ONLINE, TERMASUK RPL)">S1 - Teknologi Informasi (REG SORE  18.00-21.00 ONLINE, TERMASUK RPL)</option>
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

    <div class="row gx-5 gx-xl-10">
		<!--begin::Col-->
		<div class="col-xl-4 mb-10">
			<!--begin::Lists Widget 19-->
			<div class="card card-flush h-xl-100">
				<!--begin::Heading-->
				<div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px" style="background-color:#FFF7E9; border: 2px solid #FF8F00;"  data-bs-theme="light">
					<!--begin::Title-->
					<h3 class="card-title align-items-start flex-column text-primary pt-4">
						<span class="fw-bold fs-2x mb-3">Jalur Masuk</span>
						<div class="fs-6 text-primary">
							<span class="opacity-75">Kamu bisa mendaftar di</span>
							<span class="position-relative d-inline-block">
								<a href="pages/user-profile/projects.html" class="link-white opacity-75-hover fw-bold d-block mb-1" style="color:#0019FF">2 jalur</a>
								<!--begin::Separator-->
								<span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
								<!--end::Separator-->
							</span>
							<span class="opacity-75">yang buka</span>
						</div>
						<div class="mt-4">
							<a href="/dashboard" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_pengajuan">
								<i class="fas fa-plus"></i> Pengajuan
							</a>
						</div>
					</h3>
					<!--end::Title-->
				</div>
				<!--end::Heading-->
				<!--begin::Body-->
				<div class="card-body mt-n20">
					<!--begin::Stats-->
					<div class="mt-n20 position-relative">
						<!--begin::Row-->
						<div class="row g-3 g-lg-6">
							<!--begin::Col-->
							<div class="col-6">
								<!--begin::Items-->
								<div class="bg-opacity-70 rounded-2 px-6 py-5 text-center" style="background-color: #FDEFED; border: 2px solid #EC3D27; position: relative;">
									<!--begin::Stats-->
									<div class="m-0 position-relative" style="z-index: 1;">
										<!--begin::Title-->
										<span class="fw-semibold fs-6 d-block" style="color:#EC3D27">Peserta Didik Baru</span>
										<!--end::Title-->

										<!--begin::Icon with Text Overlay-->
										<div class="position-relative my-6" style="display: inline-block;">
											<!-- Icon as background -->
											<i class="fas fa-times-circle" style="font-size: 50px; color: #EC3D27; opacity: 0.1; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); z-index: 0;"></i>
											
											<!-- Text overlay on top of the icon -->
											<span class="position-relative text-gray-500 fw-semibold fst-italic fs-6" style="z-index: 1;">Tidak Tersedia</span>
										</div>
										<!--end::Icon with Text Overlay-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::Items-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-6">
								<!--begin::Items-->
								<div class="bg-opacity-70 rounded-2 px-6 py-5 text-center" style="background-color: #FDEFED; border: 2px solid #EC3D27; position: relative;">
									<!--begin::Stats-->
									<div class="m-0 position-relative" style="z-index: 1;">
										<!--begin::Title-->
										<span class="fw-semibold fs-6 d-block" style="color:#EC3D27">Beasiswa KIP / Yayasan</span>
										<!--end::Title-->

										<!--begin::Icon with Text Overlay-->
										<div class="position-relative my-6" style="display: inline-block;">
											<!-- Icon as background -->
											<i class="fas fa-times-circle" style="font-size: 50px; color: #EC3D27; opacity: 0.1; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); z-index: 0;"></i>
											
											<!-- Text overlay on top of the icon -->
											<span class="position-relative text-gray-500 fw-semibold fst-italic fs-6" style="z-index: 1;">Tidak Tersedia</span>
										</div>
										<!--end::Icon with Text Overlay-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::Items-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-6">
								<!--begin::Items-->
								<div class="bg-opacity-70 rounded-2 px-6 py-5 text-center" style="background-color: #F0FDF9; border: 2px solid #2BA092; position: relative;">
									<!--begin::Stats-->
									<div class="m-0 position-relative" style="z-index: 1;">
										<!--begin::Title-->
										<span class="fw-semibold fs-6 d-block" style="color:#2BA092">RPL (Rekognisi Pembelajaran)</span>
										<!--end::Title-->

										<!--begin::Icon with Text Overlay-->
										<div class="position-relative my-6" style="display: inline-block;">
											<!-- Icon as background -->
											<i class="fa-solid fa-circle-check" style="font-size: 50px; color: #2BA092; opacity: 0.1; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); z-index: 0;"></i>
											
											<!-- Text overlay on top of the icon -->
											<span class="position-relative text-gray-500 fw-semibold fst-italic fs-6" style="z-index: 1;">Tersedia</span>
										</div>
										<!--end::Icon with Text Overlay-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::Items-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-6">
								<!--begin::Items-->
								<div class="bg-opacity-70 rounded-2 px-6 py-5 text-center" style="background-color: #F0FDF9; border: 2px solid #2BA092; position: relative;">
									<!--begin::Stats-->
									<div class="m-0 position-relative" style="z-index: 1;">
										<!--begin::Title-->
										<span class="fw-semibold fs-6 d-block" style="color:#2BA092">Pindahan / Alih Jenjang</span>
										<!--end::Title-->

										<!--begin::Icon with Text Overlay-->
										<div class="position-relative my-6" style="display: inline-block;">
											<!-- Icon as background -->
											<i class="fa-solid fa-circle-check" style="font-size: 50px; color: #2BA092; opacity: 0.1; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); z-index: 0;"></i>
											
											<!-- Text overlay on top of the icon -->
											<span class="position-relative text-gray-500 fw-semibold fst-italic fs-6" style="z-index: 1;">Tersedia</span>
										</div>
										<!--end::Icon with Text Overlay-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::Items-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Stats-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Lists Widget 19-->
		</div>
		<!--end::Col-->
		<!--begin::Col-->
		<div class="col-xl-8 mb-10">
			<!--begin::Row-->
			<div class="row g-5 g-xl-10">
				<!--begin::Col-->
				<div class="col-xl-6 mb-xl-10">
					<!--begin::Slider Widget 1-->
					<div id="kt_sliders_widget_1_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000">
						<!--begin::Header-->
						<div class="card-header pt-5">
							<!--begin::Title-->
							<h4 class="card-title d-flex align-items-start flex-column">
								<span class="card-label fw-bold text-gray-800">Status Pendaftaran</span>
							</h4>
							<!--end::Title-->
							<!--begin::Toolbar-->
							<div class="card-toolbar">
								<!--begin::Carousel Indicators-->
								<ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
									<li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0" class="active ms-1"></li>
									<li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1" class="ms-1"></li>
									<li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2" class="ms-1"></li>
								</ol>
								<!--end::Carousel Indicators-->
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body py-6">
							<!--begin::Carousel-->
							<div class="carousel-inner mt-n5">
								<!--begin::Item-->
								<div class="carousel-item active show">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center justify-content-center mb-5" style="min-height: 150px;">
										<!--begin::Info-->
										<div class="m-0 text-center">
											<!--begin::Subtitle-->
											<h4 class="fw-bold text-gray-600 mb-3">Rekognisi Pembelajaran Lampau</h4>
											<h2 class="fw-bold mb-3 border rounded p-3" style="background-color: #FFF7E9; border-color: #FF8F00; color: #FF8F00;">Assesmen Lanjut</h2>
											<h6 class="fw-semibold text-gray-500 mb-3">24 September 2024</h6>
											<!--end::Subtitle-->
										</div>
										<!--end::Info-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="carousel-item">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center justify-content-center mb-5" style="min-height: 150px;">
										<!--begin::Info-->
										<div class="m-0 text-center">
											<!--begin::Subtitle-->
											<h4 class="fw-bold text-gray-600 mb-3">Pindahan / Alih Jenjang</h4>
											<h2 class="fw-bold mb-3 border rounded p-3" style="background-color: #FFF7E9; border-color: #FF8F00; color: #FF8F00;">Diproses</h2>
											<h6 class="fw-semibold text-gray-500 mb-3">27 September 2024</h6>
											<!--end::Subtitle-->
										</div>
										<!--end::Info-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="carousel-item">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center justify-content-center mb-5" style="min-height: 150px;">
										<!--begin::Info-->
										<div class="m-0 text-center">
											<!--begin::Subtitle-->
											<h4 class="fw-bold text-gray-600 mb-3">Rekognisi Pembelajaran Lampau</h4>
											<h2 class="fw-bold mb-3 border rounded p-3" style="background-color: #FFF7E9; border-color: #FF8F00; color: #FF8F00;">Assesmen Lanjut</h2>
											<h6 class="fw-semibold text-gray-500 mb-3">24 September 2024</h6>
											<!--end::Subtitle-->
										</div>
										<!--end::Info-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Carousel-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Slider Widget 1-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-6 mb-5 mb-xl-10">
					<!--begin::Slider Widget 2-->
					<div id="kt_sliders_widget_2_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5500">
						<!--begin::Header-->
						<div class="card-header pt-5">
							<!--begin::Title-->
							<h4 class="card-title d-flex align-items-start flex-column">
								<span class="card-label fw-bold text-gray-800">Pengumuman</span>
							</h4>
							<!--end::Title-->
							<!--begin::Toolbar-->
							<div class="card-toolbar">
								<!--begin::Carousel Indicators-->
								<ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
									<li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0" class="active ms-1"></li>
									<li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1" class="ms-1"></li>
									<li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2" class="ms-1"></li>
								</ol>
								<!--end::Carousel Indicators-->
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body py-6">
							<!--begin::Carousel-->
							<div class="carousel-inner">
								<!--begin::Item-->
								<div class="carousel-item active show">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center mb-9">
										<!--begin::Symbol-->
										
										<div class="m-0">
											<!--begin::Subtitle-->
											<span class="text-black">
												<strong>Selamat! </strong>
												Proses pengajuan pendaftaran kamu sudah di tahap 
												<span class="text-warning">Asesmen Lanjut!</span>
												Selanjutnya tinggal menunggu proses selanjutnya!
											</span>
											<h6 class="mt-2">
												12.30 | 05 September 2024
											</h6>
											
										</div>
										<!--end::Info-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="carousel-item">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center mb-9">
										<!--begin::Symbol-->
										
										<div class="m-0">
											<!--begin::Subtitle-->
											<span class="text-black">
												<strong>Selamat! </strong>
												Proses pengajuan pendaftaran kamu sudah di tahap 
												<span class="text-warning">Asesmen Lanjut!</span>
												Selanjutnya tinggal menunggu proses selanjutnya!
											</span>
											<h6 class="mt-2">
												12.30 | 05 September 2024
											</h6>
											
										</div>
										<!--end::Info-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="carousel-item">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center mb-9">
										<!--begin::Symbol-->
										
										<div class="m-0">
											<!--begin::Subtitle-->
											<span class="text-black">
												<strong>Selamat! </strong>
												Proses pengajuan pendaftaran kamu sudah di tahap 
												<span class="text-warning">Asesmen Lanjut!</span>
												Selanjutnya tinggal menunggu proses selanjutnya!
											</span>
											<h6 class="mt-2">
												12.30 | 05 September 2024
											</h6>
											
										</div>
										<!--end::Info-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Carousel-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Slider Widget 2-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Engage widget 4-->
			<div class="card border-transparent" data-bs-theme="light" style="background-color: white;">
				<!--begin::Body-->
				<a href="https://stimata.ac.id/id/stimataxmikrotik2024/" target="_blank">
					<img src="{{ asset('images/iklan.png') }}" alt="Iklan STIMATA x Mikrotik 2024" class="img-fluid" style="cursor: pointer;">
				</a>
				<!--end::Body-->
			</div>
			<!--end::Engage widget 4-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
@endsection