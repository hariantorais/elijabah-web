<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login | WebElijabah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        content="A fully featured admin theme which can be used to build CRM, CMS, etc., Tailwind, TailwindCSS, Tailwind CSS 3"
        name="description">
    <meta content="coderthemes" name="author">
    <link rel="shortcut icon" href="{{ asset('') }}favicon.ico">
    <link href="{{ asset('') }}assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}assets/css/app.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="{{ asset('') }}assets/js/config.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="">

    <div
        class="flex items-stretch h-screen bg-cover bg-center relative bg-no-repeat  bg-[url('../images/bg-auth.jpg')]">
        {{ $slot }}

        <div class="bg-black/30 w-full h-full relative hidden lg:block">
            <div class="absolute start-0 end-0 bottom-0 flex mt-auto justify-center text-center">
                <div class="xl:w-1/2 w-full mx-auto">
                    <div class="swiper mt-auto cursor-col-resize" id="swiper_one">
                        <div class="swiper-wrapper mb-12">
                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                    <h2 class="text-3xl text-white mb-6">I love the color!</h2>
                                    <p class="text-lg text-white mb-5"><i class="ri-double-quotes-l"></i> Everything
                                        you need is in this template. Love the overall look and feel. Not too flashy,
                                        and still very professional and smart.</p>
                                    <p class="text-white mx-auto">
                                        - Admin User
                                    </p>
                                </div>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                    <h2 class="text-3xl text-white mb-6">Flexibility !</h2>
                                    <p class="text-lg text-white mb-5"><i class="ri-double-quotes-l"></i> Pretty nice
                                        theme, hoping you guys could add more features to this. Keep up the good work.
                                    </p>
                                    <p class="text-white mx-auto">
                                        - Admin User
                                    </p>
                                </div>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                    <h2 class="text-3xl text-white mb-6">Feature Availability!</h2>
                                    <p class="text-lg text-white mb-5"><i class="ri-double-quotes-l"></i> This is a
                                        great product, helped us a lot and very quick to work with and implement.</p>
                                    <p class="text-white mx-auto">
                                        - Admin User
                                    </p>
                                </div>
                            </div>
                            <!-- swiper-slide End -->
                        </div>
                        <!-- swiper-wrapper End -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Plugin Js -->
    <script src="{{ asset('') }}assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('') }}assets/libs/lucide/umd/lucide.min.js"></script>
    <script src="{{ asset('') }}assets/libs/@frostui/tailwindcss/frostui.js"></script>

    <!-- App Js -->
    <script src="{{ asset('') }}assets/js/app.js"></script>

    <!-- Swiper Plugin Js -->
    <script src="{{ asset('') }}assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Swiper Auth Demo Js -->
    <script src="{{ asset('') }}assets/js/pages/auth-swiper.js"></script>

</body>

</html>
