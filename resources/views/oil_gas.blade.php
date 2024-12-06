@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/Oil_Gas.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @endpush


    <section class="first-hero">
        <nav class="breadcrumb">
            <a href="#">Home</a>
            <span>></span>
            <a href="#">Energy</a>
            <span>></span>
            <a href="#">Oil & Gas</a>
            <span>></span>
            <span>Our vision of 100% renewable energy future</span>
        </nav>

        <div class="hero-container">
            <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Wind turbines at sunset" class="hero-img">
            <div class="hero-overlay"></div>
            <div class="diagonal-overlay"></div>
            <div class="hero-content">
                <h1 class="hero-title">Our vision</h1>
                <p class="hero-subtitle">Towards a 100% renewable energy future</p>
            </div>
        </div>
    </section>

    <section class="hero">
        <div class="hero-content">
            <h1>Towards a 100% renewable energy <br>future</h1>
        </div>
        <div class="hero-text">
            <p>The energy landscape is in transition towards more flexible and sustainable energy systems. We envision a
                100% renewable energy future.</p>
            <p>Wärtsilä is at the forefront of the transition – we understand, design, build and serve optimal power systems
                for future generations.</p>
            <p>Today we are far away from fully renewable energy systems. However, renewables are becoming the major energy
                source in many regions, pushing inflexible power generation out of the system. When renewables are not
                available, flexible engines and energy storage will provide the needed flexibility to balance renewables and
                secure reliability.</p>
        </div>
    </section>
    <section class="renewable-section">
        <div class="renewable-content">
            <h2 class="renewable-title">Towards 100% Renewable Energy</h2>
            <p class="renewable-message">
                No one person or company alone can change the world overnight. No single, brilliant move will complete the
                game. It's something we all need to do together.
            </p>
        </div>
        <div class="renewable-video-wrapper">
            <video controls poster="/api/placeholder/800/450">
                <source src="{{ asset('asset/video/The Vamps - Somebody To You ft. Demi Lovato.mp4') }}" type="video/mp4">
            </video>
        </div>
    </section>

    <section class="renewable-section reverse">
        <div class="renewable-content">
            <h2 class="renewable-title">Creating your optimal path towards a 100% renewable energy system</h2>
            <p class="renewable-message">
                We see that the transition to 100% renewable energy systems is set to accelerate at an eye-popping rate. No
                matter the region, the shift towards 100% renewable energy systems brings benefit to society – both
                economically and in terms of the climate.
            </p>
            <a href="#" class="renewable-button">Power system modelling</a>
        </div>
        <div class="renewable-video-wrapper">
            <video controls playsinline muted loop poster="/api/placeholder/800/450">
                <source src="{{ asset('asset/video/The Vamps - Somebody To You ft. Demi Lovato.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <section class="renewable-section reverse">
        <div class="container-conten2">
            <div class="content2">
                <h1 class="title2">Discover what optimised, flexible systems look like</h1>
                <p class="description2">
                    Every second that ticks by presents an opportunity for us to make the right decisions for a sustainable
                    future. As we integrate more renewables into traditional baseload power systems, flexibility becomes
                    essential. To ensure a continuous supply of electricity becomes a constant balancing act, where every
                    second, minute, and hour counts.
                </p>
                <a href="#" class="learn-more">Learn more</a>
            </div>
            <div class="image-container2">
                <img class="hero-image2" src="{{ asset('asset/image/pabrik.jpg') }}"
                    alt="Every second counts - Power systems optimization" />
            </div>
        </div>
    </section>

    <section class="renewable-section reverse">
        <div class="container-conten2">
            <div class="image-container2">
                <img class="hero-image2" src="{{ asset('asset/image/pabrik.jpg') }}"
                    alt="Every second counts - Power systems optimization" />
            </div>
            <div class="content2">
                <h1 class="title2">Discover what optimised, flexible systems look like</h1>
                <p class="description2">
                    Every second that ticks by presents an opportunity for us to make the right decisions for a sustainable
                    future. As we integrate more renewables into traditional baseload power systems, flexibility becomes
                    essential. To ensure a continuous supply of electricity becomes a constant balancing act, where every
                    second, minute, and hour counts.
                </p>
                <a href="#" class="learn-more">Learn more</a>
            </div>
        </div>
    </section>

    <section class="energy-markets">
        <div class="container">
            <div class="content-wrapper">
                <div class="text-content">
                    <h1>Redesigning energy markets</h1>
                    <p>We stand at the precipice of a transformational shift in European electricity systems, as wind and
                        solar become the dominant power source to achieve net zero. However, the transition cannot be
                        delivered by renewables alone. See our key recommendations for Europe's energy market redesign based
                        on our power system modelling results.</p>
                    <a href="#" class="explore-button">Explore our study</a>
                </div>
                <div class="image-content">
                    <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Energy Market Redesign">
                    <div class="image-overlay">
                        <h2>Energy Market Redesign</h2>
                        <p>For a Decarbonised Europe</p>
                    </div>
                    <div class="logo-oil">
                        <img src="wartsila-logo.png" alt="Wärtsilä Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="materials">
        <div class="container">
            <h1>Materials</h1>
            <div class="materials-grid">
                <a href="#" class="material-card">
                    <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Wärtsilä Energy 2024">
                    <div class="card-content">
                        <h2>Wärtsilä Energy<br>2024</h2>
                        <p>Explore the company<br>presentation</p>
                    </div>
                </a>

                <a href="#" class="material-card">
                    <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Africa's energy future">
                    <div class="card-content">
                        <h2>Pathways for<br>Africa's energy<br>future</h2>
                        <p>Explore the report</p>
                    </div>
                </a>

                <a href="#" class="material-card">
                    <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Energy in Southeast Asia">
                    <div class="card-content">
                        <h2>Rethinking<br>Energy in<br>Southeast Asia</h2>
                        <p>Explore the report</p>
                    </div>
                </a>

                <a href="#" class="material-card">
                    <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="100% renewable energy future">
                    <div class="card-content">
                        <h2>The path towards<br>a 100%<br>renewable<br>energy future</h2>
                        <p>Download white paper</p>
                    </div>
                </a>

                <a href="#" class="material-card">
                    <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Front-loading net zero">
                    <div class="card-content">
                        <h2>Front-loading net<br>zero</h2>
                        <p>Explore the report</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="connect-section">
        <div class="container">
            <div class="connect-content">
                <h2 class="connect-title">Wärtsilä Energy. Let's connect.</h2>
                <a href="#" class="contact-button">Contact us</a>
            </div>
        </div>
    </section>

    @push('scripts')
        <script src="{{ asset('asset/js/oil_gas.js') }}"></script>
    @endpush
