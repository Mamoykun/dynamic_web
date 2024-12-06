@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('asset/css/marine_shipbuilding.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
@endpush

<section>
<div class="breadcrumb">
    <a href="#">Home</a> &gt; 
    <a href="#">Product & Services</a> &gt; 
    Marine & Shipbuilding
</div>

<div class="hero">
    <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Building" class="hero-image">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Optimised and reliable energy with Wärtsilä solutions</h1>
        <p>Building power systems for future generations</p>
    </div>
</div>
</section>
<section class="content-section">
    <div class="left-section">
        <h1>Marine & Shipbuilding</h1>
    </div>
    <div class="right-section">
        <p class="text-block">
            With a deep understanding of the <span class="bold-text">energy transition and power systems</span>, we can help our customers find their optimal and most efficient path towards 100% renewable energy, while balancing and future-proofing their power systems as demanded by the flexible grids of the future.
        </p>
        <p class="text-block">
            Our offering consists of a wide range of flexible solutions, that provide optimised and reliable energy. We enable the transition to renewable energy with <span class="bold-text">flexible engine power plants and energy storage technology</span>.
        </p>
        <p class="text-block">
            We support our customers over the lifecycle of their installations ensuring power plant performance and competitiveness in a safe, reliable and sustainable way.
        </p>
    </div>
</section>


<!-- Product Grid Section -->
<section class="product-grid">
    <!-- Product Card 1 -->
    <div class="product-card">
        <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Engine power plants" class="product-image">
        <div class="product-content">
            <h2 class="product-title">Engine power plants</h2>
            <p class="product-description">Flexible power generation with high efficiency.</p>
        </div>
    </div>

    <!-- Product Card 2 -->
    <div class="product-card">
        <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Energy storage technology" class="product-image">
        <div class="product-content">
            <h2 class="product-title">Energy storage technology</h2>
            <p class="product-description">Solutions that build a resilient and intelligent power system.</p>
        </div>
    </div>

    <!-- Product Card 3 -->
    <div class="product-card">
        <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Hybrid solutions" class="product-image">
        <div class="product-content">
            <h2 class="product-title">Hybrid solutions</h2>
            <p class="product-description">Integrated power systems combining multiple energy sources.</p>
        </div>
    </div>

    <!-- Product Card 4 -->
    <div class="product-card">
        <img src="{{ asset('asset/image/kapal report.jpg') }}" alt="Smart technologies" class="product-image">
        <div class="product-content">
            <h2 class="product-title">Smart technologies</h2>
            <p class="product-description">Advanced control and monitoring systems for optimal performance.</p>
        </div>
    </div>
</section>

<section class="cards-grid">
    <!-- Card 1 -->
    <div class="card">
        <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Solutions Catalogue" class="card-image">
        <div class="card-overlay">
            <h2 class="card-title">Download the Solutions Catalogue</h2>
            <p class="card-description">Discover everything about our market-leading technologies and power system expertise.</p>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="card">
        <img src="{{ asset('asset/image/kapal report.jpg') }}" alt="Success Stories" class="card-image">
        <div class="card-overlay">
            <h2 class="card-title">Our energy industry success stories</h2>
            <p class="card-description">Learn how we have helped our customers in 180 countries to succeed.</p>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="card">
        <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Downloads" class="card-image">
        <div class="card-overlay">
            <h2 class="card-title">Downloads</h2>
            <p class="card-description">Explore our solutions and power system optimisation expertise through the collection of materials.</p>
        </div>
    </div>
</section>

<!-- Connect Section -->
<section class="connect-section">
    <h2 class="connect-title">Wärtsilä Energy. Let's connect.</h2>
    <a href="#" class="contact-button">Contact us</a>
</section>