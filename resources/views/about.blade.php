@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('asset/css/about.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @endpush

    <section class="first-hero">
        <nav class="breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span>></span>
            <a href="#">About</a>
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
            <a href="#" class="read-more-btn">Read more</a>
        </div>
    </section>

   <section>
        <div class="wartsila-container">
            <div class="wartsila-sidebar">
                <div class="wartsila-nav-item has-submenu">This is Wärtsilä
                    <div class="wartsila-submenu">
                        <div class="wartsila-submenu-item">Our businesses</div>
                        <div class="wartsila-submenu-item">Business model</div>
                        <div class="wartsila-submenu-item">Market shares</div>
                        <div class="wartsila-submenu-item">Research & Development</div>
                        <div class="wartsila-submenu-item">Risk management</div>
                        <div class="wartsila-submenu-item">FAQ and glossary</div>
                    </div>
                </div>
                <div class="wartsila-nav-item has-submenu">Strategy & Purpose
                    <div class="wartsila-submenu">
                        <div class="wartsila-submenu-item">Purpose</div>
                        <div class="wartsila-submenu-item">Strategic steps</div>
                        <div class="wartsila-submenu-item">Brand</div>
                        <div class="wartsila-submenu-item">Financial targets</div>
                        <div class="wartsila-submenu-item">Outlook</div>
                        <div class="wartsila-submenu-item">Decarbonisation</div>
                    </div>
                </div>
                <div class="wartsila-nav-item has-submenu">Organisation & Management
                    <div class="wartsila-submenu">
                        <div class="wartsila-submenu-item">Board of Directors</div>
                        <div class="wartsila-submenu-item">Board of Management</div>
                        <div class="wartsila-submenu-item">Corporate Management</div>
                    </div>
                </div>
                <div class="wartsila-nav-item">History</div>
                <div class="wartsila-nav-item has-submenu">190 anniversary
                    <div class="wartsila-submenu">
                        <div class="wartsila-submenu-item">Articles</div>
                        <div class="wartsila-submenu-item">History</div>
                        <div class="wartsila-submenu-item">Wärtsilä's sea partnerships</div>
                        <div class="wartsila-submenu-item">Sustainable Technology Hub</div>
                    </div>
                </div>
                <div class="wartsila-nav-item">Cyber security</div>
                <div class="wartsila-nav-item">Contact information</div>
                <div class="wartsila-nav-item">Worldwide presence</div>
            </div>
            
            <div class="wartsila-content">
                <div class="this-watsila"><h1>This is Wärtsilä</h1></div>
                <p>Wärtsilä is a global leader in innovative technologies and lifecycle solutions for the marine and energy markets. We emphasise innovation in sustainable technology and services to help our customers continuously improve environmental and economic performance. Our dedicated and passionate team of 17,800 professionals in more than 280 locations in 79 countries shape the decarbonisation transformation of our industries across the globe. In 2023, Wärtsilä's net sales totalled EUR 6.0 billion. Wärtsilä is listed on Nasdaq Helsinki.</p>

                <h2>Our businesses</h2>
                <p><strong>Wärtsilä Energy</strong> helps our customers and the power sector to accelerate their decarbonisation journeys through our market-leading technologies and power system expertise. Our solutions include flexible engine power plants, energy storage and optimisation technology, and services for the whole lifecycle of our installations. Our engines are future-proof and can run on sustainable fuels.</p>

                <p><strong>Wärtsilä Marine's</strong> broad portfolio of engines, digital technologies, propulsion systems, hybrid technology, and integrated powertrain systems delivers efficiency, reliability, safety, and environmental performance. Wärtsilä Marine also supports customers with lifecycle services related to exhaust treatment, shaft line, and underwater repair.</p>

                <div class="video-section">
                    <h2>Wärtsilä video</h2>
                    <div class="video-container">
                        <video class="video-player">
                            <source src="video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video-overlay">
                            <button class="play-button">
                                <span class="play-icon">▶</span>
                            </button>
                        </div>
                        <div class="video-controls">
                            <button class="control-button play-pause">►</button>
                            <div class="progress-bar">
                                <div class="progress-filled"></div>
                            </div>
                            <span class="time">0:00</span>
                            <div class="right-controls">
                                <button class="control-button volume">🔊</button>
                                <button class="control-button settings">⚙️</button>
                                <button class="control-button fullscreen">⛶</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-wrapper">
                    <div class="left-content">
                        <h1>Wärtsilä's key figures in 2023</h1>
                        <ul class="wartsila-figures">
                            <li>Net sales EUR 6,015 million <span class="wartsila-prev-value">(5,842)</span></li>
                            <li>Comparable operating result EUR 497 million <span class="wartsila-prev-value">(325)</span></li>
                            <li>Order intake EUR 7,070 million <span class="wartsila-prev-value">(6,074)</span></li>
                            <li>Order book at the end of the period EUR 6,694 million <span class="wartsila-prev-value">(5,906)</span></li>
                            <li>Personnel at the end of the year 2023 17,807 <span class="wartsila-prev-value">(17,581)</span></li>
                        </ul>
                    </div>
                    <div class="right-content">
                        <p>In 2023, 29% of our net sales came from the Americas, 32% from Europe, 28% from Asia, and 10% from other parts of the world.</p>
                    </div>
                </div>

                <div class="wartsila-factsheet">
                    <h2>Factsheet</h2>
                    <p>Get a quick overview of Wärtsilä with regards to net sales, operating profit and major shareholders.</p>
                    <a href="#" class="wartsila-pdf">Link to PDF</a>
                </div>
                <div class="wartsila-factsheet">
                        <div class="sustainability-container">
                            <div class="sustainability-title">  <h1>Sustainability</h1></div>
                            <p class="sustainability-intro">
                                Wärtsilä has an important role in meeting the world's increased demand for energy in a sustainable way. This is the cornerstone of our commitment to sustainability.
                            </p>
                            <p class="sustainability-approach">
                                Our sustainability approach is based on economic, environmental and social performance. We strive to improve our procedures and performance across a wide front. Our overriding focus is on ensuring profitability, providing environmentally sound products and services and ensuring responsible business conduct.
                            </p>
                            <a href="#" class="sustainability-link">See our sustainability pages for more information</a>
                        </div>
                </div>
                <div class="wartsila-factsheet">
                    <div class="sustainability-container">
                        <div class="sustainability-title"><h1>Code of conduct and ethical stance</h1></div>
                        <p class="sustainability-intro">
                            Wärtsilä is committed to carrying out its business in a sustainable way. In order to promote the long-term interests of Wärtsilä and its stakeholders, the company strives to maintain the highest legal and ethical standards in all its business practices.
                        </p>
                       
                        <a href="#" class="sustainability-link">See our sustainability pages for more information</a>
                    </div>
            </div>
            </div>
        </div>
    </section>
    

    @push('scripts')
        <script src="{{ asset('asset/js/about.js') }}"></script>
    @endpush
