@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('asset/css/investors.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @endpush

    <section class="first-hero">
        <nav class="breadcrumb">
            <a href="#">Home</a>
            <span>></span>
            <a href="#">investors</a>
        </nav>
    </section>

    <section class="hero">
        <div class="hero-image-container">
            <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Marine worker" class="hero-image">
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>INVESTORS</h1>
            <p>Proactivity and commitment</p>
            <a href="#" class="read-more-btn">Contact us</a>
        </div>
    </section>

    <section>
        <div class="wartsila-container">
            <div class="wartsila-sidebar">
                <div class="wartsila-nav-item has-submenu">Wärtsilä as an investment
                    <div class="wartsila-submenu">
                        <div class="wartsila-submenu-item">Sustainable inverstment</div>
                        <div class="wartsila-submenu-item">CEO review</div>
                        <div class="wartsila-submenu-item">Factsheet</div>
                        <div class="wartsila-submenu-item">Strategy & business model</div>
                        <div class="wartsila-submenu-item">FAQ and glossary</div>
                    </div>
                </div>
                <div class="wartsila-nav-item has-submenu">Markets
                    <div class="wartsila-submenu">
                        <div class="wartsila-submenu-item">Outlook</div>
                        <div class="wartsila-submenu-item">Announced orders</div>
                        <div class="wartsila-submenu-item">Acquisitions and divestment</div>
                        <div class="wartsila-submenu-item">Market shares</div>
                        <div class="wartsila-submenu-item">Competitors</div>
                        <div class="wartsila-submenu-item">Growth drivers</div>
                    </div>
                </div>
                <div class="wartsila-nav-item has-submenu">Shares
                    <div class="wartsila-submenu">
                        <div class="wartsila-submenu-item">Board of Directors</div>
                        <div class="wartsila-submenu-item">Board of Management</div>
                        <div class="wartsila-submenu-item">Corporate Management</div>
                    </div>
                </div>
                <div class="wartsila-nav-item">Analytics</div>
                <div class="wartsila-nav-item has-submenu">Shareholders
                    <div class="wartsila-submenu">
                        <div class="wartsila-submenu-item">Articles</div>
                        <div class="wartsila-submenu-item">History</div>
                        <div class="wartsila-submenu-item">Wärtsilä's sea partnerships</div>
                        <div class="wartsila-submenu-item">Sustainable Technology Hub</div>
                    </div>
                </div>
                <div class="wartsila-nav-item">Governance</div>
                <div class="wartsila-nav-item">Financial information</div>
                <div class="wartsila-nav-item">Report & presentations</div>
                <div class="wartsila-nav-item">IR Calendar</div>
                <div class="wartsila-nav-item">Investor relations</div>
                <div class="wartsila-nav-item">IR Blog</div>
            </div>

            <div class="wartsila-content">
                <div class="reports-gallery">
                    <div class="gallery-item">
                        <div class="image-wrapper">
                            <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Wartsila Report" loading="lazy">
                        </div>
                        <div class="gallery-text">Interim Report January-September 2024</div>
                    </div>
                    <div class="gallery-item">
                        <div class="image-wrapper">
                            <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Annual Report"
                                loading="lazy">
                        </div>
                        <div class="gallery-text">Annual Report 2023</div>
                    </div>
                    <div class="gallery-item">
                        <div class="image-wrapper">
                            <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Roadshow" loading="lazy">
                        </div>
                        <div class="gallery-text">Roadshow presentation December 2024</div>
                    </div>
                    <div class="gallery-item">
                        <div class="image-wrapper">
                            <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Roadshow" loading="lazy">
                        </div>
                        <div class="gallery-text">Roadshow presentation December 2024</div>
                    </div>
                    <div class="gallery-item">
                        <div class="image-wrapper">
                            <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Roadshow" loading="lazy">
                        </div>
                        <div class="gallery-text">Roadshow presentation December 2024</div>
                    </div>
                    <div class="gallery-item">
                        <div class="image-wrapper">
                            <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Roadshow" loading="lazy">
                        </div>
                        <div class="gallery-text">Roadshow presentation December 2024</div>
                    </div>
                </div>
                <div class="financial-section">
                    <div class="financial-header">
                        <h1>Financial figures</h1>
                        <h2>July-September 2024</h2>
                    </div>

                    <div class="financial-grid">
                        <div class="financial-item">
                            <h3>1,803 MEUR</h3>
                            <p>Order intake</p>
                        </div>
                        <div class="financial-item">
                            <h3>1,718 MEUR</h3>
                            <p>Net sales</p>
                        </div>
                        <div class="financial-item">
                            <h3>177 MEUR</h3>
                            <p>Comparable operating result</p>
                        </div>
                    </div>

                    <div class="financial-lists">
                        <ul class="bullet-list">
                            <li>Order intake remained stable at EUR 1,803 million (1,787), while the organic growth, which
                                excludes FX impact and the impact of acquisitions and divestments, was 4%</li>
                            <li>Service order intake increased by 4% to EUR 874 million (842)</li>
                            <li>Net sales increased by 18% to EUR 1,718 million (1,452), while organic growth was 21%</li>
                            <li>Book-to-bill amounted to 1.05 (1.23)</li>
                        </ul>

                        <ul class="bullet-list">
                            <li>The comparable operating result increased by 41% to EUR 177 million (125), which represents
                                10.3% of net sales (8.6)</li>
                            <li>The operating result increased by 65% to EUR 192 million (117), which represents 11.2% of
                                net sales (8.0)</li>
                            <li>Earnings per share increased to 0.24 euro (0.14)</li>
                            <li>Cash flow from operating activities increased to EUR 296 million (213)</li>
                        </ul>
                    </div>
                </div>

                <section class="events-section">
                    <h1>Upcoming events</h1>

                    <div class="events-grid">
                        <div class="event-card">
                            <h2>November 18-20, 2024</h2>
                            <a href="#" class="event-title">Finnish Industrial Tour</a>
                        </div>

                        <div class="event-card">
                            <h2>November 27, 2024</h2>
                            <a href="#" class="event-title">Danske Bank Copenhagen Winter Seminar</a>
                        </div>

                        <div class="event-card">
                            <h2>November 28, 2024</h2>
                            <a href="#" class="event-title">Finnish Investor Seminar</a>
                        </div>
                    </div>

                    <a href="#" class="calendar-btn">IR Calendar</a>
                </section>
                <section class="quick-links">
                    <h1>Quick links</h1>
                    <div class="links-container">
                        <a href="#" class="link-button">Reports</a>
                        <a href="#" class="link-button">IR Blog</a>
                        <a href="#" class="link-button">Analysts</a>
                        <a href="#" class="link-button">Share monitor</a>
                    </div>
                </section>
                <section class="releases-section">
                    <h1>Latest releases</h1>
                    
                    <div class="releases-grid">
                        <div class="release-column">
                            <h2>Press releases</h2>
                            <div class="release-list">
                                <article class="release-item">
                                    <span class="release-date">27 Nov 2024 · Press release</span>
                                    <a href="#" class="release-title">Major Bangladeshi conglomerate selects Wärtsilä cargo handling system for new LPG Carrier vessel</a>
                                </article>
                
                                <article class="release-item">
                                    <span class="release-date">26 Nov 2024 · Press release</span>
                                    <a href="#" class="release-title">Wärtsilä joins new consortium to explore hydrogen-argon power cycle for net-zero power generation</a>
                                </article>
                
                                <article class="release-item">
                                    <span class="release-date">20 Nov 2024 · Press release</span>
                                    <a href="#" class="release-title">District heating: the key to affordable and flexible decarbonised energy, says new study</a>
                                </article>
                            </div>
                        </div>
                
                        <div class="release-column">
                            <h2>Stock exchange releases</h2>
                            <div class="release-list">
                                <article class="release-item">
                                    <span class="release-date">11 Nov 2024 · Stock exchange release</span>
                                    <a href="#" class="release-title">Wärtsilä President & CEO Håkan Agnevall on sick leave until 25 November</a>
                                </article>
                
                                <article class="release-item">
                                    <span class="release-date">29 Oct 2024 · Stock exchange release</span>
                                    <a href="#" class="release-title">Wärtsilä's Interim Report January–September 2024</a>
                                </article>
                
                                <article class="release-item">
                                    <span class="release-date">18 Oct 2024 · Flagging notifications</span>
                                    <a href="#" class="release-title">Notification in accordance with the Finnish Securities Market Act Chapter 9 § 5: Varma Mutual Pension Insurance Company's holding in Wärtsilä Corporation</a>
                                </article>
                            </div>
                        </div>
                    </div>
                
                    <div class="action-buttons">
                        <a href="#" class="btn-primary">View more</a>
                        <a href="#" class="btn-secondary">Subscribe</a>
                    </div>
                </section>
                <section class="blog-section">
                    <h1>Latest blog posts</h1>
                    <div class="blog-grid">
                        <article class="blog-card">
                            <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Marine market view" loading="lazy">
                            <div class="blog-content">
                                <span class="blog-date">12 Nov 2024 · Blog post</span>
                                <h2>What are the future growth opportunities of the marine market?</h2>
                                <p>The marine market in 2024 has...</p>
                            </div>
                        </article>
                
                        <article class="blog-card">
                            <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Interim Report visual" loading="lazy">
                            <div class="blog-content">
                                <span class="blog-date">29 Oct 2024 · Blog post</span>
                                <h2>Key messages and Q&A on Interim Report January–September 2024</h2>
                                <p>Wärtsilä published its Interim...</p>
                            </div>
                        </article>
                
                        <article class="blog-card">
                            <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Q3 Pre-silent call" loading="lazy">
                            <div class="blog-content">
                                <span class="blog-date">10 Oct 2024 · Blog post</span>
                                <h2>Summary of the Q3 2024 Pre-silent call</h2>
                                <p>A pre-silent call for the third quarter of 2024 was held on 3 October...</p>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="contacts-section">
                    <h1>Investor relations contacts</h1>
                    <p class="contact-info">Please contact Ms Janine Tourneur regarding investor meeting requests.</p>
                    
                    <div class="contacts-grid">
                        <div class="contact-card">
                            <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Ms Janine Tourneur" class="contact-image">
                            <h2>Ms Janine Tourneur</h2>
                            <p class="position">Executive Assistant</p>
                            <p class="tel">tel. +358 10 709 5645</p>
                            <a href="mailto:janine.tourneur@wartsila.com" class="email">e-mail: janine.tourneur@wartsila.com</a>
                            <a href="#" class="linkedin-link">LinkedIn</a>
                        </div>
                
                        <div class="contact-card">
                            <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Ms Hanna-Maria Heikkinen" class="contact-image">
                            <h2>Ms Hanna-Maria Heikkinen</h2>
                            <p class="position">Vice President, Investor Relations</p>
                            <p class="tel">tel. +358 10 709 1461</p>
                            <a href="mailto:hanna-maria.heikkinen@wartsila.com" class="email">email: hanna-maria.heikkinen@wartsila.com</a>
                            <a href="#" class="linkedin-link">LinkedIn</a>
                        </div>
                
                        <div class="contact-card">
                            <img src="{{ asset('asset/image/kapal report.jpg') }}" alt="Mr Samu Heikkilä" class="contact-image">
                            <h2>Mr Samu Heikkilä</h2>
                            <p class="position">Senior Manager, Investor Relations</p>
                            <p class="tel">tel. +358 10 709 1121</p>
                            <a href="mailto:samu.heikkila@wartsila.com" class="email">e-mail: samu.heikkila@wartsila.com</a>
                            <a href="#" class="linkedin-link">LinkedIn</a>
                        </div>
                    </div>
                </section>
                <section class="join-section">
                    <h1>Would you like to join our distribution list?</h1>
                    <a href="#" class="request-btn">Click here to send an e-mail request</a>
                </section>
                
                <section class="survey-section">
                    <h1>Inderes survey</h1>
                </section>
                

            </div>
    </section>


    @push('scripts')
        <script src="{{ asset('asset/js/investors.js') }}"></script>
    @endpush
