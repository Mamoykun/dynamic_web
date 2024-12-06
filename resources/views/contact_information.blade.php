@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('asset/css/contact_information.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @endpush

    <section class="first-hero">
        <nav class="breadcrumb">
            <a href="#">Home</a>
            <span>></span>
            <a href="#">Contact</a>
        </nav>
    </section>

    <section class="hero">
        <div class="hero-image-container">
            <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Marine worker" class="hero-image">
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Find contact information</h1>
            <p>for all Wärtsilä offices worldwide</p>
            <a href="#" class="read-more-btn">Global contact information</a>
        </div>
    </section>

    <section>
        <div class="wartsila-container">
            <h1 class="wartsila-title">Contact Wärtsilä</h1>
            
            <div class="wartsila-contact-grid">
              <div class="wartsila-contact-section">
                <h2 class="wartsila-section-title">Head office <a href="#" class="wartsila-link">[See map here]</a></h2>
                <div class="wartsila-address">
                  <a href="#" class="wartsila-link">Wärtsilä Helsinki Campus</a>
                  <p class="wartsila-text">Wärtsilä Corporation</p>
                  <p class="wartsila-text">Hiililaiturinkuja 2</p>
                  <p class="wartsila-text">FI-00180 Helsinki</p>
                  <p class="wartsila-text">Finland</p>
                </div>
                <div class="wartsila-contact-info">
                  <p class="wartsila-text">Tel. +358 10 709 0000</p>
                  <p class="wartsila-text">Fax +358 10 709 5700</p>
                  <p class="wartsila-text">Opening hours: 08:00 - 18:00 EET</p>
                </div>
              </div>
        
              <div class="wartsila-contact-section">
                <h2 class="wartsila-section-title">Postal address</h2>
                <div class="wartsila-address">
                  <p class="wartsila-text">Wärtsilä Corporation</p>
                  <p class="wartsila-text">P.O. Box 1834</p>
                  <p class="wartsila-text">FI-00080 WÄRTSILÄ</p>
                  <p class="wartsila-text">Finland</p>
                </div>
                <div class="wartsila-contact-info">
                  <p class="wartsila-text">E-mail addresses have the form</p>
                  <p class="wartsila-text">firstname.lastname@wartsila.com</p>
                </div>
              </div>
        
              <div class="wartsila-contact-section">
                <h2 class="wartsila-section-title">Invoicing address</h2>
                <div class="wartsila-address">
                  <p class="wartsila-text">Wärtsilä Corporation</p>
                  <p class="wartsila-text">P.O. Box 321</p>
                  <p class="wartsila-text">FI-65101 Vaasa</p>
                  <p class="wartsila-text">Finland</p>
                </div>
              </div>
        
              <div class="wartsila-contact-section">
                <h2 class="wartsila-section-title">Global address book</h2>
                <div class="wartsila-address">
                  <a href="#" class="wartsila-link">Map, 24h service numbers and contact details of all Wärtsilä offices, production facilities and workshops globally</a>
                </div>
              </div>
            </div>
          </div>
    </section>

    <section>
        <h1 class="wartsila-options-title">Contact options</h1>
        <div class="wartsila-contact-options">
            
            
            <div class="wartsila-options-grid">
              <a href="#" class="wartsila-option-card">
                <p class="wartsila-option-text">General inquiry</p>
              </a>
              
              <a href="#" class="wartsila-option-card">
                <p class="wartsila-option-text">Contact sales</p>
              </a>
              
              <a href="#" class="wartsila-option-card">
                <p class="wartsila-option-text">Become a supplier</p>
                <div class="wartsila-external-link">
                  <svg viewBox="0 0 24 24">
                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/>
                  </svg>
                </div>
              </a>
              
              <a href="#" class="wartsila-option-card">
                <p class="wartsila-option-text">Find a job</p>
                <div class="wartsila-external-link">
                  <svg viewBox="0 0 24 24">
                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/>
                  </svg>
                </div>
              </a>
              
              <a href="#" class="wartsila-option-card">
                <p class="wartsila-option-text">Find an office</p>
                <div class="wartsila-external-link">
                  <svg viewBox="0 0 24 24">
                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/>
                  </svg>
                </div>
              </a>
            </div>
            
            <div class="wartsila-options-grid-bottom">
              <a href="#" class="wartsila-option-card">
                <p class="wartsila-option-text">Order spare parts</p>
              </a>
              
              <a href="#" class="wartsila-option-card">
                <p class="wartsila-option-text">Find contact details</p>
              </a>
              
              <a href="#" class="wartsila-option-card">
                <p class="wartsila-option-text">Log in or request access to Wärtsilä portals</p>
                <div class="wartsila-external-link">
                  <svg viewBox="0 0 24 24">
                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/>
                  </svg>
                </div>
              </a>
              
              <a href="#" class="wartsila-option-card">
                <p class="wartsila-option-text">Traineeships and Final thesis</p>
                <div class="wartsila-external-link">
                  <svg viewBox="0 0 24 24">
                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/>
                  </svg>
                </div>
              </a>
            </div>
          </div>
    </section>

    <section>
        <div class="wartsila-social">
            <h1 class="wartsila-social-title">Wärtsilä social</h1>
            <p class="wartsila-social-subtitle">Follow Wärtsilä in social channels</p>
            
            <div class="wartsila-social-icons">
              <a href="#" class="wartsila-social-link">
                <svg class="wartsila-social-icon" viewBox="0 0 24 24">
                  <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
                </svg>
              </a>
        
              <a href="#" class="wartsila-social-link">
                <svg class="wartsila-social-icon" viewBox="0 0 24 24">
                  <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
              </a>
        
              <a href="#" class="wartsila-social-link">
                <svg class="wartsila-social-icon" viewBox="0 0 24 24">
                  <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"/>
                </svg>
              </a>
        
              <a href="#" class="wartsila-social-link">
                <svg class="wartsila-social-icon" viewBox="0 0 24 24">
                  <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                </svg>
              </a>
        
              <a href="#" class="wartsila-social-link">
                <svg class="wartsila-social-icon" viewBox="0 0 24 24">
                  <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"/>
                </svg>
              </a>
            </div>
          </div>
    </section>