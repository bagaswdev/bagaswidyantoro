{{-- Menyimpan kode keseluruhan untuk didalamnya disisipi @yield --}}

<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr"
    data-assets-path="{{ url('backend/assets') }}/" data-template="vertical-menu-template-starter">

<head>
    <meta charset="utf-8" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('backend/assets/img/logo/sukorejokreatif.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/fonts/materialdesignicons.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/fonts/fontawesome.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ url('backend/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />

    {{--
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet"
        href="{{ url('backend/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet"
        href="{{ url('backend/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/jquery-timepicker/jquery-timepicker.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/pickr/pickr-themes.css') }}" /> --}}


    <!-- Row Group CSS -->
    <link rel="stylesheet"
        href="{{ url('backend/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css') }}" />

    <!-- Vendor -->
    <link rel="stylesheet"
        href="{{ url('backend/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />

    {{-- editor --}}
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/quill/editor.css') }}" />


    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/css/rtl/core.css?ver=1.0') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/css/rtl/theme-semi-dark.css') }}" />
    {{--
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/css/rtl/core-dark.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/css/rtl/theme-default-dark.css') }}" /> --}}
    <link rel="stylesheet" href="{{ url('backend/assets/css/demo.css?ver=1.2') }}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/css/pages/page-auth.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/css/pages/page-misc.css') }}" />

    <!-- Helpers -->
    <script src="{{ url('backend/assets/vendor/js/helpers.js') }}"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ url('backend/assets/js/config.js') }}"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    {{--
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"> --}}

    {{-- editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>




</head>

<body>

    @yield('login')

    @yield('isikonten')

    <!-- Layout wrapper -->
    @hasSection ('content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="https://sukorejokreatif.argia.co.id" target="_blank" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            {{-- <span style="color: var(--bs-primary)">
                                <svg width="268" height="150" viewBox="0 0 38 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z"
                                        fill="currentColor" />
                                    <path
                                        d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z"
                                        fill="url(#paint0_linear_2989_100980)" fill-opacity="0.4" />
                                    <path
                                        d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z"
                                        fill="currentColor" />
                                    <path
                                        d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                        fill="currentColor" />
                                    <path
                                        d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                        fill="url(#paint1_linear_2989_100980)" fill-opacity="0.4" />
                                    <path
                                        d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z"
                                        fill="currentColor" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2989_100980" x1="5.36642" y1="0.849138"
                                            x2="10.532" y2="24.104" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-opacity="1" />
                                            <stop offset="1" stop-opacity="0" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_2989_100980" x1="5.19475" y1="0.849139"
                                            x2="10.3357" y2="24.1155" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-opacity="1" />
                                            <stop offset="1" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span> --}}
                            {{-- <img src="{{ url('backend/assets/img/logo/sukorejokreatif.png') }}" alt="" width="40"
                                height="40"> --}}
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold ms-3">MAN 2 Kota <br> Malang</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z"
                                fill="currentColor" fill-opacity="0.6" />
                            <path
                                d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z"
                                fill="currentColor" fill-opacity="0.38" />
                        </svg>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">

                    {{-- MENU --}}

                    <li class="menu-item {{ request()->routeIs('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-view-dashboard"></i>
                            <div data-i18n="Home">Home</div>
                        </a>
                    </li>

                    <li class="menu-header fw-light mt-4">
                        <span class="menu-header-text">Kelola User</span>
                    </li>

                    <li class="menu-item {{ str_starts_with(request()->route()->getName(), 'users') ? 'active' : '' }}">
                        <a href="{{ route('users.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-table-account"></i>
                            <div data-i18n="User">User</div>
                        </a>
                    </li>

                    {{-- <li class="menu-item {{ request()->routeIs('users.index') ? 'active' : '' }}">
                        <a href="{{ route('users.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-view-dashboard"></i>
                            <div data-i18n="Users">Users</div>
                        </a>
                    </li> --}}



                </ul>

            </aside>



            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->



                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="mdi mdi-menu mdi-24px"></i>
                        </a>
                    </div>

                    @yield('btn-kembali')

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    {{-- <div class="avatar avatar-online">
                                        <img src="{{ asset('storage/' . Auth::user()->foto) }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div> --}}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    {{-- <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('storage/' . Auth::user()->foto) }}" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                                    <small class="text-muted">{{ Auth::user()->roles }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('be.profile.index') }}">
                                            <i class="mdi mdi-account-outline me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('be.logout') }}">
                                            <i class="mdi mdi-logout me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li> --}}
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">

                        <div class="row gy-4">
                            @yield('content')
                        </div>
                    </div>



                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                                <div class="mb-2 mb-md-0">
                                    ©
                                    <script>
                                        // document.write(new Date().getFullYear()); 
                                    </script>
                                    2023, made with <span class="text-danger">❤️</span> by
                                    <a href="" target="_blank" class="footer-link fw-medium">Bagas Widyantoro</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    @endif
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ url('backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

    <script src="{{ url('backend/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ url('backend/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>

    {{-- <script src="{{ url('backend/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}">
    </script>
    <script src="{{ url('backend/assets/vendor/libs/jquery-timepicker/jquery-timepicker.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/pickr/pickr.js') }}"></script> --}}




    <!-- Flat Picker -->
    <script src="{{ url('backend/assets/vendor/libs/moment/moment.js') }}"></script>


    <!-- Main JS -->
    <script src="{{ url('backend/assets/js/main.js') }}"></script>


    <!-- Page JS -->
    <script src="{{ url('backend/assets/js/pages-auth.js') }}"></script>
    {{-- <script src="{{ url('backend/assets/js/tables-datatables-advanced.js') }}"></script> --}}
    <script src="{{ url('backend/assets/js/form-validation.js') }}"></script>

    {{-- <script src="{{ url('backend/assets/js/forms-pickers.js') }}"></script> --}}

    <script src="{{ url('backend/assets/js/extended-ui-sweetalert2.js') }}"></script>

    {{-- editor --}}
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    @yield('script')
</body>

</html>