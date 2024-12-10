@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('asset/css/gallery_foto.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @endpush

    <section>
        <div class="man_wrapper">
            <!-- First Section -->
            <main class="man_maintenance_container">
                <div class="man_text_section">
                    <h1 class="man_maintenance_title">Maintenance Kits:<br>Two-stroke engines</h1>
                    <p class="man_maintenance_description">All-in-one genuine-parts packages by MAN PrimeServ help you extend the time between overhauls, keep overhauls straightforward and effective, and ensure you have essential parts aboard when you need them.</p>
                    <a href="#" class="man_cta_button">Talk to our experts</a>
                </div>
                <div class="man_image_section">
                    <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Two-stroke Engine Kit" class="man_maintenance_image">
                </div>
            </main>
    
            <!-- Second Section -->
            <main class="man_maintenance_container">
                <div class="man_text_section">
                    <h1 class="man_maintenance_title">Service Kits:<br>Four-stroke engines</h1>
                    <p class="man_maintenance_description">Complete maintenance solutions designed specifically for four-stroke marine engines. Our kits contain all necessary components for routine maintenance and scheduled overhauls.</p>
                    <a href="#" class="man_cta_button">Talk to our experts</a>
                </div>
                <div class="man_image_section">
                    <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Four-stroke Engine Kit" class="man_maintenance_image">
                </div>
            </main>
    
            <!-- Third Section -->
            <main class="man_maintenance_container">
                <div class="man_text_section">
                    <h1 class="man_maintenance_title">Overhaul Kits:<br>Marine systems</h1>
                    <p class="man_maintenance_description">Comprehensive overhaul packages for marine propulsion systems. Each kit includes genuine parts, detailed documentation, and technical support to ensure optimal performance.</p>
                    <a href="#" class="man_cta_button">Talk to our experts</a>
                </div>
                <div class="man_image_section">
                    <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Marine Systems Kit" class="man_maintenance_image">
                </div>
            </main>
        </div>
    </section>
