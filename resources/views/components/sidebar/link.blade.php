<a {{ $attributes }} class="nav-link {{ request()->fullUrlIs(url($href)) ? 'active' : '' }} ">
    {{ $slot }}
</a>
