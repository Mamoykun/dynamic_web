@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('asset/css/Industrial_Solutions.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @endpush

    <section>
        <nav class="breadcrumb">
            <a href="#">Home</a>
            <span>></span>
            <a href="#">Products & Services</a>
            <span>></span>
            <p>Indonesia</p>
        </nav>

    </section>

    <section class="wrts-hero">
        <img src="{{ asset('asset/image/pabrik.jpg')}}" alt="Cape Town Landscape" class="wrts-hero__image">
        <div class="wrts-hero__overlay"></div>
        <div class="wrts-hero__content">
            <h1 class="wrts-hero__heading">Wärtsilä Energy in Africa</h1>
        </div>
    </section>

    <section class="wrts-future">
        <div class="wrts-container">
            <div class="wrts-future__grid">
                <div>
                    <h2 class="wrts-future__heading">Taking Africa to its Energy Future</h2>
                </div>
                <div>
                    <p class="wrts-future__text">Africa is ready to provide enough energy to achieve the most ambitious of goals, and it can do it while maintaining all environmental targets.</p>
                    <p class="wrts-future__text">We believe careful planning of power systems towards more sustainable and diversified energy supply portfolios can save billions and rapidly reduce CO2 emissions.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="wrts-stats">
        <div class="wrts-container">
            <h2 class="wrts-stats__title">References in Africa</h2>
            <div class="wrts-stats__grid">
                <div>
                    <h3 class="wrts-stats__number">7.6 GW</h3>
                    <p class="wrts-stats__text">of engine power plant capacity installed</p>
                </div>
                <div>
                    <h3 class="wrts-stats__number">46</h3>
                    <p class="wrts-stats__text">African countries with active customers</p>
                </div>
                <div>
                    <h3 class="wrts-stats__number">600+</h3>
                    <p class="wrts-stats__text">Wärtsilä engines installed across the continent</p>
                </div>
                <div>
                    <h3 class="wrts-stats__number">180+</h3>
                    <p class="wrts-stats__text">customers across the continent</p>
                </div>
            </div>
        </div>
    </section>
    <section class="wrts-tech">
        <img src="{{ asset('asset/image/foto pekerja pabrik.jpg')}}" alt="Engine Technology" class="wrts-tech__image">
        <div class="wrts-container">
            <div class="wrts-tech__content">
                <h2 class="wrts-tech__heading">Powering Africa with Wärtsilä's Flexible Engine Technology</h2>
                <p class="wrts-tech__text">Wärtsilä engines are the best choice to provide flexible, efficient and decarbonised energy to the continent</p>
            </div>
        </div>
    </section>

    <section class="wrts-ref">
        <div class="wrts-container">
            <div class="wrts-ref__grid">
                <div>
                    <h2 class="wrts-ref__heading">Wärtsilä's industry firsts in Africa</h2>
                    <p class="wrts-ref__text">With more than 650 employees and service hubs located in Kenya, South Africa, Nigeria and Senegal, Wärtsilä is proud to have contributed to many industry firsts.</p>
                    <p class="wrts-ref__text">Another first, the KivuWatt power plant in Rwanda, is the first ever power plant to use the naturally occurring methane from lake Kivu to generate electricity.</p>
                </div>
                <div>
                    <img src="{{ asset('asset/image/alam.jpg')}}" alt="Africa Map" class="wrts-ref__map">
                </div>
            </div>
        </div>
    </section>

    <section class="success-stories">
        <div class="carousel-container">
            <div class="header">
                <h1>Our success stories: How we have helped our customers</h1>
            </div>
            <div class="carousel">
                <div class="slide">
                    <div class="content">
                        <h2>Paras Energy, Nigeria</h2>
                        <p>Since deciding in 2009 that its three new power plants would operate with our gas engines
                            rather than gas turbines, the conventional choice at that time in Nigeria, Paras Energy has
                            continued to benefit from that decision.</p>
                        <a href="#" class="read-more">Read more</a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Worker in industrial setting">
                    </div>
                </div>
                <div class="slide">
                    <div class="content">
                        <h2>Grupo Puntacana, Dominican Republic</h2>
                        <p>A long-lasting partnership that adds value. We have supported Grupo Puntacana's vision by
                            providing reliable power generation for over 15 years.</p>
                        <a href="#" class="read-more">Read more</a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Aerial view of resort">
                    </div>
                </div>
                <div class="slide">
                    <div class="content">
                        <h2>Singapore Maritime Hub</h2>
                        <p>Leading the way in sustainable maritime operations. Our advanced propulsion systems have
                            helped transform Singapore's port operations, reducing emissions while maintaining
                            efficiency.</p>
                        <a href="#" class="read-more">Read more</a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('asset/image/kapal report.jpg') }}" alt="Maritime port">
                    </div>
                </div>
                <div class="slide">
                    <div class="content">
                        <h2>Green Power Finland</h2>
                        <p>Pioneering renewable energy solutions in the Nordic region. Our smart grid technology has
                            enabled Finland to integrate wind and solar power effectively into their national power
                            infrastructure.</p>
                        <a href="#" class="read-more">Read more</a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Wind turbines">
                    </div>
                </div>
            </div>
            <div class="navigation">
                <button class="nav-btn prev">←</button>
                <button class="nav-btn next">→</button>
            </div>
        </div>
    </section>

    <section>
        <div class="container-papers">
            <h1>Recent Country White Papers</h1>
            <div class="papers-grid">
                <div class="paper-card">
                    <div class="paper-image">
                        <img src="{{ asset('asset/image/kapal.jpg') }}" alt="South Africa cityscape">
                        <h2>SOUTH AFRICA</h2>
                    </div>
                    <a href="#" class="download-btn">Download white paper</a>
                </div>
    
                <div class="paper-card">
                    <div class="paper-image">
                        <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Nigeria cityscape">
                        <h2>NIGERIA</h2>
                    </div>
                    <a href="#" class="download-btn">Download white paper</a>
                </div>
    
                <div class="paper-card">
                    <div class="paper-image">
                        <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Mozambique cityscape">
                        <h2>MOZAMBIQUE</h2>
                    </div>
                    <a href="#" class="download-btn">Download white paper</a>
                </div>
            </div>
        </div>
    </section>
   
    <section class="sustainable-shipping-carousel">
        <div class="ssc-container">
            <div class="ssc-slides">
                <!-- Slide 1 -->
                <div class="ssc-slide active">
                    <div class="ssc-content">
                        <h1>Report: Sustainable fuels for shipping by 2050</h1>
                        <p>This research-backed report on future fuels in the marine industry reveals key actions to take today.</p>
                        <a href="#" class="ssc-btn">Download this report now!</a>
                    </div>
                    <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Shipping 1" class="ssc-image">
                    <div class="ssc-overlay"></div>
                </div>
    
                <!-- Slide 2 -->
                <div class="ssc-slide">
                    <div class="ssc-content">
                        <h1>Green Technology Innovation</h1>
                        <p>Discover the latest advancements in eco-friendly shipping technologies and solutions.</p>
                        <a href="#" class="ssc-btn">Learn More</a>
                    </div>
                    <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Shipping 2" class="ssc-image">
                    <div class="ssc-overlay"></div>
                </div>
    
                <!-- Slide 3 -->
                <div class="ssc-slide">
                    <div class="ssc-content">
                        <h1>Zero-Emission Vessels</h1>
                        <p>Explore our vision for the future of zero-emission maritime transportation.</p>
                        <a href="#" class="ssc-btn">View Details</a>
                    </div>
                    <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Shipping 3" class="ssc-image">
                    <div class="ssc-overlay"></div>
                </div>
    
                <!-- Slide 4 -->
                <div class="ssc-slide">
                    <div class="ssc-content">
                        <h1>Maritime Carbon Reduction</h1>
                        <p>Learn about our strategies to reduce carbon emissions in global shipping.</p>
                        <a href="#" class="ssc-btn">Get Started</a>
                    </div>
                    <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Shipping 4" class="ssc-image">
                    <div class="ssc-overlay"></div>
                </div>
    
                <!-- Slide 5 -->
                <div class="ssc-slide">
                    <div class="ssc-content">
                        <h1>Sustainable Supply Chain</h1>
                        <p>Implementing sustainable practices across the maritime supply chain.</p>
                        <a href="#" class="ssc-btn">Read More</a>
                    </div>
                    <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Shipping 5" class="ssc-image">
                    <div class="ssc-overlay"></div>
                </div>
    
                <!-- Slide 6 -->
                <div class="ssc-slide">
                    <div class="ssc-content">
                        <h1>Future of Marine Transport</h1>
                        <p>Shaping the future of marine transportation with sustainable solutions.</p>
                        <a href="#" class="ssc-btn">Explore Now</a>
                    </div>
                    <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Shipping 6" class="ssc-image">
                    <div class="ssc-overlay"></div>
                </div>
            </div>
    
            <!-- Navigation Dots -->
            <div class="ssc-navigation">
                <div class="ssc-dot active"></div>
                <div class="ssc-dot"></div>
                <div class="ssc-dot"></div>
                <div class="ssc-dot"></div>
                <div class="ssc-dot"></div>
                <div class="ssc-dot"></div>
            </div>
        </div>
    </section>

    <section class="africa_gallery">
        <h1 class="africa_gallery_title">Africa related images</h1>
    <div class="africa_gallery_wrapper">
        <div class="africa_gallery_item">
           <a href=""> <img class="africa_gallery_image" src="{{asset('asset/image/foto pekerja pabrik.jpg')}}" alt="Africa related image 1"></a>
        </div>
        <div class="africa_gallery_item">
            <a href=""><img class="africa_gallery_image" src="{{asset('asset/image/foto_home.jpg')}}" alt="Africa related image 2"></a>
        </div>
        <div class="africa_gallery_item">
            <a href=""><img class="africa_gallery_image" src="{{asset('asset/image/kapal.jpg') }}" alt="Africa related image 3"></a>
        </div>
    </div>
    </section>

    <section>
        <div class="article-custom-container">
            <h1 class="article-custom-heading">Articles</h1>
            <div class="article-custom-grid">
                <!-- Article 1 -->
                <article class="article-custom-card">
                    <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Renewable Energy" class="article-custom-image">
                    <div class="article-custom-content">
                        <div class="article-custom-meta">
                            <span>26 Apr 2022</span>
                            <span>5 min read</span>
                        </div>
                        <h2 class="article-custom-title">Renewables, energy storage and flexible gas power plants can drive industry in South Africa...</h2>
                        <div class="article-custom-tags">
                            <span class="article-custom-tag">Energy storage</span>
                            <span class="article-custom-tag">Power generation</span>
                        </div>
                    </div>
                </article>
    
                <!-- Article 2 -->
                <article class="article-custom-card">
                    <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Gas Power Plant" class="article-custom-image">
                    <div class="article-custom-content">
                        <div class="article-custom-meta">
                            <span>13 Oct 2021</span>
                            <span>5 min read</span>
                        </div>
                        <h2 class="article-custom-title">From Texas to Nigeria: engine power plants provide the flexibility to mitigate gas supply issues...</h2>
                        <div class="article-custom-tags">
                            <span class="article-custom-tag">Flexibility</span>
                            <span class="article-custom-tag">Power generation</span>
                            <span class="article-custom-tag">Energy transition</span>
                        </div>
                    </div>
                </article>
    
                <!-- Article 3 -->
                <article class="article-custom-card">
                    <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Africa Development" class="article-custom-image">
                    <div class="article-custom-content">
                        <div class="article-custom-meta">
                            <span>11 Aug 2021</span>
                            <span>5 min read</span>
                        </div>
                        <h2 class="article-custom-title">Ambitious about Africa</h2>
                        <p class="article-custom-description">There is currently a desperate need for more equal opportunities and better integration between companies and the communities...</p>
                        <div class="article-custom-tags">
                            <span class="article-custom-tag">Sustainability</span>
                            <span class="article-custom-tag">People</span>
                            <span class="article-custom-tag">Energy transition</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>


    <section class="wartsila-hero">
        <div class="wartsila-hero-container">
            <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Energy Storage Facility" class="wartsila-hero-image">
            <div class="wartsila-hero-overlay"></div>
            <div class="wartsila-hero-content">
                <h1 class="wartsila-hero-title">Wärtsilä Energy Storage and Optimisation</h1>
                <p class="wartsila-hero-description">Wärtsilä Energy Storage & Optimisation offers unrivalled solutions to the most pressing energy challenges, including the integration of more renewables.</p>
            </div>
        </div>
    </section>

    <section>
        <div class="press-custom-container">
            <h1 class="press-custom-title">Recent press releases</h1>
            <div class="press-custom-list">
                <article class="press-custom-item" style="--item-index: 0">
                    <div class="press-custom-meta">
                        <span class="press-custom-date">26 Nov 2024</span>
                        <span class="press-custom-dot">•</span>
                        <span class="press-custom-type">Press release</span>
                    </div>
                    <a href="#" class="press-custom-link">
                        <h2 class="press-custom-heading">Wärtsilä joins new consortium to explore hydrogen-argon power cycle for net-zero power generation</h2>
                    </a>
                </article>
    
                <article class="press-custom-item" style="--item-index: 1">
                    <div class="press-custom-meta">
                        <span class="press-custom-date">20 Nov 2024</span>
                        <span class="press-custom-dot">•</span>
                        <span class="press-custom-type">Press release</span>
                    </div>
                    <a href="#" class="press-custom-link">
                        <h2 class="press-custom-heading">District heating: the key to affordable and flexible decarbonised energy, says new study</h2>
                    </a>
                </article>
    
                <article class="press-custom-item" style="--item-index: 2">
                    <div class="press-custom-meta">
                        <span class="press-custom-date">13 Nov 2024</span>
                        <span class="press-custom-dot">•</span>
                        <span class="press-custom-type">Trade press release</span>
                    </div>
                    <a href="#" class="press-custom-link">
                        <h2 class="press-custom-heading">Wärtsilä engines to deliver reliable power for generating facility</h2>
                    </a>
                </article>
            </div>
    </section>

    <section>
        <div class="wartsila-features-container">
            <div class="wartsila-features-grid">
                <!-- Card 1 -->
                <div class="wartsila-feature-card">
                    <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Sustainable Fuels" class="wartsila-feature-image">
                    <div class="wartsila-feature-overlay">
                        <h2 class="wartsila-feature-title">Decarbonising with sustainable fuels</h2>
                        <p class="wartsila-feature-description">Explore how future fuels will enable energy transition, create opportunities and hope for the future.</p>
                    </div>
                </div>
    
                <!-- Card 2 -->
                <div class="wartsila-feature-card">
                    <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Technology Comparison" class="wartsila-feature-image">
                    <div class="wartsila-feature-overlay">
                        <h2 class="wartsila-feature-title">Technology comparisons</h2>
                        <p class="wartsila-feature-description">Ever wonder what the differences between gas combustion engines and gas turbines are? Find out in our detailed technical comparison articles.</p>
                    </div>
                </div>
            </div>
    
            <div class="wartsila-footer">
                <h1 class="wartsila-title">Wärtsilä Energy. Let's connect.</h1>
                <a href="#" class="wartsila-contact-btn">Contact us</a>
            </div>
        </div>
    </section>

    <section>
        <div class="offices-custom-container">
            <h1 class="offices-custom-title">Africa local offices</h1>
            
            <div class="offices-custom-tabs">
                <div class="offices-custom-tab-list" role="tablist">
                    <button class="offices-custom-tab-button active" role="tab">South Africa</button>
                    <button class="offices-custom-tab-button" role="tab">Nigeria</button>
                    <button class="offices-custom-tab-button" role="tab">Kenya</button>
                    <button class="offices-custom-tab-button" role="tab">Senegal</button>
                    <button class="offices-custom-tab-button" role="tab">Madagascar</button>
                    <button class="offices-custom-tab-button" role="tab">Cameroon</button>
                </div>
            </div>
    
            <div class="offices-custom-content active" role="tabpanel">
                <div class="offices-custom-address">
                    4 Powerful Street,<br>
                    Paarden Eiland<br>
                    7405,<br>
                    Cape Town
                </div>
                <a href="tel:+27215111230" class="offices-custom-phone">Tel. +27 21 5111 230</a>
            </div>
    
            <div class="offices-custom-content" role="tabpanel">
                <div class="offices-custom-address">
                    Plot 306A & B,<br>
                    Central Business District<br>
                    Abuja,<br>
                    Nigeria
                </div>
                <a href="tel:+234123456789" class="offices-custom-phone">Tel. +234 1234 56789</a>
            </div>
    
            <div class="offices-custom-content" role="tabpanel">
                <div class="offices-custom-address">
                    The Oval Building,<br>
                    Ring Road Parklands<br>
                    Nairobi,<br>
                    Kenya
                </div>
                <a href="tel:+254203743960" class="offices-custom-phone">Tel. +254 20 374 3960</a>
            </div>
    
            <div class="offices-custom-content" role="tabpanel">
                <div class="offices-custom-address">
                    Route des Almadies<br>
                    Zone 12, Lot D<br>
                    Dakar,<br>
                    Senegal
                </div>
                <a href="tel:+221338697000" class="offices-custom-phone">Tel. +221 33 869 7000</a>
            </div>
    
            <div class="offices-custom-content" role="tabpanel">
                <div class="offices-custom-address">
                    Immeuble Fitaratra,<br>
                    Zone Tana Water Front<br>
                    Ambodivona,<br>
                    Antananarivo
                </div>
                <a href="tel:+261202223123" class="offices-custom-phone">Tel. +261 20 222 3123</a>
            </div>
    
            <div class="offices-custom-content" role="tabpanel">
                <div class="offices-custom-address">
                    Rue Tokoto<br>
                    Bonanjo<br>
                    BP 4156,<br>
                    Douala
                </div>
                <a href="tel:+237233424140" class="offices-custom-phone">Tel. +237 233 42 41 40</a>
            </div>
        </div>
    </section>


    @push('scripts')
        <script src="{{ asset('asset/js/industrial_solutions.js') }}"></script>
    @endpush
