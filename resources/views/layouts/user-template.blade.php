<!DOCTYPE html>
<html lang="en">

<head>
    <base href="" />
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://stimata.ac.id/" />
    <meta property="og:site_name" content="PMB STIMATA" />

    <link rel="icon" href="{{ asset('images/logo.jpg') }}" type="image/jpg/png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="{{ asset('keen/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('keen/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('keen/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('keen/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('keen/assets/plugins/global/plugins.bundle.js') }}"></script>
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/scripts.bundle.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
    @stack('css')
</head>
<style>
    /* Purple Button */
    .btn-purple {
        background-color: #F8F5FF;
        border: 1px solid #9D6FED;
        color: #9D6FED;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-purple:hover {
        background-color: #9D6FED;
        color: #FFFFFF;
        border-color: #9D6FED;
    }

    /* Green Button */
    .btn-green {
        background-color: #DFFFEA;
        border: 1px solid #37C767;
        color: #37C767;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-green:hover {
        background-color: #37C767;
        color: #FFFFFF;
        border-color: #37C767;
    }

    /* Badge Color */
    .badge-light-purple {
        background-color: #F8F5FF;
        color: #9D6FED;
    }

    .badge-light-green {
        background-color: #DFFFEA;
        color: #37C767;
    }
</style>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on"
    data-kt-app-layout="light-sidebar" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            <x-user-header />

            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                <x-user-sidebar />

                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <div class="d-flex flex-column flex-column-fluid">
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                                        @yield('breadcrumb')</h1>
                                    <!--end::Title-->
                                </div>
                                <!--end::Page title-->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <!--end::Toolbar-->

                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->

                            <div id="kt_app_content_container" class="app-container container-fluid">
                                {{-- <button class="btn btn-secondary">tombol</button> --}}
                                @yield('content')

                            </div>
                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->
                    </div>

                    <x-user-footer />

                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <i class="ki-duotone ki-arrow-up">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
        <!--end::Scrolltop-->
    </div>

    <script>
        var hostUrl = "assets/";
    </script>
    <script src="{{ asset('keen/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('keen/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('keen/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('keen/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>

    <script src="{{ asset('keen/assets/js/custom/apps/user-management/users/list/table.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/apps/user-management/users/list/export-users.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/apps/user-management/users/list/add.js') }}"></script>

    <script src="{{ asset('keen/assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <script src="{{ asset('keen/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/utilities/modals/create-campaign.js') }}"></script>

    <!-- Pengajuan JS -->
    <script src="{{ asset('js/user/pengajuan.js') }}"></script>
    <script src="{{ asset('js/user/riwayatpendidikan.js') }}"></script>
    <script src="{{ asset('js/user/pelatihan.js') }}"></script>
    <!-- <script src="{{ asset('js/user/profil/profil.js') }}?v={{ time() }}"></script> -->


    <!-- Cek session success di halaman login -->
    @if (session('success'))
        <script>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toastr-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.success("Selamat Datang,{{ auth()->user()->name }}" , "Login Berhasil");
        </script>
    @endif


    <script src="{{ asset('keen/assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/account/settings/signin-methods.js') }}"></script>
    <script src="{{ asset('keen/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
</body>
<!--end::Body-->

</html>
