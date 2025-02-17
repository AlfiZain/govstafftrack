<div class="lg:block fixed lg:max-w-[295px] w-full overflow-y-auto h-full bg-white z-[999] 
     transition-all duration-300 transform -translate-x-full lg:translate-x-0"
    id="sidebarHRIS">

    <div class="px-6 py-[50px] gap-y-[50px] flex flex-col">
        <div class="flex items-center justify-between">
            <a href="#"
                class="flex justify-center font-extrabold text-dark text-2xl transition duration-300  hover:scale-105">
                Goverment Staff Tracking
            </a>
            <a href="#" id="toggleCloseSidebar" class="lg:hidden">
                <svg class="w-6 h-6 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </a>
        </div>
        <div class="flex flex-col gap-4">
            <div class="text-sm text-grey">Daily Use</div>
            <x-sidebar.link :href="route('dashboard')" class="nav-link group">
                <img src="../assets/svgs/ic-grid.svg" alt=""
                    class="group-hover:brightness-0 group-hover:invert">
                Dashboard
            </x-sidebar.link>
            <x-sidebar.link :href="route('employee.index')" class="nav-link group">
                <img src="../assets/svgs/ic-users.svg" alt=""
                    class="group-hover:brightness-0 group-hover:invert">
                Data Pegawai
            </x-sidebar.link>
            <x-sidebar.link :href="route('unit.index')" class="nav-link group">
                <img src="../assets/svgs/ic-briefcase.svg" alt=""
                    class="group-hover:brightness-0 group-hover:invert">
                Unit Kerja
            </x-sidebar.link>
            <x-sidebar.link :href="route('position.index')" class="nav-link group">
                <img src="../assets/svgs/ic-flag.svg" alt=""
                    class="group-hover:brightness-0 group-hover:invert">
                Jabatan & Pekerjaan
            </x-sidebar.link>
        </div>
        <div class="flex flex-col gap-4">
            <div class="text-sm text-grey">Others</div>
            <a href="#" class="nav-link group">
                <img src="../assets/svgs/ic-settings.svg" alt=""
                    class="group-hover:brightness-0 group-hover:invert">
                Settings
            </a>
            <a href="#" class="nav-link group">
                <img src="../assets/svgs/ic-signout.svg" alt=""
                    class="group-hover:brightness-0 group-hover:invert">
                Logout
            </a>
        </div>
    </div>
</div>
