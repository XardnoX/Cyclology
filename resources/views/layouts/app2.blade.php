<html>
<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.tailwindcss.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>FIRSTCYCLING</title>
    <meta charset="UTF-8">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header>
    <div class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 fixed inset-x-0 top-0 z-30 shadow-lg backdrop-blur-lg">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center space-x-3">
                <a href="/riders" class="text-white font-bold text-2xl tracking-wide">
                    <i class="fa-solid fa-book mr-2"></i> Cyclology
                </a>
            </div>
            <nav class="space-x-6">
                <a href="/riders" class="text-white hover:text-yellow-300 text-lg font-medium">Cyklisti</a>
                <a href="/race" class="text-white hover:text-yellow-300 text-lg font-medium">Závody</a>
                @auth
                <a href="/dashboard-create" class="text-white hover:text-yellow-300 text-lg font-medium">Přidávání Závodů</a>
                @endauth
                <a href="/download-pdf" class="text-white hover:text-yellow-300 text-lg font-medium">PDF na stáhnutí</a>
                @guest
                <a href="/login" class="bg-yellow-300 text-gray-900 font-semibold py-2 px-4 rounded-full shadow hover:bg-yellow-400 transition ease-in-out duration-300">
                    Přihlášení
                </a>
                @endguest
                @auth
                <a href="/dashboard" class="bg-yellow-300 text-gray-900 font-semibold py-2 px-4 rounded-full shadow hover:bg-yellow-400 transition ease-in-out duration-300">
                    Dashboard
                </a>
                @endauth
            </nav>
        </div>
    </div>
</header>

<div class="mt-24"></div>

@vite('resources/js/app.js')
@vite('resources/css/app.css')
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.tailwindcss.js"></script>
<script src="https://cdn.tailwindcss.com/3.4.5"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</body>
</html>
@yield('content')
