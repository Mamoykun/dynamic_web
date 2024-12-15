@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('asset/css/carers.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @endpush

    <section class="first-hero">
        <nav class="breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span>></span>
            <a href="#">careers</a>
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
                <div class="wartsila-nav-item has-submenu">
                    Why Wärtsilä?
                    <div class="wartsila-submenu">
                        <div class="wartsila-submenu-item">Our Values</div>
                        <div class="wartsila-submenu-item">Employee benefits</div>
                    </div>
                </div>
                <div class="wartsila-nav-item has-submenu">
                    Career areas
                    <div class="wartsila-submenu">
                        <div class="wartsila-nav-item has-submenu">
                            Students & Graduates
                            <div class="wartsila-submenu">
                                <div class="wartsila-submenu-item">Parts Coordination Management Programme</div>
                                <div class="wartsila-submenu-item">EnergyTalent Programme</div>
                                <div class="wartsila-submenu-item">Summer Power trainee program</div>
                            </div>
                        </div>
                        <div class="wartsila-submenu-item">Field service & workshops</div>
                    </div>
                </div>
                <div class="wartsila-nav-item has-submenu">
                    Join us
                    <div class="wartsila-submenu">
                        <div class="wartsila-submenu-item">Recruitment process</div>
                        <div class="wartsila-submenu-item">FAQ & Contact</div>
                    </div>
                </div>
            </div>

            <div class="wartsila-content">
                <section class="wartsila-hero">
                    <div class="hero-container">
                        <h1 class="hero-title">Fuel your power with us, one of the world's most influential companies</h1>

                        <p class="hero-intro">
                            We are Wärtsilä – one global team of purpose-driven experts committed to decarbonising the
                            marine and energy industries. Operating under our leadership behaviours and core values of
                            customer success, passion, and performance, we are united in shaping a sustainable future for
                            societies.
                        </p>

                        <p class="hero-story">
                            Our story begun already in 1834, and it is one of transformation. This 190-year journey has been
                            enabled by our innovations, our extraordinary ability to adapt to change, and most of all by our
                            people. We are always on the look for bright minds to join our journey of decarbonising the
                            marine and energy industries.
                        </p>

                        <div class="career-action">
                            <p class="career-text">
                                Want to unlock your personal growth opportunities and to make a lasting impact on society?
                                Review our
                                <a href="#" class="career-link">open positions</a> or leave an open application by
                                creating a
                                <a href="#" class="career-link">candidate profile</a>.
                            </p>
                        </div>

                        <div class="commitment">
                            <p class="commitment-text">
                                We are committed in complying with responsible business conduct, fair employment practices,
                                anti-corruption policy and other commitments
                                <a href="#" class="career-link">that you can find here</a>.
                            </p>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="wr-stats-container">
                        <h1 class="wr-stats-title">Our global reach</h1>

                        <div class="wr-stats-description">
                            We are a team of over 17,800 Wärtsilians in 79 countries across all seven continents. While
                            representing 130 different nationalities and varying fields of expertise and job roles, we are
                            united by the impact we make in enabling sustainable societies through innovation in technology
                            and services.
                        </div>

                        <div class="wr-stats-grid">
                            <div class="wr-stats-item">
                                <div class="wr-stats-number">17,800</div>
                                <div class="wr-stats-label">employees</div>
                            </div>
                            <div class="wr-stats-item">
                                <div class="wr-stats-number">280+</div>
                                <div class="wr-stats-label">locations</div>
                            </div>
                            <div class="wr-stats-item">
                                <div class="wr-stats-number">79</div>
                                <div class="wr-stats-label">countries</div>
                            </div>
                        </div>

                        <div class="wr-stats-grid">
                            <div class="wr-stats-item">
                                <div class="wr-stats-number">130</div>
                                <div class="wr-stats-label">nationalities</div>
                            </div>
                            <div class="wr-stats-item">
                                <div class="wr-stats-number">52%</div>
                                <div class="wr-stats-label">of our sales are services</div>
                            </div>
                            <div class="wr-stats-item">
                                <div class="wr-stats-number">One</div>
                                <div class="wr-stats-label">global team</div>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="wr-locations-container">
                        <h1 class="wr-locations-title">Key locations</h1>

                        <p class="wr-locations-description">
                            Our global team is present across all continents, with our headquarters in Helsinki, Finland.
                        </p>

                        <a href="#" class="wr-locations-link">Find a complete list of locations here.</a>

                        <div class="wr-locations-map-container">
                            <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Wartsila Global Locations Map"
                                class="wr-locations-map">
                        </div>
                    </div>
                </section>

                <section>
                    <div class="careers-container">
                        <h1 class="careers-header">Sense of belonging at Wärtsilä</h1>

                        <div class="careers-grid">
                            <div class="careers-content">
                                <p class="careers-intro">
                                    On our decarbonisation journey, understanding expectations and finding meaning in the
                                    work is essential. For this, we foster an open and transparent communication culture.
                                </p>

                                <div class="careers-stats">
                                    <p>Based on our MyVoice employee engagement survey, Wärtsilä's employee engagement index
                                        score is at 82%. This figure represents the percentage of employees who report being
                                        highly engaged with the company.</p>

                                    <p>Wärtsilians consistently rate our relationships with managers and peers as
                                        exceptional. 88% of our respondents feel that they are treated with respect at work.
                                        Furthermore, 89% of our people feel that there is zero tolerance for any kind of
                                        discrimination and harassment at Wärtsilä.</p>
                                </div>
                            </div>

                            <div class="careers-sidebar">
                                <div class="careers-divider"></div>

                                <div class="careers-percentage">82%</div>
                                <div class="careers-label">employee engagement rate</div>

                                <div class="careers-survey-info">
                                    <p>MyVoice is our bi-annual global employee engagement survey, conducted last time in
                                        2024. It has five KPIs: Engagement, Overall experience, Inclusion, Intent to stay,
                                        and Wellbeing.</p>
                                    <p>All MyVoice 2024 questions have a global external benchmark. In addition, we have
                                        more frequent employee listening pulses for global functions and businesses. Each
                                        time a survey is conducted, the findings are carefully analysed and actions are
                                        planned based on the results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section>
                    <div class="purpose-container">
                        <h1 class="purpose-title">Our purpose and values</h1>

                        <div class="purpose-content">
                            <p class="purpose-text">
                                Wärtsilä's purpose and values lay the foundation for <a href="#"
                                    class="purpose-link">our strategy</a>. Our purpose – <span
                                    class="purpose-emphasis">Enabling sustainable societies through innovation in
                                    technology and services</span> – defines why we exist as a company and guides the way
                                forward: how everyone at Wärtsilä can make a difference for the world.
                            </p>

                            <p class="purpose-text">
                                Wärtsilä values unite everyone in the company and bring the strategy to life by guiding our
                                priorities, decision-making, and behaviour when working together in everyday situations.
                            </p>

                            <p class="purpose-question">
                                How do our purpose and values resonate with you on a personal level? Embracing them could
                                make you an outstanding fit for our dynamic and dedicated team, where we strive to make a
                                lasting impact in the sustainability of our society.
                            </p>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="values-container">
                        <div class="values-grid">
                            <div class="value-card">
                                <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Worker in safety gear"
                                    class="value-image">
                                <p class="value-title">Customer-centric</p>
                                <ul class="value-list">
                                    <li class="value-item">Results-driven</li>
                                    <li class="value-item">Good listener and communicator</li>
                                    <li class="value-item">Reliable and efficient</li>
                                </ul>
                            </div>

                            <div class="value-card">
                                <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}"
                                    alt="Orange flag in sunlight" class="value-image">
                                <p class="value-title">Passionate</p>
                                <ul class="value-list">
                                    <li class="value-item">Proactive and innovative</li>
                                    <li class="value-item">Collaborative and supportive</li>
                                    <li class="value-item">Energetic and sustainable</li>
                                </ul>
                            </div>

                            <div class="value-card">
                                <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Person jumping with skyline"
                                    class="value-image">
                                <p class="value-title">Performance-driven</p>
                                <ul class="value-list">
                                    <li class="value-item">Safety-focused</li>
                                    <li class="value-item">Responsible and dedicated</li>
                                    <li class="value-item">Continuous learner and quality-conscious</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>


                <section>
                    <div class="career-container">
                        <h1 class="career-title">Career mobility in Wärtsilä</h1>

                        <p class="career-intro">
                            Through internal career mobility options, we enable our people to acquire new knowledge, build
                            networks, and enhance overall performance and collaboration. Wärtsilians may:
                        </p>

                        <ul class="career-options">
                            <li class="career-option-item">
                                Apply for one of Wärtsilä's open positions through our internal recruitment platform.
                            </li>
                            <li class="career-option-item">
                                Apply for a specific job rotation role that is a short and fixed term vacancy in another
                                role and team, after which you return to report to your home base.
                            </li>
                        </ul>

                        <p class="career-additional">
                            In addition, we offer agile ways to support the professional growth of our people and cross-team
                            networking, learning, and collaboration; in job swap, two employees swap jobs for a clearly
                            defined period after which both employees return to their original positions. Whereas, job
                            shadowing is on-the-job learning that allows you to follow and closely observe another employee
                            performing the role. The length, content and aims of shadowing are customised by the
                            participants based on their needs.
                        </p>
                    </div>
                </section>


                <section>
                    <div class="meet-container">
                        <h1 class="meet-title">Meet your future colleagues</h1>

                        <div class="meet-content">
                            <p class="meet-text">
                                As we celebrate Wärtsilä's 190th anniversary in 2024, we are honouring some of our
                                pioneering colleagues by sharing their career stories. Find out, through their eyes, what is
                                it like to work at Wärtsilä:
                                <a href="https://www.wartsila.com/about/190"
                                    class="meet-link">https://www.wartsila.com/about/190</a>.
                            </p>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="story-container1">
                        <div class="story-card1">
                            <div class="story-image-container1">
                                <img src="{{ asset('asset/image/kapal.jpg') }}"
                                    alt="Paulo Castro smiling in business attire" class="story-image1">
                            </div>

                            <div class="story-content1">
                                <h1 class="story-title1">Paulo's career story: "In two years, I had the experience of a
                                    lifetime."</h1>

                                <p class="story-subtitle1">Paulo Castro's journey from Trainee to Business Development
                                    Manager showcases his passion for the energy industry and continuous growth.</p>

                                <p class="story-text1">Paulo's career took off when he seized the chance to join a project
                                    team working on a power plant project in Brazil. This two-year experience gave him an
                                    understanding of the entire power plant lifecycle, from sales to engineering,
                                    construction, and use.</p>

                                <p class="story-text1">Over the last 14 years, he has immersed himself in various roles
                                    across Wärtsilä, including project management and lifecycle services both in the energy
                                    and marine industries. In the meantime, he has also built a network of trusted
                                    colleagues. Now he sees himself as an energy professional, ready to dive into new
                                    opportunities and sell many more power plants.</p>

                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="video-container-wrapper">
                        <!-- First Video -->
                        <div class="video-section">
                            <div class="video-container">
                                <video class="video-player">
                                    <source
                                        src="{{ asset('asset/video/The Vamps - Somebody To You ft. Demi Lovato.mp4') }}"
                                        type="video/mp4">
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

                        <!-- Second Video -->
                        <div class="video-section">
                            <div class="video-container">
                                <video class="video-player">
                                    <source
                                        src="{{ asset('asset/video/The Vamps - Somebody To You ft. Demi Lovato.mp4') }}"
                                        type="video/mp4">
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
                    </div>

                </section>

                <section class="stories-section">
                    <h1 class="stories-heading">More people stories</h1>
                    
                    <div class="stories-grid">
                        <!-- First Story -->
                        <a href="#" class="story-card">
                            <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Person with dog near boats" class="story-image">
                            <div class="story-meta">
                                <span class="story-date">4 Dec 2024</span>
                                <span class="story-type">Article</span>
                                <span class="story-read-time">2 min read</span>
                            </div>
                            <p class="story-title">From scuba diving and snowboarding to business law – stepping out of the comfort zone</p>
                        </a>
            
                        <!-- Second Story -->
                        <a href="#" class="story-card">
                            <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Portrait of Robert Selänniemi" class="story-image">
                            <div class="story-meta">
                                <span class="story-date">26 Nov 2024</span>
                                <span class="story-type">Article</span>
                                <span class="story-read-time">2 min read</span>
                            </div>
                            <p class="story-title">30 years, countless impacts: Transforming work into a legacy</p>
                            <p class="story-subtitle">Robert Selänniemi's journey with</p>
                        </a>
            
                        <!-- Third Story -->
                        <a href="#" class="story-card">
                            <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Person in orange jacket" class="story-image">
                            <div class="story-meta">
                                <span class="story-date">12 Nov 2024</span>
                                <span class="story-type">Article</span>
                                <span class="story-read-time">2 min read</span>
                            </div>
                            <p class="story-title">Additive manufacturing brings new levels of flexibility and innovation</p>
                            <p class="story-subtitle">One well-executed experiment</p>
                        </a>
                    </div>
                </section>



                @push('scripts')
                    <script src="{{ asset('asset/js/careers.js') }}"></script>
                @endpush
            @endsection
