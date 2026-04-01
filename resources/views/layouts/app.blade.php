<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header -->
    <header class="site-header">
        <div class="header-container">

            <!-- LEFT: Logo -->
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Monter Logo">
                </a>
            </div>

            <!-- RIGHT: Home + Shop + Hamburger -->
            <div class="header-right">

                <nav class="nav-links">
                    <a href="/">Home</a>
                    <a href="/shop">Shop</a>
                </nav>

                <div class="menu-wrapper">
                    <input type="checkbox" id="menu-toggle" class="menu-toggle">

                    <label for="menu-toggle" class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>

                    <div class="side-menu">
                        <nav class="side-nav">
                            <a href="/">Home</a>

                            <details class="dropdown-menu">
                                <summary>Collections</summary>
                                <div class="dropdown-links">
                                    <a href="/collections/tropica">Tropica</a>
                                    <a href="/collections/fischer">Fischer</a>
                                    <a href="/collections/monte">Monte</a>
                                    <a href="/collections/dune">Dune</a>
                                    <a href="/collections/bosque">Bosque</a>
                                </div>
                            </details>

                            <a href="/sale">Sale</a>
                            <a href="/faq">FAQ</a>
                            <a href="/about">About Us</a>
                        </nav>
                    </div>

                    <label for="menu-toggle" class="menu-overlay"></label>
                </div>

            </div>

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
                <p>Phone: +60 11 5444 7361</p>
                <p>Location: Terengganu, Malaysia</p>
            </div>

            <div class="footer-column">
                <h4>Quick Links</h4>
                <p><a href="/">Home</a></p>
                <p><a href="/shop">Shop</a></p>
                <p><a href="/sale">Sale</a></p>
                <p><a href="/faq">FAQ</a></p>
                <p><a href="{{ route('about') }}">About Us</a></p>
            </div>

            <div class="footer-column">
                <h4>Follow Us</h4>
                <p>
                    <a href="https://instagram.com/monter.my" target="_blank" rel="noopener noreferrer">Instagram</a>
                </p>
                <p>
                    <a href="https://www.tiktok.com/@monter.attire" target="_blank" rel="noopener noreferrer">TikTok</a>
                </p>
                <p>
                    <a href="https://t.me/monterattire" target="_blank" rel="noopener noreferrer">Telegram Community</a>
                </p>
            </div>

        </div>

        <div class="footer-bottom">
            <p>© {{ date('Y') }} Monter. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>