@extends('layouts.landingpage')
@section('title', 'SIPENDARA - GRAFIK')

@section('content')
    <div id="filter"
        class="fixed right-10 border border-slate-200 z-30 top-36 rounded w-fit h-fit p-4 bg-white drop-shadow-md hidden">
        <h1>Filter</h1>
        <div class="flex space-x-4">
            <div id="filter-tahun">
                <h1>Tahun</h1>
            </div>
            <div id="filter-bulan">
                <h1>Bulan</h1>
            </div>
        </div>
    </div>
    <div class="flex mt-20 z-10 overflow-auto">
        @include('components.grafik.sideBarGraph')
        <div class="">
            <h1 id="title" class="font-bold text-2xl mb-4">Grafik Terbaru Kasus DBD Per Kelurahan</h1>
            <div class="flex space-x-2">
                <div style="width: 120vh; height: calc(100vh - 10rem)" 
                    class="p-4 bg-white overflow-auto drop-shadow-lg rounded border border-slate-200">
                    <canvas id="chart" class="pb-7 overflow-auto"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        const tableName = {!! json_encode($tableName) !!}.toString().split('\\')[2];
        const allData = {!! json_encode($allData) !!};

        // Filter untuk mendapatkan data terbaru dari DataPenyakitDbd per kelurahan
        const filteredData = allData
            .filter(item => tableName === 'DataPenyakitDbd') // Hanya ambil data dari DataPenyakitDbd
            .sort((a, b) => new Date(b.tanggal) - new Date(a.tanggal)); // Urutkan berdasarkan tanggal terbaru

        // Ambil data terbaru per kelurahan (bulan dan tahun yang sama)
        const kelurahanData = {};
        const latestMonthYear = new Date(filteredData[0].tanggal); // Dapatkan bulan dan tahun terbaru dari data pertama
        const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", 
                            "Oktober", "November", "Desember"];
        const monthYearTitle = `${monthNames[latestMonthYear.getMonth()]} ${latestMonthYear.getFullYear()}`;

        filteredData.forEach(item => {
            const itemDate = new Date(item.tanggal);
            const itemMonthYear = `${itemDate.getMonth()}-${itemDate.getFullYear()}`;

            // Filter data dari bulan dan tahun terbaru saja
            if (itemMonthYear === `${latestMonthYear.getMonth()}-${latestMonthYear.getFullYear()}`) {
                const kelurahan = item.kelurahan; // Gunakan kelurahan sebagai kunci
                if (!kelurahanData[kelurahan]) {
                    kelurahanData[kelurahan] = item.kasus; // Simpan kasus terbaru per kelurahan
                }
            }
        });

        // Membuat label dan data untuk grafik
        const xValues = Object.keys(kelurahanData); // Nama kelurahan
        const yValues = Object.values(kelurahanData); // Total kasus per kelurahan
        const barColors = xValues.map(() => getRandomColor()); // Warna acak untuk tiap kelurahan

        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        // Inisialisasi grafik
        const ctx = document.getElementById('chart').getContext('2d');
        const currentChart = new Chart(ctx, {
            type: 'bar', // Jenis grafik batang untuk DataPenyakitDbd per kelurahan
            data: {
                labels: xValues.length !== 0 ? xValues : ['tidak ada Data'], // Label sumbu X (kelurahan)
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues.length !== 0 ? yValues : [1] // Nilai sumbu Y (total kasus)
                }]
            },
            options: {
                layout: {
                    padding: {
                        top: 10,
                        bottom: 8,
                        left: 20,
                        right: 20
                    }
                },
                legend: {
                    display: false, // Sembunyikan legenda karena grafik hanya menampilkan satu dataset
                    position: 'left',
                    labels: {
                        fontSize: 14,
                        boxWidth: 35
                    }
                },
                title: {
                    display: true,
                    text: `Data Kasus DBD ${monthYearTitle}`, // Judul grafik berdasarkan bulan dan tahun terbaru
                    fontSize: 18
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            maxRotation: 90, // Maksimum rotasi untuk label sumbu X
                            minRotation: 45  // Minimum rotasi untuk label sumbu X
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true, // Memastikan skala dimulai dari 0
                            min: 0 // Menetapkan batas minimum pada 0
                        }
                    }]
                },
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    duration: 1000,
                    easing: 'easeOutBounce'
                },
            }
        });
    </script>
@endsection
