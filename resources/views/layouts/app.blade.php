<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    @include('components.navbar')

    <main class="flex-grow-1 container my-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        crossorigin="anonymous">
    </script>
</body>
</html>
