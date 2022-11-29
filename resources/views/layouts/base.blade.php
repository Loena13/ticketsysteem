<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"></link>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="app.css">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body>
    <div>
        <header>
            @include('components.header')
        </header>

        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>

<footer>
    @include('components.footer')
</footer>
</body>
</html>