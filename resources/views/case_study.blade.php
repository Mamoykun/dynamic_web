@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('asset/css/case_study.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @endpush

    <section class="first-hero">
        <nav class="breadcrumb">
            <a href="#">Home</a>
            <span>></span>
            <a href="#">Insight</a>
            <span>></span>
            <a href="#">Case Study</a>
            <span>></span>
            <span>Our vision of 100% renewable energy future</span>
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
            <a href="#" class="contact-btn">Contact us</a>
        </div>
    </section>

    <!-- Services Introduction Section -->
    <section class="services-intro">
        <h2>A full suite of marine services for your needs</h2>
        <p>Are you looking for ways to improve the reliability and efficiency of your ship while saving money and reducing
            emissions? Then Wärtsilä marine expert services are for you!</p>
    </section>

    <!-- Popular Services Section -->
    <section class="popular-services">
        <h2>Most popular</h2>
        <div class="services-grid">
            <!-- Service Card 1 -->
            <div class="service-card">
                <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Spare parts">
                <h3>Spare parts</h3>
                <p>Genuine marine spare parts from Wärtsilä are reliable and have a long lifetime. They can also save you
                    money in the long run.</p>
            </div>
            <!-- Service Card 2 -->
            <div class="service-card">
                <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Technical support">
                <h3>Technical support</h3>
                <p>Do you have a technical question or need help to solve a problem? Get access to the latest technical
                    documents or create a TechRequest.</p>
            </div>
            <!-- Service Card 3 -->
            <div class="service-card">
                <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Training">
                <h3>Training</h3>
                <p>Take your professional skills to the next level with high-quality practical training from the Wärtsilä
                    Land & Sea Academy.</p>
            </div>
        </div>
    </section>

    <!-- Full Service List Section -->
    <section class="service-list">
        <p>Here is your easy access to the full suite of marine expert services from the Wärtsilä portfolio. This includes
            everything from genuine spare parts and technical support to maintenance and repairs.</p>
        <ul>
            <li><a href="#"> - Genuine spare parts</a> from Wärtsilä are reliable and have a long lifetime. They can
                also save you money in the long run.</li>
            <li><a href="#"> - Technical support:</a> Do you have a technical question or need help to solve a
                problem? Our experts can help you get ahead – whenever you need it, remotely or face-to-face.</li>
            <li><a href="#"> - Training:</a> Take your professional skills to the next level with high-quality
                practical training from the Wärtsilä Land & Sea Academy.</li>
            <li><a href="#"> - Maintenance and repairs:</a> Do you need maintenance, repair or overhaul services for
                your vessel? Our team of experts can get your vessel back into operation in no time.</li>
            <li><a href="#"> - Service agreements:</a> A lifecycle agreement with Wärtsilä as your expert partner will
                help you improve vessel uptime, save fuel and decrease emissions.</li>
            <li><a href="#"> - Port and fleet optimisation:</a> Ensure efficient operations both in ports and at sea
                to achieve a seamless, safe and sustainable supply chain.</li>
            <li><a href="#"> - Decarbonisation services:</a> Do you want to adopt future fuels for your vessels?
                Wärtsilä decarbonisation services can help you get started with three simple steps.</li>
            <li><a href="#"> - Cyber services:</a> Get first-class cyber security protection for your maritime
                operations – both at sea and onshore.</li>
            <li><a href="#"> - Lifecycle upgrades:</a> Take full advantage of your investments while improving the
                efficiency and performance of your 2- or 4-stroke engines and other equipment.</li>
        </ul>
    </section>
    <section>
        <div class="contact-center-wrapper">
            <a href="#" class="contact-center-btn">Contact us</a>
        </div>
    </section>

    <section>
        <main class="service-finder">
            <h1 class="service-finder__title">Find the right service for you</h1>
            <p class="service-finder__intro">Pick the service that best fits your needs - or <a href="#">contact us
                    with your inquiry.</a></p>

            <div class="service-grid">
                <!-- Spare Parts -->
                <div class="service-card">
                    <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Marine engineer working on spare parts"
                        class="service-card__image">
                    <h2 class="service-card__title">Spare parts</h2>
                    <p class="service-card__description">
                        <a href="#">Genuine marine spare parts</a> from Wärtsilä are reliable and have a long
                        lifetime. They can also save you money in the long run.
                    </p>
                </div>

                <!-- Technical Support -->
                <div class="service-card">
                    <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Technical support team at computer screens"
                        class="service-card__image">
                    <h2 class="service-card__title">Technical support</h2>
                    <p class="service-card__description">
                        Do you have a technical question or need help to solve a problem? <a href="#">Get access to
                            the latest technical documents or create a TechRequest – Go to Wärtsilä Online</a>.
                    </p>
                </div>

                <!-- Training -->
                <div class="service-card">
                    <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}"
                        alt="Training session with marine equipment" class="service-card__image">
                    <h2 class="service-card__title">Training</h2>
                    <p class="service-card__description">
                        Take your professional skills to the next level with <a href="#">high-quality practical
                            training from the Wärtsilä Land & Sea Academy</a>.
                    </p>
                </div>

                <!-- Maintenance and Repairs -->
                <div class="service-card">
                    <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Maintenance worker in Wärtsilä uniform"
                        class="service-card__image">
                    <h2 class="service-card__title">Maintenance and repairs</h2>
                    <p class="service-card__description">
                        Do you need <a href="#">maintenance, repair or overhaul services for your vessel</a>? Our team
                        of experts can get your vessel back into operation in no time.
                    </p>
                </div>

                <!-- Service Agreements -->
                <div class="service-card">
                    <img src="{{ asset('asset/image/pabrik report.jpg') }}"
                        alt="Team meeting discussing service agreements" class="service-card__image">
                    <h2 class="service-card__title">Service agreements</h2>
                    <p class="service-card__description">
                        A lifecycle agreement with Wärtsilä as your expert partner will help you <a href="#">improve
                            vessel uptime, save fuel and decrease emissions</a>.
                    </p>
                </div>

                <!-- Port and Fleet Optimization -->
                <div class="service-card">
                    <img src="{{ asset('asset/image/alam.jpg') }}" alt="Aerial view of port and vessel"
                        class="service-card__image">
                    <h2 class="service-card__title">Port and fleet optimisation</h2>
                    <p class="service-card__description">
                        Ensure <a href="#">efficient operations both in ports and at sea</a> to achieve a seamless,
                        safe and sustainable supply chain.
                    </p>
                </div>

                <!-- Decarbonisation Services -->
                <div class="service-card">
                    <img src="{{ asset('asset/image/kapal report.jpg') }}" alt="Ocean wave representing clean energy"
                        class="service-card__image">
                    <h2 class="service-card__title">Decarbonisation services</h2>
                    <p class="service-card__description">
                        Do you want to adopt future fuels for your vessels? <a href="#">Wärtsilä decarbonisation
                            services can help you get started</a> with three simple steps.
                    </p>
                </div>

                <!-- Cyber Services -->
                <div class="service-card">
                    <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Cyber security monitoring screens"
                        class="service-card__image">
                    <h2 class="service-card__title">Cyber services</h2>
                    <p class="service-card__description">
                        Get <a href="#">first-class cyber security protection for your maritime operations</a> – both
                        at sea and onshore. Choose cyber services from Wärtsilä.
                    </p>
                </div>

                <!-- Lifecycle Upgrades -->
                <div class="service-card">
                    <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Container ship on calm waters"
                        class="service-card__image">
                    <h2 class="service-card__title">Lifecycle upgrades</h2>
                    <p class="service-card__description">
                        Take full advantage of your investments while <a href="#">improving the efficiency and
                            performance of your 2- or 4-stroke engines and other equipment</a>.
                    </p>
                </div>
            </div>
        </main>
    </section>

    <section class="cii-status">
        <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Container ship at port" class="cii-status__image">
        <div class="cii-status__content">
            <h1 class="cii-status__title">How do you discover the real CII status of your vessel?</h1>
            <p class="cii-status__text">Download this white paper to learn how to discover the real CII status of your
                vessel. It is the ideal guide for owners and operators of bulkers, tankers, and container ships. Learn more:
            </p>
            <a href="#" class="download-btn">Download this white paper now!</a>
        </div>
    </section>

    <section class="equipment">
        <h2 class="equipment__title">Choose the right service for your equipment</h2>
        <div class="equipment__content">
            <p class="equipment__intro">Wärtsilä marine expert services cover a full range of equipment, including:</p>
            <ul class="equipment__list">
                <li><a href="#">2-stroke ship engines and engine components</a></li>
                <li><a href="#">4-stroke ship engines and engine components</a></li>
                <li><a href="#">turbochargers</a></li>
                <li><a href="#">propulsion systems</a></li>
                <li><a href="#">shaft line solutions</a></li>
                <li><a href="#">exhaust treatment solutions</a></li>
            </ul>
            <p>Learn more - <a href="#">Choose the right service for your equipment</a></p>
        </div>
        <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Marine engineers inspecting equipment"
            class="equipment__image">
    </section>

    <section class="why-choose">
        <h2 class="why-choose__title">Why choose marine services from Wärtsilä?</h2>
        <p class="why-choose__intro">Wärtsilä marine expert services help keep your equipment in top condition, so you can
            focus on your core business.</p>
        <p>You can benefit from:</p>
        <ul class="benefits-list">
            <li>- efficient vessel maintenance and services</li>
            <li>- less downtime and better efficiency</li>
            <li>- longer vessel lifetime</li>
            <li>- compliance with industry regulations</li>
            <li>- results that can even be guaranteed with a special agreement.</li>
        </ul>
        <p>Because Wärtsilä offers:</p>
        <ul class="benefits-list">
            <li>- a global service network with local experts</li>
            <li>- skilled and experienced technicians and engineers</li>
            <li>- advanced technology and data insights.</li>
        </ul>
    </section>

    <section class="content-video">
        <div class="testimonial-header">
            <h1 class="testimonial-title">What are our services customers saying?</h1>
            <p class="testimonial-subtitle">Get inspired by these quotes about our customers like you:</p>
        </div>

        <div class="video-container playing" id="videoContainer">
            <video class="main-video" autoplay loop muted playsinline id="mainVideo">
                <source src="{{ asset('asset/video/The Vamps - Somebody To You ft. Demi Lovato.mp4') }}"
                    type="video/mp4">
            </video>
            <div class="center-controls">
                <button class="video-btn" id="playPauseBtn">
                    <svg class="pause-icon" viewBox="0 0 24 24" style="display: block;">
                        <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
                    </svg>
                    <svg class="play-icon" viewBox="0 0 24 24" style="display: none;">
                        <path d="M8 5v14l11-7z" />
                    </svg>
                </button>
            </div>
            <div class="bottom-right-controls">
                <button class="video-btn fullscreen-btn" id="fullscreenBtn">
                    <svg class="fullscreen-icon" viewBox="0 0 24 24">
                        <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z" />
                    </svg>
                </button>
            </div>
        </div>

    </section>

    <section>
        <div class="wartsila-contact">
            <h1 class="wartsila-contact__title">Get in touch</h1>
            <p class="wartsila-contact__subtitle">Do you have questions about our marine services? Do you have a special
                service need? Get in touch and let's discuss your needs.</p>

            <div class="contact">
                <div class="lets">
                    <h2 class="wartsila-contact__brand">Wärtsilä Marine. Let's connect.</h2>
                </div>
                <div class="wartsila-contact__actions">
                    <a href="#" class="wartsila-contact__btn">Contact us</a>

                    <div class="wartsila-contact__social">
                        <a href="#" class="wartsila-contact__social-icon" aria-label="LinkedIn">
                            <img class="wartsila-contact__social-img"
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z'/%3E%3C/svg%3E"
                                alt="LinkedIn">
                        </a>
                        <a href="#" class="wartsila-contact__social-icon" aria-label="X (formerly Twitter)">
                            <img class="wartsila-contact__social-img"
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z'/%3E%3C/svg%3E"
                                alt="X">
                        </a>
                        <a href="#" class="wartsila-contact__social-icon" aria-label="YouTube">
                            <img class="wartsila-contact__social-img"
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z'/%3E%3C/svg%3E"
                                alt="YouTube">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script src="{{ asset('asset/js/case_study.js') }}"></script>
    @endpush
