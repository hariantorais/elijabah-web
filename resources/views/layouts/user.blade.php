<!DOCTYPE html>
<html>
<head>
    <title>Client Portal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
<nav class="bg-white border-b px-6 py-4 flex justify-between items-center">
    <h2 class="font-bold text-teal-600">Client Portal</h2>
    <ul class="flex gap-4 text-sm font-medium">
        <li><a href="{{ route('client.dashboard') }}">Proyek Saya</a></li>
        <li><a href="#">Invoices</a></li>
        <li><a href="#">Support Ticket</a></li>
    </ul>
</nav>

<main class="max-w-7xl mx-auto p-6">
    {{ $slot }}
</main>
</body>
</html>
