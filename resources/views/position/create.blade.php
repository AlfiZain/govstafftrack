<x-app-layout title="Data Unit">
    <div class="pt-[50px] md:px-[50px] flex justify-end items-center px-4">
        <a href="{{ route('unit.index') }}">
            <img src="{{ asset('assets/svgs/ric-close-white.svg') }}" alt="" />
        </a>
    </div>
    <section class="py-[70px] flex flex-col items-center justify-center px-4">
        <p class="text-[32px] font-semibold text-dark">Tambahkan Unit Baru</p>
        <form class="w-full card" action="{{ route('position.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <p class="mt-6 mb-1 text-lg font-semibold">
                Data Jabatan & Pekerjaan
            </p>
            <div class="form-group">
                <label for="name" class="text-grey">Nama Jabatan</label>
                <input name="name" id="name" type="text" class="input-field" required />
            </div>
            <div class="form-group">
                <label for="echelon" class="text-grey">Eselon</label>
                <input name="echelon" id="echelon" type="text" class="input-field" required />
            </div>
            <div class="form-group">
                <label for="group" class="text-grey">Golongan</label>
                <input name="group" id="group" type="text" class="input-field" required />
            </div>
            <button type="submit" class="w-full btn btn-primary mt-[14px] hover:cursor-pointer">
                Kirim </button>
            <a href="{{ route('position.index') }}" class="w-full btn btn-danger mt-[14px]"> Batal </a>
        </form>
    </section>
</x-app-layout>
