<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header -->
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="/">MONTER</a>
            </div>

            <nav class="nav-links">
                <a href="/">Home</a>
                <a href="/shop">Shop</a>
            </nav>
        </div>
    </header>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <p>© {{ date('Y') }} Monter. Built for the wild.</p>
        </div>
    </footer>

</body>
</html>