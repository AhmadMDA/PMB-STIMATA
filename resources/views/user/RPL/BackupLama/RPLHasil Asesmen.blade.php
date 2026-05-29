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
        <a>Rekognisi Pembelajaran Lampau</a>  >
        <span>Hasil Asesmen</span>
    </div>

    <!-- Content -->
    <div class="content">

        <!-- Tabs -->
        <div class="tabs">
            <a href="http://127.0.0.1:8000/Petunjuk-RPL">Petunjuk</a>
            <a href="http://127.0.0.1:8000/Aplikasi">Aplikasi</a>
            <a href="http://127.0.0.1:8000/Portofolio">Portofolio</a>
            <a href="http://127.0.0.1:8000/Evaluasi-Diri">Evaluasi Diri</a>
            <a href="http://127.0.0.1:8000/Assesmen">Asesmen</a>
            <a href="http://127.0.0.1:8000/Assesmen-Lanjut">Asesmen Lanjut</a>
            <a href="http://127.0.0.1:8000/Hasil-Asesmen" class="active">Hasil Asesmen</a>
        </div>

        <div class="container">
            <section class="main-container">
                <header>
                    <h2>Hasil Asesmen</h2>
                </header>
                
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Mata Kuliah</th>
                            <th>Nama Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Keterangan</th>
                            <th>Nilai Huruf</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>MKT1-0985</td>
                            <td>Algoritma dan Kompleksitas</td>
                            <td>2</td>
                            <td>Transfer SKS</td>
                            <td>-</td>
                            <td><span class="status selesai">Selesai</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>MKT1-0985</td>
                            <td>Praktikum Algoritma dan Kompleksitas</td>
                            <td>2</td>
                            <td>Perolehan SKS</td>
                            <td>-</td>
                            <td><span class="status menunggu">Menunggu</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>MKT1-0985</td>
                            <td>Sistem Basis Data</td>
                            <td>2</td>
                            <td>Transfer SKS</td>
                            <td>-</td>
                            <td><span class="status menunggu">Menunggu</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>MKT1-0985</td>
                            <td>Pemrograman Web</td>
                            <td>2</td>
                            <td>Perolehan SKS</td>
                            <td>-</td>
                            <td><span class="status menunggu">Menunggu</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>MKT1-0985</td>
                            <td>Logika Informatika</td>
                            <td>2</td>
                            <td>Perolehan SKS</td>
                            <td>-</td>
                            <td><span class="status menunggu">Menunggu</span></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>MKT1-0985</td>
                            <td>Algoritma dan Basis Data</td>
                            <td>2</td>
                            <td>Perolehan SKS</td>
                            <td>-</td>
                            <td><span class="status menunggu">Menunggu</span></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</div>
</body>

{{-- CSS --}}
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: white;
        margin: 10;
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
            display: flex;
            justify-content: center;
            align-items: center;
            /* width: 120%; */
            
            margin: 20px auto 0 auto;
        }

        .main-container {
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            width: 100%;
            border: 1px solid #e0e0e0;
        }

        header h2 {
            font-size: 20px;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table thead {
            background-color: #f9f9f9;
        }

        table th, table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        table th {
            font-weight: bold;
            font-size: 14px;
            color: #333;
        }

        table td {
            font-size: 14px;
            color: #555;
        }

        table tbody tr:last-child td {
            border-bottom: none;
        }

        .status {
            padding: 5px 10px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: bold;
            display: inline-block;
            width: 100%;
            text-align: center;
        }

        .status.selesai {
            background-color: #c8f7c5;
            color: #27ae60;
        }

        .status.menunggu {
            background-color: #e8e6fd;
            color: #9b59b6;
        }

        .main-container {
            border-radius: 12px;
            padding: 30px;
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
            <script>
                // Open modal function
                function openModal() {
                    document.getElementById('evaluationModal').style.display = 'block';
                }
        
                // Close modal function
                function closeModal() {
                    document.getElementById('evaluationModal').style.display = 'none';
                }
        
                // Save button function (returns to the original page)
                function saveEvaluation() {
                    alert('Evaluasi disimpan!');
                    closeModal();
                }
            </script>
	</body>
	<!--end::Body-->
</html>