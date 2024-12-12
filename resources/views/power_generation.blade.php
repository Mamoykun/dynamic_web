@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('asset/css/power_generation.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @endpush

    <section class="first-hero">
        <nav class="breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span>></span>
            <a href="#">Power & Generation</a>
        </nav>
    </section>

    <section class="hero">
        <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Power Plant"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); z-index: 2;">
        </div>
        <div class="container" style="position: relative; z-index: 3;">
            <h1>Lifecycle solutions for guaranteed power plant performance</h1>
            <p>Energy Lifecycle solutions</p>
        </div>
    </section>
    <section>
        <div class="content-watsila">
            <h1 class="main-heading">Wärtsilä Lifecycle solutions for power plants</h1>
        </div>

        <section class="content-section">
            <div class="content-watsila">
                <div class="two-columns">
                    <div class="left-content">
                        <p>The industry is moving towards more flexible and sustainable energy systems. As inflexible
                            baseload generation declines, the share of renewables rapidly increases alongside the expanding
                            application of energy storage technology and flexible gas adoption.</p>
                        <p>Choosing a reliable partner with best-in-class expertise is essential in securing your
                            investments. With Wärtsilä Lifecycle solutions, we maintain and optimise your power plant
                            performance.</p>
                    </div>
                    <div class="video-container">
                        <video controls style="width: 100%; height: 100%; object-fit: cover;">
                            <source src="{{ asset('asset/video/The Vamps - Somebody To You ft. Demi Lovato.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <section class="stats-section">
            <div class="container">
                <h2 class="stats-heading">Our proudest numbers</h2>
                <div class="stats-container">
                    <div class="stat-item">
                        <div class="stat-number">18GW</div>
                        <div class="stat-desc">under service agreements</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">250+</div>
                        <div class="stat-desc">power plants supported by a lifecycle solution</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">72</div>
                        <div class="stat-desc">Net Promoter Score in 2023</div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-Lifecycle-Solutions">
                <div class="left-content">
                    <h2 style="font-size: 36px; font-weight: 300; margin-bottom: 30px;">Succeed with our Lifecycle Solutions
                    </h2>
                    <p>Our Lifecycle solutions range from collaborative spare parts planning and budgeting solutions all the
                        way to complete Operation and Maintenance solutions to cater for different customer needs over the
                        lifecycle of their assets.</p>
                    <p>Our focus is on understanding our customers' value drivers, operational strategy and business case
                        and how we can support during the lifecycle, ensuring power plant performance and competitiveness.
                    </p>
                    <ul class="benefits-list">
                        <li>Maximised return on investment</li>
                        <li>Ensured operational efficiency</li>
                        <li>Safe and reliable operations</li>
                        <li>Operation and maintenance optimisation and cost predictability</li>
                    </ul>
                    <a href="#" class="download-btn">Download brochure</a>
                </div>
                <div class="img-workers">
                    <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Wärtsilä workers"
                        style="width: 100%; height: auto;">
                </div>
            </div>
        </section>
        <section>
            <div class="container-card">
                <h1>Choose the right level of support for your power plant:</h1>
                <div class="cards-container">
                    <div class="card">
                        <div class="icon">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-2.91 10.24v-2.47a1 1 0 0 0-2 0v3.5a1 1 0 0 0 1 1h3.5a1 1 0 0 0 0-2h-1.57a8 8 0 0 0-3.79-13.9L14.7 6.3z"
                                    fill="currentColor" />
                                <path
                                    d="M9.3 17.7a1 1 0 0 0 0-1.4l-1.6-1.6a1 1 0 0 0-1.4 0L2.53 18.47a6 6 0 0 1 2.91-10.24v2.47a1 1 0 0 0 2 0v-3.5a1 1 0 0 0-1-1h-3.5a1 1 0 0 0 0 2h1.57a8 8 0 0 0 3.79 13.9l1.9-1.9z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <h2 class="card-title">Wärtsilä Optimised maintenance</h2>
                        <p class="card-subtitle">Ensure safe and reliable operations:</p>
                        <p class="card-description">We take full responsibility for maintaining your power plant and improve
                            performance, reliability and predictability of your operations and costs.</p>
                        <ul class="features-list">
                            <li>Maintenance by Wärtsilä</li>
                            <li>Services and support from Wärtsilä Expertise Centres</li>
                            <li>Maintenance cost predictability</li>
                        </ul>
                        <a href="#" class="read-more">Read more</a>
                    </div>

                    <div class="card">
                        <div class="icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="currentColor" />
                            </svg>
                        </div>
                        <h2 class="card-title">Wärtsilä Guaranteed asset performance</h2>
                        <p class="card-subtitle">Ensure power plant performance:</p>
                        <p class="card-description">We take full responsibility for maintaining your power plant and
                            guarantee its performance.</p>
                        <ul class="features-list">
                            <li>Maintenance by Wärtsilä</li>
                            <li>Performance guarantees</li>
                            <li>Services and support from Wärtsilä Expertise Centres</li>
                        </ul>
                        <a href="#" class="read-more">Read more</a>
                    </div>

                    <div class="card">
                        <div class="icon">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12c0 5.52 4.48 10 10 10s10-4.48 10-10c0-5.52-4.48-10-10-10zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"
                                    fill="currentColor" />
                                <path d="M15 13H9v-2h6v2z" fill="currentColor" />
                            </svg>
                        </div>
                        <h2 class="card-title">Wärtsilä Operation and maintenance</h2>
                        <p class="card-subtitle">Protect your investment: </p>
                        <p class="card-description">We take full responsibility for operating and maintaining your power
                            plant and guarantee its performance.</p>
                        <ul class="features-list">
                            <li>Operation and maintenance by Wärtsilä</li>
                            <li>Performance guarantees</li>
                            <li>Guaranteed operations and maintenance costs</li>
                        </ul>
                        <a href="#" class="read-more">Read more</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-remote">
            <div class="content-wrapper">
                <div class="content-image">
                    <img src="{{ asset('asset/image/pabrik report.jpg') }}" alt="Remote Support Facility">
                </div>
                <div class="content-text">
                    <h1>Remote support and data management</h1>
                    <div class="content-description">
                        <p>With a lifecycle solution, our experts and seven Expertise Centres around the world serve you all
                            the way when it comes to performance management, operational support and maintenance management.
                        </p>
                        <p>Explore how we can ensure efficient operations and optimise the maintenance of power plants with
                            the help of remote support and data management.</p>
                        <a href="#" class="read-more">Read more</a>
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

        <section class="containner_video">

            <div class="video-wrapper">
                <h1 class="video-title">RELIABLE POWER GENERATION FOR<br>A GOLD MINE IN THE PHILIPPINES</h1>
                <video id="customVideo" poster="/api/placeholder/1920/1080">
                    <!-- Replace with your video source -->
                    <source src="{{ asset('asset/video/The Vamps - Somebody To You ft. Demi Lovato.mp4') }}"
                        type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="controls-wrapper">
                    <button class="play-pause-btn" id="playPauseBtn">▶</button>
                    <div class="timeline" id="timeline">
                        <div class="timeline-progress" id="timelineProgress"></div>
                    </div>
                    <div class="time-display">
                        <span id="currentTime">0:00</span> / <span id="duration">0:00</span>
                    </div>
                    <div class="volume-control">
                        <span id="volumeIcon">🔊</span>
                        <input type="range" class="volume-slider" id="volumeSlider" min="0" max="1"
                            step="0.1" value="1">
                    </div>
                    <button class="fullscreen-btn" id="fullscreenBtn">⛶</button>
                </div>
            </div>
        </section>

        <section class="recent-news">
            <h1>Recent news</h1>

            <div class="news-item">
                <div class="date">7 May 2024 · <span class="category">Press release</span></div>
                <div class="title">Wärtsilä service agreement central to maintaining Nigerian cement plant's production
                    schedule</div>
            </div>

            <div class="news-item">
                <div class="date">25 Apr 2024 · <span class="category">Press release</span></div>
                <div class="title">Wärtsilä Operations & Maintenance Agreement ensures production reliability for
                    Argentinian lithium mine</div>
            </div>

            <div class="news-item">
                <div class="date">23 Jan 2024 · <span class="category">Trade press release</span></div>
                <div class="title">Agreement renewal marks Wärtsilä's long-term relationship with Indonesian mining
                    company</div>
            </div>
        </section>


        <section class="dowloads">
            <h2 class="subheading2">Downloads</h2>
            <div class="downloads-grid2">
                <div class="card2">
                    <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Power plant worker"
                        class="card-image2">
                    <div class="card-overlay2">
                        <div class="white-paper-tag2">White paper</div>
                        <h3 class="title2">How to ensure power plant performance and efficiency throughout the lifecycle
                        </h3>
                    </div>
                </div>
                <div class="card2">
                    <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Power plant facility" class="card-image2">
                    <div class="card-overlay2">
                        <div class="white-paper-tag2">White paper</div>
                        <h3 class="title2">Improving power plant energy efficiency</h3>
                    </div>
                </div>
                <div class="card2">
                    <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Office worker" class="card-image2">
                    <div class="card-overlay2">
                        <div class="white-paper-tag2">White paper</div>
                        <h3 class="title2">A strategic approach to optimising power plant operations and performance</h3>
                    </div>
                </div>
            </div>

            <h2 class="subheading2">Related articles</h2>
            <div class="articles-grid2">
                <div class="card2">
                    <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Remote support" class="card-image2">
                    <div class="card-content2">
                        <div class="date2">4 Nov 2021</div>
                        <h3 class="title2">Relentless reach with remote support</h3>
                        <p class="description2">Amidst the coronavirus pandemic, Wärtsilä's remote support was called upon
                            to perform like...</p>
                    </div>
                </div>
                <div class="card2">
                    <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Power plant sunset" class="card-image2">
                    <div class="card-content2">
                        <div class="date2">29 Jun 2020</div>
                        <h3 class="title2">Powering the future by building on today's solutions</h3>
                        <p class="description2">In the energy sector, performance and...</p>
                    </div>
                </div>
                <div class="card2">
                    <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Remote operations"
                        class="card-image2">
                    <div class="card-content2">
                        <div class="date2">8 Jun 2020</div>
                        <h3 class="title2">Optimising power plant operations through remote support</h3>
                        <p class="description2">With more people than ever working remotely,...</p>
                    </div>
                </div>
            </div>

            <h2 class="subheading2">Explore more solutions</h2>
            <div class="solutions-grid2">
                <div class="solution-card2">
                    <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Engine power plant" class="solution-image2">
                    <h3 class="title2">Engine power plants</h3>
                    <p class="description2">Flexible power generation with high efficiency.</p>
                </div>
                <div class="solution-card2">
                    <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Energy storage" class="solution-image2">
                    <h3 class="title2">Energy storage technology</h3>
                    <p class="description2">Solutions that build a resilient and intelligent power system.</p>
                </div>
                <div class="solution-card2">
                    <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Lifecycle upgrades"
                        class="solution-image2">
                    <h3 class="title2">Lifecycle upgrades</h3>
                    <p class="description2">Future-proof your existing assets.</p>
                </div>
                <div class="solution-card2">
                    <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Cyber services" class="solution-image2">
                    <h3 class="title2">Cyber services</h3>
                    <p class="description2">Protect your power plant from cyber security threats.</p>
                </div>
            </div>
            <div class="header2">
                <h1 class="heading2">Wärtsilä Energy. Let's connect.</h1>
                <a href="#" class="contact-button2">Contact us</a>
            </div>
        </section>
