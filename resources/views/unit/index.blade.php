<x-app-layout title="Unit Kerja">
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
                    My Teams
                </div>
            </div>
        </section>

        <section class="pt-[50px]">
            <!-- Section Header -->
            <div class="mb-[30px]">
                <div class="flex flex-col justify-between gap-6 sm:items-center sm:flex-row">
                    <div>
                        <div class="text-xl font-medium text-dark">
                            Available
                        </div>
                        <p class="text-grey">Empower company</p>
                    </div>
                    <a href="my-teams_create.html" class="btn btn-primary">Build New Team</a>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4 xl:gap-10 lg:gap-3">
                <div class="items-center card py-6 md:!py-10 md:!px-[38px] !gap-y-0">
                    <a href="#" class="absolute inset-0 focus:ring-2 ring-primary rounded-[26px]"></a>
                    <img src="../assets/svgs/ric-box.svg" alt="">
                    <div class="mt-6 mb-1 font-semibold text-center text-dark">
                        Growth Marketing
                    </div>
                    <p class="text-center text-grey">
                        12 People
                    </p>
                </div>
                <div class="items-center card py-6 md:!py-10 md:!px-[38px] !gap-y-0">
                    <a href="#" class="absolute inset-0 focus:ring-2 ring-primary rounded-[26px]"></a>
                    <img src="../assets/svgs/ric-target.svg" alt="">
                    <div class="mt-6 mb-1 font-semibold text-center text-dark">
                        User Growth
                    </div>
                    <p class="text-center text-grey">
                        5,312 People
                    </p>
                </div>
                <div class="items-center card py-6 md:!py-10 md:!px-[38px] !gap-y-0">
                    <a href="#" class="absolute inset-0 focus:ring-2 ring-primary rounded-[26px]"></a>
                    <img src="../assets/svgs/ric-award.svg" alt="">
                    <div class="mt-6 mb-1 font-semibold text-center text-dark">
                        Gamification
                    </div>
                    <p class="text-center text-grey">
                        893 People
                    </p>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
