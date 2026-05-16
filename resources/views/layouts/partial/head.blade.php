<head>
    <meta charset="utf-8">
    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        content="A fully featured admin theme which can be used to build CRM, CMS, etc., Tailwind, TailwindCSS, Tailwind CSS 3"
        name="description">
    <meta content="coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('') }}favicon.ico">

    <!-- App css -->
    <link href="{{ asset('') }}assets/css/app.min.css" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="{{ asset('') }}assets/css/icons.min.css" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="{{ asset('') }}assets/js/config.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.tsx', 'resources/js/blade.ts'])

    @stack('styles')
    @livewireStyles
</head>
