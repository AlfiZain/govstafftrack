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
                    Data Pegawai
                </div>
            </div>
        </section>

        <section class="pt-[50px]">
            <!-- Section Header -->
            <div class="mb-[30px]">
                <div class="flex flex-col justify-between gap-6 sm:items-center sm:flex-row">
                    <p class="text-xl font-medium text-dark">Tabel Pegawai</p>
                    <div class="flex flex-row gap-4 justify-between">
                        <a href="{{ route('employee.create') }}" class="btn btn-primary">Tambah Pegawai</a>
                        <a href="{{ route('employee.print') }}" class="btn btn-secondary">Cetak Tabel</a>
                    </div>
                </div>
            </div>
            <div class="relative overflow-x-auto">
                <table id="pegawaiTable" class="w-full text-sm text-left text-gray-700 ">
                    <thead class="text-xs text-white uppercase bg-blue-500 ">
                        <tr class="border-b text-center">
                            <th class="px-4 py-3">NIP</th>
                            <th class="px-4 py-3">Nama</th>
                            <th class="px-4 py-3">Tempat Lahir</th>
                            <th class="px-4 py-3">Alamat</th>
                            <th class="px-4 py-3">Tanggal Lahir</th>
                            <th class="px-4 py-3">L/P</th>
                            <th class="px-4 py-3">Gol</th>
                            <th class="px-4 py-3">Eselon</th>
                            <th class="px-4 py-3">Jabatan</th>
                            <th class="px-4 py-3">Tempat Tugas</th>
                            <th class="px-4 py-3">Agama</th>
                            <th class="px-4 py-3">Unit Kerja</th>
                            <th class="px-4 py-3">No. HP</th>
                            <th class="px-4 py-3">NPWP</th>
                            <th class="px-4 py-3">Detail</th>
                            <th class="px-4 py-3">Ubah</th>
                            <th class="px-4 py-3">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr class="bg-white border-b border-gray-200">
                                <td class="px-4 py-4">{{ $employee->nip }}</td>
                                <td class="px-4 py-4">{{ $employee->name }}</td>
                                <td class="px-4 py-4">{{ $employee->place_of_birth }}</td>
                                <td class="px-4 py-4">{{ $employee->address }}</td>
                                <td class="px-4 py-4">{{ $employee->date_of_birth }}</td>
                                <td class="px-4 py-4">{{ $employee->gender }}</td>
                                <td class="px-4 py-4">{{ $employee->position->group }}</td>
                                <td class="px-4 py-4">{{ $employee->position->echelon }}</td>
                                <td class="px-4 py-4">{{ $employee->position->name }}</td>
                                <td class="px-4 py-4">{{ $employee->unit->work_place }}</td>
                                <td class="px-4 py-4">{{ $employee->religion }}</td>
                                <td class="px-4 py-4">{{ $employee->unit->name }}</td>
                                <td class="px-4 py-4">{{ $employee->phone }}</td>
                                <td class="px-4 py-4">{{ $employee->npwp }}</td>
                                <td class="px-4 py-4">
                                    <a href="{{ route('employee.show', $employee) }}"
                                        class="btn btn-secondary">Detail</a>
                                </td>
                                <td class="px-4 py-4">
                                    <a href="{{ route('employee.edit', $employee) }}" class="btn btn-warning">Ubah</a>
                                </td>
                                <td class="px-4 py-4">
                                    <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger hover:cursor-pointer"
                                            onclick="return confirm('Apa Anda yakin?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</x-app-layout>
