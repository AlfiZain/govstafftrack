<x-app-layout>
    <x-sidebar />
    <div class="lg:pr-[70px] py-[50px] lg:ml-[320px] xl:ml-[365px] px-4 lg:pl-0">

        <!-- Top Section -->
        <section class="flex flex-col flex-wrap justify-between gap-6 md:items-center md:flex-row">
            <div class="flex items-center justify-between gap-4">
                <a href="#" id="toggleOpenSidebar" class="lg:hidden">
                    <svg class="w-6 h-6 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7">
                        </path>
                    </svg>
                </a>
                <div class="text-[32px] font-semibold text-dark">
                    Dashboard
                </div>
            </div>
        </section>

        <section class="pt-[50px]">
            <!-- Section Header -->
            <div class="mb-[30px]">
                <div class="flex items-center justify-between gap-6">
                    <div>
                        <div class="text-xl font-medium text-dark">
                            Statistics
                        </div>
                    </div>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:gap-11 mt-4">
                    <div class="card !gap-y-10 min-h-[200px]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-grey">Jumlah Karyawan</p>
                                <div class="text-[32px] font-bold text-dark mt-[6px]">
                                    {{ $employees }}
                                </div>
                            </div>
                            <a href="{{ route('employee.index') }}">
                                <img src="{{ asset('assets/svgs/ric-plus.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="card !gap-y-10 min-h-[200px]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-grey">Jumlah Unit Kerja</p>
                                <div class="text-[32px] font-bold text-dark mt-[6px]">
                                    {{ $units }}
                                </div>
                            </div>
                            <a href="{{ route('unit.index') }}">
                                <img src="{{ asset('assets/svgs/ric-plus.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="card !gap-y-10 min-h-[200px]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-grey">Jumlah Jabatan</p>
                                <div class="text-[32px] font-bold text-dark mt-[6px]">
                                    {{ $positions }}
                                </div>
                            </div>
                            <a href="{{ route('position.index') }}">
                                <img src="{{ asset('assets/svgs/ric-plus.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</x-app-layout>
