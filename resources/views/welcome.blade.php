<!DOCTYPE html>
<html lang="en">
<head>
    <base href="" />
    <title>PMB STIMATA</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://stimata.ac.id/" />
    <meta property="og:site_name" content="PMB STIMATA" />

    <link rel="icon" href="{{ asset('images/logo.jpg') }}" type="image/jpg/png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="{{ asset('keen/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('keen/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('keen/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('keen/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('keen/assets/plugins/global/plugins.bundle.js') }}"></script>


    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
    @stack('css')
</head>
<style>
    .primary{
        color: #F68B02;
    }

    /* Primary Button */
    .btn-primary {
        background-color: #F68B02;
        border: 1px solid #F68B02;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: white;
        color: #F68B02;
    }

    /* Primary2 Button */
    .btn-primary2 {
        background-color: white;
        border: 1px solid #F68B02;
        color: #F68B02;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-primary2:hover {
        background-color: #F68B02;
        color: white;
    }

    .content {
        background-image: url('{{ asset('images/bg.png') }}');
        background-size: cover;
        background-position: center;
        height: 100vh;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="{{ asset('images/logo2.png') }}" alt="Logo" height="40">
                </a>
            </div>
            
            <div class="col-md-3 text-end">
                <a href="/register">
                    <button type="button" class="btn-primary me-2">Daftar</button>
                </a>
                <a href="/login">
                    <button type="button" class="btn-primary2 me-2">Masuk</button>
                </a>
            </div>
        </header>
    </div>

    <section class="content py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
            <div class="col">
                <div class="h-100 bg-white d-flex flex-column justify-content-center align-items-center rounded-4 p-4 shadow">
                    <h2 class="text-center primary">Peserta Didik Baru</h2>
                    <p class="text-center mt-3">Jalur penerimaan untuk lulusan SMA/SMK/MA yang baru lulus dan ingin melanjutkan pendidikan ke jenjang perguruan tinggi untuk pertama kalinya.</p>
                </div>
            </div>
            <div class="col">
                <div class="h-100 bg-white d-flex flex-column justify-content-center align-items-center rounded-4 p-4 shadow">
                    <h2 class="text-center primary">Beasiswa (KIP/Yayasan)</h2>
                    <p class="text-center mt-3">Program beasiswa untuk calon mahasiswa berprestasi atau kurang mampu, meliputi Kartu Indonesia Pintar (KIP) dari pemerintah dan beasiswa yayasan dari institusi.</p>
                </div>
            </div>
            <div class="col">
                <div class="h-100 bg-white d-flex flex-column justify-content-center align-items-center rounded-4 p-4 shadow">
                    <h2 class="text-center primary">Rekognisi Pembelajaran Lampau</h2>
                    <p class="text-center mt-3">Jalur penerimaan yang mengakui pengalaman kerja dan pembelajaran non-formal sebagai bagian dari kredit akademik, memungkinkan percepatan studi.</p>
                </div>
            </div>
            <div class="col">
                <div class="h-100 bg-white d-flex flex-column justify-content-center align-items-center rounded-4 p-4 shadow">
                    <h2 class="text-center primary">Pindahan / Alih Jenjang</h2>
                    <p class="text-center mt-3">Jalur untuk mahasiswa dari perguruan tinggi lain yang ingin pindah, atau lulusan D3 yang ingin melanjutkan ke jenjang S1 dengan transfer kredit.</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
