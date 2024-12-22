@props([
    'ourTeam' => [
        [
            'name' => 'Imam Syafii',
            'role' => 'Ctrl+C Ctrl+V Developer',
            'img' => 'images/imam.jpg',
            'university' => 'Universitas Trunojoyo Madura',
            'linkedIn' => 'https://www.linkedin.com/in/imamgg',
            'twitter' => 'https://x.com/404imam',
            'github' => 'https://github.com/Imamgg',
            'portfolio' => 'https://imamgg-dev.vercel.app/',
        ],
        [
            'name' => 'Ahmad Mufid Risqi',
            'role' => 'Fullstack Developer',
            'img' => 'images/mufid.jpg',
            'university' => 'Universitas Trunojoyo Madura',
            'linkedIn' => 'https://www.linkedin.com/in/coding-with-mufid/',
            'twitter' => 'https://x.com/MufidRisqi30683',
            'github' => 'https://github.com/Mufid-031',
            'portfolio' => 'https://coding-with-mufid.vercel.app/',
        ],
        [
            'name' => 'Ach. Lutfi Madani',
            'role' => 'Fullstack Developer',
            'img' => 'images/lutfi.jpg',
            'university' => 'Universitas Trunojoyo Madura',
            'linkedIn' => '#',
            'twitter' => 'https://x.com/adlhorgygbeda?t=FyPyEZdKrTSObn6goH3acw&s=09',
            'github' => 'https://github.com/AchmadLutfi196',
            'portfolio' => '#',
        ],
        [
            'name' => 'Harits Putra Junaidi',
            'role' => 'Frontend Developer',
            'img' => 'images/harits.jpg',
            'university' => 'Universitas Trunojoyo Madura',
            'linkedIn' => 'https://www.linkedin.com/in/harits-putra-junaidi-643803296',
            'twitter' => '#',
            'github' => 'https://github.com/Haritss28',
            'portfolio' => '#',
        ],
        [
            'name' => 'M. Javier Akmal Hadi',
            'role' => 'Frontend Developer',
            'img' => 'images/javier.jpg',
            'university' => 'Universitas Trunojoyo Madura',
            'linkedIn' => 'https://www.linkedin.com/in/m-javier',
            'twitter' => '#',
            'github' => 'https://github.com/javiernindis1',
            'portfolio' => '#',
        ],
        [
            'name' => 'Moh. Ariel Rifqi Ahsan',
            'role' => 'Frontend Developer',
            'img' => 'images/ariel.jpg',
            'university' => 'Universitas Trunojoyo Madura',
            'linkedIn' => '#',
            'twitter' => '#',
            'github' => 'https://github.com/arielahsan',
            'portfolio' => '#',
        ],
    ],
])

<x-layout>
    <header class="fixed w-full z-50 backdrop-blur-sm shadow-sm">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                NextSiakad
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#" data-section="home"
                    class="nav-link hover:text-blue-600 font-bold transition-colors">Home</a>
                <a href="#" data-section="about"
                    class="nav-link hover:text-blue-600 font-bold transition-colors">About</a>
                <a href="#" data-section="ourteam"
                    class="nav-link hover:text-blue-600 font-bold transition-colors">Our Team</a>
                <a href="#" data-section="news"
                    class="nav-link hover:text-blue-600 font-bold transition-colors">News</a>
            </div>
            <a href="/auth/login"
                class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2 rounded-full hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-0.5">
                Login
            </a>
        </nav>
    </header>

    <section id="home" class="bg-gradient-to-br from-slate-50 to-blue-100 pt-32 pb-20 min-h-screen">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="flex flex-col space-y-6 md:pr-12">
                <h1 class="text-5xl md:text-6xl font-bold leading-tight">
                    <span class="bg-gradient-to-r from-indigo-600 to-blue-500 bg-clip-text text-transparent">Next
                        Generation</span>
                    <br>Academic System
                </h1>
                <p id="typing-text" class="text-xl text-gray-700"></p>
                <div class="flex space-x-4">
                    <a href="/auth/login"
                        class="bg-gradient-to-r from-indigo-600 to-blue-500 text-white px-8 py-3 rounded-full hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-0.5 inline-flex items-center">
                        Get Started
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex justify-center">
                <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
                <dotlottie-player src="https://lottie.host/0c7acab2-8abf-40df-ae74-3440f114d037/oDwQPPZV0j.lottie"
                    background="transparent" speed="1" style="width: 600px; height: 600px" loop autoplay>
                </dotlottie-player>
            </div>
        </div>
    </section>

    <section id="about" class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-blue-600 font-semibold text-sm tracking-wider uppercase">Tentang Kami</span>
                <h2 class="text-4xl font-bold mt-2 mb-4">Kenapa Memilih NextSiakad?</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Platform manajemen akademik modern yang menghadirkan
                    kemudahan dan efisiensi dalam pengelolaan data pendidikan</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Performa Tinggi</h3>
                    <p class="text-slate-600">Sistem ini telah dioptimalkan untuk memastikan responsivitas tinggi dan
                        waktu pemrosesan yang lebih cepat dan responsif untuk pengalaman pengguna yang optimal, bahkan
                        untuk volume data yang besar.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Keandalan dan Skalabilitas</h3>
                    <p class="text-slate-600">NextSiakad dirancang agar mudah diintegrasikan dengan sistem lain,
                        memastikan keandalan jangka panjang serta kemudahan pengembangan jika kampus ingin menambah
                        fitur baru di masa depan.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Desain UI/UX Modern</h3>
                    <p class="text-slate-600">NextSiakad dirancang dengan antarmuka pengguna yang intuitif dan estetis,
                        memastikan kemudahan navigasi dan kenyamanan bagi pengguna, baik mahasiswa, dosen, maupun admin.
                        Desain yang responsif juga menjadikannya optimal untuk berbagai perangkat.</p>
                </div>
            </div>

            <div class="flex flex-wrap items-center bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="w-full md:w-1/2 p-8 md:p-12">
                    <h3 class="text-3xl font-bold mb-6">Apa itu NextSiakad?</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <p class="text-slate-600 max-w-2xl mx-auto">NextSiakad adalah sistem informasi akademik yang
                                dirancang untuk memudahkan pengelolaan data akademik, mulai dari penjadwalan kuliah,
                                pengelolaan nilai, hingga pelaporan akademik. Dengan NextSiakad, proses akademik menjadi
                                lebih efisien, transparan, dan mudah diakses oleh seluruh civitas akademika.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <img src="{{ asset('images/about.svg') }}" alt="About NextSiakad"
                        class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <section id="ourteam" class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-gray-900 text-center mb-16">Our Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($ourTeam as $team)
                    <div
                        class="bg-white rounded-xl shadow-lg p-8 text-center group relative transform transition-all duration-300 hover:-translate-y-2">
                        <div class="relative overflow-hidden rounded-xl mb-6">
                            <div class="aspect-square">
                                <img src="{{ asset($team['img']) }}" alt="Team Member"
                                    class="aspect-square transition duration-300 group-hover:scale-105">
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-4">
                                    @if ($team['twitter'] !== '#')
                                        <a href="{{ $team['linkedIn'] }}"
                                            class="bg-[#0077b5] p-2 rounded-full text-white hover:bg-opacity-80 transition-colors">
                                            <svg class="w-5 h-5" fill="currentColor" role="img"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                            </svg>
                                        </a>
                                    @endif
                                    @if ($team['twitter'] !== '#')
                                        <a href="{{ $team['twitter'] }}"
                                            class="bg-[#1DA1F2] p-2 rounded-full text-white hover:bg-opacity-80 transition-colors">
                                            <svg class="w-5 h-5" fill="currentColor" role="img"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                            </svg>
                                        </a>
                                    @endif
                                    @if ($team['github'] !== '#')
                                        <a href="{{ $team['github'] }}"
                                            class="bg-[#171515] p-2 rounded-full text-white hover:bg-opacity-80 transition-colors">
                                            <svg class="w-5 h-5" fill="currentColor" role="img"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                                            </svg>
                                        </a>
                                    @endif
                                    @if ($team['portfolio'] !== '#')
                                        <a href="{{ $team['portfolio'] }}"
                                            class="bg-[#171515] p-2 rounded-full text-white hover:bg-opacity-80 transition-colors">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 640 512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z" />
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $team['name'] }}</h3>
                        <p class="text-gray-600">{{ $team['role'] }}</p>
                        <p class="text-blue-600">{{ $team['university'] }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section id="news" class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8 text-center">Berita Terkini</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('images/news-' . $i . '.jpg') }}" alt="News {{ $i }}"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Judul Berita {{ $i }}</h3>
                            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#"
                                class="text-slate-600 hover:bg-slate-50 border border-slate-600 px-4 py-2 rounded inline-block">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>



    <footer class="bg-white dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <div
                        class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        NextSiakad
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://nestjs.com/" class="hover:underline">Nest Js</a>
                            </li>
                            <li class="mb-4">
                                <a href="https://www.prisma.io/" class="hover:underline">Prisma</a>
                            </li>
                            <li class="mb-4">
                                <a href="https://laravel.com/" class="hover:underline">Laravel</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 FlowbiteTM. All Rights
                    Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const texts = [
                "Mengubah Cara Pengelolaan Akademik Menjadi Lebih Efisien",
                "Sistem Informasi Akademik Modern dan Terintegrasi",
                "Solusi Terbaik untuk Manajemen Pendidikan",
                "Memudahkan Akses Informasi Akademik Dimana Saja"
            ];
            const typingText = document.getElementById('typing-text');
            let textIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            let typingSpeed = 50;

            function typeWriter() {
                const currentText = texts[textIndex];

                if (!isDeleting && charIndex <= currentText.length) {
                    typingText.innerHTML = currentText.substring(0, charIndex);
                    charIndex++;
                    typingSpeed = 50;
                } else if (isDeleting && charIndex >= 0) {
                    typingText.innerHTML = currentText.substring(0, charIndex);
                    charIndex--;
                    typingSpeed = 25;
                } else {
                    isDeleting = !isDeleting;
                    if (!isDeleting) {
                        textIndex = (textIndex + 1) % texts.length;
                    }
                    typingSpeed = isDeleting ? 2000 : 500;
                }

                setTimeout(typeWriter, typingSpeed);
            }

            typeWriter();

            // Smooth scroll handling
            document.querySelectorAll('.nav-link').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const sectionId = this.getAttribute('data-section');
                    const element = document.getElementById(sectionId);

                    if (element) {
                        element.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</x-layout>
