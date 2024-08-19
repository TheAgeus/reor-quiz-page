<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/reor-logo.png') }}" sizes="32x32" type="image/png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/reor-logo.png') }}">
    <title>RE&OR / Dashboard</title>
</head>
<body class="bg-gradient-to-r from-teal-600 to-teal-300">
    <div class="min-h-screen flex flex-col">
        <nav class="bg-gray-200 p-4 border-b border-gray-300 shadow-lg">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Logo and Title -->
                <div class="flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center text-xl font-bold text-teal-600 hover:text-teal-700 transition-colors duration-300">
                        <img src="{{ asset('images/reor-logo.png') }}" alt="Logo" class="h-10 w-10 mr-2">
                        RE&OR
                    </a>
                </div>
                <!-- Logout Button -->
                <div>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-teal-600 hover:text-teal-700 transition-colors duration-300">Logout</button>
                    </form>
                </div>
            </div>
        </nav>
        <main style="background: linear-gradient(135deg, #1fafb1, #a3fbd9);" class="flex-grow w-full">
            <div class="container mx-auto flex flex-col items-center p-6 max-w-7xl">
                @yield('content')
            </div>
            @yield('scripts')
        </main>
    </div>
</body>
</html>
