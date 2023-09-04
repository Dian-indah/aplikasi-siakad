<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>SIAKAD</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href={{ asset('vendors/images/apple-touch-icon.png') }} />
    <link rel="icon" type="image/png" sizes="32x32" href={{ asset('vendors/images/favicon-32x32.png') }} />
    <link rel="icon" type="image/png" sizes="16x16" href={{ asset('vendors/images/favicon-16x16.png') }} />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href={{ asset('vendors/styles/core.css') }} />
    <link rel="stylesheet" type="text/css" href={{ asset('vendors/styles/icon-font.min.css') }} />
    <link rel="stylesheet" type="text/css" href={{ asset('plugins/sweetalert2/sweetalert2.css') }} />
    <link rel="stylesheet" type="text/css" href={{ asset('vendors/styles/style.css') }} />
    <link rel="stylesheet" type="text/css" href={{ asset('vendors/styles/errorStyle.css') }} />
    {{-- Select2 --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>       
    {{-- datatable --}}
    <link rel="stylesheet" type="text/css" href={{ asset('plugins/datatables/css/dataTables.bootstrap4.min.css') }} />
    <link rel="stylesheet" type="text/css" href={{ asset('plugins/datatables/css/responsive.bootstrap4.min.css') }} />
    <link rel="stylesheet" type="text/css"
        href={{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }} />
         {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <!-- Perpustakaan jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            @if (Str::length(Auth::guard('admin')->user()) > 0)
                                <img src={{ asset('vendors/images/hacker.png') }} alt="" />
                            @elseif (Str::length(Auth::guard('siswa')->user()) > 0)
                                <img src={{ asset('vendors/images/siswa1.png') }} alt="" />
                            @elseif (Str::length(Auth::guard('guru')->user()) > 0)
                                <img src={{ asset('vendors/images/guru.png') }} alt="" />
                            @elseif (Str::length(Auth::guard('ortu')->user()) > 0)
                                <img src={{ asset('vendors/images/ortu.png') }} alt="" />
                            @endif
                        </span>
                        <span class="user-name">
                            @if (Str::length(Auth::guard('admin')->user()) > 0)
                                {{ Auth::guard('admin')->user()->username }}
                            @elseif (Str::length(Auth::guard('siswa')->user()) > 0)
                                {{ Auth::guard('siswa')->user()->name }}
                            @elseif (Str::length(Auth::guard('guru')->user()) > 0)
                                {{ Auth::guard('guru')->user()->username }}
                            @elseif (Str::length(Auth::guard('ortu')->user()) > 0)
                                {{ Auth::guard('ortu')->user()->name }}
                            @endif

                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit"><i class="dw dw-logout"></i> Log Out</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Layout Settings
                <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll">
            <div class="right-sidebar-body-content">
                <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
                </div>
                <div class="reset-options pt-30 text-center">
                    <button class="btn btn-danger" id="reset-settings">
                        Reset Settings
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="#">
                <img src={{ asset('vendors/images/smk-light.svg') }} class="light-logo" width="50px" height="50px"
                    alt="" />
                <img src={{ asset('vendors/images/smk-light.svg') }} class="dark-logo" width="50px" height="50px"
                    alt="" />
                <img src={{ asset('vendors/images/siakad-dark.svg') }} alt="" class="dark-logo" />
                <img src={{ asset('vendors/images/siakad-light.svg') }} alt="" class="light-logo" />
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                @include('Layouts.sidebar')
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>
    {{-- Start Content --}}
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            {{-- ISI CONTENT --}}
            @yield('content')
            {{-- END ISI CONTENT --}}
        </div>
    </div>
    {{-- End content --}}
    <!-- js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src={{ asset('plugins/sweetalert2/sweet-alert.init.js') }}></script>
    <script src={{ asset('plugins/sweetalert2/sweetalert2.min.js') }}></script>
    <script src={{ asset('plugins/toastr/toastr.min.js') }}></script>
    <script src={{ asset('vendors/scripts/core.js') }}></script>
    <script src={{ asset('vendors/scripts/script.min.js') }}></script>
    <script src={{ asset('vendors/scripts/process.js') }}></script>
    <script src={{ asset('vendors/scripts/layout-settings.js') }}></script>
    <script src={{ asset('plugins/sweetalert2/sweetalert2.all.js') }}></script>
    <script src={{ asset('plugins/apexcharts/apexcharts.min.js') }}></script>

    <script src={{ asset('vendors/scripts/dashboard.js') }}></script>

    {{-- new --}}
    <script src={{ asset('plugins/datatables/js/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('plugins/datatables/js/dataTables.bootstrap4.min.js') }}></script>
    <script src={{ asset('plugins/datatables/js/dataTables.responsive.min.js') }}></script>
    <script src={{ asset('plugins/datatables/js/responsive.bootstrap4.min.js') }}></script>

    <!-- buttons for Export datatable -->
    <script src="{{ asset('plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/js/vfs_fonts.js') }}"></script>
    <!-- Datatable Setting js -->
    <script src="{{ asset('vendors/scripts/datatable-setting.js') }}"></script>
    {{-- new --}}
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @yield('js')
</body>

</html>
