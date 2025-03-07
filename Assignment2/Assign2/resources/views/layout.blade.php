<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ2QX7X1/R1FnpL9f4b1gTb0RFW2gkVglGG45v0oZ72J88PBH5bp34G4MYB" crossorigin="anonymous">
</head>
<body class="bg-light text-dark">
    <!-- Container for main content -->
    <div class="container my-5">
        <div class="card shadow-sm p-4">
            <h1 class="text-center mb-4">@yield('header')</h1>
            <!-- Content Section -->
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0zJ5k2dftD7F7mZ1hnw0E03+aJlTR6keH7TqZzYrU5fPmtxo" crossorigin="anonymous"></script>
</body>
</html>
