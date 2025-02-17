<x-app-layout title="Data Pegawai">
    <div class="pt-[50px] md:px-[50px] flex justify-end items-center px-4">
        <a href="{{ route('employee.index') }}">
            <img src="{{ asset('assets/svgs/ric-close-white.svg') }}" alt="" />
        </a>
    </div>
    <section class="py-[70px] flex flex-col items-center justify-center px-4">
        <p class="text-[32px] font-semibold text-dark">Ubah Data Pegawai</p>
        <form class="w-full card" action="{{ route('employee.update', $employee) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <p class="mt-6 mb-1 text-lg font-semibold">
                Data Diri Pegawai
            </p>
            <div class="form-group">
                <label for="nip" class="text-grey">NIP</label>
                <input name="nip" id="nip" type="text" class="input-field" value="{{ $employee->nip }}" />
            </div>
            <div class="form-group">
                <label for="name" class="text-grey">Nama Lengkap</label>
                <input name="name" id="name" type="text" class="input-field" value="{{ $employee->name }}" />
            </div>
            <div class="form-group">
                <label for="photo" class="text-grey">Foto Pegawai</label>
                <input name="photo" id="photo" type="file" class="input-field" />
            </div>
            <div class="form-group">
                <label for="place_of_birth" class="text-grey">Tempat Lahir</label>
                <input name="place_of_birth" id="place_of_birth" type="text" class="input-field"
                    value="{{ $employee->place_of_birth }}" />
            </div>
            <div class="form-group">
                <label for="address" class="text-grey">Alamat</label>
                <input name="address" id="address" type="text" class="input-field"
                    value="{{ $employee->address }}" />
            </div>
            <div class="form-group">
                <label for="date_of_birth" class="text-grey">Tanggal Lahir</label>
                <input name="date_of_birth" id="date_of_birth" type="date" class="input-field"
                    value="{{ $employee->date_of_birth }}" />
            </div>
            <div class="form-group">
                <label class="text-grey">Jenis Kelamin</label>
                <div>
                    <input name="gender" id="gender_l" type="radio" class="input-field" value="L"
                        {{ $employee->gender == 'L' ? 'checked' : '' }} />
                    <label for="gender_l" class="text-grey">Laki-laki</label>
                </div>
                <div>
                    <input name="gender" id="gender_p" type="radio" class="input-field" value="P"
                        {{ $employee->gender == 'P' ? 'checked' : '' }} />
                    <label for="gender_p" class="text-grey">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="religion" class="text-grey">Agama</label>
                <input name="religion" id="religion" type="text" class="input-field"
                    value="{{ $employee->religion }}" />
            </div>
            <div class="form-group">
                <label for="phone" class="text-grey">No. HP</label>
                <input name="phone" id="phone" type="text" class="input-field"
                    value="{{ $employee->phone }}" />
            </div>
            <div class="form-group">
                <label for="npwp" class="text-grey">NPWP</label>
                <input name="npwp" id="npwp" type="text" class="input-field"
                    value="{{ $employee->npwp }}" />
            </div>

            <p class="mt-6 mb-1 text-lg font-semibold">
                Data Pekerjaan
            </p>
            <div class="form-group">
                <label for="unit_id" class="text-grey">Pilih Jabatan</label>
                <select name="unit_id" id="unit_id" class="appearance-none input-field form-icon-chevron_down">
                    <option value="" disabled selected>Pilih Jabatan</option>
                    @foreach ($units as $unit)
                        <option value="{{ $unit->id }}" {{ $employee->unit_id == $unit->id ? 'selected' : '' }}>
                            {{ $unit->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="position_id" class="text-grey">Pilih Unit Kerja</label>
                <select name="position_id" id="position_id"
                    class="appearance-none input-field form-icon-chevron_down">
                    <option value="" disabled selected>Pilih Unit Kerja</option>
                    @foreach ($positions as $position)
                        <option value="{{ $position->id }}"
                            {{ $employee->position_id == $position->id ? 'selected' : '' }}>
                            {{ $position->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="w-full btn btn-primary mt-[14px] hover:cursor-pointer">
                Update </button>
            <a href="{{ route('employee.index') }}" class="w-full btn btn-danger mt-[14px]"> Batal </a>
        </form>
    </section>
</x-app-layout>
