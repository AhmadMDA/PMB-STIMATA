<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: KeenProduct Version: 3.0.8
Purchase: https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>STIMATA Penerimaan Mahasiswa Baru</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/keen" />
    <meta property="og:site_name" content="Keen by Keenthemes" />
    <link rel="canonical" href="http://preview.keenthemes.com?page=index" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('images/logo.jpg') }}" />
    {{-- <link rel="shortcut icon" href="{{ asset('keen/assets/media/logos/favicon.ico')}}" /> --}}
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('keen/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('keen/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link data-navigate-once href="{{ asset('keen/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link data-navigate-once href="{{ asset('keen/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script data-navigate-once src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <!--end::Global Stylesheets Bundle-->
    <script data-navigate-once>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
        
    </script>
    <style>
        .modal-backdrop:nth-child(2n-1) {
            opacity: 0;
        }
    </style>
    @stack('style')
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on"
    data-kt-app-layout="light-sidebar" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-header-fixed="true"
    data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
    class="app-default overflow-y-scroll" data-scroll-x="true" wire:scroll data-kt-scroll-toggle>
    <script>
        var defaultThemeMode = "light";
        var themeMode;
    </script>
    {{-- <button class="btn btn-primary">tombol</button> --}}
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            @include('layouts.header')

            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Sidebar-->
                @include('layouts.sidebar')

                <!--end::Sidebar-->
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Toolbar-->
                        @include('layouts.breadcrumb')
                        <!--end::Toolbar-->
                        <!--begin::Content-->
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
                    <!--end::Content wrapper-->
                    <!--begin::Footer-->
                    @include('layouts.footer')
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--layout-partial:partials/theme-mode/_init.html-->
    <!--layout-partial:layout/partials/_page-loader.html-->
    <!--layout-partial:layout/_default.html-->
    <!--layout-partial:partials/_scrolltop.html-->
    <!--begin::Modals-->
    <!--layout-partial:partials/modals/_upgrade-plan.html-->
    <!--layout-partial:partials/modals/create-campaign/_main.html-->
    <!--layout-partial:partials/modals/users-search/_main.html-->
    <!--layout-partial:partials/modals/_invite-friends.html-->
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script data-navigate-once src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script>
        var hostUrl = "assets/";
        // $.fn.modal.Constructor.prototype.show = () => $('.modal-backdrop').not(":first").remove();
        try {

            $.fn.modal.Constructor.prototype.show = () => $('.modal-backdrop').not(":first").remove();
        } catch (error) {
            // console.log("An error occurred while modifying modal show:", error);

        }
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script data-navigate-once src="{{ asset('keen/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script data-navigate-once src="{{ asset('keen/assets/js/scripts.bundle.js') }}"></script>
    <script data-navigate-once>
        try {
            $.fn.modal.Constructor.prototype.show = () => $('.modal-backdrop').not(":first").remove();
        } catch (error) {
            // console.log("An error occurred while modifying modal show:", error);
        }


        document.addEventListener('DOMContentLoaded', () => {
            console.log('dom loaded');
            
        });
        document.addEventListener('livewire:navigated', () => {
            console.log("navig");
            window.scrollTo(100, 0);

            KTMenu.init = function() {
                KTMenu.createInstances();

                KTMenu.initHandlers();
            };
            KTMenu.init(),
                KTDrawer.init(),
                KTMenu.init(),
                KTScroll.init(),
                KTSticky.init(),
                KTSwapper.init(),
                KTToggle.init(),
                KTScrolltop.init(),
                KTDialer.init(),
                KTImageInput.init(),
                KTPasswordMeter.init();
            KTApp.init(),
                KTThemeMode.init();
            initFlowbite();
        });
    </script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->


    {{-- <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script> --}}
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
    {{-- <script src="{{ asset('keen/assets/js/scripts.bundle.js') }}"></script> --}}
    <script src="{{ asset('keen/assets/js/custom/pages/user-profile/general.js') }}"></script>
    <script src="{{ asset('keen/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/account/settings/profile-details.js') }}"></script>
    <script src="{{ asset('keen/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
    <script src="{{ asset('keen/assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    @stack('script')    
</body>
<!--end::Body-->

</html>
