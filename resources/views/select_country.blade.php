@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('asset/css/select_country.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @endpush

    <section>
        <div class="hero-container">
            <img src="{{ asset('asset/image/kapal.jpg') }}" alt="World Map Background" class="hero-image">
            <div class="overlay"></div>
            <div class="content">
                <h1>Find contact information</h1>
                <p>for all Wärtsilä offices worldwide</p>
                <a href="#" class="contact-button">Global contact information</a>
            </div>
        </div>
    </section>

    <section class="peta">
        <h1>Local Wärtsilä websites</h1>
    
    <p class="description">
        You will find all available country websites in the list below. If you need to find contact information for a Wärtsilä office, please <a href="#">view our addresses map</a>.
    </p>

    <div class="country-grid">
        <a href="#" class="country-link">Argentina</a>
        <a href="#" class="country-link">Estonia / Baltic</a>
        <a href="#" class="country-link">Netherlands</a>
        <a href="#" class="country-link">Singapore</a>
        
        <a href="#" class="country-link">Australia</a>
        <a href="#" class="country-link">Finland</a>
        <a href="#" class="country-link">Norway</a>
        <a href="#" class="country-link">South Africa</a>
        
        <a href="#" class="country-link">Azerbaijan</a>
        <a href="#" class="country-link">France</a>
        <a href="#" class="country-link">Pakistan</a>
        <a href="#" class="country-link">Spain</a>
        
        <a href="#" class="country-link">Bangladesh</a>
        <a href="#" class="country-link">Germany</a>
        <a href="#" class="country-link">Panama</a>
        <a href="#" class="country-link">Sri Lanka</a>
        
        <a href="#" class="country-link">Brazil</a>
        <a href="#" class="country-link">Greece</a>
        <a href="#" class="country-link">Papua New Guinea</a>
        <a href="#" class="country-link">Sweden</a>
        
        <a href="#" class="country-link">Bulgaria</a>
        <a href="#" class="country-link">Hungary</a>
        <a href="#" class="country-link">Peru</a>
        <a href="#" class="country-link">Switzerland</a>
        
        <a href="#" class="country-link">Canada</a>
        <a href="#" class="country-link">India</a>
        <a href="#" class="country-link">Philippines</a>
        <a href="#" class="country-link">Taiwan</a>
    </div>
    </section>