@extends('layouts.app')

@section('content')
<section class="shop-page">
    <div class="shop-container">
        <h1 class="shop-title">Collections</h1>
        <p class="shop-subtitle">Explore the current MONTER lineup.</p>

        <div class="shop-grid">
            <div class="product-card">
                <h3><a href="{{ route('collections.tropica') }}">Tropica</a></h3>
                <p>Lightweight pieces inspired by heat, movement, and humidity.</p>
            </div>

            <div class="product-card">
                <h3><a href="{{ route('collections.fischer') }}">Fischer</a></h3>
                <p>Sharp silhouettes with a clean and technical feel.</p>
            </div>

            <div class="product-card">
                <h3><a href="{{ route('collections.monte') }}">Monte</a></h3>
                <p>Elevated everyday essentials with bold attitude.</p>
            </div>

            <div class="product-card">
                <h3><a href="{{ route('collections.dune') }}">Dune</a></h3>
                <p>Earth-toned textures shaped by minimal desert energy.</p>
            </div>

            <div class="product-card">
                <h3><a href="{{ route('collections.bosque') }}">Bosque</a></h3>
                <p>Organic tones and grounded forms inspired by the wild.</p>
            </div>
        </div>
    </div>
</section>
@endsection