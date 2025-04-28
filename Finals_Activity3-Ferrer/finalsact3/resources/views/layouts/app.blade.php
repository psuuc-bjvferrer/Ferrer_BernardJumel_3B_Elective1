<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col font-sans">
    <header class="bg-indigo-700 text-white py-6 shadow-lg">
        <div class="container mx-auto px-6">
            <h1 class="text-3xl font-semibold tracking-tight">Student QR Dashboard</h1>
        </div>
    </header>
    <main class="container mx-auto px-6 py-10 flex-grow">
        @yield('content')
    </main>
    <footer class="bg-gray-900 text-gray-300 py-5">
        <div class="container mx-auto px-6 text-center">
            <p>© 2025 QR Code Dashboard. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>