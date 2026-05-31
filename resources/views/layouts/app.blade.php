<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Museum CMS' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-stone-100 text-stone-900">

    <header class="bg-black text-white">
        <div class="max-w-6xl mx-auto px-6 py-6 flex justify-between items-center">
            <a href="/exhibitions" class="text-xl font-bold tracking-wide">
                Museum CMS
            </a>

            <nav class="flex gap-6 text-sm">
                <a href="/exhibitions" class="hover:text-amber-300">Exhibitions</a>
                <a href="/api/exhibitions" target="_blank" class="hover:text-amber-300">JSON API</a>
            </nav>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-10">
        @yield('content')
    </main>

</body>
</html>