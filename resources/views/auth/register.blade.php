<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
        <base href="../../../" />
		<title>Daftar | PMB STIMATA</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/keen" />
		<meta property="og:site_name" content="Keen by Keenthemes" />
		<link rel="canonical" href="http://preview.keenthemes.com?page=index" />
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->
        <!--begin::Vendor Stylesheets(used for this page only)-->
        <link href="{{ asset('keen/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('keen/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
            type="text/css" />
        <!--end::Vendor Stylesheets-->
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="{{ asset('keen/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('keen/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
		<!--end::Global Stylesheets Bundle-->
		<script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
        </script>
	</head>
	<!--end::Head-->
    
	<!-- begin::Body -->
	<body id="kt_body" class="app-blank app-blank">

		<div class="d-flex flex-column flex-root" id="kt_app_root">
			
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center bg-primary">
					<!--begin::Content-->
					<div class="d-flex flex-column flex-center p-6 p-lg-10 w-100">
						<!--begin::Image-->
						<img class="d-none d-lg-block mx-auto w-150px w-lg-175px w-xl-200px mb-10 mb-lg-20" src="https://stimata.ac.id/media/2023/01/logo-stimata.jpg" alt="" />
						<!--end::Image-->
						<!--begin::Title-->
						<div class="container-fluid d-flex justify-content-center align-items-center">
							<h1 class="text-white fs-1 fs-xl-1 fw-bold text-center">PENDAFTARAN MAHASISWA BARU STIMATA</h1>
						</div>
						<!--end::Title-->
					</div>
					<!--end::Content-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
					<!--begin::Form-->
					<div class="d-flex flex-center flex-column flex-lg-row-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10">
							<!--begin::Form-->
							<form class="form w-100" method="POST" action="{{ route('register') }}" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="/login"> 
								@csrf
								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-gray-900 fw-bolder mb-3">Daftar</h1>
									<!--end::Title-->
									<!--end::Subtitle=-->
								</div>
								<!--begin::Heading-->

                                <div class="fv-row mb-8">
									<input type="text" placeholder="Nama Lengkap" name="name" autocomplete="on" class="form-control bg-transparent" />
								</div>
                                <div class="fv-row mb-8">
									<input type="text" placeholder="Nomor Telepon" name="phone" autocomplete="on" class="form-control bg-transparent" />
								</div>
								<div class="fv-row mb-8">
									<input type="text" placeholder="Email" name="email" autocomplete="on" class="form-control bg-transparent" />
								</div>
								<!--begin::Input group-->
								<div class="fv-row mb-8" data-kt-password-meter="true">
									<!--begin::Wrapper-->
									<div class="mb-1">
										<!--begin::Input wrapper-->
										<div class="position-relative mb-3">
											<input class="form-control bg-transparent" type="password" placeholder="Password" name="password" autocomplete="on" />
											<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="ki-duotone ki-eye-slash fs-2"></i>
												<i class="ki-duotone ki-eye fs-2 d-none"></i>
											</span>
										</div>
										<!--end::Input wrapper-->
										<!--begin::Meter-->
										<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
										</div>
										<!--end::Meter-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Hint-->
									<div class="text-muted">Minimal 8 karakter dengan kombinasi huruf, angka & simbol!</div>
									<!--end::Hint-->
								</div>
								<!--end::Input group=-->
								<!--end::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Repeat Password-->
									<input placeholder="Ulangi Password" name="confirm-password" type="password" autocomplete="on" class="form-control bg-transparent" />
									<!--end::Repeat Password-->
								</div>
								<!--end::Input group=-->
								<!--begin::Accept-->
								<div class="fv-row mb-8">
									<label class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="toc" value="1" />
										<span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">Saya Setuju dengan 
											<a class="ms-1 link-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_2">Ketentuan</a>
										</span>
									</label>
								</div>
								<!--end::Accept-->
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Daftar Sekarang!</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Mohon Menunggu!...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Submit button-->
								<!--begin::Sign up-->
								<div class="text-gray-500 text-center fw-semibold fs-6">Sudah punya akun? 
								<a href="/login" class="link-primary fw-semibold">Masuk</a></div>
								<!--end::Sign up-->
							</form>

							<div class="modal fade" tabindex="-1" id="kt_modal_scrollable_2">
								<div class="modal-dialog modal-dialog-scrollable">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Ketentuan</h5>
											<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
												<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
											</div>
										</div>

										<div class="modal-body">
											<ol>
												<li>Calon mahasiswa harus berusia minimal 17 tahun dan maksimal 25 tahun pada saat pendaftaran.</li>
												<li>Pendaftar wajib memiliki ijazah SMA/SMK/sederajat atau Surat Keterangan Lulus yang sah.</li>
												<li>Setiap calon mahasiswa harus memiliki alamat email aktif dan pribadi untuk proses pendaftaran dan komunikasi.</li>
												<li>Pendaftar diwajibkan memiliki Nomor Induk Kependudukan (NIK) yang valid dan terdaftar di Dukcapil.</li>
												<li>Calon mahasiswa harus mengisi seluruh data pribadi dengan benar dan akurat pada formulir pendaftaran online.</li>
												<li>Pendaftar wajib mengunggah foto diri terbaru dengan latar belakang putih, ukuran 4x6 cm, dalam format JPEG dengan ukuran file maksimal 1 MB.</li>
												<li>Calon mahasiswa harus membuat password akun yang terdiri dari minimal 8 karakter, mengandung huruf besar, huruf kecil, angka, dan simbol.</li>
												<li>Setelah mendaftar, calon mahasiswa wajib melakukan verifikasi akun melalui link yang dikirimkan ke email dalam waktu 24 jam.</li>
												<li>Pendaftar bertanggung jawab penuh atas kerahasiaan akun dan tidak diperkenankan membagikan informasi akun kepada pihak lain.</li>
												<li>Calon mahasiswa wajib menyetujui penggunaan data pribadi oleh pihak universitas sesuai dengan kebijakan privasi yang berlaku.</li>
												<li>Pemberian informasi palsu atau tidak valid dapat mengakibatkan pembatalan pendaftaran atau pencabutan status mahasiswa di kemudian hari.</li>
												<li>Pendaftar wajib memantau email dan akun pendaftaran secara berkala untuk informasi dan pengumuman penting terkait proses penerimaan mahasiswa baru.</li>
												<li>Calon mahasiswa harus mengikuti seluruh tahapan seleksi yang ditetapkan oleh universitas setelah pendaftaran akun berhasil.</li>													<li>Pihak universitas berhak melakukan perubahan pada ketentuan pendaftaran dengan pemberitahuan melalui situs resmi atau email terdaftar.</li>
												<li>Dengan mendaftar dan membuat akun, calon mahasiswa dianggap telah membaca, memahami, dan menyetujui seluruh ketentuan yang berlaku.</li>
											</ol>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Oke</button>
										</div>
									</div>
								</div>
							</div>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Form-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('keen/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('keen/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ asset('keen/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('keen/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/authentication/sign-up/general.js') }}"></script>
	
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>