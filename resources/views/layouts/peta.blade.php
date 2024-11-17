<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="SIPENDARA">
    <meta name="author" content="SIPENDARA">

    <title>SIPENDARA - PETA</title>

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
    <link rel="stylesheet" href="{{ asset('assets/css/demo1/style2.css') }}">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Leaflet Maps CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.css">

    <!-- OpenLayers -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v10.2.1/ol.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            box-sizing: border-box !important;
        }

        .main-wrapper .page-wrapper {
            width: 100% !important;
            margin-left: 0 !important;
        }

        .sidebar-brand {
            color: #C94C4C !important;
            font-weight: bold;
            /* Makes the text bold */
            margin-left: 10px;
            /* Shifts the text to the right by 10px */
        }

        .sidebar-body {
            margin: 20px !important;
            background-color: #C94C4C !important;
            border-radius: 15px !important;
            max-height: 80px;
            /* overflow-y: scroll; */
        }

        .sidebar-body::-webkit-scrollbar {
            width: 0;
            /* Hide scrollbar for Chrome, Safari, and Opera */
        }

        .sidebar-body {
            -ms-overflow-style: none;
            /* Hide scrollbar for Internet Explorer and Edge */
            scrollbar-width: none;
            /* Hide scrollbar for Firefox */

        }

        .sidebar-header {
            width: 340px !important;
            border-right: none !important;
        }

        .tombol-terapkan {
            width: 100% !important;
            border: none !important;
            border-radius: 5px !important;
            padding: 5px !important;
        }

        .tombol-terapkan:hover {
            background-color: #d97666 !important;
            color: white !important;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-change-transparency {
            width: 100% !important;
            border: none !important;
            border-radius: 5px !important;
            padding: 5px !important;
        }

        .btn-change-transparency:hover {
            background-color: #d97666 !important;
            color: white !important;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .legenda-icon {
            /* width: 12px;
            height: 12px; */
            margin-right: 5px;
        }

        .nav-link.active {
            color: #C94C4C !important;
        }

        .nav-link:hover {
            color: #C94C4C !important;
        }

        #map {
            height: 100%;
            width: 100%;
        }

        .ol-popup {
            position: absolute;
            background-color: white;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
            padding: 15px;
            border-radius: 10px;
            border: 1px solid #cccccc;
            bottom: 12px;
            left: -50px;
            min-width: 280px;
        }

        .ol-popup:after,
        .ol-popup:before {
            top: 100%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .ol-popup:after {
            border-top-color: white;
            border-width: 10px;
            left: 48px;
            margin-left: -10px;
        }

        .ol-popup:before {
            border-top-color: #cccccc;
            border-width: 11px;
            left: 48px;
            margin-left: -11px;
        }

        .ol-popup-closer {
            text-decoration: none;
            position: absolute;
            top: 2px;
            right: 8px;
        }

        .ol-popup-closer:after {
            content: "✖";
        }

        .page-content {
            padding: 0 !important;
            margin: 0;
        }

        .ol-control {
            right: auto !important;
            top: auto !important;
            left: 16px !important;
        }


        .ol-zoom {
            top: 56px !important;
            display: flex;
            flex-direction: column;
            background-color: transparent !important;
        }

        .ol-zoom .ol-zoom-in {
            margin-bottom: 10px;
        }

        .ol-full-screen {
            top: 16px !important;
        }

        .ol-scale-line {
            right: 10px !important;
            top: auto !important;
            left: auto !important;
        }

        .ol-control button {
            background-color: #C94C4C !important;
            color: white !important;
            border: none !important;
            border-radius: 5px !important;
            font-size: 20px !important;
        }

        .ol-control button:active {
            background-color: #B2452B !important;
        }

        .ol-mouse-position {
            position: absolute;
            top: 470px !important;
            bottom: auto !important;
            right: 400px !important;
            left: auto;
            background-color: rgba(210, 209, 209, 0.806);
            /* Latar belakang transparan */
            color: black !important;
            /* Warna teks putih */
            padding: 10px 20px !important;
            border-radius: 10px;
            font-size: 12px;
            z-index: 1000;
        }

        .legenda-button {
            background-color: #C94C4C;
            color: white;
            border: none;
            cursor: pointer;
            display: 'block';
            width: '100px';
            height: '100px';
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            align-self: flex-end;
            /* Agar selalu di depan */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .legenda-container {
            position: fixed;
            display: flex;
            flex-direction: column-reverse;
            bottom: 48px;
            right: 20px;
            gap: 8px;
            /* Agar selalu di depan */
            justify-content: center;
            align-items: center;
        }

        .setting-container {
            position: fixed;
            display: flex;
            top: 80px;
            right: 20px;

            /* Agar selalu di depan */
            z-index: 1000;

            justify-content: center;
            align-items: flex-start;
        }

        .setting-back-button {
            width: 28px;
            height: 28px;
            background-color: grey;
            color: white;
            border: none;
            cursor: pointer;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);

            z-index: 1000;
            /* Agar selalu di depan */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .data-setting-dialog {
            position: fixed;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            /* Agar selalu di depan */

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .layer-button {
            width: 50px;
            height: 50px;
            background-color: #C94C4C;
            color: white;
            border: none;
            border-radius: 20%;
            cursor: pointer;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);

            z-index: 1000;
            /* Agar selalu di depan */

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .screenshot-button {
            position: fixed;
            top: 195px;
            left: 16px;
            width: 30px;
            height: 30px;
            padding: 8px;
            background-color: #C94C4C;
            color: white;
            border: none;
            border-radius: 20%;
            cursor: pointer;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            /* Agar selalu di depan */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .screenshot-button:hover {
            background-color: #B2452B;
            /* Warna saat hover */
        }

        .screenshot-button i {
            font-size: 24px;
            /* Ukuran ikon */
        }

        .setting-button {
            color: #a4a4a4;
            cursor: pointer;
        }

        .setting-button:hover {
            color: #B2452B
        }

        .map-theme-selector {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 10px;
            border-radius: 10px;
            width: 100%;
        }

        .map-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: white;
            color: #C94C4C;
            font-weight: bold;
            text-align: center;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 5px;
        }

        .map-option-content {
            display: flex;
            flex-direction: row;
            gap: 10xp;
        }

        .map-option img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
        }

        .map-option label {
            display: flex;
            align-items: center;
            padding: 10px;
            width: 100%;
            color: white;
            font-size: 14px;
        }

        .map-option input[type="radio"] {
            margin-right: 10px;
            accent-color: #C94C4C;
        }

        .map-option input[type="radio"]:checked+label {
            background-color: #f4f4f4af;
        }
    </style>

    @yield('css')

</head>

<body>
    <div class="main-wrapper">
    {{-- SIDEBAR --}}
        <nav class="sidebar" id="sidebar" style="max-height: 56px">
            <div class="sidebar-header">
                <a href="{{ route('home') }}" class="sidebar-brand">
                    SIPENDARA
                </a>
            </div>
        </nav>
        {{-- HEADER --}}
        <div class="page-wrapper">

            <!-- Navbar -->
            @include('components.peta.header')

            {{-- CONTENT --}}
            <div class="page-content">
                {{-- used for osm map pop up --}}
                <div id="popup" class="ol-popup">
                    <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                    <div id="popup-content"></div>
                </div>
                {{-- The map --}}
                <div id="map"></div>

                {{-- Screenshot --}}
                <button id="screenshot-btn" class="screenshot-button">
                    <i class="bi bi-camera" style="font-size: 16px;"></i>
                </button>

                {{-- Settings --}}
                <div class="setting-container">
                    <button id="layer-btn" class="layer-button" style="display: none">
                        <i class="bi bi-layers-fill" style="font-size: 24px;"></i>
                    </button>

                    <button class="setting-back-button" id="setting-back-btn" style="">
                        <i class="bi bi-chevron-double-right"></i>
                    </button>

                    <div class="layer-container" id="layer-container"
                        style="background-color: #f9f9f9; padding: 16px; max-height:320px; overflow: auto; border: 3px solid #C94C4C;">

                        {{-- <p style="font-weight: bold; margin-top: 4px">Skala</p>
                        <div class="flex justify-around"
                            style="display: flex;justify-content: space-around; margin-top: 4px">
                            <div style="display: flex;align-items: center; gap: 4px">
                                <input type="radio" id="radio-kelurahan" value="kelurahan" name="filter-type"
                                    class="focus:ring-0" checked>
                                <label for="kelurahan" class="text-sm" style="margin-right: 8px">Per
                                    kelurahan</label>
                            </div>
                            <div style="display: flex;align-items: center; gap: 4px">
                                <input type="radio" id="radio-kecamatan" value="kecamatan" name="filter-type"
                                    class="focus:ring-0">
                                <label for="kecamatan" class="text-sm">Per kecamatan</label>
                            </div>
                        </div> --}}
                        {{-- MAP DATA --}}
                        <p style="font-weight: bold; margin-top: 4px">Data</p>

                        <div
                            style="display: flex; gap: 8px;margin: 8px 0px;align-items: center; justify-content: space-between">
                            <div style="display: flex;gap:8px">
                                <input style="width: 16px" type="checkbox" id="faskes" name="map-data">
                                <div>
                                    <label for="faskes">Fasilitas Kesehatan</label>
                                    {{-- <div style="display: flex; gap: 8px;">
                                        <input type="range" min="0" max="100" value="0"
                                            step="1" id="faskes-opacity">
                                        <p id="faskes-opacity">0%</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <div>
                            <div
                                style="display: flex; gap: 8px;margin: 8px 0px;align-items: center; justify-content: space-between">
                                <div style="display: flex;gap:8px">
                                    <input style="width: 16px" type="checkbox" id="kasus-dbd" name="map-data">
                                    <div>
                                        <label for="kasus-dbd">Kasus DBD</label>
                                        {{-- <div style="display: flex; gap: 8px;">
                                            <input type="range" min="0" max="100" value="0"
                                                step="1" id="kasus-dbd-opacity">
                                            <p id="kasus-dbd-opacity">0%</p>
                                        </div> --}}
                                    </div>
                                </div>
                                <i id="expand-btn-kasus-dbd" class="bi bi-chevron-down setting-button"
                                    style="font-size: 16px"></i>
                            </div>

                            <div id="kasus-dbd-params" style="display: none">
                                {{-- parameters will be generated by js --}}
                            </div>
                        </div>

                        <div>
                            <div
                                style="display: flex; gap: 8px;margin: 8px 0px;align-items: center; justify-content: space-between">
                                <div style="display: flex;gap:8px">
                                    <input style="width: 16px" type="checkbox" id="kepadatan-penduduk"
                                        name="map-data">
                                    <div>
                                        <label for="kepadatan-penduduk">Kepadatan Penduduk</label>
                                        {{-- <div style="display: flex; gap: 8px;">
                                            <input type="range" min="0" max="100" value="0"
                                                step="1" id="kepadatan-penduduk-opacity">
                                            <p id="kepadatan-penduduk-opacity">0%</p>
                                        </div> --}}
                                    </div>
                                </div>
                                <i id="expand-btn-kepadatan-penduduk" class="bi bi bi-chevron-down setting-button"
                                    style="font-size: 16px"></i>
                            </div>

                            <div id="kepadatan-penduduk-params" style="display: none">
                                {{-- parameters will be generated by js --}}
                            </div>
                        </div>

                        <div>
                            <div
                                style="display: flex; gap: 8px;margin: 8px 0px;align-items: center; justify-content: space-between">
                                <div style="display: flex;gap:8px">
                                    <input style="width: 16px" type="checkbox" id="suhu" name="map-data">
                                    <div>
                                        <label for="suhu">Suhu</label>
                                        {{-- <div style="display: flex; gap: 8px;">
                                        <input type="range" min="0" max="100" value="0"
                                            step="1" id="suhu-opacity">
                                        <p id="suhu-opacity">0%</p>
                                    </div> --}}
                                    </div>
                                </div>
                                <i id="expand-btn-suhu" class="bi bi bi-chevron-down setting-button"
                                    style="font-size: 16px"></i>
                            </div>

                            <div id="suhu-params" style="display: none">
                                {{-- parameters will be generated by js --}}
                            </div>
                        </div>

                        <div>
                            <div
                                style="display: flex; gap: 8px;margin: 8px 0px;align-items: center; justify-content: space-between">
                                <div style="display: flex;gap:8px">
                                    <input style="width: 16px" type="checkbox" id="kelembapan" name="map-data">
                                    <div>
                                        <label for="kelembapan">Kelembaban</label>
                                        {{-- <div style="display: flex; gap: 8px;">
                                        <input type="range" min="0" max="100" value="0"
                                            step="1" id="kelembapan-opacity">
                                        <p id="kelembapan-opacity">0%</p>
                                    </div> --}}
                                    </div>
                                </div>
                                <i id="expand-btn-kelembapan" class="bi bi bi-chevron-down setting-button"
                                    style="font-size: 16px"></i>
                            </div>
                            <div id="kelembapan-params" style="display: none">
                                {{-- parameters will be generated by js --}}
                            </div>
                        </div>

                        <div>
                            <div
                                style="display: flex; gap: 8px;margin: 8px 0px;align-items: center; justify-content: space-between">
                                <div style="display: flex;gap:8px">
                                    <input style="width: 16px" type="checkbox" id="curah-hujan" name="map-data">
                                    <div>
                                        <label for="curah-hujan">Curah Hujan</label>
                                        {{-- <div style="display: flex; gap: 8px;">
                                        <input type="range" min="0" max="100" value="0"
                                            step="1" id="curah-hujan-opacity">
                                        <p id="curah-hujan-opacity">0%</p>
                                    </div> --}}
                                    </div>
                                </div>
                                <i id="expand-btn-curah-hujan" class="bi bi-chevron-down setting-button"
                                    style="font-size: 16px"></i>
                            </div>
                            <div id="curah-hujan-params" style="display: none">
                                {{-- parameters will be generated by js --}}
                            </div>
                        </div>

                        {{-- BASEMAP --}}
                        <p style="font-weight: bold">Basemap</p>
                        <div style="display: flex; gap: 16px;margin-top: 8px">
                            <div>
                                <div>
                                    <input type="radio" value="imagery" name="map-theme" id="imagery"
                                        onclick="switchMapTheme(this.value)">
                                    <label for="imagery">
                                        World Imagery
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" value="street" name="map-theme" id="street" 
                                        onclick="switchMapTheme(this.value)">
                                    <label for="street">
                                        World Street
                                    </label>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input type="radio" value="osm" name="map-theme" id="osm" checked
                                        onclick="switchMapTheme(this.value)">
                                    <label for="osm">
                                        Open Street Map
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" value="esri" name="map-theme" id="esri"
                                        onclick="switchMapTheme(this.value)">
                                    <label for="esri-map">
                                        Esri World
                                    </label>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>

                {{-- Legenda --}}
                <div class="legenda-container">
                    <button id="legenda-btn" class="legenda-button"
                        style="width: 100px; height: 20px; border-radius: 5px;">
                        <i class="bi bi-list mr-2" style="margin-right: 5px"></i>
                        Legenda
                    </button>
                    <div id="legenda-popup"
                        style="background-color: white; border: 3px solid #C94C4C; width: 250px;  border-radius: 5px;padding: 8px;overflow: auto; max-height: 180px; display: none">
                        <p style="font-weight: bold; font-size: 14px">DESKRIPSI PETA</p>
                        <p id="deskripsi-wilayah" style="margin-bottom: 8px;"></p>
                        <p style="font-weight: bold; font-size: 14px">LEGENDA</p>
                        <div id="legenda-content">
                            {{-- legenda is generated by javascript --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery harus di-load terlebih dahulu -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- Bootstrap Bundle JS (includes Popper.js for dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icons Initialization -->
    <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script>
        feather.replace();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


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

    {{-- Map Data  --}}
    <script src="{{ asset('assets/js/mapData.js') }}"></script>

    {{-- Script for session storage --}}
    <script>
        // SS stands for "Session Storage"
        const SS_MAP_SETTING_KEY = 'map_setting';

        const SS_FASKES_KEY = 'faskes';
        const SS_KASUS_DBD_KEY = 'kasus_dbd';
        const SS_SUHU_KEY = 'suhu';
        const SS_KELEMBAPAN_KEY = 'kelembapan';
        const SS_CURAH_HUJAN_KEY = 'curah_hujan';
        const SS_KEPADATAN_PENDUDUK_KEY = 'kepadatan_penduduk';

        sessionStorage.clear();
        // initialize session storage
        sessionStorage.setItem(SS_MAP_SETTING_KEY, JSON.stringify({}));


        function setMapSettingValues(newValue) {
            const data = JSON.stringify(newValue);
            sessionStorage.setItem(SS_MAP_SETTING_KEY, data);
        }

        function getMapSettingValues() {
            const setting = sessionStorage.getItem(SS_MAP_SETTING_KEY);
            return JSON.parse(setting);
        }
    </script>

    <!-- OpenLayers -->
    <script src="https://cdn.jsdelivr.net/npm/ol@v10.2.1/dist/ol.js"></script>
    <script>
        const container = document.getElementById('popup');
        const content = document.getElementById('popup-content');
        const closer = document.getElementById('popup-closer');

        const overlay = new ol.Overlay({
            element: container,
            autoPan: {
                animation: {
                    duration: 250,
                },
            },
        });

        closer.onclick = function() {
            overlay.setPosition(undefined);
            closer.blur();
            return false;
        };

        var view = new ol.View({
            center: ol.proj.fromLonLat([110.3644, -7.8014]),
            zoom: 13.59
        });

        // Inisialisasi peta menggunakan OpenLayers
        var osmLayer = new ol.layer.Tile({
            source: new ol.source.OSM()
        });

        var map = new ol.Map({
            target: 'map',
            layers: [osmLayer],
            view: view,
            controls: [
                new ol.control.Zoom(),
                new ol.control.Attribution(),
                new ol.control.FullScreen(),
                new ol.control.ScaleLine()
            ],
            overlays: [overlay]
        });

        /**
         * Build popup view
         * @param {Array<Object<string, string>>} data
         * @requires data must be an array of object that contains key and value
         */
        function buildPopupView(data) {
            if (!Array.isArray(data) || data.length === 0) {
                return;
            }
            if (!data.every(item => typeof item === 'object' && item !== null && Object.keys(item).length === 2)) {
                return;
            }

            const table = document.createElement("table");
            table.className = "table table-striped table-bordered";

            const tbody = document.createElement("tbody");
            data.forEach(item => {
                const tr = document.createElement("tr");
                const th = document.createElement("th");
                const td = document.createElement("td");

                th.textContent = item.key.charAt(0).toUpperCase() + item.key.slice(1);
                td.textContent = item.value;

                tr.appendChild(th);
                tr.appendChild(td);
                tbody.appendChild(tr);
            });
            table.appendChild(tbody);

            return table.outerHTML;
        }

        map.on('singleclick', function(evt) {
            map.forEachFeatureAtPixel(evt.pixel, function(feature) {
                if (!feature) {
                    overlay.setPosition(undefined);
                    closer.blur();
                    return
                };

                const data = Object.entries(feature.values_).filter(([key]) => !['geometry', 'tingkat_ka']
                    .includes(key)).map(([key, value]) => ({
                    key,
                    value
                }));

                content.innerHTML = buildPopupView(data);
                overlay.setPosition(evt.coordinate);
            });
        });

        function resetMap() {
            const layers = map.getLayers().getArray();
            layers.slice(1).forEach(layer => map.removeLayer(layer));
        }

        function switchMapTheme(theme) {
            var newLayer;

            if (theme === 'imagery') {
                newLayer = new ol.layer.Tile({
                    source: new ol.source.OSM({
                        url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',
                        attributions: '© Esri | SIPENDARA | Yenny Asima',
                        crossOrigin: 'anonymous'
                    })
                });
            } else if (theme === 'street') {
                newLayer = new ol.layer.Tile({
                    source: new ol.source.OSM({
                        url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}',
                        attributions: '© Esri | SIPENDARA | Yenny Asima',
                        crossOrigin: 'anonymous'
                    })
                });
            } else if (theme === 'osm') {
                newLayer = new ol.layer.Tile({
                    source: new ol.source.OSM({
                        attributions: ' &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors | SIPENDARA | Yenny Asima'
                    })
                });
            } else if (theme === 'esri') {
                newLayer = new ol.layer.Tile({
                    source: new ol.source.OSM({
                        url: 'https://services.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}',
                        attributions: '© Esri | SIPENDARA | Yenny Asima',
                        crossOrigin: 'anonymous'
                    })
                });
            }

            map.getLayers().setAt(0, newLayer);
        }

        // function for handling `legenda`
        function renderMapLegends() {
            $('#legenda-content').empty();

            const dataIds = [];
            document.querySelectorAll('input[name="map-data"]:checked').forEach(function(checkbox) {
                dataIds.push(checkbox.id);
            });

            const dataMapping = {
                faskes: "faskes_hiv",
                "kasus-dbd": "kasus_dbd",
                "kepadatan-penduduk": "kepadatan_penduduk",
                "suhu": "suhu",
                "kelembapan": "kelembapan",
                "curah-hujan": "curah_hujan",
            }

            const data = mapData["DBD"].options;
            dataIds.forEach(id => {
                const mapping = dataMapping[id];
                const item = data.find(d => d.value === mapping);

                if (!item) {
                    return
                }
                const legendContainer = document.createElement('div');
                legendContainer.classList.add('mb-2');

                let innerHTML = `<p style="font-weight: bold;margin-bottom: 2px">${item.text}</p>`
                if (id === 'faskes') {
                    innerHTML += `
                    <div style="display: flex; gap: 2px; align-items: center; margin-top: 4px">
                        <img src="{{ asset('assets/images/hospital-marker-icon.png') }}" alt="Fasilitas Kesehatan" width="24" height="24" style="margin-right: 8px">
                        <p>Layanan Kesehatan</p>
                    </div>`
                } else {
                    innerHTML += `<div style="display: flex;flex-direction: column; gap: 3px;">
                        ${item.legends && Object.entries(item.legends).map(([key, value]) => `<div><i class="bi bi-square-fill legenda-icon" style="color: ${value}"></i><span>${key.charAt(0).toUpperCase() + key.slice(1)}</span></div>`).join('')}
                    </div>`
                }

                legendContainer.innerHTML = innerHTML

                $('#legenda-content').append(legendContainer);
            })
        }
    </script>

    {{-- Handling Legends PopUp --}}
    <script>
        document.getElementById('legenda-btn').addEventListener('click', function() {
            const legendaPopup = document.getElementById('legenda-popup');
            if (legendaPopup.style.display === 'none') {
                legendaPopup.style.display = 'block';
            } else {
                legendaPopup.style.display = 'none';
            }
        });
    </script>

    {{-- Handling screenshot --}}
    <script>
        document.getElementById("screenshot-btn").addEventListener("click", function() {
            html2canvas(document.body).then(function(canvas) {
                var link = document.createElement('a');
                link.href = canvas.toDataURL('image/png');
                link.download = 'screenshot.png';
                link.click()
            });
        });
    </script>

    {{-- Handling Map Setting Popup --}}
    <script>
        document.getElementById('layer-btn').addEventListener('click', function() {
            const mapSettingPopup = document.getElementById('layer-container');
            mapSettingPopup.style.display = 'block';

            const btnBackBtn = document.getElementById('setting-back-btn');
            btnBackBtn.style.display = 'block';

            const layerBtn = document.getElementById('layer-btn');
            layerBtn.style.display = 'none';
        });

        document.getElementById('setting-back-btn').addEventListener('click', function() {
            const mapSettingPopup = document.getElementById('layer-container');
            mapSettingPopup.style.display = 'none';

            const btnBackBtn = document.getElementById('setting-back-btn');
            btnBackBtn.style.display = 'none';

            const layerBtn = document.getElementById('layer-btn');
            layerBtn.style.display = 'block';
        });
    </script>

    @stack('script')

    {{-- Handling toast message --}}
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

    {{-- Handling map data checkboxes --}}
    <script>
        // add onchange listener on checkboxes with name map-data
        // set the data to show only `faskes` 
        // and another one data type (`kepadatan penduduk` / `faktor lingkungan` / `suhu`)
        document.querySelectorAll('input[name="map-data"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                const id = this.id;
                const checked = this.checked;

                if (id !== 'faskes') {
                    document.querySelectorAll('input[name="map-data"]').forEach(function(checkbox) {
                        if (checkbox.id !== id && checkbox.id !== 'faskes') {
                            checkbox.checked = false;
                            uncheckAllChildCheckboxesWithParentId(checkbox.id);
                            deleteMapSettingWith(checkbox.id);
                        }
                    });
                }

                // update map setting
                const mapSetting = getMapSettingValues();
                switch (id) {
                    case "faskes":
                        if (checked) {
                            mapSetting[SS_FASKES_KEY] = {}
                        } else {
                            delete mapSetting[SS_FASKES_KEY]
                        }
                        break
                    case "kasus-dbd":
                        if (checked) {
                            mapSetting[SS_KASUS_DBD_KEY] = kasusDbdParams
                        } else {
                            delete mapSetting[SS_KASUS_DBD_KEY]
                        }
                        break;
                    case "kepadatan-penduduk":
                        if (checked) {
                            const values = [...document.querySelectorAll(
                                'input[name="kepadatan_penduduk_year"]')].map(el => el.id)

                            mapSetting[SS_KEPADATAN_PENDUDUK_KEY] = values
                        } else {
                            delete mapSetting[SS_KEPADATAN_PENDUDUK_KEY]
                        }
                        break

                    case "suhu":
                        if (checked) {
                            mapSetting[SS_SUHU_KEY] = faktorLingkunganParams
                        } else {
                            delete mapSetting[SS_SUHU_KEY]
                        }
                        break;

                    case "kelembapan":
                        if (checked) {
                            mapSetting[SS_KELEMBAPAN_KEY] = faktorLingkunganParams
                        } else {
                            delete mapSetting[SS_KELEMBAPAN_KEY]
                        }
                        break
                    case "curah-hujan":
                        if (checked) {
                            mapSetting[SS_CURAH_HUJAN_KEY] = faktorLingkunganParams
                        } else {
                            delete mapSetting[SS_CURAH_HUJAN_KEY]
                        }
                        break
                }
                setMapSettingValues(mapSetting);
                renderMapData()
            });
        });

        function matchCheckboxIdWithMapSettingId(checkboxId) {
            switch (checkboxId) {
                case "faskes":
                    return SS_FASKES_KEY
                case "kasus-dbd":
                    return SS_KASUS_DBD_KEY
                case "kepadatan-penduduk":
                    return SS_KEPADATAN_PENDUDUK_KEY
                case "suhu":
                    return SS_SUHU_KEY
                case "kelembapan":
                    return SS_KELEMBAPAN_KEY
                case "curah-hujan":
                    return SS_CURAH_HUJAN_KEY
            }
        }

        function deleteMapSettingWith(checkboxId) {
            const key = matchCheckboxIdWithMapSettingId(checkboxId);

            const mapSetting = getMapSettingValues();
            delete mapSetting[key]
            setMapSettingValues(mapSetting);
        }

        function deleteAllMapSettingExcept(id) {
            const mapSetting = getMapSettingValues();
            Object.keys(mapSetting).forEach((key) => {
                if (key !== id && key !== SS_FASKES_KEY) {
                    delete mapSetting[key]
                }
            })
            setMapSettingValues(mapSetting);
        }

        function unCheckAllParentCheckboxesExcept(checkboxIds) {
            document.querySelectorAll('input[name="map-data"]').forEach(function(checkbox) {
                if (!checkboxIds.includes(checkbox.id) && checkbox.id !== 'faskes') {
                    checkbox.checked = false;
                    uncheckAllChildCheckboxesWithParentId(checkbox.id);
                }
            })
        }

        function uncheckAllChildCheckboxesWithParentId(parentId) {
            const paramsDiv = document.getElementById(`${parentId}-params`);
            const inputs = paramsDiv.querySelectorAll('input');
            inputs.forEach(input => input.checked = false);
        }
    </script>

    {{-- script for handling expand or collapse data params --}}
    <script>
        function toggleParams(id) {
            const paramsDiv = document.getElementById(`${id}-params`);
            const isVisible = paramsDiv.style.display === 'block';
            paramsDiv.style.display = isVisible ? 'none' : 'block';

            const icon = document.getElementById(`expand-btn-${id}`);
            icon.classList.toggle('bi-chevron-up', !isVisible);
            icon.classList.toggle('bi-chevron-down', isVisible);
        }

        document.getElementById('expand-btn-kasus-dbd').addEventListener('click', () => toggleParams('kasus-dbd'));
        document.getElementById('expand-btn-kepadatan-penduduk').addEventListener('click', () => toggleParams(
            'kepadatan-penduduk'));
        document.getElementById('expand-btn-suhu').addEventListener('click', () => toggleParams('suhu'));
        document.getElementById('expand-btn-kelembapan').addEventListener('click', () => toggleParams('kelembapan'));
        document.getElementById('expand-btn-curah-hujan').addEventListener('click', () => toggleParams('curah-hujan'));
    </script>


    {{-- script for generating kepadatan penduduk params  --}}
    <script>
        function generateKepadatanPendudukParams(params) {
            if (!Array.isArray(params) || params.some(param => typeof param !== 'string')) {
                console.error('params must be an array of string');
                return;
            }

            const kepadatanPendudukParamsDiv = document.getElementById('kepadatan-penduduk-params');

            const newElement = document.createElement('ul');
            newElement.style.listStyleType = 'none';
            params.forEach(function(param) {
                const newSubElement = document.createElement('li');
                newSubElement.style.display = 'flex';
                newSubElement.style.alignItems = 'center';
                newSubElement.style.gap = '8px';
                newSubElement.style.marginBottom = '4px';
                newSubElement.innerHTML = `
                            <input type="checkbox" style="width: 16px; height: 16px;" id="${param}"
                                name="kepadatan_penduduk_year">
                            <label for="item-${param}">${param}</label>
                `;
                newElement.appendChild(newSubElement);
            })
            kepadatanPendudukParamsDiv.appendChild(newElement);

            // add event listener to all checkboxes
            document.querySelectorAll('input[name="kepadatan_penduduk_year"]').forEach(function(checkbox) {
                checkbox.onchange = function() {
                    // get all checked values
                    function getCheckedValues() {
                        const checkedValues = [];
                        document.querySelectorAll('input[name="kepadatan_penduduk_year"]:checked').forEach(
                            function(checkbox) {
                                checkedValues.push(parseInt(checkbox.id));
                            });
                        return checkedValues;
                    }
                    const years = getCheckedValues();

                    // update map setting
                    const mapSetting = getMapSettingValues();
                    if (years.length === 0) {
                        delete mapSetting[SS_KEPADATAN_PENDUDUK_KEY]
                        setMapSettingValues(mapSetting)
                    } else {
                        mapSetting[SS_KEPADATAN_PENDUDUK_KEY] = years;
                        setMapSettingValues(mapSetting)
                        deleteAllMapSettingExcept(SS_KEPADATAN_PENDUDUK_KEY)
                    }

                    // if there is at least one checked value, check the parent checkbox
                    const isChecked = years.length > 0;
                    document.getElementById('kepadatan-penduduk').checked = isChecked;
                    if (isChecked) {
                        unCheckAllParentCheckboxesExcept(['kepadatan-penduduk'])
                    }
                    renderMapData()
                }
            });
        }

        const kepadatanPendudukParams = {!! json_encode($kepadatanPendudukDbdDate) !!};
        generateKepadatanPendudukParams(kepadatanPendudukParams);

        document.getElementById('kepadatan-penduduk').onchange = function() {
            const checked = this.checked;
            document.querySelectorAll('input[name="kepadatan_penduduk_year"]').forEach(function(checkbox) {
                checkbox.checked = checked;
            });
        }
    </script>

    {{-- Script for generating kasusDBD, suhu, kelembapan, and curah hujan params --}}
    <script>
        const monthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
            'Oktober', 'November', 'Desember'
        ];

        function renderDataParams(divId, params) {
            const div = document.getElementById(divId);
            const newElement = document.createElement('ul');
            newElement.style.listStyleType = 'none';

            Object.keys(params).forEach(function(year) {
                const listItem = document.createElement('li');
                listItem.style.display = 'flex';
                listItem.style.alignItems = 'center';
                listItem.style.gap = '8px';
                listItem.innerHTML = `
                <input type="checkbox" style="width: 16px; height: 16px;" id="${year}"
                    name="${divId}-${year}" >
                <label for="${year}">${year}</label>
            `;
                newElement.appendChild(listItem);

                const sublist = document.createElement('ul');
                sublist.style.listStyleType = 'none';
                sublist.style.marginTop = '4px';

                const paramList = params[year].sort();
                paramList.forEach(function(monthIdx) {
                    const subItem = document.createElement('li');
                    subItem.style.display = 'flex';
                    subItem.style.alignItems = 'center';
                    subItem.style.gap = '8px';
                    subItem.style.marginBottom = '4px';
                    subItem.innerHTML = `
                        <input type="checkbox" style="width: 16px; height: 16px;" id="${monthIdx}"
                            name="${divId}-${year}-month">
                        <label for="${monthIdx}">${monthNames[monthIdx-1]}</label>
                    `;
                    sublist.appendChild(subItem);
                });

                newElement.appendChild(sublist);
            });
            div.appendChild(newElement);
        }

        function setCheckboxesListener(divId, params) {
            const checkboxId = divId.replace('-params', '');
            const rootCheckbox = document.getElementById(checkboxId);

            Object.keys(params).forEach(function(year) {
                // for each year checkbox, add an onchange event listener
                // if the checkbox is checked, check all the corresponding month checkboxes
                // if the checkbox is unchecked, uncheck all the corresponding month checkboxes
                document.querySelectorAll('input[name="' + divId + '-' + year + '"]').forEach(function(checkbox) {
                    checkbox.onchange = function() {
                        const id = this.id;
                        const checked = this.checked;

                        // select all the month checkboxes that belong to this year
                        const months = []
                        document.querySelectorAll('input[name="' + divId + '-' + year + '-month"]')
                            .forEach(function(checkbox) {
                                checkbox.checked = checked;
                                months.push(parseInt(checkbox.id));
                            });

                        // get all the checked year checkboxes
                        const checkedYears = [];
                        document.querySelectorAll('input[name="' + divId + '-' + year + '"]:checked')
                            .forEach(function(checkbox) {
                                checkedYears.push(checkbox.id);
                            });
                        // check if any of the year checkbox is checked
                        const isChecked = checkedYears.length > 0;
                        // check the root checkbox if any of the year checkbox is checked
                        rootCheckbox.checked = isChecked;
                        if (isChecked) {
                            unCheckAllParentCheckboxesExcept([checkboxId])
                        }

                        // update map setting 
                        const mapSetting = getMapSettingValues();
                        const settingKey = matchCheckboxIdWithMapSettingId(checkboxId);

                        if (isChecked === false) {
                            delete mapSetting[settingKey]
                            setMapSettingValues(mapSetting)
                        } else {
                            const setting = mapSetting[settingKey] || {};
                            setting[year] = months
                            mapSetting[settingKey] = setting
                            setMapSettingValues(mapSetting)
                            deleteAllMapSettingExcept(settingKey)
                        }
                        renderMapData()
                    }
                })

                // for each month checkbox, add an onchange event listener
                // if any of the month checkbox is checked, check the year checkbox
                // if none of the month checkbox is checked, uncheck the year checkbox
                document.querySelectorAll('input[name="' + divId + '-' + year + '-month"]').forEach(function(
                    checkbox) {
                    checkbox.onchange = function() {
                        // get all the checked month checkboxes
                        const checkedMonths = [];
                        document.querySelectorAll('input[name="' + divId + '-' + year +
                                '-month"]:checked')
                            .forEach(
                                function(
                                    checkbox) {
                                    checkedMonths.push(parseInt(checkbox.id));
                                });

                        // if any of the month checkbox is checked, check the year checkbox
                        // otherwise, uncheck the year checkbox
                        const isChecked = checkedMonths.length > 0;
                        document.querySelectorAll('input[name="' + divId + '-' + year + '"]')
                            .forEach(checkbox => checkbox.checked = isChecked);

                        // check the root checkbox if any of the year checkbox is checked
                        rootCheckbox.checked = isChecked;
                        if (isChecked) {
                            unCheckAllParentCheckboxesExcept([checkboxId])
                        }

                        // update map setting
                        const mapSetting = getMapSettingValues();
                        const settingKey = matchCheckboxIdWithMapSettingId(checkboxId);

                        if (isChecked === false) {
                            const setting = mapSetting[settingKey] || {};
                            delete setting[year]
                            if (Object.keys(setting).length === 0) {
                                delete mapSetting[settingKey]
                            } else {
                                mapSetting[settingKey] = setting
                                setMapSettingValues(mapSetting)
                                deleteAllMapSettingExcept(settingKey)
                            }
                        } else {
                            const setting = mapSetting[settingKey] || {};
                            setting[year] = checkedMonths
                            mapSetting[settingKey] = setting
                            setMapSettingValues(mapSetting)
                            deleteAllMapSettingExcept(settingKey)
                        }


                        renderMapData()
                    }
                })
            })

            // add an onchange event listener on the root checkbox
            // if the root checkbox is checked, check all the year and month checkboxes
            // if the root checkbox is unchecked, uncheck all the year and month checkboxes
            rootCheckbox.onchange = function() {
                // get the checked status of the root checkbox
                const isChecked = rootCheckbox.checked;

                // loop through all the year and month checkboxes
                // if the root checkbox is checked, check all the year and month checkboxes
                // if the root checkbox is unchecked, uncheck all the year and month checkboxes
                Object.keys(params).forEach(function(year) {
                    document.querySelectorAll('input[name="' + divId + '-' + year + '"]').forEach(function(
                        checkbox) {
                        checkbox.checked = isChecked;
                    })

                    document.querySelectorAll('input[name="' + divId + '-' + year + '-month"]').forEach(
                        function(
                            checkbox) {
                            checkbox.checked = isChecked;
                        })
                })
            }
        }

        function generateDataParams(divId, params) {
            if (!divId) {
                console.error('divId is required');
                return;
            }

            if (!params || typeof params !== 'object') {
                console.error('params must be an object with key number and value in array');
                return;
            }

            renderDataParams(divId, params);
            setCheckboxesListener(divId, params);
        }

        const kasusDbdParams = {!! json_encode($kasusDbdDate) !!};
        const faktorLingkunganParams = {!! json_encode($faktorLingkunganDbdDate) !!};

        const KASUS_DBD_DIV_ID = 'kasus-dbd-params';
        const SUHU_DIV_ID = 'suhu-params';
        const KELEMBAPAN_DIV_ID = 'kelembapan-params';
        const CURAH_HUJAN_DIV_ID = 'curah-hujan-params';

        generateDataParams(KASUS_DBD_DIV_ID, kasusDbdParams);
        generateDataParams(SUHU_DIV_ID, faktorLingkunganParams);
        generateDataParams(KELEMBAPAN_DIV_ID, faktorLingkunganParams);
        generateDataParams(CURAH_HUJAN_DIV_ID, faktorLingkunganParams);
    </script>

    {{-- Script for rendering data to map  --}}
    <script>
        function renderMapData() {
            renderMapLegends()
            const mapSetting = getMapSettingValues();

            setMapDescription()
            fetchDataAndInflateToMap()
        }
            function fetchDataAndInflateToMap() {
                toastr.options = {
                    "timeOut": "1000",            // Durasi tampil selama 1 detik
                    "extendedTimeOut": "1000",    // Tambahan 2 detik saat di-hover
                    "showDuration": "100",        // Muncul dengan animasi 300 milidetik
                    "hideDuration": "1000"        // Hilang dengan animasi 1000 milidetik
                };
        toastr.info('Sedang memuat data...');

        const mapSetting = getMapSettingValues();
        $.ajax({
            url: '{{ route('peta.filter') }}',
            method: 'GET',
            data: {
                map_setting: JSON.stringify(mapSetting)
            },
            success: function(response) {
                resetMap();
                const emptyDataTitle = [];
                Object.entries(response).forEach(([key, value]) => {
                    if (value.length === 0) {
                        emptyDataTitle.push(key);
                    }
                    inflateToMap(key, value);
                });
                if (emptyDataTitle.length === 0) {
                    toastr.success('Data berhasil dimuat!');
                } else {
                    emptyDataTitle.forEach(title => {
                        switch (title) {
                            case "faskes":
                                toastr.warning('Data fasilitas kesehatan tidak ditemukan!');
                                break;
                            case "kepadatan_penduduk":
                                toastr.warning('Data kepadatan penduduk tidak ditemukan!');
                                break;
                            case "suhu":
                                toastr.warning('Data suhu tidak ditemukan!');
                                break;
                            case "kelembapan":
                                toastr.warning('Data kelembapan tidak ditemukan!');
                                break;
                            case "curah_hujan":
                                toastr.warning('Data curah hujan tidak ditemukan!');
                                break;
                            case "kasus_dbd":
                                toastr.warning('Data kasus DBD tidak ditemukan!');
                                break;
                            default:
                                break;
                        }
                    });
                }
            },
            error: function() {
                toastr.error('Gagal memuat data. Silakan coba lagi.');
            }
        });
    }

        
        function getMapFeatures(key, data) {
            const features = []
            data.forEach(function(item) {
                const feature = new ol.format.GeoJSON().readFeature({
                    'type': 'Feature',
                    'geometry': JSON.parse(item.geometry)
                }, {
                    dataProjection: 'EPSG:4326',
                    featureProjection: 'EPSG:3857'
                })

                switch (key) {
                    case "faskes":
                        feature.set('kecamatan', item.kecamatan)
                        feature.set('faskes', item.faskes_pdp)
                        break;
                    case "kepadatan_penduduk":
                        feature.set('kecamatan', item.kecamatan);
                        feature.set('kelurahan', item.kelurahan);
                        feature.set('Jumlah Penduduk', item.kepadatan);
                        feature.set('tingkat_ka', item.tingkat_ka);
                        break;
                    case "kasus_dbd":
                        feature.set('kecamatan', item.kecamatan);
                        feature.set('kelurahan', item.kelurahan);
                        feature.set('Jumlah kasus', item.kasus);
                        feature.set('tingkat_ka', item.tingkat_ka);
                        break;
                    case 'suhu':
                        feature.set('kecamatan', item.kecamatan);
                        feature.set('kelurahan', item.kelurahan);
                        feature.set('suhu', item.suhu);
                        feature.set('tingkat_ka', item.tingkat_ka_suhu);
                        break;
                    case 'kelembapan':
                        feature.set('kecamatan', item.kecamatan);
                        feature.set('kelurahan', item.kelurahan);
                        feature.set('kelembaban', item.kelembapan);
                        feature.set('tingkat_ka', item.tingkat_ka_kelembapan);
                        break;
                    case 'curah_hujan':
                        feature.set('kecamatan', item.kecamatan);
                        feature.set('kelurahan', item.kelurahan);
                        feature.set('curah hujan', item.curah_hujan);
                        feature.set('tingkat_ka', item.tingkat_ka_curah_hujan);
                        break;
                }

                features.push(feature)
            })

            return features
        }

        function inflateToMap(key, data) {
            const options = mapData["DBD"].options
            const optionKey = key === 'faskes' ? 'faskes_hiv' : key
            const legends = options.find((option) => option
                .value === optionKey).legends

            if (!legends && key !== 'faskes') return

            const features = getMapFeatures(key, data);

            const vectorSource = new ol.source.Vector({
                features: features
            });
            const newVectorLayer = new ol.layer.Vector({
                source: vectorSource,
                style: function(feature) {
                    console.log(key);

                    if (key === 'faskes') {
                        return new ol.style.Style({
                            image: new ol.style.Icon({
                                src: 'assets/images/hospital-marker-icon.png',
                                anchor: [0.5, 1],
                                scale: 0.05,
                            })
                        })
                    }

                    let fillColor = 'rgba(0, 0, 0, 0.6)';
                    const tingkatKa = feature.get('tingkat_ka')?.toLowerCase();

                    if (tingkatKa) {
                        fillColor = legends[tingkatKa];
                    }

                    const labelStyle = new ol.style.Style({
                        text: new ol.style.Text({
                            font: '10px Calibri,sans-serif',
                            overflow: true,
                            fill: new ol.style.Fill({
                                color: '#000'
                            }),
                            stroke: new ol.style.Stroke({
                                color: '#fff',
                                width: 2
                            })
                        })
                    });

                    labelStyle.getText().setText(feature.get('kelurahan'));

                    return [new ol.style.Style({
                        fill: new ol.style.Fill({
                            color: fillColor
                        }),
                        stroke: new ol.style.Stroke({
                            color: '#333',
                            width: 1.5
                        })
                    }), labelStyle];
                }
            });

            map.addLayer(newVectorLayer);

        }
    </script>

    {{-- Script for rendering map description --}}
    <script>
        function setMapDescription() {
            const mapSetting = getMapSettingValues();
            if (Array.from(Object.keys(mapSetting)).length === 0) {
                $('#deskripsi-wilayah').text('');
                return
            }

            let text = 'Data';


            if (mapSetting[SS_FASKES_KEY]) {
                text += ' Fasilitas Kesehatan';
                delete mapSetting[SS_FASKES_KEY]
            }

            Object.keys(mapSetting).forEach((key) => {
                const setting = mapSetting[key];
                switch (key) {
                    case SS_KEPADATAN_PENDUDUK_KEY:
                        text += text.length === 4 ? ' Kepadatan Penduduk Tahun' : ' dan Kepadatan Penduduk Tahun';
                        years = mapSetting[SS_KEPADATAN_PENDUDUK_KEY].sort()
                        if (years.length === 1) {
                            text += ' ' + years[0]
                        } else if (years.length === 2) {
                            text += ' ' + years[0] + ' dan ' + years[1]
                        } else {
                            for (let i = 0; i < years.length - 1; i++) {
                                text += ' ' + years[i] + ','
                            }

                            text += ' dan ' + years[years.length - 1]
                        }
                        break;
                    case SS_KASUS_DBD_KEY:
                    case SS_KELEMBAPAN_KEY:
                    case SS_CURAH_HUJAN_KEY:
                    case SS_SUHU_KEY:
                        text += text.length === 4 ? '' : ' dan';
                        switch (key) {
                            case SS_KASUS_DBD_KEY:
                                text += ' Kasus DBD';
                                break;
                            case SS_KELEMBAPAN_KEY:
                                text += ' Kelembaban';
                                break;
                            case SS_CURAH_HUJAN_KEY:
                                text += ' Curah Hujan';
                                break;
                            case SS_SUHU_KEY:
                                text += ' Suhu';
                                break;
                        }

                        const data = mapSetting[key];
                        const dates = []
                        Object.keys(data).forEach((year) => {
                            const months = data[year];
                            monthsText = months.sort().map(month => monthMapping[month]);

                            const dateTxt = "Bulan " + monthsText.join(", ") + " Tahun " + year
                            dates.push(dateTxt)
                        })

                        if (dates.length === 1) {
                            text += ' ' + dates[0]
                        } else if (dates.length === 2) {
                            text += ' ' + dates[0] + ' dan ' + dates[1]
                        } else {
                            for (let i = 0; i < dates.length - 1; i++) {
                                text += ' ' + dates[i] + ','
                            }

                            text += ' dan ' + dates[dates.length - 1]
                        }

                        break;
                }
            })

            $('#deskripsi-wilayah').text(text);
        }
    </script>
</body>


</html>
