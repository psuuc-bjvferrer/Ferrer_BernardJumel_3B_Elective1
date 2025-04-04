<!DOCTYPE html>
<html>
<head>
    <title>Asset Tracking System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto flex justify-between">
            <a href="{{ route('dashboard') }}" class="text-xl font-bold">Asset Tracker</a>
            <div>
                <a href="{{ route('assets.index') }}" class="mr-4">Assets</a>
                <a href="{{ route('assets.create') }}">Add Asset</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-6">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>