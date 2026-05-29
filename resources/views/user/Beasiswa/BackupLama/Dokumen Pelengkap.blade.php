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
    <span>Bukti Pembayaran</span>
</div>

<!-- Content -->
<div class="content">

    <!-- Tabs -->
    <div class="tabs">
        <a href="http://127.0.0.1:8000/Petunjuk-Beasiswa">Petunjuk</a>
        <a href="http://127.0.0.1:8000/Profile-Diri">Profil Diri</a>
        <a href="http://127.0.0.1:8000/Bukti-Pembayaran">Bukti Pembayaran</a>
        <a href="http://127.0.0.1:8000/Dokumen-Pelengkap"class="active">Dokumen Pelengkap</a>
    </div>

    <div class="container">
        <h2>Dokumen Pelengkap</h2>
        <p>Upload dokumen atau berkas sesuai dengan ketentuan / petunjuk dengan menekan tombol tambah dokumen</p>
        <button class="btn btn-orange" id="openModalBtn">Tambah Dokumen</button>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dokumen</th>
                    <th>Ukuran</th>
                    <th>Jenis Dokumen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ijazah terakhir Max Verstappen</td>
                    <td>2.5 mb</td>
                    <td><span class="badge badge-orange">Ijazah Terakhir</span></td>
                    <td>
                        <button class="action-btn edit-btn">✎</button>
                        <button class="action-btn view-btn">👁</button>
                        <button class="action-btn delete-btn">🗑</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Transkip Nilai Max Verstappen</td>
                    <td>3.9 mb</td>
                    <td><span class="badge badge-blue">Transkip Nilai</span></td>
                    <td>
                        <button class="action-btn edit-btn">✎</button>
                        <button class="action-btn view-btn">👁</button>
                        <button class="action-btn delete-btn">🗑</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <button class="btn btn-next" id="nextBtn">Next</button>
    </div>

    <!-- Modal for Upload Document -->
    <div class="modal" id="uploadModal">
        <div class="modal-content">
            <span class="close-btn" id="closeModalBtn">&times;</span>
            <h3>Upload Dokumen</h3>
            
            <form id="uploadForm">
                <label for="jenis">Jenis</label>
                <select id="jenis">
                    <option>Ijazah Terakhir</option>
                    <option>Transkip Nilai</option>
                </select>
                
                <label for="namaDokumen">Nama Dokumen</label>
                <input type="text" id="namaDokumen" value="Ijazah terakhir Max Verstappen">
    
                <label for="uploadFile">Upload</label>
                <div class="upload-section">
                    <label for="fileInput" class="btn btn-orange">Pilih File (Max 5 mb)</label>
                    <input type="file" id="fileInput" style="display:none;">
                    <span class="file-name" id="fileName">Tidak ada file yang dipilih</span>
                </div>
                <p>Tipe file: png, jpg, jpeg, pdf</p>
    
                <div class="modal-actions">
                    <button class="btn btn-outline" type="button" id="cancelUpload">Batal</button>
                    <button class="btn btn-orange" type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal2" id="confirmationModal">
        <div class="modal-content1">
            <div class="icon-container">
                <div class="alert-icon">!</div>
            </div>
            <p class="terang">Apakah kamu yakin menyimpan formulir?</p>
            
            <div class="modal-actions">
                <button class="btn btn-outline" id="cancelConfirm">Batal</button>
                <button class="btn btn-orange" id="confirmSave">Simpan</button>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal2" id="successModal1" style="display: none;">
        <div class="modal-content1">
            <div class="icon-container">
                <div class="success-icon">✔</div>
            </div>
            <p class="terang1">Formulir Berhasil Disimpan!</p>
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

        .container {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 95%;
            margin: 25px auto 0 auto;
            height: 86%;
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            margin-top: 20px
        }

        table thead {
            background-color: #f0f0f0;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            font-size: 14px;
            color: #333;
        }

        table td {
            font-size: 13px;
            color: #666;
        }

        .badge {
            padding: 4px 8px;
            border-radius: 4px;
            color: white;
            font-size: 12px;
        }

        .badge-orange {
            background-color: #ffa500;
        }

        .badge-blue {
            background-color: #87ceeb;
        }

        .edit-btn {
            color: #ffa500;
        }

        .view-btn {
            color: #87ceeb;
        }

        .delete-btn {
            color: #ff4500;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 14px;
            cursor: pointer;
        }

        .btn-orange {
            background-color: #ff8800;
        }

        .btn-outline {
            background-color: white;
            color: #ff8800;
            border: 1px solid #ff8800;
        }

        .btn-next {
            background-color: #ff8800;
            float: right;
        }

        .btn:hover {
            opacity: 0.9;
        }
        /* upload tambah  */
        .modal2 {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 40%;
            background-color: white;
            box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            z-index: 1000;
            display: none;
            height: 40%;
        }

        /* upload dokumen  */
        .modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 45%;
            background-color: white;
            box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            z-index: 1000;
            display: none;
            height: 70%;
        }

        .modal-content {
            padding: 20px;
            border-radius: 8px;
            text-align: left;

        }
        .modal-content1 {
            padding: 20px;
            border-radius: 8px;
            text-align: left;

        }

        /* Close Button */
        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 24px;
            color: #333;
            cursor: pointer;
        }

        /* Title */
        .modal-content h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
        }

        /* Labels */
        .modal-content label {
            font-size: 14px;
            color: #666;
            display: block;
            margin-bottom: 8px;
        }

        /* Input Fields */
        .modal-content input[type="text"], 
        .modal-content select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            margin-bottom: 16px;
        }

        /* Upload Section */
        .upload-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .upload-section .btn-orange {
            background-color: #FF7300;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 6px;
            cursor: pointer;
        }

        .upload-section .file-name {
            font-size: 14px;
            color: #333;
        }

        /* File Type Text */
        .modal-content p {
            font-size: 12px;
            color: #999;
            margin-bottom: 20px;
        }

        /* Modal Actions (Buttons) */
        .modal-actions {
            display: flex;
            justify-content: space-between;
        }

        .btn {
            padding: 10px 16px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 6px;
            font-weight: 600;
            text-align: center;
        }

        .btn-outline {
            background-color: white;
            color: #FF7300;
            border: 1px solid #FF7300;
        }

        .btn-orange {
            background-color: #FF7300;
            color: white;
            border: none;
        }

        .btn-outline:hover {
            background-color: #FF7300;
            color: white;
        }

        .btn-orange:hover {
            background-color: #e86500;
        }

        .modal-actions {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            margin-left: 90PX
        }

        .upload-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 4px;
        }

        .file-name {
            font-size: 14px;
            color: #666;
        }
        .icon-container {
            margin-bottom: 20px;
            margin-left: 200px
        }

        .alert-icon {
            display: inline-block;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ffa500;
            color: white;
            font-size: 30px;
            line-height: 100px;
            text-align: center;
            font-size: 80px
        }
        .terang1{
            text-align: center;
            color: black;
            font-size: 15px;
            font-weight: bold;
        }
        .terang{
            text-align: center;
            color: black;
            font-size: 15px;
            font-weight: bold;
            margin-left: 100PX;

        }
        .action-btn {
            border: none;
            background: none;
            font-size: 16px;
            cursor: pointer;
            margin-right: 10px;
            align-items: center;
        }
        .success-icon {
            display: inline-block;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: green;
            color: white;
            font-size: 30px;
            line-height: 100px;
            text-align: center;
            font-size: 80px;
            margin-top:20px;
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
        <script>
            document.getElementById('openModalBtn').addEventListener('click', function() {
                document.getElementById('uploadModal').style.display = 'flex';
            });

            document.getElementById('closeModalBtn').addEventListener('click', function() {
                document.getElementById('uploadModal').style.display = 'none';
            });

            document.getElementById('cancelUpload').addEventListener('click', function() {
                document.getElementById('uploadModal').style.display = 'none';
            });

            // Modal untuk konfirmasi simpan
            document.getElementById('nextBtn').addEventListener('click', function() {
                document.getElementById('confirmationModal').style.display = 'flex';
            });

            document.getElementById('cancelConfirm').addEventListener('click', function() {
                document.getElementById('confirmationModal').style.display = 'none';
            });

            // Ketika tombol simpan di modal konfirmasi ditekan
            document.getElementById('confirmSave').addEventListener('click', function() {
                // Sembunyikan modal konfirmasi
                document.getElementById('confirmationModal').style.display = 'none';
                
                // Tampilkan modal sukses
                document.getElementById('successModal').style.display = 'flex';
                
                // Setelah 2 detik, sembunyikan modal sukses
                setTimeout(function() {
                    document.getElementById('successModal').style.display = 'none';
                }, 2000);
            });

            // Menampilkan modal upload
            document.getElementById('openModalBtn').addEventListener('click', function() {
                document.getElementById('uploadModal').style.display = 'flex';
            });

            // Menutup modal upload
            document.getElementById('closeModalBtn').addEventListener('click', function() {
                document.getElementById('uploadModal').style.display = 'none';
            });

            document.getElementById('cancelUpload').addEventListener('click', function() {
                document.getElementById('uploadModal').style.display = 'none';
            });

            // Menangani perubahan nama file yang di-upload
            document.getElementById('fileInput').addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    document.getElementById('fileName').textContent = file.name;
                } else {
                    document.getElementById('fileName').textContent = 'Tidak ada file yang dipilih';
                }
            });

            // Menangani klik tombol "Pilih File"
            document.querySelector('.upload-section label').addEventListener('click', function() {
                document.getElementById('fileInput').click();
            });

            // Mengambil input dari form saat di-submit
            document.getElementById('uploadForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Mencegah reload halaman

                // Ambil nama dokumen
                const namaDokumen = document.getElementById('namaDokumen').value;
                
                // Ambil file yang di-upload
                const file = document.getElementById('fileInput').files[0];
                
                if (file) {
                    alert(`Dokumen "${namaDokumen}" berhasil diupload: ${file.name}`);
                } else {
                    alert('Harap pilih file sebelum mengupload.');
                }

                // Tutup modal setelah upload
                document.getElementById('uploadModal').style.display = 'none';
            });
            // Get the "Simpan" button and success modal element
            const confirmSave = document.getElementById('confirmSave');
            const successModal1 = document.getElementById('successModal1');

            // When the "Simpan" button is clicked, show the success modal
            confirmSave.onclick = function() {
            // Hide the confirmation modal
            document.getElementById('confirmationModal').style.display = 'none';
            
            // Show the success modal
            successModal1.style.display = 'block';
            
            // Automatically hide the success modal after 2 seconds
            setTimeout(() => {
                successModal1.style.display = 'none';
            }, 2000);
};
        </script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>