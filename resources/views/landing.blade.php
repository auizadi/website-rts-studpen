<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT RAJA TEKNIK SOLUSI</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- @vite('resources/css/app.css') --}}

    <style>
        .text-gradient {

            background: linear-gradient(90deg, #ff4800, #e0007c, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .gradient {
            background: linear-gradient(90deg, #ff4800, #e0007c, #3b82f6);

        }

        .gradient:hover {
            box-shadow: 0 4px 8px 0 #e0007b38, 0 6px 20px 0 #e0007b38;

        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-7px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1),
                0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>

</head>

<body class="bg-[#fffef0] dark:bg-gray-900">
    {{-- navbar --}}
    <nav class="bg-white border-gray-200 dark:bg-gray-900/95 sticky top-0 shadow-md shadow-gray-200/10 z-50">
        <div class="max-w-screen-xl flex  flex-wrap items-center justify-between mx-auto p-4">
            <a href="#home" class="flex items-center space-x-3 rtl:space-x-reverse">
                {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" /> --}}
                <span
                    class="text-gradient self-center text-3xl tracking-wide  font-bold whitespace-nowrap dark:text-white">RTL</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                    <li>
                        <a href="#home"
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#about-us"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About
                            Us</a>
                    </li>
                    <li>
                        <a href="#portfolio"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Portfolio</a>
                    </li>
                    <li>
                        <a href="#articles"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Articles</a>
                    </li>
                    <li>
                        <a href="#careers"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Careers</a>
                    </li>
                    <li>
                        <a href="#services"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a href="#contact"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
            {{-- login --}}
            <div class="hidden md:flex md:order-2 items-center gap-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5  dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border  text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm font-semibold leading-normal">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm font-semibold border-slate-300 leading-normal">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] bg-blue-500  rounded-sm text-sm font-semibold  leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
        <!-- Mobile menu (hidden by default) -->
        <div class="md:hidden hidden w-full" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                @if (Route::has('login'))
                    <div class="flex flex-col space-y-2 px-3 py-2">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="nav-auth-btn px-5 py-2 text-sm font-semibold rounded-sm text-center">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="nav-auth-btn px-5 py-2 text-sm font-semibold rounded-sm text-center">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="nav-auth-btn bg-blue-500 text-white px-5 py-2 text-sm font-semibold rounded-sm text-center hover:bg-blue-600">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>

    {{-- home --}}
    <section id="home" class="min-h-screen pt-20 px-5 md:px-10 flex items-center justify-center">
        <div
            class="mx-auto bg-gray-200 dark:bg-gray-800 dark:shadow-md dark:shadow-black dark:border dark:border-gray-700 rounded-lg p-8 md:p-12 text-center">
            <h2 class="dark:dark-text font-extrabold text-3xl md:text-6xl mb-6">Solusi Inovatif di Bidang <span
                    class="text-gradient">Teknik
                    & Teknologi</span></h2>
            <p class="dark:dark-text my-5 text-gray-700 text-lg md:text-xl">RTS menyediakan layanan rekayasa,
                pengembangan perangkat
                lunak, dan R&D
                terdepan untuk
                mendorong kesuksesan industri dan teknologi Anda.</p>
            <a href="#services"
                class="inline-block text-white font-bold px-8 py-3 rounded-full bg-gradient-to-r from-[#ff4800] via-[#e0007c] to-[#3b82f6] hover:bg-blue-600 transition duration-300">Jelajahi
                Layanan
                Kami</a>

        </div>

    </section>

    {{-- about us --}}
    <section id="about-us" class="min-h-screen py-20 px-5 md:px-10 flex items-center">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="dark:dark-text text-3xl font-bold mb-5">Tentang <span class="text-gradient">Raja
                        Teknik Solusi</span> </h2>
                <p class="dark:dark-text max-w-2xl mx-auto text-gray-600">Kami adalah mitra terpercaya Anda dalam
                    memecahkan tantangan
                    teknis dan digital yang kompleks dengan
                    presisi dan inovasi.</p>
            </div>
            <div class="flex flex-col md:flex-row justify-center gap-8">
                <div class="w-full lg:w-1/2 bg-gray-800 rounded-lg p-12 md:p-20 flex items-center justify-center ">
                    <h2 class="text-white text-2xl font-bold text-center">Innovation Team</h2>
                </div>
                <div class="w-full lg:w-1/2 space-y-8 h-full text-center md:text-justify">
                    <div>
                        <h3 class="dark:dark-text text-2xl font-bold mb-4">Misi Kami</h3>
                        <p class="dark:dark-text text-gray-600 ">Memberikan solusi teknis dan digital superior yang
                            meningkatkan
                            efisiensi,
                            keamanan, dan produktivitas bagi klien kami. Kami berkomitmen pada keunggulan, merintis
                            inovasi,
                            dan membangun kemitraan jangka panjang berdasarkan kepercayaan dan hasil.</p>
                    </div>
                    <div>
                        <h3 class="dark:dark-text text-2xl font-bold mb-4">Visi Kami</h3>
                        <p class= "dark:dark-text text-gray-600 ">Menjadi penyedia layanan rekayasa dan teknologi
                            terkemuka,
                            yang diakui
                            atas
                            kualitas, keandalan, dan pendekatan inovatif kami dalam memecahkan masalah industri yang
                            paling
                            menantang.</p>
                    </div>

                </div>
            </div>
            <div class="text-center my-16">
                <h2 class="dark:dark-text text-3xl font-bold mb-5">Keahlian <span class="text-gradient">Kami</span>
                </h2>
                <p class="dark:dark-text max-w-2xl mx-auto text-gray-600">Kami menawarkan berbagai layanan khusus untuk
                    memenuhi
                    beragam kebutuhan industri modern.</p>
            </div>
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center items-center justify-center mx-auto">
                <div class="card">
                    <a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100 text-center dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <i class="fa-solid fa-brain text-5xl mb-5 text-gradient"></i>

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">AI & DATA
                            SCIENCE</h5>
                        <p class="font-normal text-gray-600 dark:text-gray-400">Pengembangan solusi cerdas menggunakan
                            AI, machine learning, dan analisis data untuk wawasan yang dapat ditindaklanjuti.</p>
                    </a>
                </div>
                <div class="card">
                    <a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100 text-center dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <i class="fa-solid fa-robot text-5xl mb-5 text-gradient"></i>

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Industrial
                            Automation
                        </h5>
                        <p class="font-normal text-gray-600 dark:text-gray-400">Implementasi sistem PLC, HMI, dan
                            robotik untuk merampingkan operasi dan meningkatkan produktivitas.</p>
                    </a>
                </div>
                <div class="card">
                    <a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100 text-center dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <i class="fa-solid fa-wifi text-5xl mb-5 text-gradient"></i>

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Internet of
                            Things (IoT)
                        </h5>
                        <p class="font-normal text-gray-600 dark:text-gray-400">Pengembangan solusi IoT end-to-end,
                            termasuk perangkat keras, sensor, konektivitas, dan analisis data.</p>
                    </a>
                </div>
                <div class="card">
                    <a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100 text-center dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <i class="fa-solid fa-code text-5xl mb-5 text-gradient"></i>

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Software
                            Development
                        </h5>
                        <p class="font-normal text-gray-600 dark:text-gray-400">Pengembangan perangkat lunak, aplikasi
                            web, dan mobile kustom untuk kebutuhan bisnis digital Anda.</p>
                    </a>
                </div>
                <div class="card">
                    <a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100 text-center dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <i class="fa-solid fa-vr-cardboard text-5xl mb-5 text-gradient"></i>

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mixed Reality
                            (AR/VR)
                        </h5>
                        <p class="font-normal text-gray-600 dark:text-gray-400">Membangun pengalaman imersif untuk
                            simulasi, pelatihan, dan visualisasi data.</p>
                    </a>
                </div>
                <div class="card">
                    <a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100 text-center dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <i class="fa-solid fa-flask text-5xl text-gradient mb-5 text-gradient"></i>

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Research &
                            Development
                        </h5>
                        <p class="font-normal text-gray-600 dark:text-gray-400">Fokus pada riset dan pengembangan untuk
                            menciptakan inovasi dan solusi teknologi masa depan.

                        </p>
                    </a>


                </div>

            </div>
        </div>
    </section>

    {{-- portfolio --}}
    <section id="portfolio" class="min-h-screen py-20 px-5 md:px-10 flex items-center">
        <div class="max-w-6xl mx-auto">
            <div class="text-center my-16">
                <h2 class="dark:dark-text text-3xl font-bold mb-5">Our <span class="text-gradient">Portfolio</span>
                </h2>
                <p class="dark:dark-text max-w-2xl mx-auto text-gray-600">Explore our diverse range of successful
                    projects and
                    solutions.</p>
            </div>

        </div>
    </section>

    {{-- articles --}}
    <section id="articles" class="min-h-screen py-20 px-5 md:px-10 flex items-center">
        <div class="max-h-6xl mx-auto">
            <div class="text-center my-16">
                <h2 class="dark:dark-text text-3xl font-bold mb-5">Latest <span class="text-gradient">Articles</span>
                </h2>
                <p class="dark:dark-text max-w-2xl mx-auto text-gray-600">Stay updated with our insights and expertise
                    in engineering
                    and technology.</p>
            </div>

        </div>

    </section>

    {{-- careers --}}
    <section id="careers" class="min-h-screen py-20 px-5 md:px-10 flex items-center">
        <div class="max-w-6xl mx-auto">
            <div class="text-center my-16">
                <h2 class="dark:dark-text text-3xl font-bold mb-5">Join Our <span class="text-gradient">Team</span>
                </h2>
                <p class="dark:dark-text max-w-2xl mx-auto text-gray-600">Temukan peluang karier menarik dan
                    berkembanglah bersama
                    Raja Teknik Solusi.</p>
            </div>
            <div
                class="bg-white dark:bg-gray-800 border dark:border-gray-950 dark:shadow-md dark:shadow-gray-950 rounded-lg shadow-lg p-8 md:p-12">
                <div class="text-center mb-8">
                    <h2 class="dark:dark-text text-3xl font-bold mb-5">Program Magang & Studi Independen
                    </h2>
                    <p class="dark:dark-text max-w-2xl mx-auto text-gray-600">Program magang dan studi independen kami
                        menawarkan
                        pengalaman kerja langsung
                        di bidang teknik dan teknologi dengan mengerjakan proyek real dari industri. Bersiaplah untuk
                        meningkatkan keterampilan praktis Anda dan meningkatkan daya saing di dunia kerja digital.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center mx-auto">
                    <div class="card">
                        <div
                            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100  dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <i class="fa-solid fa-laptop-code text-5xl mb-5 text-gradient"></i>

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">Magang
                                dan Studpen Pengembangan Perangkat Lunak</h5>
                            <p class="font-normal text-gray-600 dark:text-gray-400">Pelajari pengembangan web dan
                                aplikasi seluler, struktur data, algoritma, dan praktik coding terbaik.</p>
                            <a href="{{ route('login') }}"
                                class="font-bold px-7 py-3 mt-15 inline-flex justify-center items-center text-white rounded-lg gradient">Daftar
                                Sekarang<i
                                    class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i></a>
                        </div>

                    </div>
                    <div class="card">
                        <div
                            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100  dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <i class="fa-solid fa-robot text-5xl mb-5 text-gradient"></i>

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">Magang
                                dan Studpen Otomasi Industri</h5>
                            <p class="font-normal text-gray-600 dark:text-gray-400">Dapatkan pengalaman dalam
                                pemrograman PLC, sistem kontrol, robotika, dan integrasi sistem otomasi.</p>
                            <a href="{{ route('login') }}"
                                class="font-bold px-7 py-3 mt-15 inline-flex justify-center items-center text-white rounded-lg gradient">Daftar
                                Sekarang<i
                                    class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i></a>
                        </div>

                    </div>
                    <div class="card">
                        <div
                            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100  dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <i class="fa-solid fa-wifi text-5xl mb-5 text-gradient"></i>

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">Magang
                                dan Studpen Internet of Things (IoT)</h5>
                            <p class="font-normal text-gray-600 dark:text-gray-400">Terlibat dalam pengembangan
                                perangkat terhubung, sensor, platform IoT, dan analisis data real-time.</p>
                            <a href="{{ route('login') }}"
                                class="font-bold px-7 py-3 mt-15 inline-flex justify-center items-center text-white rounded-lg gradient">Daftar
                                Sekarang<i
                                    class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i></a>
                        </div>

                    </div>
                    <div class="card">
                        <div
                            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100  dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <i class="fa-solid fa-vr-cardboard text-5xl mb-5 text-gradient"></i>

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">Magang
                                dan Studpen Mixed Reality (AR/VR)</h5>
                            <p class="font-normal text-gray-600 dark:text-gray-400">Jelajahi pengembangan aplikasi
                                Augmented dan Virtual Reality untuk simulasi dan visualisasi.</p>
                            <a href="{{ route('login') }}"
                                class="font-bold px-7 py-3 mt-15 inline-flex justify-center items-center text-white rounded-lg gradient">Daftar
                                Sekarang<i
                                    class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i></a>
                        </div>

                    </div>
                    <div class="card">
                        <div
                            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100  dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <i class="fa-solid fa-flask text-5xl mb-5 text-gradient"></i>

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">Magang
                                dan Studpen Riset & Pengembangan</h5>
                            <p class="font-normal text-gray-600 dark:text-gray-400">Berkontribusi pada penelitian
                                canggih dan pengembangan solusi teknologi inovatif masa depan.</p>
                            <a href="{{ route('login') }}"
                                class="font-bold px-7 py-3 mt-15 inline-flex justify-center items-center text-white rounded-lg gradient">Daftar
                                Sekarang<i
                                    class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i></a>
                        </div>

                    </div>
                    <div class="card">
                        <div
                            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100  dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <i class="fa-solid fa-brain text-5xl mb-5 text-gradient"></i>

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">Magang
                                dan Studpen AI & Ilmu Data</h5>
                            <p class="font-normal text-gray-600 dark:text-gray-400">Pelajari pemrosesan data, machine
                                learning, deep learning, dan alat visualisasi seperti Python dan Power BI.</p>
                            <a href="{{ route('login') }}"
                                class="font-bold px-7 py-3 mt-15 inline-flex justify-center items-center text-white rounded-lg gradient">Daftar
                                Sekarang<i
                                    class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i></a>
                        </div>

                    </div>


                </div>

            </div>
            <div class="text-center my-16">
                <h2 class="dark:dark-text text-3xl font-bold mb-5">Peluang Lainnya
                </h2>
                <p class="dark:dark-text max-w-2xl mx-auto text-gray-600">Periksa kembali secara berkala untuk posisi
                    penuh waktu dan
                    lowongan karier lainnya.

                </p>
            </div>


        </div>
    </section>
    {{-- contact --}}
    <section id="contact" class="min-h-screen py-20 px-5 md:px-10 flex items-center">
        <div class="max-h-6xl mx-auto">
            <div class="text-center my-16">
                <h2 class="dark:dark-text text-3xl font-bold mb-5">Hubungi <span class="text-gradient">Kami</span>
                </h2>
                <p class="dark:dark-text max-w-2xl mx-auto text-gray-600">Siap untuk membahas proyek Anda berikutnya?
                    Tim ahli
                    kami siap membantu.

                </p>
            </div>
            {{-- form --}}
            <form action="{{ route('kirimPesan') }}" method="POST"
                class=" mx-auto p-10 bg-white dark:bg-gray-700/75 rounded-lg shadow-lg">
                @csrf
                {{-- flash session messages --}}
                @if (session('error'))
                    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                        {{ session('error') }}
                    </div>
                @endif

                @if (session('success'))
                    <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="mb-5">
                    <label for="nama"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" name="nama" id="nama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500"
                        placeholder="Nama Anda" required />
                    @error('nama')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-500 focus:border-pink-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500"
                        placeholder="email.anda@contoh.com" required />
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="pesan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan</label>
                    <textarea name="pesan" id="pesan" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500"
                        placeholder="Ceritakan tentang proyek atau pertanyaan Anda..." required>{{ old('pesan') }}</textarea>
                    @error('pesan')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-center ">
                    <button type="submit"
                        class="text-white gradient focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold text-md w-full sm:w-auto px-7 py-3 text-center rounded-full dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim
                        Pesan</button>
                </div>
            </form>
        </div>
    </section>

    {{-- footer --}}
    <footer class="bg-gray-100 p-8 dark:bg-gray-800  shadow-gray-200/10">
        <div
            class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-items-start md:justify-items-center lg:justify-items-center">
            <div>
                <h4 class="mb-3 font-bold text-2xl text-gradient">
                    Raja
                    Teknik Solusi</h4>
                <p class="dark:dark-text mx-auto text-gray-600">Engineering Excellence. Innovative Solutions.

                </p>
            </div>
            <div>
                <h4 class="dark:dark-text mb-3 text-xl font-semibold">
                    Tautan Cepat</h4>
                <div class="text-gray-600 dark:text-gray-300 flex flex-col gap-2">
                    <a class="hover:text-black dark:hover:text-white" href="#home">Home</a>
                    <a class="hover:text-black dark:hover:text-white" href="#about-us">About Us</a>
                    <a class="hover:text-black dark:hover:text-white" href="#portofolio">Portofolio</a>
                    <a class="hover:text-black dark:hover:text-white" href="#articles">Articles</a>
                    <a class="hover:text-black dark:hover:text-white" href="#careers">Careers</a>
                    <a class="hover:text-black dark:hover:text-white" href="#services">Services</a>
                    <a class="hover:text-black dark:hover:text-white" href="#contact">Contact</a>
                </div>
            </div>
            <div>
                <h4 class="dark:dark-text mb-3 text-xl font-semibold">
                    Ikuti Kami</h4>
                <div class="flex flex-row gap-5">
                    <a href="" class="text-2xl hover:text-blue-600 transition"> <i
                            class="fa-brands dark:dark-text fa-facebook"></i>
                    </a>
                    <a href="" class="text-2xl hover:text-sky-500 transition"> <i
                            class="fa-brands dark:dark-text fa-twitter"></i>
                    </a>
                    <a href="" class="text-2xl hover:text-pink-600 transition"> <i
                            class="fa-brands dark:dark-text fa-instagram"></i>
                    </a>
                    <a href="" class="text-2xl hover:text-blue-700 transition"> <i
                            class="fa-brands dark:dark-text fa-linkedin"></i>
                    </a>
                </div>

            </div>

        </div>
        <div class="border-t border-gray-200 mt-8 pt-6 text-center text-sm">
            <p class="dark:dark-text">© 2025 Raja Teknik Solusi. Hak cipta dilindungi.</p>
        </div>

    </footer>

    <script src="https://kit.fontawesome.com/998802c292.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>



</body>

</html>
