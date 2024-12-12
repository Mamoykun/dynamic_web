@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/News_Articles.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @endpush

    <section class="first-hero">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Home</a> &gt; 
            <a href="#">Insight</a> &gt; 
            News & Articles
        </div>

        <div class="carousel-container">
            <div class="carousel-slides">
                <!-- Slide 1 -->
                <div class="carousel-slide active">
                    <div class="carousel-content">
                        <h1>Report: Sustainable fuels for shipping by 2050</h1>
                        <p>This research-backed report on future fuels in the marine industry reveals key actions to take
                            today.</p>
                        <a href="#" class="download-btn">Download this report now!</a>
                    </div>
                    <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Shipping 1" class="carousel-image">
                    <div class="overlay"></div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide">
                    <div class="carousel-content">
                        <h1>Green Technology Innovation</h1>
                        <p>Discover the latest advancements in eco-friendly shipping technologies and solutions.</p>
                        <a href="#" class="download-btn">Learn More</a>
                    </div>
                    <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Shipping 2" class="carousel-image">
                    <div class="overlay"></div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-slide">
                    <div class="carousel-content">
                        <h1>Zero-Emission Vessels</h1>
                        <p>Explore our vision for the future of zero-emission maritime transportation.</p>
                        <a href="#" class="download-btn">View Details</a>
                    </div>
                    <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Shipping 3" class="carousel-image">
                    <div class="overlay"></div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-slide">
                    <div class="carousel-content">
                        <h1>Maritime Carbon Reduction</h1>
                        <p>Learn about our strategies to reduce carbon emissions in global shipping.</p>
                        <a href="#" class="download-btn">Get Started</a>
                    </div>
                    <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Shipping 4" class="carousel-image">
                    <div class="overlay"></div>
                </div>

                <!-- Slide 5 -->
                <div class="carousel-slide">
                    <div class="carousel-content">
                        <h1>Sustainable Supply Chain</h1>
                        <p>Implementing sustainable practices across the maritime supply chain.</p>
                        <a href="#" class="download-btn">Read More</a>
                    </div>
                    <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Shipping 5" class="carousel-image">
                    <div class="overlay"></div>
                </div>

                <!-- Slide 6 -->
                <div class="carousel-slide">
                    <div class="carousel-content">
                        <h1>Future of Marine Transport</h1>
                        <p>Shaping the future of marine transportation with sustainable solutions.</p>
                        <a href="#" class="download-btn">Explore Now</a>
                    </div>
                    <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Shipping 6" class="carousel-image">
                    <div class="overlay"></div>
                </div>
            </div>

            <!-- Navigation Dots -->
            <div class="navigation-dots">
                <div class="dot active"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h1>Products and solutions for marine applications</h1>

            <p class="intro-text">
                Are you looking to boost the efficiency of your ship? To identify your ideal decarbonisation strategy?
                Wärtsilä's innovative solutions are designed to meet the different needs of the maritime industry - they can
                help you achieve your goals.
            </p>

            <div class="track-record">
                <h2>Proven track record -</h2>
                <p>
                    Wärtsilä has supported thousands of newbuild projects across all marine segments, from oil and gas and
                    merchant vessels to fishing, cruise, and ferry ships.
                </p>
            </div>

            <p class="highlight">
                One in every three vessels sailing the oceans has Wärtsilä solutions on board, including Guinness
                record-holding engines and award-winning systems.
            </p>
        </div>
    </section>
    
    <section class="conten-next_steps">
    <section class="grid-section">
        <h1>Most popular next steps</h1>
        <div class="card-grid">
            <div class="card">
                <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Engines">
                <h3>Engines and generating sets</h3>
                <p>Our portfolio of engines for marine applications</p>
            </div>
            <div class="card">
                <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Propulsors">
                <h3>Propulsors and gears</h3>
                <p>A broad range of solutions comprising gears, propellers and thrusters</p>
            </div>
            <div class="card">
                <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Electric shipping">
                <h3>Electric shipping and hybrid ships</h3>
                <p>Electrical solutions enabling marine decarbonisation</p>
            </div>
            <div class="card">
                <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Fleet optimisation">
                <h3>Fleet optimisation</h3>
                <p>A holistic data analysis, voyage planning and fleet performance management</p>
            </div>
            <div class="card">
                <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Simulation">
                <h3>Simulation and training</h3>
                <p>Next-gen training solutions that prepare you for today's challenges</p>
            </div>
        </div>
    </section>

    <!-- Find Your Solution Section -->
    <section class="solution-finder">
        <h1>Find your solution</h1>
        <p class="description">Explore the solutions to find the right tools and innovations tailored to meet the unique challenges of your maritime business. Smart solutions that help make your operations more efficient and eco-friendly.</p>
        
        <div class="solution-grid">
            <div class="solution-card">
                <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Power and propulsion">
                <h3>Power and propulsion</h3>
                <div class="links-section">
                    <a href="#">Engines and generating sets</a>
                    <a href="#">Engine configurator</a>
                    <a href="#">Electric shipping and hybrid ships</a>
                    <a href="#">Propulsors and gears</a>
                    <a href="#">Shaft line solutions</a>
                </div>
            </div>

            <div class="solution-card">
                <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Voyage and fleet">
                <h3>Voyage and fleet optimisation</h3>
                <div class="links-section">
                    <a href="#">Nautical digital services</a>
                    <a href="#">Fleet optimisation</a>
                    <a href="#">Simulation and training</a>
                    <a href="#">Port optimisation</a>
                </div>
            </div>

            <div class="solution-card">
                <img src="{{asset('asset/image/foto pekerja pabrik.jpg')}}" alt="Spare parts">
                <h3>Spare parts and services</h3>
                <div class="links-section">
                    <a href="#">Wärtsilä Online</a>
                    <a href="#">Spare parts</a>
                    <a href="#">Maintenance and repair</a>
                    <a href="#">Technical support</a>
                    <a href="#">Service agreements</a>
                    <a href="#">Lifecycle upgrades</a>
                </div>
            </div>

            <div class="solution-card">
                <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Liquid and gas">
                <h3>Liquid and gas handling</h3>
                <div class="links-section">
                    <a href="#">Methane number calculator</a>
                    <a href="#">Gas solutions</a>
                    <a href="#">Exhaust treatment and CCS</a>
                </div>
            </div>
        </div>
    </section>
</section>
<section>
    <div class="container-comlex_problems">
        <h1>Complex problems – solved</h1>
        <p class="intro-text">You will find solutions to many problems, including these top three:</p>
        <ul class="complex-problems-list">
            <li class="complex-problems-item">The need to reduce greenhouse gas emissions and comply with stringent environmental regulations.</li>
            <li class="complex-problems-item">The demand for better operational efficiency. Engines, propulsion solutions and other solutions help you reduce fuel consumption and operational costs.</li>
            <li class="complex-problems-item">Compliance and regulatory requirements. We can help you navigate complex international maritime regulations, and our solutions can ensure that your vessels will comply with emissions and safety standards.</li>
        </ul>
    </div>
</section>

<section class="decarb-hero-section">
    <img src="{{asset('asset/image/foto pekerja pabrik.jpg')}}" alt="Dark industrial background" class="decarb-hero-img">
    <img src="{{asset('asset/image/kapal.jpg')}}" alt="Ocean view" class="decarb-overlay-img">
    <div class="decarb-content-wrapper">
        <h1 class="decarb-title">Decarbonisation and net zero</h1>
        <p class="decarb-description">Discover the meaning of decarbonisation in shipping. Find the best ways to reduce emissions from your existing vessels. Learn how to future-proof your newbuild vessels.</p>
        <a href="#" class="decarb-cta-button">Learn more about decarbonisation</a>
    </div>
</section>

<section>
    <div class="marine-container">
        <h1 class="marine-title">Marine applications</h1>
        
        <h2 class="marine-subtitle">Most popular</h2>
        <div class="marine-grid">
            <a href="#" class="marine-card">
                <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Cruise Ship">
                <h3>Cruise</h3>
                <p>Cruise ship engines, propulsion solutions and more</p>
            </a>
            
            <a href="#" class="marine-card">
                <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="CSOV Vessel">
                <h3>Commissioning service operation vessels (CSOVs)</h3>
                <p>Solutions for CSOV newbuilds</p>
            </a>
            
            <a href="#" class="marine-card">
                <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Navy Vessel">
                <h3>Navy</h3>
                <p>Powering naval vessels, military ships, and coast guard vessels</p>
            </a>
            
            <a href="#" class="marine-card">
                <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Ferry">
                <h3>Ferry</h3>
                <p>Fuel-flexible ferry engines, propulsion solutions and more</p>
            </a>
        </div>

        <p class="marine-intro-text">Or, choose your business segment to find the marine applications you need. You will discover the products and solutions suited to specific requirements.</p>

        <div class="marine-segment-grid">
            <a href="#" class="marine-segment-card">
                <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Passenger Vessel">
                <h3>Passenger vessels</h3>
                <p>Sustainable solutions and services for cruise ships, ferries, and yachts.</p>
            </a>

            <a href="#" class="marine-segment-card">
                <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Offshore">
                <h3>Offshore</h3>
                <p>Integrated solutions that help reduce CAPEX and OPEX for offshore vessels.</p>
            </a>

            <a href="#" class="marine-segment-card">
                <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Merchant">
                <h3>Merchant</h3>
                <p>Solutions and services for gas carriers, bulkers, tankers, container, cargo, Ro-Ro, short sea shipping.</p>
            </a>

            <a href="#" class="marine-segment-card">
                <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Special Vessels">
                <h3>Special vessels</h3>
                <p>Solutions for fishing vessels, dredgers, tugs, and other special-purpose vessels.</p>
            </a>
        </div>
    </div>
</section>

<section>
    <div class="wartsila-wrapper">
        <div class="wartsila-container">
            <h1 class="wartsila-heading">How to achieve your goals with Wärtsilä</h1>
            
            <p class="wartsila-intro-text">
                Whether your vessel is a newbuild or an existing one, you will want it to comply with regulations and to operate effectively. The challenge lies in selecting and employing the right solutions and technologies efficiently, economically, and at the right times.
            </p>
            
            <p class="wartsila-intro-text">
                Decarbonisation Services will help you find your decarbonisation path in three simple steps:
            </p>
            
            <div class="wartsila-steps">
                <ol>
                    <li><strong>First, assess your needs.</strong> Wärtsilä can help you evaluate and define your vessel's requirements and operational goals.</li>
                    <li><strong>Choose the right solutions.</strong> Choose from Wärtsilä's extensive portfolio of engines, hybrid systems, propulsors, and gears tailored to your specific needs.</li>
                    <li><strong>Implement and optimise.</strong> Wärtsilä field services are ready to implement and help you integrate the selected solutions into your operations. From Wärtsilä, you get services and support for optimising the performance of your vessel.</li>
                </ol>
            </div>
            
            <p class="wartsila-sustainability-text">
                Wärtsilä's solutions are part of a broader effort to drive the maritime industry towards a sustainable future. Because we focus on decarbonisation and achieving net-zero emissions, we are helping the industry meet global environmental goals. At the same time, our solutions help you improve your overall operational efficiency.
            </p>
            
            <div class="wartsila-next-step-section">
                <h1 class="wartsila-heading">Take the next step</h1>
                <p class="wartsila-intro-text">
                    Now you have explored Wärtsilä's marine solutions. Now get in touch and let's discuss your needs and options! After all, these solutions could enhance your vessel's performance and sustainability.
                </p>
            </div>
            
            <div class="wartsila-connect-section">
                <div class="wartsila-brand-text">Wärtsilä Marine. Let's connect.</div>
                <button class="wartsila-contact-button">Contact us</button>
                <div class="wartsila-social-icons">
                    <a href=""><img src="{{ asset('asset/image/link.png') }}" alt="LinkedIn"></a>
                    <a href=""><img src="{{ asset('asset/image/x.png') }}" alt="X"></a>
                    <a href=""><img src="{{ asset('asset/image/yt.png') }}" alt="YouTube"></a>
                </div>
            </div>
        </div>
    </div>
</section>

    @push('scripts')
        <script src="{{ asset('asset/js/news_articles.js') }}"></script>
    @endpush
