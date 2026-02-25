<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="video-container">
        <video autoplay muted loop playsinline>
            <source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
        </video>

        <div class="overlay"></div>

        <div class="bottom-button">
            <a href="/shop" class="shop-btn">Shop Now</a>
        </div>
    </div>

</body>
</html>