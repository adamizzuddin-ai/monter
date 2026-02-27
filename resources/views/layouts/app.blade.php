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
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Monter Logo">
                </a>
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
        <div class="footer-container">

            <div class="footer-column">
                <h3>MONTER</h3>
                <p>It's Different</p>
            </div>

            <div class="footer-column">
                <h4>Contact</h4>
                <p>Email: monterbrand@outlook.com</p>
                <p>Phone: +60 12 938 3044</p>
                <p>Location: Terengganu, Malaysia</p>
            </div>

            <div class="footer-column">
                <h4>Quick Links</h4>
                <p><a href="/">Home</a></p>
                <p><a href="/shop">Shop</a></p>
            </div>

            <div class="footer-column">
                <h4>Follow Us</h4>
                <p>
                    <a href="https://instagram.com/monter.my" target="_blank">
                        Instagram
                    </a>
                </p>
                <p>
                    <a href="https://www.tiktok.com/@monter.attire" target="_blank">
                        TikTok
                    </a>
            </div>

        </div>

        <div class="footer-bottom">
            <p>© {{ date('Y') }} Monter. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>