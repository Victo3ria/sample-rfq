<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heading ?? 'Kijabe Hospital' }}</title> {{-- Dynamic title from heading slot --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
        /* Add any global styles here if needed */
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-gray-800 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-xl font-bold">Kijabe Hospital</a>
            <div>
                <a href="/dashboard" class="px-3 py-2 rounded-md hover:bg-gray-700">Dashboard</a>
                <a href="/rfq" class="px-3 py-2 rounded-md hover:bg-gray-700">RFQ</a>
                <a href="/items" class="px-3 py-2 rounded-md hover:bg-gray-700">Items</a>
                <a href="/settings" class="px-3 py-2 rounded-md hover:bg-gray-700">Settings</a>

                {{-- Logout Button (only visible if logged in) --}}
                @auth
                    <form method="POST" action="{{ route('logout') }}" class="inline-block ml-4">
                        @csrf
                        <button type="submit" class="px-3 py-2 rounded-md bg-red-600 hover:bg-red-700">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="px-3 py-2 rounded-md bg-blue-600 hover:bg-blue-700 ml-4">Login</a>
                @endauth
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading ?? 'Page' }}</h1>
        </div>
    </header>

    <main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        {{ $slot }} {{-- This is where the content from other views will be injected --}}
    </main>
</body>
</html>
