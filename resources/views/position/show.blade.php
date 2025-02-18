<x-app-layout title="Data Pegawai">
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
                    Data Jabatan
                </div>
            </div>
        </section>

        <section class="pt-[50px]">
            <!-- Section Header -->
            <div class="mb-[30px]">
                <div class="flex flex-col justify-between gap-6 sm:items-center sm:flex-row">
                    <div class="flex flex-row gap-4 justify-between">
                    </div>
                    <div class="flex flex-row flex-wrap gap-4 justify-between">
                        <a href="{{ route('position.edit', $position) }}" class="btn btn-warning">Ubah</a>
                        <form action="{{ route('position.destroy', $position->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger hover:cursor-pointer"
                                onclick="return confirm('Apa Anda yakin?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-8">
                <p class="text-xl font-medium text-dark">{{ $position->name }}</p>
                <p class="px-4 py-2">Eselon : {{ $position->echelon }}</p>
                <p class="px-4 py-2 mb-4">Golongan : {{ $position->group }}</p>
                <a href="{{ route('position.index') }}" class="btn btn-secondary "> Kembali
                </a>
            </div>
        </section>
    </div>
</x-app-layout>
