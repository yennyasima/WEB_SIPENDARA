<div class="flex py-8 lg:flex-row flex-col md:px-16 bg-[#F1F7FC] items-center">
    <div class="flex w-full lg:w-1/2 justify-center items-center bg-black">
        <div class="aspect-w-16 aspect-h-9 w-full">
            <iframe class="w-full h-96 md:w-300px md:h-96"
                src="https://www.youtube.com/embed/pqXq1AhRrBw" title="Tentang SIPENDARA"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
    <div class="flex flex-col w-full lg:w-1/2 items-center py-5 px-8 md:px-16 ">
        <h2 class="mb-4 text-[#c94c4c] font-bold text-3xl text-center lg:mt-0 mt-4">Tentang SIPENDARA</h2>
        <p class="text-justify mt-4">Sistem Informasi Pemetaan Penyakit Menular Demam Berdarah Dengue adalah sebuah
            platform berbasis WebGIS yang dirancang untuk memvisualisasikan penyebaran spasial kasus Demam Berdarah. 
            Sistem ini memungkinkan baik petugas kesehatan masyarakat maupun masyarakat umum untuk mengakses data 
            mengenai penyakit Demam Berdarah Dengue. Platform WebGIS ini memiliki beberapa fitur utama, termasuk Halaman Peta, 
            Grafik, dan Konten Edukasi, yang semuanya dirancang untuk meningkatkan kegunaan dan manfaat sistem.</p>

        {{-- features --}}
        <div class="flex flex-col mt-6 gap-3">
    <!-- Link to the Peta page -->
    <a href="/peta" class="flex items-center gap-3">
        <i class="bi bi-map text-[#c94c4c] text-5xl"></i>
        <div>
            <h6 class="text-[#c94c4c] font-bold mb-1">Halaman Peta</h6>
            <p class="text-justify">Fitur inti dari sistem ini adalah peta interaktif yang menampilkan data
                kasus Demam Berdarah berdasarkan data di wilayah Kota Yogyakarta.</p>
        </div>
    </a>

    <!-- Link to the Grafik page -->
    <a href="/grafik" class="flex items-center gap-3">
        <i class="bi bi-bar-chart-line text-[#c94c4c] text-5xl"></i>
        <div>
            <h6 class="text-[#c94c4c] font-bold mb-1">Halaman Grafik</h6>
            <p class="text-justify">Selain data spasial, sistem ini juga dilengkapi dengan dashboard grafis yang
                memberikan pengguna wawasan statistik mengenai wabah Demam Berdarah.</p>
        </div>
    </a>

    <!-- Link to the Edukasi page -->
    <a href="/artikel" class="flex items-center gap-3">
        <i class="bi bi-postcard text-[#c94c4c] text-5xl"></i>
        <div>
            <h6 class="text-[#c94c4c] font-bold mb-1">Halaman Edukasi</h6>
            <p class="text-justify">Halaman Edukasi dirancang untuk memberikan informasi kepada masyarakat
                mengenai demam berdarah, cara penularannya, dan langkah-langkah pencegahan.</p>
        </div>
    </a>
</div>



    </div>
</div>
