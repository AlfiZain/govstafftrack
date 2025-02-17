<x-app-layout title="Data Pegawai">
    <div class="pt-[50px] md:px-[50px] flex justify-end items-center px-4">
        <a href="{{ route('employee.index') }}">
            <img src="../assets/svgs/ric-close-white.svg" alt="" />
        </a>
    </div>
    <section class="py-[70px] flex flex-col items-center justify-center px-4">
        <p class="text-[32px] font-semibold text-dark">Tambahkan Pegawai Baru</p>
        <form class="w-full card" action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <p class="mt-6 mb-1 text-lg font-semibold">
                Data Diri Pegawai
            </p>
            <div class="form-group">
                <label for="nip" class="text-grey">NIP</label>
                <input name="nip" id="nip" type="text" class="input-field" required />
            </div>
            <div class="form-group">
                <label for="name" class="text-grey">Nama Lengkap</label>
                <input name="name" id="name" type="text" class="input-field" required />
            </div>
            <div class="form-group">
                <label for="photo" class="text-grey">Foto Pegawai</label>
                <input name="photo" id="photo" type="file" class="input-field" required />
            </div>
            <div class="form-group">
                <label for="email" class="text-grey">Alamat Email</label>
                <input name="email" id="email" type="email" class="input-field" required />
            </div>
            <div class="form-group">
                <label for="place_of_birth" class="text-grey">Tempat Lahir</label>
                <input name="place_of_birth" id="place_of_birth" type="text" class="input-field" required />
            </div>
            <div class="form-group">
                <label for="address" class="text-grey">Alamat</label>
                <input name="address" id="address" type="text" class="input-field" required />
            </div>
            <div class="form-group">
                <label for="date_of_birth" class="text-grey">Tanggal Lahir</label>
                <input name="date_of_birth" id="date_of_birth" type="date" class="input-field" required />
            </div>
            <div class="form-group">
                <label class="text-grey">Jenis Kelamin</label>
                <div>
                    <input type="radio" name="gender" id="gender_l" value="L" required />
                    <label for="gender_l" class="text-grey">Laki-laki</label>
                </div>
                <div>
                    <input type="radio" name="gender" id="gender_p" value="P" required />
                    <label for="gender_p" class="text-grey">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="religion" class="text-grey">Agama</label>
                <input name="religion" id="religion" type="text" class="input-field" required />
            </div>
            <div class="form-group">
                <label for="phone" class="text-grey">No. HP</label>
                <input name="phone" id="phone" type="text" class="input-field" required />
            </div>
            <div class="form-group">
                <label for="npwp" class="text-grey">NPWP</label>
                <input name="npwp" id="npwp" type="text" class="input-field" required />
            </div>

            <p class="mt-6 mb-1 text-lg font-semibold">
                Data Pekerjaan
            </p>
            <div class="form-group">
                <label for="unit_id" class="text-grey">Pilih Jabatan</label>
                <select name="unit_id" id="unit_id" class="appearance-none input-field form-icon-chevron_down">
                    <option value="1" selected>Product Designer</option>
                    <option value="2">Website Developer</option>
                    <option value="3">Executive Manager</option>
                    <option value="4">iOS Engineer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="position_id" class="text-grey">Pilih Unit Kerja</label>
                <select name="position_id" id="position_id"
                    class="appearance-none input-field form-icon-chevron_down">
                    <option value="1" selected>DISNAKER</option>
                    <option value="2">MENHAN</option>
                </select>
            </div>
            <button type="submit" class="w-full btn btn-primary mt-[14px] hover:pointer">
                Kirim </button>
            <a href="{{ route('employee.index') }}" class="w-full btn btn-danger mt-[14px]"> Batal </a>
        </form>
    </section>
</x-app-layout>
