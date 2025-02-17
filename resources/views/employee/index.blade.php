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
                    <p class="text-xl text-dark">Tabel Pegawai</p>
                    <a href="{{ route('employee.create') }}" class="btn btn-primary">Add Employee</a>
                </div>
            </div>
            <div class="container">
                <h2>Data Pegawai</h2>
                <table id="pegawaiTable" class="display">
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>L/P</th>
                            <th>Gol</th>
                            <th>Eselon</th>
                            <th>Jabatan</th>
                            <th>Tempat Tugas</th>
                            <th>Agama</th>
                            <th>Unit Kerja</th>
                            <th>No. HP</th>
                            <th>NPWP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->nip }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->place_of_birth }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>{{ $employee->date_of_birth }}</td>
                                <td>{{ $employee->gender }}</td>
                                <td>{{ $employee->position->group }}</td>
                                <td>{{ $employee->position->echelon }}</td>
                                <td>{{ $employee->position->name }}</td>
                                <td>{{ $employee->unit->work_place }}</td>
                                <td>{{ $employee->religion }}</td>
                                <td>{{ $employee->unit->name }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->npwp }}</td>
                                <td>
                                    <a href="{{ route('employee.show', $employee) }}"
                                        class="btn btn-secondary">Detail</a>
                                    <a href="{{ route('employee.edit', $employee) }}" class="btn btn-warning">Ubah</a>
                                    <form action="{{ route('employee.destroy', $employee->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
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
