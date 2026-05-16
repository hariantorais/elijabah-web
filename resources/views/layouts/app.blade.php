<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partial.head')

<body>

    <div class="flex wrapper">

        @include('layouts.partial.sidebar')
        <div class="page-content">
            @include('layouts.partial.topbar')

            <main class="p-6">

                <div class="flex justify-between items-center mb-6">
                    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">{{ $title ?? '' }}</h4>


                </div>

                {{ $slot }}

            </main>

            <!-- Footer Start -->
            @include('layouts.partial.footer')
            <!-- Footer End -->

        </div>


    </div>


    @include('layouts.partial.script')

</body>

</html>
