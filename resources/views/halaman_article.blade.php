@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/halaman_article.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @endpush
    <section class="first-hero">
        <nav class="breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span>></span>
            <a href="#">Article</a>
        </nav>
    </section>

    <section class="hero">
        <div class="hero-image-container">
            <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Marine worker" class="hero-image">
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Marine services</h1>
            <p>Maximise the uptime and the lifetime of your vessel.</p>
            <a href="#" class="read-more-btn">Download this report now</a>
        </div>
    </section>

    <section>
        <div class="insights-container">
            <!-- First Card -->
            <div class="insight-card">
                <div class="card-image-wrapper">
                    <img src="{{ asset('asset/image/kapal report.jpg') }}" alt="Cyber security team meeting" class="card-image">
                </div>
                <div class="card-content">
                    <div class="card-meta">
                        <span class="card-date">3 Dec 2024</span>
                        <span class="card-type">Article</span>
                        <span class="card-read-time">3 min read</span>
                    </div>
                    <h2 class="card-title">Strength in numbers – why maritime cyber security is a team sport</h2>
                    <p class="card-description">Learn why regular cyber incident exercises...</p>
                    <div class="card-tags">
                        <span class="tag">Cyber security</span>
                    </div>
                </div>
            </div>
        
            <!-- Second Card -->
            <div class="insight-card">
                <div class="card-image-wrapper">
                    <img src="{{ asset('asset/image/kapal report.jpg') }}" alt="Cyber security team meeting" class="card-image">
                </div>
                <div class="card-content">
                    <div class="card-meta">
                        <span class="card-date">3 Dec 2024</span>
                        <span class="card-type">Article</span>
                        <span class="card-read-time">3 min read</span>
                    </div>
                    <h2 class="card-title">Strength in numbers – why maritime cyber security is a team sport</h2>
                    <p class="card-description">Learn why regular cyber incident exercises...</p>
                    <div class="card-tags">
                        <span class="tag">Cyber security</span>
                    </div>
                </div>
            </div>
        
            <!-- Third Card -->
            <div class="insight-card">
                <div class="card-image-wrapper">
                    <img src="{{ asset('asset/image/kapal report.jpg') }}" alt="LNG Gas facility" class="card-image">
                </div>
                <div class="card-content">
                    <div class="card-meta">
                        <span class="card-date">22 Nov 2024</span>
                        <span class="card-type">Article</span>
                        <span class="card-read-time">5 min read</span>
                    </div>
                    <h2 class="card-title">4 great reasons why bio-LNG is the bridge fuel of the future for vessels</h2>
                    <p class="card-description">Learn why bio-LNG is a good choice as a bridge fuel to move the maritime industry towards net-...</p>
                    <div class="card-tags">
                        <span class="tag">Decarbonisation and future fuels</span>
                        <span class="tag">Engine systems</span>
                    </div>
                </div>
            </div>
        </div>
    </section>