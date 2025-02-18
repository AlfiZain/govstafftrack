<x-app-layout>
    <div class="p-8">
        {{-- Navbar --}}
        <nav class="flex justify-between items-center gap-8 ">
            <div>
                <a href="#"
                    class="flex justify-center font-extrabold text-dark text-2xl transition duration-300  hover:scale-105">
                    Goverment Staff Tracking
                </a>
            </div>
            <a href="#" id="toggleOpenNavbar" class="lg:hidden">
                <svg class="w-6 h-6 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7">
                    </path>
                </svg>
            </a>
            <a href="#" id="toggleCloseNavbar" class="hidden lg:hidden">
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
                    <a href="#about">Tentang</a>
                </li>
                <li
                    class="min-w-32 px-6 py-2 text-blue-500 rounded-full transition duration-300 hover:bg-blue-500 hover:text-white hover:scale-110 hover:text-white text-center hover:cursor-pointer">
                    <a href="#features">Fitur-fitur</a>
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
        </nav>

        {{-- Hamburger Menu --}}
        <section
            class="hidden fixed right-[2rem] max-w-[250px] w-full bg-white z-[999] transition-all duration-300 transform p-4 rounded-xl"
            id="navbarHRIS">
            <ul class="flex flex-col gap-4 justify-start">
                <li
                    class="min-w-32 px-6 py-2 text-blue-500 rounded-full transition duration-300  hover:bg-blue-500 hover:text-white hover:scale-110 hover:text-white text-center hover:cursor-pointer">
                    <a href="#home">Beranda</a>
                </li>
                <li
                    class="min-w-32 px-6 py-2 text-blue-500 rounded-full transition duration-300 hover:bg-blue-500 hover:text-white hover:scale-110 hover:text-white text-center hover:cursor-pointer">
                    <a href="#about">Tentang</a>
                </li>
                <li
                    class="min-w-32 px-6 py-2 text-blue-500 rounded-full transition duration-300 hover:bg-blue-500 hover:text-white hover:scale-110 hover:text-white text-center hover:cursor-pointer">
                    <a href="#features">Fitur-fitur</a>
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

        <section id="home" class="flex flex-col sm:flex-row gap-8 justify-between mt-12">
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
                <a href="{{ route('login') }}" class="btn-primary p-4 max-w-[250px] rounded-full font-bold text-center">
                    Coba Sekarang
                </a>
            </div>
            <img src="{{ asset('assets/svgs/hero-image.svg') }}" alt="Hero Image"
                class="sm:max-w-60 md:max-w-80 lg:max-w-128 w-full h-full object-cover">
        </section>
    </div>
</x-app-layout>
