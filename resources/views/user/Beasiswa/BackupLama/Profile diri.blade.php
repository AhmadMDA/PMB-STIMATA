<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
<base href="../" />
		<title>Pengajuan Beasiswa | STIMATA</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/keen" />
		<meta property="og:site_name" content="Keen by Keenthemes" />
		<link rel="canonical" href="http://preview.keenthemes.comdashboards/online-courses.html" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
        <link href="{{ asset('keen/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('keen/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('keen/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('keen/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    </head>
	<!--end::Head-->
	<!--begin::Body-->
	
</head>
<body id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
    var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <script>
                var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
                </script>
            <x-user-header />
    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <x-user-sidebar />
        <!--begin::Main-->
<!-- Breadcrumb -->
<div class="breadcrumb">
    <a>Beasiswa</a>  >
    <span>Profile Diri</span>
</div>

<!-- Content -->
<div class="content">

    <div class="tabs">
        <a href="http://127.0.0.1:8000/Petunjuk-Beasiswa">Petunjuk</a>
        <a href="http://127.0.0.1:8000/Profile-Diri"class="active">Profil Diri</a>
        <a href="http://127.0.0.1:8000/Bukti-Pembayaran">Bukti Pembayaran</a>
        <a href="http://127.0.0.1:8000/Dokumen-Pelengkap">Dokumen Pelengkap</a>
    </div>

    <div class="profile-container">
        <h2>Profil Diri</h2>
        <div class="profile-content">
            <!-- Data Pribadi -->
            <div class="profile-section">
                <h3>Data Pribadi</h3>
                <p><strong>Nama Lengkap</strong><br>Max Verstappen</p>
                <p><strong>Tempat / Tanggal Lahir</strong><br>Hasselt / 30 September 1997</p>
                <p><strong>Jenis Kelamin</strong><br>Pria</p>
                <p><strong>Kebangsaan</strong><br>-</p>
                <p><strong>Alamat Rumah</strong><br>-</p>
                <p><strong>Nomor Telepon</strong><br>082214909090</p>
                <p><strong>Email</strong><br>hatelando@gmail.com</p>
            </div>
    
            <!-- Data Pendidikan -->
            <div class="profile-section">
                <h3>Data Pendidikan</h3>
                <p><strong>Pendidikan Terakhir</strong><br>Max Verstappen</p>
                <p><strong>Nama Perguruan Tinggi / Sekolah</strong><br>SMK Negeri 5 Hasselt</p>
                <p><strong>Program Studi</strong><br>Rancangan Perangkat Lunak</p>
                <p><strong>Tahun Lulus</strong><br>2018</p>
            </div>
        </div>
        <label class="checkbox" >
            <input type="checkbox"/>
            Saya setuju bahwa profil saya telah sesuai
        </label>
        <div class="next-button-container">
            <a href="http://127.0.0.1:8000/Bukti-Pembayaran" class="next-button">Next</a>
        </div>
    </div>
        </div>
    </div>
</div>
</body>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }
        /* Breadcrumb */
        .breadcrumb {
            padding: 15px;
            background-color: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
        }

        .breadcrumb a {
            color: #f8f9fa;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .breadcrumb span {
            color: #6c757d;
            margin-left: 5px;
        }
      /* Tabs */
      .tabs {
            display: flex;
            background-color: #F1F1F4;
            padding: 10px;
            border-radius: 10px;
            justify-content: space-between;
            width: 95%;
            margin: 0 auto;
        }

        .tabs a {
            color: #6c757d;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .tabs a:hover {
            background-color: #f39c12;
        }

        .tabs a.active {
            background-color: #ffe7d0;
            border: 1px solid #f39c12;
            color: #f39c12;
        }

       .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Styling tabs */
        .tabs ul {
            display: flex;
            list-style-type: none;
            padding: 0;
            border-bottom: 2px solid #ddd;
        }

        .tabs ul li {
            margin-right: 20px;
        }

        .tabs ul li a {
            text-decoration: none;
            padding: 10px 20px;
            display: block;
            border: 1px solid #ddd;
            border-bottom: none;
            border-radius: 5px 5px 0 0;
            background-color: #f5f5f5;
        }

        .tabs ul li.active a {
            background-color: #FF9800;
            color: white;
            font-weight: bold;
        }


        /* Container utama */
        .profile-container {
            padding: 20px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 20px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            width: 95%;
            margin: 20px auto 0 auto;
            height: 90%;
        }

        h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Layout profil */
        .profile-content {
            display: flex;
            justify-content: space-between;
        }

        /* Masing-masing bagian */
        .profile-section {
            width: 45%;
        }

        .profile-section h3 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .profile-section p {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        /* Text dengan format tebal */
        .profile-section p strong {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        /* checkbox */
        .checkbox {
            margin-right: 10px;
            border-color: #f39c12;
            font-size: 17px;
            border: 1px solid;
            border-width: 1px 0 0 0; /* Border hanya di bagian atas */
            margin-top: 20px;
            width: 100%; /* Panjang penuh */
            display: block; /* Memaksa elemen agar dianggap seperti elemen block */
        }

        .checkbox {
            accent-color: #f39c12;
        }

        .next-button-container {
            text-align: right;
            margin-top: 10px;
        }

        .next-button {
            display: inline-block;
            width: 100px;
            padding: 10px;
            background-color: #ff8800;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }

        .next-button:hover {
            background-color: #ff8800;
        }

/* Media Queries */
@media (max-width: 768px) {
    .container {
        padding: 10px;
    }

    .row {
        flex-direction: column;
    }

    .col-md-6 {
        margin-bottom: 20px;
    }

    .tabs ul {
        flex-direction: column;
    }

    .tabs ul li {
        margin-right: 0;
        margin-bottom: 10px;
    }
}
   
</style>
		<script>var hostUrl = "assets/";</script>
        <script src="{{ asset('keen/assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('keen/assets/js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('keen/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script src="{{ asset('keen/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>


		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

        <script src="{{ asset('keen/assets/js/widgets.bundle.js') }}"></script>
        <script src="{{ asset('keen/assets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('keen/assets/js/custom/utilities/modals/users-search.js') }}"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>