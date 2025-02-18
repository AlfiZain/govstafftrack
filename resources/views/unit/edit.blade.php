<x-app-layout title="Data Unit Kerja">
    <div class="pt-[50px] md:px-[50px] flex justify-end items-center px-4">
        <a href="{{ route('unit.index') }}">
            <img src="{{ asset('assets/svgs/ric-close-white.svg') }}" alt="" />
        </a>
    </div>
    <section class="py-[70px] flex flex-col items-center justify-center px-4">
        <p class="text-[32px] font-semibold text-dark">Ubah Data Unit Kerja</p>
        <form class="w-full card" action="{{ route('unit.update', $unit) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <p class="mt-6 mb-1 text-lg font-semibold">
                Data Unit Kerja
            </p>
            <div class="form-group">
                <label for="name" class="text-grey">Nama Unit Kerja</label>
                <input name="name" id="name" type="text" class="input-field" value="{{ $unit->name }}" />
            </div>
            <div class="form-group">
                <label for="work_place" class="text-grey">Tempat Tugas</label>
                <input name="work_place" id="work_place" type="text" class="input-field"
                    value="{{ $unit->work_place }}" />
            </div>
            <button type="submit" class="w-full btn btn-primary mt-[14px] hover:cursor-pointer">
                Update </button>
            <a href="{{ route('unit.index') }}" class="w-full btn btn-danger mt-[14px]"> Batal </a>
        </form>
    </section>
</x-app-layout>
