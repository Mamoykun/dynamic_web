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

        <section class="hero-section">
            <img src="{{asset('asset/image/kapal.jpg')}}" alt="Maritime cybersecurity team meeting" class="hero-image">
            <div class="hero-content">
                <h1 class="hero-title">Strength in numbers – why maritime cyber security is a team sport</h1>
                <p class="hero-description">Learn why regular cyber incident exercises involving teams throughout the maritime value chain are the best line of defence against maritime cyberattacks.</p>
            </div>
        </section>

        <div class="main-content">
            <div class="content-grid">
                <aside class="subscribe-sidebar">
                    <div class="subscribe-container">
                        <button class="subscribe-btn">Subscribe</button>
                    </div>
                </aside>

                <article class="article-content">
                    <!-- Meta info -->
                    <div class="meta-info">
                        <span>03 Dec 2024 · 3 min</span>
                        <span class="tag">Cyber security</span>
                    </div>

                    <!-- Article content -->
                    <h1 class="article-title">A ship-to-shore data connection seems to have been compromised. Do you pull the plug right away or wait for more details to better assess the risks? What decisions need to be made and who needs to be informed? These are just some of the questions you might face if you participate in a cyber incident exercise. How would you manage and what would you learn?</h1>

                    <p>As the maritime industry becomes ever more connected and data driven, there are enormous new opportunities, but also intensifying threats. Cyber criminals are constantly finding new and clever ways to hack systems and steal data. Until recently, however, there was very little in terms of mandatory cyber security requirements on maritime equipment.</p>

                    <p>In the summer of 2022, the International Association of Classification Societies adopted two new Unified Requirements on maritime cyber security. If you contract a newbuild vessel on or after July 1, 2024, it will need to comply with these requirements. Some of the responsibility lies with the owner, some with the shipyards and some with the equipment manufacturers.</p>

                    <h1 class="article-title2">Incident exercises – the fire drills of cyber resilience</h1>

                    <p>As the maritime industry becomes ever more connected and data driven, there are enormous new opportunities, but also intensifying threats. Cyber criminals are constantly finding new and clever ways to hack systems and steal data. Until recently, however, there was very little in terms of mandatory cyber security requirements on maritime equipment.</p>

                    <p>In the summer of 2022, the International Association of Classification Societies adopted two new Unified Requirements on maritime cyber security. If you contract a newbuild vessel on or after July 1, 2024, it will need to comply with these requirements. Some of the responsibility lies with the owner, some with the shipyards and some with the equipment manufacturers.</p>

                    <p>A ship-to-shore data connection seems to have been compromised. Do you pull the plug right away or wait for more details to better assess the risks? What decisions need to be made and who needs to be informed? These are just some of the questions you might face if you participate in a cyber incident exercise. How would you manage and what would you learn?</p>
                    <h1 class="article-title2">A united front is the best defence</h1>

                    <p>As the maritime industry becomes ever more connected and data driven, there are enormous new opportunities, but also intensifying threats. Cyber criminals are constantly finding new and clever ways to hack systems and steal data. Until recently, however, there was very little in terms of mandatory cyber security requirements on maritime equipment.</p>

                    <p>In the summer of 2022, the International Association of Classification Societies adopted two new Unified Requirements on maritime cyber security. If you contract a newbuild vessel on or after July 1, 2024, it will need to comply with these requirements. Some of the responsibility lies with the owner, some with the shipyards and some with the equipment manufacturers.</p>

                    <p>A ship-to-shore data connection seems to have been compromised. Do you pull the plug right away or wait for more details to better assess the risks? What decisions need to be made and who needs to be informed? These are just some of the questions you might face if you participate in a cyber incident exercise. How would you manage and what would you learn?</p>
                    <h1 class="article-title2">The winning team is the one that plays together</h1>

                    <p>As the maritime industry becomes ever more connected and data driven, there are enormous new opportunities, but also intensifying threats. Cyber criminals are constantly finding new and clever ways to hack systems and steal data. Until recently, however, there was very little in terms of mandatory cyber security requirements on maritime equipment.</p>

                    <p>In the summer of 2022, the International Association of Classification Societies adopted two new Unified Requirements on maritime cyber security. If you contract a newbuild vessel on or after July 1, 2024, it will need to comply with these requirements. Some of the responsibility lies with the owner, some with the shipyards and some with the equipment manufacturers.</p>

                    <p>"A ship-to-shore data connection seems to have been compromised. Do you pull the plug right away or wait for more details to better assess the risks? What decisions need to be made and who needs to be informed? These are just some of the questions you might face if you participate in a cyber incident exercise. How would you manage and what would you learn?</p>
                    

                    <div class="article-footer">
                        <div class="get-in-touch">
                            <a href="#">Get in touch to talk</a> about a cyber incident exercise with Wärtsilä.
                        </div>
                    
                        <div class="article-note">
                            This article about maritime cyber security, describing the learnings from a cyber incident exercise first appeared as one of Wärtsilä's Insights stories.
                        </div>
                    
                        <div class="written-by">Written by</div>
                        
                        <div class="author-info">
                            <a href="#" class="author-name">Ian Hamilton</a><br>
                            <a href="#" class="author-title">for Wärtsilä Marine Marketing</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    
    <section>
        <div class="wcs-divider-container">
            <hr class="wcs-divider">
        </div>
    </section>
    <section>
        <div class="wcs-container">
            <h1 class="wcs-main-heading">Related solutions</h1>
            <div class="wcs-card-wrapper">
                <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Cyber services dashboard" class="wcs-card-image">
                <div class="wcs-card-content">
                    <h2 class="wcs-card-title">Wärtsilä Cyber services</h2>
                    <p class="wcs-card-description">
                        Wärtsilä Cyber services help to understand the cyber security status of operational environment
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="wcs-divider-container">
            <hr class="wcs-divider">
        </div>
    </section>

    <section>
        <div class="rct-container">
            <h2 class="rct-title">Related content</h2>
            <div class="rct-grid">
                <!-- Card 1 -->
                <a href="#" class="rct-card">
                    <img src="{{ asset('asset/image/kapal report.jpg') }}" alt="Two workers looking at laptop" class="rct-card-image">
                    <div class="rct-card-content">
                        <div class="rct-card-meta">
                            <span>24 Oct 2024</span>
                            <span>·</span>
                            <span>Webinar</span>
                        </div>
                        <h3 class="rct-card-title">Cyber requirements: how to meet them with the power of type approvals</h3>
                        <p class="rct-card-description">Watch this interesting webinar and you will lear...</p>
                        <div>
                            <span class="rct-tag">Cyber security</span>
                            <span class="rct-tag">Lifecycle services</span>
                        </div>
                    </div>
                </a>
    
                <!-- Card 2 -->
                <a href="#" class="rct-card">
                    <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Person working at computer" class="rct-card-image">
                    <div class="rct-card-content">
                        <div class="rct-card-meta">
                            <span>10 Aug 2023</span>
                            <span>·</span>
                            <span>Article</span>
                            <span>·</span>
                            <span class="rct-read-time">5 min read</span>
                        </div>
                        <h3 class="rct-card-title">Shape up your vessel's maritime cyber security with these 8 clever tips</h3>
                        <p class="rct-card-description">If your ship has equipment with network...</p>
                        <div>
                            <span class="rct-tag">Lifecycle services</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>



    @push('scripts')
        <script src="{{ asset('asset/js/news_articles.js') }}"></script>
    @endpush
