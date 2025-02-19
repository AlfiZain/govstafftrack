<x-app-layout>
    <div class="p-8 max-w-6xl mx-auto">
        {{-- Navbar --}}
        <nav id="navbar" class=" mx-auto fixed top-0 left-0 right-0 z-[999] w-full">
            <div class="max-w-7xl p-4 flex justify-between items-center mx-auto gap-8 transition-all duration-300">
                <div>
                    <a href="#"
                        class="flex justify-center font-extrabold text-dark text-2xl transition duration-300  hover:scale-105">
                        Goverment Staff Tracking
                    </a>
                </div>
                <a id="toggleOpenNavbar" class="lg:hidden hover:cursor-pointer">
                    <svg class="w-6 h-6 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7">
                        </path>
                    </svg>
                </a>
                <a id="toggleCloseNavbar" class="hidden lg:hidden hover:cursor-pointer">
                    <svg class="w-6 h-6 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </a>
                <ul class="hidden lg:flex flex-row gap-4 items-center">
                    <li
                        class="min-w-32 px-6 py-2 text-blue-500 rounded-full transition duration-300  hover:bg-blue-500 hover:text-white hover:scale-110 hover:text-white text-center hover:cursor-pointer">
                        <a href="#home">Beranda</a>
                    </li>
                    <li
                        class="min-w-32 px-6 py-2 text-blue-500 rounded-full transition duration-300 hover:bg-blue-500 hover:text-white hover:scale-110 hover:text-white text-center hover:cursor-pointer">
                        <a href="#features">Fitur Utama</a>
                    </li>
                    @auth
                        <li
                            class="bg-blue-500 rounded-full min-w-32 px-6 py-2 text-white text-center hover:bg-blue-700 transition duration-300 hover:scale-110 hover:cursor-pointer">
                            <a href="{{ route('dashboard') }} ">Dashboard</a>
                        </li>
                    @else
                        <li
                            class="bg-blue-500 rounded-full min-w-32 px-6 py-2 text-white text-center hover:bg-blue-700 transition duration-300 hover:scale-110 hover:cursor-pointer">
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li
                            class="bg-slate-400 rounded-full min-w-32 px-6 py-2 text-white text-center hover:bg-slate-500 transition duration-300 hover:scale-110 hover:cursor-pointer">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>

        {{-- Hamburger Menu --}}
        <section
            class="hidden fixed top-[4em] md:top-[3em] right-[1rem] max-w-[250px] w-full bg-white z-[999] transition-all duration-300 transform p-4 rounded-xl"
            id="navbarHRIS">
            <ul class="flex flex-col gap-4 justify-start">
                <li
                    class="min-w-32 px-6 py-2 text-blue-500 rounded-full transition duration-300  hover:bg-blue-500 hover:text-white hover:scale-110 hover:text-white text-center hover:cursor-pointer">
                    <a href="#home">Beranda</a>
                </li>
                <li
                    class="min-w-32 px-6 py-2 text-blue-500 rounded-full transition duration-300 hover:bg-blue-500 hover:text-white hover:scale-110 hover:text-white text-center hover:cursor-pointer">
                    <a href="#features">Fitur Utama</a>
                </li>
                @auth
                    <li
                        class="bg-blue-500 rounded-full min-w-32 px-6 py-2 text-white text-center hover:bg-blue-700 transition duration-300 hover:scale-110 hover:cursor-pointer">
                        <a href="{{ route('dashboard') }} ">Dashboard</a>
                    </li>
                @else
                    <li
                        class="bg-blue-500 rounded-full min-w-32 px-6 py-2 text-white text-center hover:bg-blue-700 transition duration-300 hover:scale-110 hover:cursor-pointer">
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    <li
                        class="bg-slate-400 rounded-full min-w-32 px-6 py-2 text-white text-center hover:bg-slate-500 transition duration-300 hover:scale-110 hover:cursor-pointer">
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                @endauth
            </ul>
        </section>

        {{-- Home --}}
        <section id="home" class="flex flex-col sm:flex-row gap-8 justify-between mt-16 md:mt-12">
            <div class="flex flex-col gap-6 md:gap-4 justify-evenly w-full max-w-[500px]">
                <div>
                    <p class="text-base lg:text-lg font-semibold mb-4">
                        Kelola pegawai dengan lebih mudah dan efisien!
                    </p>
                    <h1 class="text-blue-500 text-3xl lg:text-4xl font-bold">
                        Goverment Staff Tracking
                    </h1>
                </div>
                <p class="text-sm lg:text-base">
                    Dengan <b>Goverment Staff Tracking</b>, Anda dapat memantau kinerja, menyusun laporan, dan mengelola
                    pegawai dalam satu sistem yang cepat dan aman.
                </p>
                <a href="{{ route('login') }}"
                    class="btn-primary p-4 max-w-[250px] rounded-full font-bold text-center transition duration-300 hover:scale-105">
                    Mulai Sekarang
                </a>
            </div>
            <img src="{{ asset('assets/svgs/hero-image.svg') }}" alt="Hero Image"
                class="sm:max-w-60 md:max-w-80 lg:max-w-128 w-full h-full object-cover">
        </section>

        {{-- Features --}}
        <section id="features" class="py-12 px-6 mt-12">
            <h2 class="text-2xl font-bold text-center mb-6">Fitur Utama</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div
                    class="p-6 rounded-lg hover:shadow-lg flex flex-col items-center text-center transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-12 h-12 text-blue-500 mb-4">
                        <path fill="currentColor"
                            d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.2s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16l-97.5 0c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8l97.5 0c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32L0 448c0 17.7 14.3 32 32 32l64 0c17.7 0 32-14.3 32-32l0-224c0-17.7-14.3-32-32-32l-64 0z" />
                    </svg>
                    <h3 class="text-lg font-semibold">Simple & User-Friendly</h3>
                    <p class="text-sm text-gray-600">
                        Tampilan yang bersih dan mudah digunakan, membuat pengelolaan pegawai lebih cepat dan efisien.
                    </p>
                </div>

                <div
                    class="p-6 rounded-lg hover:shadow-lg flex flex-col items-center text-center transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-12 h-12 text-blue-500 mb-4">
                        <path fill="currentColor"
                            d="M308.5 135.3c7.1-6.3 9.9-16.2 6.2-25c-2.3-5.3-4.8-10.5-7.6-15.5L304 89.4c-3-5-6.3-9.9-9.8-14.6c-5.7-7.6-15.7-10.1-24.7-7.1l-28.2 9.3c-10.7-8.8-23-16-36.2-20.9L199 27.1c-1.9-9.3-9.1-16.7-18.5-17.8C173.9 8.4 167.2 8 160.4 8l-.7 0c-6.8 0-13.5 .4-20.1 1.2c-9.4 1.1-16.6 8.6-18.5 17.8L115 56.1c-13.3 5-25.5 12.1-36.2 20.9L50.5 67.8c-9-3-19-.5-24.7 7.1c-3.5 4.7-6.8 9.6-9.9 14.6l-3 5.3c-2.8 5-5.3 10.2-7.6 15.6c-3.7 8.7-.9 18.6 6.2 25l22.2 19.8C32.6 161.9 32 168.9 32 176s.6 14.1 1.7 20.9L11.5 216.7c-7.1 6.3-9.9 16.2-6.2 25c2.3 5.3 4.8 10.5 7.6 15.6l3 5.2c3 5.1 6.3 9.9 9.9 14.6c5.7 7.6 15.7 10.1 24.7 7.1l28.2-9.3c10.7 8.8 23 16 36.2 20.9l6.1 29.1c1.9 9.3 9.1 16.7 18.5 17.8c6.7 .8 13.5 1.2 20.4 1.2s13.7-.4 20.4-1.2c9.4-1.1 16.6-8.6 18.5-17.8l6.1-29.1c13.3-5 25.5-12.1 36.2-20.9l28.2 9.3c9 3 19 .5 24.7-7.1c3.5-4.7 6.8-9.5 9.8-14.6l3.1-5.4c2.8-5 5.3-10.2 7.6-15.5c3.7-8.7 .9-18.6-6.2-25l-22.2-19.8c1.1-6.8 1.7-13.8 1.7-20.9s-.6-14.1-1.7-20.9l22.2-19.8zM112 176a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM504.7 500.5c6.3 7.1 16.2 9.9 25 6.2c5.3-2.3 10.5-4.8 15.5-7.6l5.4-3.1c5-3 9.9-6.3 14.6-9.8c7.6-5.7 10.1-15.7 7.1-24.7l-9.3-28.2c8.8-10.7 16-23 20.9-36.2l29.1-6.1c9.3-1.9 16.7-9.1 17.8-18.5c.8-6.7 1.2-13.5 1.2-20.4s-.4-13.7-1.2-20.4c-1.1-9.4-8.6-16.6-17.8-18.5L583.9 307c-5-13.3-12.1-25.5-20.9-36.2l9.3-28.2c3-9 .5-19-7.1-24.7c-4.7-3.5-9.6-6.8-14.6-9.9l-5.3-3c-5-2.8-10.2-5.3-15.6-7.6c-8.7-3.7-18.6-.9-25 6.2l-19.8 22.2c-6.8-1.1-13.8-1.7-20.9-1.7s-14.1 .6-20.9 1.7l-19.8-22.2c-6.3-7.1-16.2-9.9-25-6.2c-5.3 2.3-10.5 4.8-15.6 7.6l-5.2 3c-5.1 3-9.9 6.3-14.6 9.9c-7.6 5.7-10.1 15.7-7.1 24.7l9.3 28.2c-8.8 10.7-16 23-20.9 36.2L315.1 313c-9.3 1.9-16.7 9.1-17.8 18.5c-.8 6.7-1.2 13.5-1.2 20.4s.4 13.7 1.2 20.4c1.1 9.4 8.6 16.6 17.8 18.5l29.1 6.1c5 13.3 12.1 25.5 20.9 36.2l-9.3 28.2c-3 9-.5 19 7.1 24.7c4.7 3.5 9.5 6.8 14.6 9.8l5.4 3.1c5 2.8 10.2 5.3 15.5 7.6c8.7 3.7 18.6 .9 25-6.2l19.8-22.2c6.8 1.1 13.8 1.7 20.9 1.7s14.1-.6 20.9-1.7l19.8 22.2zM464 304a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                    </svg>
                    <h3 class="text-lg font-semibold">Manajemen Data Otomatis</h3>
                    <p class="text-sm text-gray-600">
                        Simpan dan kelola data pegawai dengan sistem yang aman dan terorganisir.
                    </p>
                </div>

                <div
                    class="p-6 rounded-lg hover:shadow-lg flex flex-col items-center text-center transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-12 h-12 text-blue-500 mb-4">
                        <path fill="currentColor"
                            d="M32 32c17.7 0 32 14.3 32 32l0 336c0 8.8 7.2 16 16 16l400 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L80 480c-44.2 0-80-35.8-80-80L0 64C0 46.3 14.3 32 32 32zM160 224c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32zm128-64l0 160c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-160c0-17.7 14.3-32 32-32s32 14.3 32 32zm64 32c17.7 0 32 14.3 32 32l0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-96c0-17.7 14.3-32 32-32zM480 96l0 224c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-224c0-17.7 14.3-32 32-32s32 14.3 32 32z" />
                    </svg>
                    <h3 class="text-lg font-semibold">Laporan Kinerja Instan</h3>
                    <p class="text-sm text-gray-600">
                        Buat laporan kinerja pegawai hanya dalam beberapa klik, tanpa proses manual yang rumit.
                    </p>
                </div>
            </div>
        </section>

    </div>
</x-app-layout>
