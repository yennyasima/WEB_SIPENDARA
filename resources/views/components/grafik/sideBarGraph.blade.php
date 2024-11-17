<div id="sidebar" class="flex flex-col mr-4  mb-4 ml-4 p-8 min-w-64 bg-[#D95639]  text-white rounded-lg  h-[88vh] ">
    <div class="p-2 rounded flex justify-center bg-[#ffffff38]">
        <svg class="m-1 mr-2" width="14" height="14" viewBox="0 0 14 14" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0.8125 0.25C0.961684 0.25 1.10476 0.309263 1.21025 0.414752C1.31574 0.520242 1.375 0.663316 1.375 0.8125V11.3125C1.375 11.6606 1.51328 11.9944 1.75942 12.2406C2.00556 12.4867 2.3394 12.625 2.6875 12.625H13.1875C13.3367 12.625 13.4798 12.6843 13.5852 12.7898C13.6907 12.8952 13.75 13.0383 13.75 13.1875C13.75 13.3367 13.6907 13.4798 13.5852 13.5852C13.4798 13.6907 13.3367 13.75 13.1875 13.75H2.6875C2.04103 13.75 1.42105 13.4932 0.963927 13.0361C0.506807 12.579 0.25 11.959 0.25 11.3125V0.8125C0.25 0.663316 0.309263 0.520242 0.414752 0.414752C0.520242 0.309263 0.663316 0.25 0.8125 0.25ZM12.25 4.42037V6.8125C12.25 6.96168 12.3093 7.10476 12.4148 7.21025C12.5202 7.31574 12.6633 7.375 12.8125 7.375C12.9617 7.375 13.1048 7.31574 13.2102 7.21025C13.3157 7.10476 13.375 6.96168 13.375 6.8125V3.0625C13.375 2.91332 13.3157 2.77024 13.2102 2.66475C13.1048 2.55926 12.9617 2.5 12.8125 2.5H9.0625C8.91332 2.5 8.77024 2.55926 8.66475 2.66475C8.55926 2.77024 8.5 2.91332 8.5 3.0625C8.5 3.21168 8.55926 3.35476 8.66475 3.46025C8.77024 3.56574 8.91332 3.625 9.0625 3.625H11.4546L8.29412 6.7855L6.62838 5.27125C6.52358 5.17602 6.38671 5.12382 6.24512 5.12507C6.10352 5.12632 5.9676 5.18093 5.8645 5.278L2.677 8.278C2.62166 8.32822 2.57688 8.38897 2.54528 8.45669C2.51367 8.52442 2.49589 8.59776 2.49295 8.67244C2.49001 8.74711 2.50198 8.82163 2.52816 8.89162C2.55435 8.96162 2.59422 9.0257 2.64544 9.08011C2.69667 9.13453 2.75823 9.17819 2.82652 9.20855C2.89481 9.23891 2.96846 9.25535 3.04318 9.25692C3.1179 9.2585 3.19218 9.24516 3.26169 9.21771C3.33119 9.19025 3.39453 9.14921 3.448 9.097L6.25675 6.45362L7.93412 7.97875C8.04113 8.07599 8.18146 8.12829 8.326 8.12479C8.47055 8.1213 8.60819 8.06229 8.71037 7.96L12.25 4.42037Z"
                fill="white" />
        </svg>
        Grafik
    </div>
    <p class="mt-3 font-light">Halaman</p>
    <div class="mt-4">
        <a href={{ Request::is('grafik') ? 'grafik/dbd' : 'dbd' }}
            class="{{ Request::is('grafik/dbd') ? 'font-bold text-left flex justify-between' : 'flex justify-between' }}">
            <div>
                <svg class="inline" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_10_1416)">
                        <path
                            d="M11.252 23.2229C11.2329 21.8451 10.6722 20.5301 9.69114 19.5625C8.71005 18.5948 7.38746 18.0523 6.00947 18.0523C4.63148 18.0523 3.30889 18.5948 2.3278 19.5625C1.34671 20.5301 0.785998 21.8451 0.766968 23.2229M18.74 5.24893V17.2319M6.00997 16.6069C6.9369 16.6069 7.82587 16.2387 8.48131 15.5833C9.13675 14.9278 9.50497 14.0389 9.50497 13.1119C9.50497 12.185 9.13675 11.296 8.48131 10.6406C7.82587 9.98515 6.9369 9.61693 6.00997 9.61693C5.08304 9.61693 4.19407 9.98515 3.53863 10.6406C2.88319 11.296 2.51497 12.185 2.51497 13.1119C2.51497 14.0389 2.88319 14.9278 3.53863 15.5833C4.19407 16.2387 5.08304 16.6069 6.00997 16.6069ZM21.735 15.4019V3.75093C21.7422 3.35295 21.6701 2.95751 21.5229 2.58771C21.3756 2.21791 21.1561 1.88116 20.8772 1.59714C20.5983 1.31312 20.2657 1.08752 19.8986 0.933518C19.5316 0.779514 19.1375 0.700195 18.7395 0.700195C18.3414 0.700195 17.9474 0.779514 17.5803 0.933518C17.2133 1.08752 16.8806 1.31312 16.6017 1.59714C16.3228 1.88116 16.1033 2.21791 15.9561 2.58771C15.8088 2.95751 15.7367 3.35295 15.744 3.75093V15.4019C15.0658 16.0086 14.5878 16.8068 14.3732 17.6911C14.1586 18.5754 14.2176 19.504 14.5423 20.354C14.867 21.204 15.4421 21.9354 16.1916 22.4514C16.9411 22.9674 17.8295 23.2437 18.7395 23.2437C19.6494 23.2437 20.5379 22.9674 21.2873 22.4514C22.0368 21.9354 22.612 21.204 22.9367 20.354C23.2614 19.504 23.3203 18.5754 23.1057 17.6911C22.8912 16.8068 22.4132 16.0086 21.735 15.4019Z"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M2.01394 7.74488C1.7843 7.51549 1.60212 7.24308 1.47782 6.94323C1.35353 6.64338 1.28955 6.32197 1.28955 5.99738C1.28955 5.67279 1.35353 5.35138 1.47782 5.05154C1.60212 4.75169 1.7843 4.47928 2.01394 4.24988C2.24359 4.02049 2.42577 3.74808 2.55006 3.44823C2.67436 3.14838 2.73834 2.82697 2.73834 2.50238C2.73834 2.17779 2.67436 1.85639 2.55006 1.55654C2.42577 1.25669 2.24359 0.984278 2.01394 0.754883M5.73494 7.74488C5.5053 7.51549 5.32312 7.24308 5.19882 6.94323C5.07453 6.64338 5.01055 6.32197 5.01055 5.99738C5.01055 5.67279 5.07453 5.35138 5.19882 5.05154C5.32312 4.75169 5.5053 4.47928 5.73494 4.24988C5.96459 4.02049 6.14677 3.74808 6.27106 3.44823C6.39536 3.14838 6.45934 2.82697 6.45934 2.50238C6.45934 2.17779 6.39536 1.85639 6.27106 1.55654C6.14677 1.25669 5.96459 0.984278 5.73494 0.754883M9.72994 7.74488C9.5003 7.51549 9.31812 7.24308 9.19382 6.94323C9.06953 6.64338 9.00555 6.32197 9.00555 5.99738C9.00555 5.67279 9.06953 5.35138 9.19382 5.05154C9.31812 4.75169 9.5003 4.47928 9.72994 4.24988C10.193 3.7862 10.4531 3.15769 10.4531 2.50238C10.4531 1.84708 10.193 1.21856 9.72994 0.754883M18.7399 20.2269C18.9399 20.232 19.1388 20.1971 19.325 20.1242C19.5112 20.0513 19.6809 19.9418 19.8241 19.8022C19.9673 19.6627 20.0812 19.4958 20.1589 19.3116C20.2366 19.1273 20.2766 18.9294 20.2766 18.7294C20.2766 18.5294 20.2366 18.3315 20.1589 18.1472C20.0812 17.9629 19.9673 17.7961 19.8241 17.6565C19.6809 17.517 19.5112 17.4075 19.325 17.3346C19.1388 17.2616 18.9399 17.2267 18.7399 17.2319C18.3495 17.242 17.9784 17.4042 17.7058 17.6839C17.4332 17.9636 17.2806 18.3388 17.2806 18.7294C17.2806 19.12 17.4332 19.4951 17.7058 19.7749C17.9784 20.0546 18.3495 20.2168 18.7399 20.2269Z"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_10_1416">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <h1 class="px-1 inline">Demam Berdarah</h1>
            </div>
            <svg class="mt-2" width="12" height="9" viewBox="0 0 16 9" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.0084 2.35413C16.0084 2.52473 15.9703 2.69317 15.8967 2.84709C15.8231 3.00101 15.716 3.13648 15.5832 3.24356L8.71506 8.73839C8.51023 8.90573 8.25365 8.99678 7.98916 8.99598C7.72466 8.99519 7.46864 8.9026 7.26482 8.73403L0.430498 3.0038C0.197883 2.80927 0.0520709 2.5303 0.0251406 2.22826C-0.00178977 1.92622 0.092367 1.62586 0.286897 1.39324C0.481427 1.16063 0.760396 1.01482 1.06243 0.987885C1.36447 0.960954 1.66484 1.05511 1.89745 1.24964L8.00277 6.37245L14.1383 1.45779C14.3064 1.31866 14.5107 1.23058 14.7273 1.20396C14.9438 1.17734 15.1634 1.21331 15.3601 1.3076C15.5569 1.4019 15.7225 1.55057 15.8374 1.73604C15.9522 1.9215 16.0116 2.13599 16.0084 2.35413Z"
                    fill="white" />
            </svg>
        </a>
        <div id="sub-menu-dbd" class="ml-4 flex-col {{ Request::is('grafik/dbd') ? 'flex' : 'hidden' }}">
            <button id="kasus-dbd" class="text-left"><svg class="inline" width="19" height="20"
                    viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.4584 2.08325V3.66659M9.50004 2.08325V3.66659M5.54171 2.08325V3.66659M6.33337 12.3749H9.50004M6.33337 8.41658H12.6667M2.77087 8.41658C2.77087 5.80409 2.77087 4.49784 3.58233 3.68638C4.39379 2.87492 5.70004 2.87492 8.31254 2.87492H10.6875C13.3 2.87492 14.6063 2.87492 15.4177 3.68638C16.2292 4.49784 16.2292 5.80409 16.2292 8.41658V12.3749C16.2292 14.9874 16.2292 16.2937 15.4177 17.1051C14.6063 17.9166 13.3 17.9166 10.6875 17.9166H8.31254C5.70004 17.9166 4.39379 17.9166 3.58233 17.1051C2.77087 16.2937 2.77087 14.9874 2.77087 12.3749V8.41658Z"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Kasus DBD</button>

            <button id="kepadatan-dbd" class="text-left"><svg class="inline" width="19" height="20"
                    viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.4584 2.08325V3.66659M9.50004 2.08325V3.66659M5.54171 2.08325V3.66659M6.33337 12.3749H9.50004M6.33337 8.41658H12.6667M2.77087 8.41658C2.77087 5.80409 2.77087 4.49784 3.58233 3.68638C4.39379 2.87492 5.70004 2.87492 8.31254 2.87492H10.6875C13.3 2.87492 14.6063 2.87492 15.4177 3.68638C16.2292 4.49784 16.2292 5.80409 16.2292 8.41658V12.3749C16.2292 14.9874 16.2292 16.2937 15.4177 17.1051C14.6063 17.9166 13.3 17.9166 10.6875 17.9166H8.31254C5.70004 17.9166 4.39379 17.9166 3.58233 17.1051C2.77087 16.2937 2.77087 14.9874 2.77087 12.3749V8.41658Z"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Kepadatan Penduduk</button>

            <button id="suhu-dbd" class="text-left"><svg class="inline" width="19" height="20"
                    viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.4584 2.08325V3.66659M9.50004 2.08325V3.66659M5.54171 2.08325V3.66659M6.33337 12.3749H9.50004M6.33337 8.41658H12.6667M2.77087 8.41658C2.77087 5.80409 2.77087 4.49784 3.58233 3.68638C4.39379 2.87492 5.70004 2.87492 8.31254 2.87492H10.6875C13.3 2.87492 14.6063 2.87492 15.4177 3.68638C16.2292 4.49784 16.2292 5.80409 16.2292 8.41658V12.3749C16.2292 14.9874 16.2292 16.2937 15.4177 17.1051C14.6063 17.9166 13.3 17.9166 10.6875 17.9166H8.31254C5.70004 17.9166 4.39379 17.9166 3.58233 17.1051C2.77087 16.2937 2.77087 14.9874 2.77087 12.3749V8.41658Z"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Faktor Suhu</button>

            <button id="kelembapan-dbd" class="text-left"><svg class="inline" width="19" height="20"
                    viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.4584 2.08325V3.66659M9.50004 2.08325V3.66659M5.54171 2.08325V3.66659M6.33337 12.3749H9.50004M6.33337 8.41658H12.6667M2.77087 8.41658C2.77087 5.80409 2.77087 4.49784 3.58233 3.68638C4.39379 2.87492 5.70004 2.87492 8.31254 2.87492H10.6875C13.3 2.87492 14.6063 2.87492 15.4177 3.68638C16.2292 4.49784 16.2292 5.80409 16.2292 8.41658V12.3749C16.2292 14.9874 16.2292 16.2937 15.4177 17.1051C14.6063 17.9166 13.3 17.9166 10.6875 17.9166H8.31254C5.70004 17.9166 4.39379 17.9166 3.58233 17.1051C2.77087 16.2937 2.77087 14.9874 2.77087 12.3749V8.41658Z"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Faktor Kelembaban</button>
            <button id="curah-hujan-dbd" class="text-left"><svg class="inline" width="19" height="20"
                    viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.4584 2.08325V3.66659M9.50004 2.08325V3.66659M5.54171 2.08325V3.66659M6.33337 12.3749H9.50004M6.33337 8.41658H12.6667M2.77087 8.41658C2.77087 5.80409 2.77087 4.49784 3.58233 3.68638C4.39379 2.87492 5.70004 2.87492 8.31254 2.87492H10.6875C13.3 2.87492 14.6063 2.87492 15.4177 3.68638C16.2292 4.49784 16.2292 5.80409 16.2292 8.41658V12.3749C16.2292 14.9874 16.2292 16.2937 15.4177 17.1051C14.6063 17.9166 13.3 17.9166 10.6875 17.9166H8.31254C5.70004 17.9166 4.39379 17.9166 3.58233 17.1051C2.77087 16.2937 2.77087 14.9874 2.77087 12.3749V8.41658Z"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Faktor Curah Hujan</button>

        </div>
    </div>
</div>
