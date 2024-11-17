<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="AquaFlow">
    <meta name="author" content="AquaFlow">

    <title>@yield('title') &mdash; SIPENDARA</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Core:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/dropify/dist/dropify.min.css') }}">

    <!-- Inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo1/style.css') }}">

    <!-- CKEditor 5 -->
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.css" />

    {{-- <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" /> --}}
    <link rel="icon" type="image/png" href="/favicon-48x48.png" sizes="48x48" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Sipendara" />
    <link rel="manifest" href="/site.webmanifest" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <!-- Leaflet Maps CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.css">


    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <style>
        * {
            box-sizing: border-box !important;
        }
    </style>
    @yield('css')
</head>

<body>
    <nav class="fixed top-0 left-0 right-0 z-50 "
        style="height: 56px;background-color: #c94a4a; display: flex; justify-content: space-between; align-items: center; padding-inline: 16px">
        <div style="display: flex; align-items: center; gap: 10px">
            <i id="menu-btn" class="bi bi-list" style="font-size: 24px; color: white; display: block;"
                onmouseover="this.style.color='black';this.style.cursor='pointer'"
                onmouseout="this.style.color='white';"></i>
                <a href="/" class="logo">
    <h6 class="text-white" style="font-size: 24px; margin-left: 10px; font-weight: 800;">SIPENDARA</h6>
</a>


        </div>
        <div class="navbar-content">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="wd-30 ht-auto rounded-circle" style="height: 30px"
                            src="{{ asset('storage/userImage/' . Auth::user()->gambar) }}" alt="profile">
                    </a>
                    <div class="dropdown-menu p-0 " aria-labelledby="profileDropdown">
                        <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                            <div class="mb-3">
                                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3  mb-3">
                                    <div class="mb-3">
                                        {{-- <i class="bi bi-list"></i> --}}
                                        <img class=" rounded-circle" height="100" width="100"
                                            src="{{ asset('storage/userImage/' . Auth::user()->gambar) }}"
                                            alt="profile">
                                    </div>
                                    <div class="text-center">
                                        <p class="tx-16 fw-bolder">{{ Auth::user()->name }}</p>
                                        <p class="tx-12 text-muted">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.profile') }}"
                                        class="d-flex flex-column justify-content-center align-items-center border border-2 px-4 py-3 rounded-4 profile-link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                            viewBox="0 0 24 24" class="icon-svg">
                                            <path fill="#AAB3C3" fill-rule="evenodd"
                                                d="M12 4a8 8 0 0 0-6.96 11.947A4.99 4.99 0 0 1 9 14h6a4.99 4.99 0 0 1 3.96 1.947A8 8 0 0 0 12 4m7.943 14.076q.188-.245.36-.502A9.96 9.96 0 0 0 22 12c0-5.523-4.477-10-10-10S2 6.477 2 12a9.96 9.96 0 0 0 2.057 6.076l-.005.018l.355.413A9.98 9.98 0 0 0 12 22q.324 0 .644-.02a9.95 9.95 0 0 0 5.031-1.745a10 10 0 0 0 1.918-1.728l.355-.413zM12 6a3 3 0 1 0 0 6a3 3 0 0 0 0-6"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p class="mt-2 text-muted">Profile</p>
                                    </a>
                                    <a href="{{ route('admin.user.index') }}"
                                        class="d-flex flex-column justify-content-center align-items-center border border-2 px-4 py-3 rounded-4 profile-link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                            viewBox="0 0 20 20" class="icon-svg">
                                            <path fill="#AAB3C3"
                                                d="M11.078 0c.294 0 .557.183.656.457l.706 1.957q.379.094.654.192q.3.107.78.33l1.644-.87a.7.7 0 0 1 .832.131l1.446 1.495c.192.199.246.49.138.744l-.771 1.807q.191.352.308.604q.126.273.312.76l1.797.77c.27.115.437.385.419.674l-.132 2.075a.69.69 0 0 1-.46.605l-1.702.605q-.073.352-.154.606a9 9 0 0 1-.298.774l.855 1.89a.68.68 0 0 1-.168.793l-1.626 1.452a.7.7 0 0 1-.796.096l-1.676-.888a7 7 0 0 1-.81.367l-.732.274l-.65 1.8a.7.7 0 0 1-.64.457L9.11 20a.7.7 0 0 1-.669-.447l-.766-2.027a15 15 0 0 1-.776-.29a10 10 0 0 1-.618-.293l-1.9.812a.7.7 0 0 1-.755-.133L2.22 16.303a.68.68 0 0 1-.155-.783l.817-1.78a10 10 0 0 1-.302-.644a14 14 0 0 1-.3-.811L.49 11.74a.69.69 0 0 1-.49-.683l.07-1.921a.69.69 0 0 1 .392-.594L2.34 7.64q.13-.478.23-.748a9 9 0 0 1 .314-.712L2.07 4.46a.68.68 0 0 1 .15-.79l1.404-1.326a.7.7 0 0 1 .75-.138l1.898.784q.314-.209.572-.344q.307-.162.824-.346l.66-1.841A.7.7 0 0 1 8.984 0zm-1.054 7.019c-1.667 0-3.018 1.335-3.018 2.983s1.351 2.984 3.018 2.984s3.017-1.336 3.017-2.984s-1.35-2.983-3.017-2.983" />
                                        </svg>
                                        <p class="mt-2 text-muted">Tabel</p>
                                    </a>
                                    <a href="{{ route('admin.user.create') }}"
                                        class="d-flex flex-column justify-content-center align-items-center border border-2 px-4 py-3 rounded-4 profile-link">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-svg" width="50"
                                            height="50" viewBox="0 0 24 24">
                                            <path fill="#AAB3C3"
                                                d="M19 17v2H7v-2s0-4 6-4s6 4 6 4m-3-9a3 3 0 1 0-3 3a3 3 0 0 0 3-3m3.2 5.06A5.6 5.6 0 0 1 21 17v2h3v-2s0-3.45-4.8-3.94M18 5a2.9 2.9 0 0 0-.89.14a5 5 0 0 1 0 5.72A2.9 2.9 0 0 0 18 11a3 3 0 0 0 0-6M8 10H5V7H3v3H0v2h3v3h2v-3h3Z" />
                                        </svg>
                                        <p class="mt-2 text-muted">Create</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled p-1">
                            <li class="dropdown-item py-2">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="#"
                                        class="log-out-btn text-body ms-0 d-flex justify-content-center align-items-center border border-danger py-2 px-3 rounded-4"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        <span class="logout">Log Out</span>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div style="position: relative;display: flex;width: 100vw">
        <aside id="sidebar"
            style="z-index: 5;max-width: 240px;min-width: 240px;background-color: #c94a4a; min-height: calc(100vh - 56px); overflow-y: auto; padding-top: 16px">
            <ul class="nav">
                <li class="nav-item" style="width: 100%; font-size: 16px"
                    onmouseover="this.style.backgroundColor='#b72525';"
                    onmouseout="this.style.backgroundColor='transparent';">
                    <a href="{{ route('admin.news.index') }}"
                        class="nav-link text-white {{ request()->routeIs('admin.news.*') ? 'active' : '' }}">
                        <i class="fas fa-newspaper" style="margin-right: 8px;"></i> Artikel
                    </a>
                </li>
                <li class="nav-item" style="width: 100%; font-size: 16px"
                    onmouseover="this.style.backgroundColor='#b72525';"
                    onmouseout="this.style.backgroundColor='transparent';">
                    <a href="{{ route('admin.data-penyakit-dbd.index') }}"
                        class="nav-link text-white {{ request()->routeIs('admin.data-penyakit-dbd.*') ? 'active' : '' }}">
                        <i class="fas fa-virus" style="margin-right: 8px;"></i> Data Kasus DBD
                    </a>
                </li>
                <li class="nav-item" style="width: 100%; font-size: 16px"
                    onmouseover="this.style.backgroundColor='#b72525';"
                    onmouseout="this.style.backgroundColor='transparent';">
                    <a href="{{ route('admin.kepadatan-penduduk-dbd.index') }}"
                        class="nav-link text-white {{ request()->routeIs('admin.kepadatan-penduduk-dbd.*') ? 'active' : '' }}">
                        <i class="fas fa-users" style="margin-right: 8px;"></i> Kepadatan Penduduk
                    </a>
                </li>
                <li class="nav-item" style="width: 100%; font-size: 16px"
                    onmouseover="this.style.backgroundColor='#b72525';"
                    onmouseout="this.style.backgroundColor='transparent';">
                    <a href="{{ route('admin.faktor-lingkungan-dbd.index') }}"
                        class="nav-link text-white {{ request()->routeIs('admin.faktor-lingkungan-dbd.*') ? 'active' : '' }}">
                        <i class="fas fa-cloud" style="margin-right: 8px;"></i> Faktor Lingkungan
                    </a>
                </li>
                <li class="nav-item" style="width: 100%; font-size: 16px"
                    onmouseover="this.style.backgroundColor='#b72525';"
                    onmouseout="this.style.backgroundColor='transparent';">
                    <a href="{{ route('admin.faskes-pdp-hiv.index') }}"
                        class="nav-link text-white {{ request()->routeIs('admin.faskes-pdp-hiv.*') ? 'active' : '' }}">
                        <i class="fas fa-hospital" style="margin-right: 8px;"></i> Fasilitas Kesehatan
                    </a>
                </li>


                <!-- DBD Submenu -->
                <li style="width: 100%" onmouseover="this.style.backgroundColor='#b72525'";
                    onmouseout="this.style.backgroundColor='transparent'"
                    class="nav-item  {{ request()->routeIs('admin.data-penyakit-dbd.*', 'admin.kepadatan-penduduk-dbd.*', 'admin.faktor-lingkungan-dbd.*') ? 'active' : '' }}">
                    <!-- <a class="nav-link text-white" data-bs-toggle="collapse" href="#dbd" role="button"
                        aria-expanded="false" aria-controls="dbd">
                        <span class="link-title">DBD</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a> -->
                    <div class="collapse {{ request()->routeIs('admin.data-penyakit-dbd.*', 'admin.kepadatan-penduduk-dbd.*', 'admin.faktor-lingkungan-dbd.*') ? 'show' : '' }}"
                        id="dbd">
                        <ul class="nav sub-menu">
                            <!-- data penyakit DBD -->
                            <!-- <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.data-penyakit-dbd.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.data-penyakit-dbd.*') ? 'active' : '' }}">Data
                                    penyakit</a>
                            </li> -->

                            <!-- Grafik -->
                            <!-- <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.kepadatan-penduduk-dbd.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.kepadatan-penduduk-dbd.*') ? 'active' : '' }}">
                                    Kepadatan Penduduk
                                </a>
                            </li> -->

                            <!-- Data -->
                            <!-- <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.faktor-lingkungan-dbd.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.faktor-lingkungan-dbd.*') ? 'active' : '' }}">Faktor
                                    lingkungan</a>
                            </li> -->
                            <!-- <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.faskes-pdp-hiv.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.faskes-pdp-hiv.*') ? 'active' : '' }}">Faskes
                                    PDP HIV</a>
                            </li> -->
                        </ul>
                    </div>
                </li>

                <!-- ISPA Submenu -->
                <li style="width:100%" onmouseover="this.style.backgroundColor='#b72525'";
                    onmouseout="this.style.backgroundColor='transparent'"
                    class="nav-item {{ request()->routeIs('admin.data-penyakit-ispa.*', 'admin.kepadatan-penduduk-ispa.*', 'admin.curah-hujan-ispa.*', 'admin.kelembapan-ispa.*', 'admin.suhu-ispa.*') ? 'active' : '' }}">
                    <!-- <a style="width:100%;" class="nav-link text-white" data-bs-toggle="collapse" href="#ispa"
                        role="button" aria-expanded="false" aria-controls="ispa">
                        <span class="link-title">ISPA</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a> -->
                    <div class="collapse {{ request()->routeIs('admin.data-penyakit-ispa.*', 'admin.kepadatan-penduduk-ispa.*', 'admin.curah-hujan-ispa.*', 'admin.kelembapan-ispa.*', 'admin.suhu-ispa.*') ? 'show' : '' }}"
                        id="ispa">
                        <ul class="nav sub-menu">
                            <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.data-penyakit-ispa.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.data-penyakit-ispa.*') ? 'active' : '' }}">Data
                                    Penyakit ISPA</a>
                            </li>

                            <!-- Grafik -->
                            <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.kepadatan-penduduk-ispa.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.kepadatan-penduduk-ispa.*') ? 'active' : '' }}">
                                    Kepadatan Penduduk
                                </a>
                            </li>

                            <!-- Data -->
                            <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.curah-hujan-ispa.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.curah-hujan-ispa.*') ? 'active' : '' }}">
                                    Curah Hujan
                                </a>
                            </li>
                            <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.kelembapan-ispa.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.kelembapan-ispa.*') ? 'active' : '' }}">
                                    Kelembaban
                                </a>
                            </li>
                            <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.suhu-ispa.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.suhu-ispa.*') ? 'active' : '' }}">
                                    Suhu
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- HIV Submenu -->
                <li style="width:100%;" onmouseover="this.style.backgroundColor='#b72525'";
                    onmouseout="this.style.backgroundColor='transparent'"
                    class="nav-item {{ request()->routeIs('admin.kasus-hiv.*', 'admin.faskes-pdp-hiv.*', 'admin.wilayah-rentan-hiv.*', 'admin.tuna-susila-hiv.*', 'admin.penduduk-pria-usi-produktiv-hiv.*', 'admin.penduduk-miskin-hiv.*', 'admin.hotspot-hiv.*', 'admin.lokasi-rawan-tuna-susila-hiv.*') ? 'active' : '' }}">
                    <!-- <a class="nav-link text-white" data-bs-toggle="collapse" href="#hiv" role="button"
                        aria-expanded="false" aria-controls="hiv">
                        <span class="link-title">HIV</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a> -->
                    <div class="collapse {{ request()->routeIs('admin.kasus-hiv.*', 'admin.faskes-pdp-hiv.*', 'admin.wilayah-rentan-hiv.*', 'admin.tuna-susila-hiv.*', 'admin.penduduk-pria-usi-produktiv-hiv.*', 'admin.penduduk-miskin-hiv.*', 'admin.hotspot-hiv.*', 'admin.lokasi-rawan-tuna-susila-hiv.*') ? 'show' : '' }}"
                        id="hiv">
                        <ul class="nav sub-menu">
                            <!-- <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.kasus-hiv.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.kasus-hiv.*') ? 'active' : '' }}">
                                    Kasus HIV
                                </a>
                            </li> -->
                            <!-- <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.hotspot-hiv.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.hotspot-hiv.*') ? 'active' : '' }}">
                                    Hotspot HIV</a>
                            </li> -->
                            <!-- <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.lokasi-rawan-tuna-susila-hiv.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.lokasi-rawan-tuna-susila-hiv.*') ? 'active' : '' }}">
                                    Lok Rawan Tuna Susila</a>
                            </li>
                            <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.penduduk-miskin-hiv.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.penduduk-miskin-hiv.*') ? 'active' : '' }}">
                                    Penduduk Miskin
                                </a>
                            </li>
                            <li class="nav-item " style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.penduduk-pria-usi-produktiv-hiv.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.penduduk-pria-usi-produktiv-hiv.*') ? 'active' : '' }}">Pria
                                    Usia
                                    Produktif</a>
                            </li>
                            <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.tuna-susila-hiv.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.tuna-susila-hiv.*') ? 'active' : '' }}">Tuna
                                    Susila</a>
                            </li>
                            <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.wilayah-rentan-hiv.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.wilayah-rentan-hiv.*') ? 'active' : '' }}">Wilayah
                                    Rentan</a>
                            </li> -->
                            <!-- <li class="nav-item" style="width: 100%"
                                onmouseover="this.style.backgroundColor='#7c1a1a';this.style.fontWeight='bold'";
                                onmouseout="this.style.backgroundColor='transparent';this.style.fontWeight='normal'">
                                <a href="{{ route('admin.faskes-pdp-hiv.index') }}"
                                    class="nav-link text-white {{ request()->routeIs('admin.faskes-pdp-hiv.*') ? 'active' : '' }}">Faskes
                                    PDP HIV</a>
                            </li> -->
                        </ul>
                    </div>
                </li>
            </ul>
        </aside>

        <div class="grow p-4 overflow-auto">
            @yield('content')
        </div>

    </div>

    {{-- previous design --}}
    {{-- <div class="main-wrapper">

        <!-- Sidebar -->
        @include('components.admin.sidebar')

        <div class="page-wrapper">

            <!-- Navbar -->
            @include('components.admin.header')

            <!-- Main Content -->
            @yield('content')

            <!-- Footer -->
            @include('components.admin.footer')

        </div>
    </div> --}}

    <script>
        if (window.matchMedia("(max-width: 640px)").matches) {
            document.getElementById("sidebar").style.display = "none";
            document.getElementById("menu-btn").style.display = "block";
            document.getElementById("sidebar").style.position = "absolute";
        } else {
            document.getElementById("sidebar").style.display = "block";
            document.getElementById("menu-btn").style.display = "none";
            document.getElementById("sidebar").style.position = "static";
        }

        const mediaQuery = window.matchMedia("(max-width: 640px)");
        mediaQuery.addListener(function(mediaQuery) {
            if (mediaQuery.matches) {
                document.getElementById("sidebar").style.display = "none";
                document.getElementById("menu-btn").style.display = "block";
                document.getElementById("sidebar").style.position = "absolute";
            } else {
                document.getElementById("sidebar").style.display = "block";
                document.getElementById("menu-btn").style.display = "none";
                document.getElementById("sidebar").style.position = "static";
            }
        });

        document.getElementById("menu-btn").addEventListener("click", function() {
            const sidebar = document.getElementById("sidebar");
            if (sidebar.style.display === "none") {
                sidebar.style.display = "block";
            } else {
                sidebar.style.display = "none";
            }
        });
    </script>

    <!-- jQuery harus di-load terlebih dahulu -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- Bootstrap Bundle JS (includes Popper.js for dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icons Initialization -->
    <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script>
        feather.replace();
    </script>

    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendors/dropify/dist/dropify.min.js') }}"></script>

    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard-light.js') }}"></script>
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
    <script src="{{ asset('assets/js/dropify.js') }}"></script>

    <!-- Leaflet (peta) JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.js"></script>

    @stack('script')

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>

    <!-- CKEditor 5 -->
    <script type="importmap">
        {
            "imports": {
                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.js",
                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.1.0/"
            }
        }
    </script>

</body>

</html>
