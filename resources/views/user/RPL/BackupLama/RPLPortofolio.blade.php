<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
<base href="../" />
		<title>Pengajuan RPL| STIMATA</title>
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

        {{-- modal --}}
        <div id="educationModal" class="modal">
            <div class="modal-content">
                <h3>Riwayat Pendidikan</h3>
                <div class="form-group">
                    <label for="school_name">Nama Sekolah</label>
                    <input type="text" id="school_name" name="school_name" value="SMK Negeri 5 Hasselt">
                </div>
                <div class="form-group">
                    <label for="year">Tahun</label>
                    <input type="text" id="year" name="year" value="2018">
                </div>
                <div class="form-group">
                    <label for="major">Jurusan / Program Studi</label>
                    <input type="text" id="major" name="major" value="Rekayasa Perangkat Lunak">
                </div>
                <div class="form-group">
                    <button type="button" id="save-education">Daftar</button>
                    <button type="button" id="close-modal">Batal</button>
                </div>
            </div>
        </div>
        
    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a>Rekognisi Pembelajaran Lampau</a>  >
        <span>Portofolio</span>
    </div>

    <!-- Content -->
    <div class="content">

        <!-- Tabs -->
        <div class="tabs">
            <a href="http://127.0.0.1:8000/Petunjuk-RPL">Petunjuk</a>
            <a href="http://127.0.0.1:8000/Aplikasi">Aplikasi</a>
            <a href="http://127.0.0.1:8000/Portofolio" class="active">Portofolio</a>
            <a href="http://127.0.0.1:8000/Evaluasi-Diri">Evaluasi Diri</a>
            <a href="http://127.0.0.1:8000/Assesmen">Asesmen</a>
            <a href="http://127.0.0.1:8000/Assesmen-Lanjut">Asesmen Lanjut</a>
            <a href="http://127.0.0.1:8000/Hasil-Asesmen">Hasil Asesmen</a>
        </div>
        <div class="container">
            <h2>Portfolio Submission</h2>

            <!-- Identitas Diri Section -->
            <h3>Identitas Diri</h3>
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <span>Max Verstappen</span>
                </div>

                <div class="form-group">
                    <label for="birth">Tempat / tgl. Lahir</label>
                    <span>Hasselt / 30 September 1997</span>
                </div>

                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <span>Pria</span>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status">
                        <option value="Lajang" selected>Lajang</option>
                        <option value="Menikah">Menikah</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="religion">Agama</label>
                    <span>Kristen</span>
                </div>

                <div class="form-group">
                    <label for="job">Pekerjaan</label>
                    <select id="job" name="job">
                        <option value="Mahasiswa" selected>Mahasiswa</option>
                        <option value="Pekerja">Pekerja</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="address">Alamat Rumah</label>
                    <span>Jln. Merdeka No 45, Belanda</span>
                </div>

                <div class="form-group">
                    <label for="phone">No Telpon</label>
                    <span>082214909909</span>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <span>hatelando@gmail.com</span>
                </div>
        </div>

         <!-- Riwayat Pendidikan -->
         <div class="education-section">
            <h2>Riwayat Pendidikan</h2>
            <button class="add-btn">
                <span class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8" fill="white" stroke="#FF9F00" stroke-width="2"></circle>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" fill="#FF9F00"/>
                    </svg>
                </span>Tambah Data</button>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Sekolah</th>
                        <th>Tahun</th>
                        <th>Jurusan / Program Studi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>SMK Negeri 5 Hasselt</td>
                        <td>2018</td>
                        <td>Rancangan Perangkat Lunak</td>
                        <td>
                            <button class="action-btn edit-btn">✎</button>
                            <button class="action-btn delete-btn">🗑</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Institut Teknologi Belanda</td>
                        <td>2020</td>
                        <td>Teknik Informatika</td>
                        <td>
                            <button class="action-btn edit-btn">✎</button>
                        <button class="action-btn delete-btn">🗑</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button class="save-btn">Simpan</button>
        </div>

        <!-- Pelatihan Profesional -->
        <div class="training-section">
            <h2>Pelatihan Profesional</h2>
            <button class="add-btn">
                <span class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8" fill="white" stroke="#FF9F00" stroke-width="2"></circle>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" fill="#FF9F00"/>
                    </svg>
                </span>Tambah Data</button>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Pelatihan</th>
                        <th>Penyelenggara</th>
                        <th>Jangka Waktu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Dalam Negeri</td>
                        <td>Red Bull Racing F1 Team</td>
                        <td>5 Bulan</td>
                        <td>
                            <button class="action-btn edit-btn">✎</button>
                        <button class="action-btn delete-btn">🗑</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button class="save-btn">Simpan</button>
        </div>

                <!-- Penghargaan Section (Dynamic Table) -->
       <!-- Penghargaan Section -->
       <div class="Penghargaan-section">
        <h2>Penghargaan</h2>
        <button class="add-btn" id="add-award">
            <span class="icon-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" fill="white" stroke="#FF9F00" stroke-width="2"></circle>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" fill="#FF9F00"/>
                </svg>
            </span>Tambah Penghargaan</button>
        <table id="awards-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Bentuk Penghargaan</th>
                    <th>Pemberi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="awards-body">
                <tr>
                    <td>1</td>
                    <td><input type="text" name="award_name[]"></td>
                    <td><input type="text" name="award_giver[]"></td>
                    <td>
                        <button class="action-btn edit-btn">✎</button>
                        <button class="action-btn delete-btn">🗑</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <button class="save-btn" type="submit">Simpan</button>
    </div>

    <!-- Organisasi Profesi / Ilmiah Section -->
    <div class="Organisasi-section">
        <h2>Organisasi Profesi / Ilmiah</h2>
        <button class="add-btn" id="add-organization">
                        <span class="icon-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" fill="white" stroke="#FF9F00" stroke-width="2"></circle>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" fill="#FF9F00"/>
                </svg>
            </span></i>Tambah Data</button>
        <table id="organization-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis / Nama Organisasi</th>
                    <th>Jabatan / Jenjang Keanggotaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="organization-body">
                <tr>
                    <td>1</td>
                    <td><input type="text" name="organization_name[]"></td>
                    <td><input type="text" name="position[]"></td>
                    <td>
                        <button class="action-btn edit-btn">✎</button>
                        <button class="action-btn delete-btn">🗑</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <button class="save-btn" type="submit">Simpan</button>
    </div>

    <!-- Daftar Riwayat Pekerjaan / Pengalaman Kerja Section -->
    <div class="Pekerjaan-section">
        <h2>Daftar Riwayat Pekerjaan / Pengalaman Kerja</h2>
        <p>Pada bagian ini, isi dengan pengalaman kerja yang anda miliki yang relevan dengan minat studi yang akan diambil. Tambahkan data pengalaman kerja saudara dimulai dari urutan paling akhir (terakhir).</p>
        <button class="add-btn" id="add-work-experience">
            <span class="icon-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" fill="white" stroke="#FF9F00" stroke-width="2"></circle>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" fill="#FF9F00"/>
                </svg>
            </span>Tambah Data</button>
        <table id="work-experience-table">
            <table>
                <table>
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama dan Alamat Institusi / Perusahaan</th>
                        <th>Periode</th>
                        <th>Posisi / Jabatan</th>
                        <th>Uraian Tugas utama posisi tersebut</th>
                        <th>Bukti</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Red Bull Racing F1 Team / Milton Keynes, Inggris</td>
                        <td>6 Bulan</td>
                        <td>Programmer</td>
                        <td>Uraian Tugas utama posisi tersebut</td>
                        <td>
                          <!-- View button -->
                          <button class="action-btn view-btn">👁</button>
                        </td>
                        <td>
                          <!-- Edit button -->
                          <button class="action-btn edit-btn">✎</button>
                
                          <!-- Delete button -->
                          <button class="action-btn delete-btn" >🗑</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
        <button class="save-btn" type="submit">Simpan</button>
    </div>
</div>

</body>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 10;
        padding: 0;
    }
    
    /* Modal Container */
    .modal {
        display: none; /* Hidden by default */
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.5);
        justify-content: center;
        align-items: center;
    }

    /* Modal Content */
    .modal-content {
        background-color: #fff;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 40%;
        border-radius: 8px;
        text-align: left;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }
    .edit-btn {
        color: #ffa500;
        border: 1px solid #f39c12;
        background-color: #ffffff;
        font-size: 25px; /* Increase the font size */
        width: 50px; /* Adjust the width */
        height: 50px; /* Adjust the height */
        border-radius: 7px;
    }

    .view-btn {
        color: #87ceeb;
        border: 1px solid #87ceeb;
        background-color: #ffffff;
        font-size: 25px; /* Increase the font size */
        width: 50px; /* Adjust the width */
        height: 50px; /* Adjust the height */
        border-radius: 7px;
    }

    .delete-btn {
        color: #ff4500;
        border: 1px solid #ff4500;
        background-color: #ffffff;
        font-size: 25px; /* Increase the font size */
        width: 50px; /* Adjust the width */
        height: 50px; /* Adjust the height */
        font-weight: bold;
        border-radius: 7px;
    }

    .save-btn {
        padding: 10px 20px;
        border: none;
        background-color: orange;
        color: white;
        cursor: pointer;
        border-radius: 4px;
    }

    button:hover {
        background-color: darkorange;
    }

    #close-modal {
        background-color: gray;
    }

    #close-modal:hover {
        background-color: darkgray;
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
        .section {
            width: 60%;
            margin: 0 auto;
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: left;
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .form-group label {
            width: 30%;
            font-weight: bold;
        }

        .form-group span, .form-group input, .form-group select {
            width: 65%;
        }

        input[type="text"], input[type="email"], select {
            padding: 8px;
            font-size: 1em;
            border-radius: 4px;
            border: 1px solid #ccc;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="text"]:disabled, input[type="email"]:disabled {
            background-color: #f1f1f1;
        }

        select {
            cursor: pointer;
            width: 50%;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 95%;
            margin: 20px auto 0 auto;
        }

        /* Styling untuk setiap section */
        .education-section {
            margin-bottom: 40px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #ffffff;
            width: 95%;
            margin: 20px auto 0 auto;
            height: 19%;
        }
        .training-section{
            margin-bottom: 40px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #ffffff;
            width: 95%;
            margin: 20px auto 0 auto;
            height: 16%;
        }
        .Organisasi-section{
            margin-bottom: 40px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #ffffff;
            width: 95%;
            margin: 20px auto 0 auto;
            height: 16%;
        }
        .Penghargaan-section{
            margin-bottom: 40px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #ffffff;
            width: 95%;
            margin: 20px auto 0 auto;
            height: 16%;
        }
        .Pekerjaan-section{
            margin-bottom: 50px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #ffffff;
            width: 95%;
            margin: 20px auto 0 auto;
            height: 18%;
        }
        h2 {
            margin-bottom: 15px;
            color: #333;
        }
 

        .add-btn, .save-btn {
            /* background-color: #FF9F00; */
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }




        .save-btn {
            float: right;
        }

        .add-btn:hover, .save-btn:hover, .edit-btn:hover, .delete-btn:hover {
            opacity: 0.8;
        }
        /* Style for the SVG circle icon */
        .icon-wrapper svg {
            width: 28px;
            height: 28px;
            margin-right: 8px;
            vertical-align: middle;
        }

        .add-btn {
            display: inline-flex;
            align-items: center;
            padding: 10px 15px;
            background-color: #FF9F00;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-btn:hover .icon-wrapper svg circle {
            fill: #FF9F00; /* Ubah warna lingkaran menjadi oranye saat hover */
        }

        .add-btn:hover .icon-wrapper svg path {
            fill: white; /* Ubah warna ikon "+" menjadi putih saat hover */
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
        .add-btn i, .add-btn svg {
            margin-right: 8px;
            vertical-align: middle;
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
        <script>
            document.getElementById('add-organization').addEventListener('click', function() {
            const organizationBody = document.getElementById('organization-body');
            const rowCount = organizationBody.rows.length + 1;
            const newRow = `<tr>
                                <td>${rowCount}</td>
                                <td><input type="text" name="organization_name[]"></td>
                                <td><input type="text" name="position[]"></td>
                                <td><button type="button" class="remove-row">Hapus</button></td>
                            </tr>`;
            organizationBody.insertAdjacentHTML('beforeend', newRow);
        });

        document.getElementById('add-work-experience').addEventListener('click', function() {
            const workExperienceBody = document.getElementById('work-experience-body');
            const rowCount = workExperienceBody.rows.length + 1;
            const newRow = `<tr>
                                <td>${rowCount}</td>
                                <td><input type="text" name="company_name[]"></td>
                                <td><input type="text" name="period[]"></td>
                                <td><input type="text" name="job_position[]"></td>
                                <td><input type="text" name="task_description[]"></td>
                                <td><input type="file" name="evidence[]"></td>
                                <td><button type="button" class="remove-row">Hapus</button></td>
                            </tr>`;
            workExperienceBody.insertAdjacentHTML('beforeend', newRow);
        });

        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-row')) {
                e.target.closest('tr').remove();
            }
        });

            document.getElementById('add-training').addEventListener('click', function() {
                const trainingBody = document.getElementById('training-body');
                const rowCount = trainingBody.rows.length + 1;
                const newRow = `<tr>
                                    <td>${rowCount}</td>
                                    <td><input type="text" name="training_name[]"></td>
                                    <td><input type="text" name="organizer[]"></td>
                                    <td><input type="text" name="duration[]"></td>
                                    <td><button type="button" class="remove-row">Hapus</button></td>
                                </tr>`;
                trainingBody.insertAdjacentHTML('beforeend', newRow);
            });
    
            document.getElementById('add-award').addEventListener('click', function() {
                const awardsBody = document.getElementById('awards-body');
                const rowCount = awardsBody.rows.length + 1;
                const newRow = `<tr>
                                    <td>${rowCount}</td>
                                    <td><input type="text" name="award_name[]"></td>
                                    <td><input type="text" name="award_giver[]"></td>
                                    <td><button type="button" class="remove-row">Hapus</button></td>
                                </tr>`;
                awardsBody.insertAdjacentHTML('beforeend', newRow);
            });
    
            // Event delegation to handle dynamically added remove buttons
            document.addEventListener('click', function(e) {
                if (e.target && e.target.classList.contains('remove-row')) {
                    e.target.closest('tr').remove();
                }
            });
        </script>
        \<script>
            // Get the modal element
            var modal = document.getElementById("educationModal");
        
            // Get the button that opens the modal
            var btn = document.getElementById("add-organization");
        
            // Get the <span> element that closes the modal
            var closeBtn = document.getElementById("close-modal");
        
            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modal.style.display = "flex";
            }
        
            // When the user clicks on <span> (x), close the modal
            closeBtn.onclick = function() {
                modal.style.display = "none";
            }
        
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
	</body>
	<!--end::Body-->
</html>