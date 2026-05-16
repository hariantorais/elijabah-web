<div class="app-menu">
    <!-- App Logo (Tetap Statis) -->
    <a href="{{ route('admin.dashboard') }}" class="logo-box">
        <div class="logo-light">
            <img src="{{ asset('logo-dark.png') }}" class="logo-lg h-5.5" alt="Logo">
        </div>
    </a>

    <div class="scrollbar" data-simplebar>
        <ul class="menu" data-fc-type="accordion">

            @foreach (sidebar_menus() as $item)
                {{-- Cek Permission (Spatie) --}}
                @if (!isset($item['sub_menu']))
                    {{-- Single Menu --}}
                    <li class="menu-item">
                        <a href="{{ route($item['route']) }}"
                            class="menu-link {{ request()->routeIs($item['active']) ? 'active' : '' }}">
                            <span class="menu-icon"><i class="{{ $item['icon'] }}"></i></span>
                            <span class="menu-text"> {{ $item['text'] }} </span>
                        </a>
                    </li>
                @else
                    {{-- Dropdown Menu --}}
                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse"
                            class="menu-link {{ request()->routeIs($item['active']) ? 'active' : '' }}">
                            <span class="menu-icon"><i class="{{ $item['icon'] }}"></i></span>
                            <span class="menu-text"> {{ $item['text'] }} </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            @foreach ($item['sub_menu'] as $sub)
                                <li class="menu-item">
                                    <a href="{{ route($sub['route']) }}"
                                        class="menu-link {{ request()->routeIs($sub['active']) ? 'active' : '' }}">
                                        <span class="menu-text">{{ $sub['text'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endif
            @endforeach

        </ul>
    </div>
</div>
