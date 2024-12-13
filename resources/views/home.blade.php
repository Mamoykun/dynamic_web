
@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')

@push('styles')
<link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/home.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('asset/js/home.js') }}"></script>
@endpush
  <!-- navbar end -->
  <!-- conten 1 home -->
  <section class="conten">
    <main class="hero" style="background-image: url('{{asset('asset/image/foto_home.jpg')}}')">
      <div class="hero-text">
        <h1>Wärtsilä</h1>
        <p>Wärtsilä is a global leader in innovative technologies and lifecycle solutions for the marine and energy
          markets. We emphasise innovation in sustainable technology and services to help our customers continuously
          improve their environmental and economic performance.</p>
        <a href="#" class="cta-button">Find out more</a>
      </div>
      <div class="stats">
        <div class="stat-item">
          <div class="stat-number">17 800</div>
          <div class="stat-description">employees in 79 countries</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">79 GW</div>
          <div class="stat-description">of installed engine power plant capacity</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">41 500</div>
          <div class="stat-description">vessels with Wärtsilä equipment</div>
        </div>
      </div>
    </main>
  </section>
  <!-- conten 1 home end-->

  <!-- foto 1 dan 2 -->
  <section class="services">
    <div class="service-card">
      <img src="{{asset('asset/image/pabrik.jpg')}}" alt="Energy Plant">
      <h2>Energy</h2>
      <p>Wärtsilä leads the transition towards a 100% renewable energy future. We provide flexible cutting-edge
        solutions and services to manage and optimise complex energy systems. Through power system modelling expertise
        we help our customers on their decarbonisation journeys by providing reliable, cost optimal and future-proof
        technologies.</p>
      <p>Our offering covers future-fuel enabled balancing engine power plants, hybrid solutions and energy storage &
        optimisation technology, including the GEMS Digital Energy Platform.</p>
    </div>

    <div class="service-card">
      <img src="{{asset('asset/image/kapal.jpg')}}" alt="Marine Ship">
      <h2>Marine</h2>
      <p>Build your success with Wärtsilä's broad portfolio of marine technology. Engines, propulsion systems, hybrid
        solutions, data and digital tools, liquid and gas handling on vessels, and integrated powertrain systems. These
        building blocks offer you efficiency, reliability, safety, and world-class environmental performance.</p>
      <p>The offering includes performance-based agreements and lifecycle solutions as well as spare parts services and
        an unrivalled global network of maritime expertise. With us, you can navigate decarbonisation with confidence.
      </p>
    </div>
  </section>
  <!-- foto 1 dan 2 end -->

  <!-- the interim report -->
 
  <!-- the interim report end -->
  <!-- slide home -->
  <section>
    <div class="slider">
      <div class="slide active">
        <img src="{{asset('asset/image/foto pekerja pabrik.jpg')}}" alt="Factory Workers" class="slide-image">
        <div class="content">
          <h1>Report: Sustainable fuels for shipping by 2050 – Succes</h1>
          <p>This research-backed report on future fuels in the marine industry reveals key actions to take today to
            achieve sustainable shipping by 2050.</p>
          <button class="download-btn">dowloand this report now!</button>
        </div>
      </div>
      <div class="slide">
        <img src="{{asset('asset/image/kapal report.jpg')}}" alt="Ship Report" class="slide-image">
        <div class="content">
          <h1>Celebrating 190 years of innovation</h1>
          <p>190 years ago, we were just a Finnish sawmill. Today, we are driving decarbonisation in the global marine
            and energy markets.</p>
          <button class="download-btn">Read me</button>
        </div>
      </div>
      <div class="slide">
        <img src="{{asset('asset/image/pabrik report.jpg')}}" alt="Factory Report" class="slide-image">
        <div class="content">
          <h1>Every second counts in the energy transition</h1>
          <button class="download-btn">Discover me</button>
        </div>
      </div>
      <div class="slide">
        <img src="{{asset('asset/image/foto pekerja pabrik.jpg')}}" alt="Factory Report" class="slide-image">
        <div class="content">
          <h1>Meet and greet with Wärtsilä 25 Ammonia</h1>
          <button class="download-btn">Access the Wärtsilä louge</button>
        </div>
      </div>


      <div class="dots">
        <button class="dot active"></button>
        <button class="dot"></button>
        <button class="dot"></button>
        <button class="dot"></button>

      </div>
    </div>
  </section>
  <!-- slide home end -->
  <!-- Latest insights -->
  <section class="insights">
    <div class="container-latest_Inseghts">
      <h1>Latest insights</h1>
    </div>

    <div class="tabs">
      <a href="#" class="tab active" data-tab="articles">Articles</a>
      <a href="#" class="tab" data-tab="case-studies">Case studies</a>
      <a href="#" class="tab" data-tab="webinars">Webinars</a>
      <a href="#" class="tab" data-tab="white-papers">White papers</a>
    </div>

    <!-- Articles -->
    <div class="articles-grid" id="articles-content">
      <article class="article-card">
        <a href="{{ route('News_Articles') }}" class="article-link" style="text-decoration: none;">
        <img src="{{asset('asset/image/kapal.jpg')}}" alt="Yellow LNG gas pipe" class="article-image">
        <div class="article-content">
          <div class="article-meta">
            <span>22 Nov 2024 · Article</span>
            <span>5 min read</span>
          </div>
          <h2 class="article-title">4 great reasons why bio-LNG is the bridge fuel of the future for vessels</h2>
          <p>Learn why bio-LNG is a good choice as a bridge fuel to move the maritime...</p>
        </div>
        <div class="article-tags">
          <span class="tag">Decarbonisation and future fuels</span>
          <span class="tag">Engine systems</span>
        </div>
        </a>
      </article>

      <article class="article-card">
        <a href="{{ route('News_Articles') }}" class="article-link" style="text-decoration: none;">
        <img src="{{asset('asset/image/pabrik.jpg')}}" alt="Worker maintaining propulsion equipment" class="article-image">
        <div class="article-content">
          <div class="article-meta">
            <span>21 Nov 2024 · Article</span>
            <span>7 min read</span>
          </div>
          <h2 class="article-title">How to keep your propulsion equipment in top shape – 6 expert tips</h2>
          <p>Learn why bio-LNG is a good choice as a bridge fuel to move the maritime...</p>
        </div>
        <div class="article-tags">
          <span class="tag">Decarbonisation and future fuels</span>
          <span class="tag">Engine systems</span>
        </div>
        </a>
      </article>

      <article class="article-card">
        <a href="{{ route('News_Articles') }}" class="article-link" style="text-decoration: none;">
        <img src="{{asset('asset/image/pabrik.jpg')}}" alt="Workers inspecting industrial equipment" class="article-image">
        <div class="article-content">
          <div class="article-meta">
            <span>11 Nov 2024 · Article</span>
            <span>5 min read</span>
          </div>
          <h2 class="article-title">Carbon capture: 17 facts that smart marine professionals should know</h2>
          <p>Learn why bio-LNG is a good choice as a bridge fuel to move the maritime...</p>
        </div>
        <div class="article-tags">
          <span class="tag">Decarbonisation and future fuels</span>
          <span class="tag">Engine systems</span>
        </div>
      </article>
      </a>
    </div>

    <!-- Case Studies -->
    <div class="articles-grid" id="case-studies-content">
      <!-- Hanya 3 artikel untuk Case Studies -->
      <article class="article-card">
        <a href="{{ route('case_study') }}" class="article-link" style="text-decoration: none;">
        <img src="{{asset('asset/image/pabrik.jpg')}}" alt="Marine vessel case study" class="article-image">
        <div class="article-content">
          <div class="article-meta">
            <span>Case study</span>
            <span>10 min read</span>
          </div>
          <h2 class="article-title">Implementing sustainable fuel solutions for ocean-going vessels</h2>
          <p>Learn why bio-LNG is a good choice as a bridge fuel to move the maritime...</p>
        </div>
        <div class="article-tags">
          <span class="tag">Decarbonisation and future fuels</span>
          <span class="tag">Engine systems</span>
        </div>
        </a>
      </article>

      <article class="article-card">
        <a href="{{ route('case_study') }}" class="article-link" style="text-decoration: none;">
        <img src="{{asset('asset/image/kapal report.jpg')}}" alt="Energy facility case study" class="article-image">
        <div class="article-content">
          <div class="article-meta">
            <span>Case study</span>
            <span>8 min read</span>
          </div>
          <h2 class="article-title">Energy transition success story: Reducing emissions by 40%</h2>
          <p>Learn why bio-LNG is a good choice as a bridge fuel to move the maritime...</p>
        </div>
        <div class="article-tags">
          <span class="tag">Decarbonisation and future fuels</span>
          <span class="tag">Engine systems</span>
        </div>
        </a>
      </article>

      <article class="article-card">
        <a href="{{ route('case_study') }}" class="article-link" style="text-decoration: none;">
        <img src="{{asset('asset/image/pabrik report.jpg')}}" alt="Industrial case study" class="article-image">
        <div class="article-content">
          <div class="article-meta">
            <span>Case study</span>
            <span>12 min read</span>
          </div>
          <h2 class="article-title">Modernizing industrial facilities with smart technology</h2>
          <p>Learn why bio-LNG is a good choice as a bridge fuel to move the maritime...</p>
        </div>
        <div class="article-tags">
          <span class="tag">Decarbonisation and future fuels</span>
          <span class="tag">Engine systems</span>
        </div>
        </a>
      </article>
    </div>

    <!-- Webinars -->
    <div class="articles-grid" id="webinars-content">
      <!-- Hanya 3 artikel untuk Webinars -->
      <article class="article-card">
        <img src="{{asset('asset/image/kapal.jpg')}}" alt="Webinar on marine technology" class="article-image">
        <div class="article-content">
          <div class="article-meta">
            <span>20 Nov 2024 · Webinar</span>
            <span>60 min</span>
          </div>
          <h2 class="article-title">Future of Marine Propulsion: Sustainable Solutions for 2025 and Beyond</h2>
          <p>Join our expert panel discussion on emerging propulsion technologies...</p>
        </div>
        <div class="article-tags">
          <span class="tag">Marine Technology</span>
          <span class="tag">Sustainability</span>
        </div>
      </article>

      <article class="article-card">
        <img src="{{asset('asset/image/pabrik.jpg')}}" alt="Energy transition webinar" class="article-image">
        <div class="article-content">
          <div class="article-meta">
            <span>15 Nov 2024 · Webinar</span>
            <span>45 min</span>
          </div>
          <h2 class="article-title">Navigating the Energy Transition: Practical Steps for Industry Leaders</h2>
          <p>Discover actionable strategies for implementing sustainable energy solutions...</p>
        </div>
        <div class="article-tags">
          <span class="tag">Energy Transition</span>
          <span class="tag">Industry Innovation</span>
        </div>
      </article>

      <article class="article-card">
        <img src="{{asset('asset/image/kapal report.jpg')}}" alt="Digital solutions webinar" class="article-image">
        <div class="article-content">
          <div class="article-meta">
            <span>10 Nov 2024 · Webinar</span>
            <span>90 min</span>
          </div>
          <h2 class="article-title">Digital Solutions for Modern Maritime Operations</h2>
          <p>Learn how digital technologies are transforming maritime operations...</p>
        </div>
        <div class="article-tags">
          <span class="tag">Digital Technology</span>
          <span class="tag">Maritime Operations</span>
        </div>
      </article>
    </div>

    <!-- White Papers -->
    <div class="articles-grid" id="white-papers-content">
      <!-- Hanya 3 artikel untuk White Papers -->
      <article class="article-card">
        <img src="{{asset('asset/image/kapal report.jpg')}}" alt="Decarbonisation white paper" class="article-image">
        <div class="article-content">
          <div class="article-meta">
            <span>White Paper</span>
            <span>25 pages</span>
          </div>
          <h2 class="article-title">Decarbonisation Roadmap 2030: A Comprehensive Guide for Marine Industry</h2>
          <p>An in-depth analysis of decarbonisation strategies and technologies...</p>
        </div>
        <div class="article-tags">
          <span class="tag">Decarbonisation</span>
          <span class="tag">Strategic Planning</span>
        </div>
      </article>

      <article class="article-card">
        <img src="{{asset('asset/image/foto pekerja pabrik.jpg')}}" alt="Future fuels white paper" class="article-image">
        <div class="article-content">
          <div class="article-meta">
            <span>White Paper</span>
            <span>30 pages</span>
          </div>
          <h2 class="article-title">The Future of Marine Fuels: Analysis and Recommendations</h2>
          <p>Comprehensive research on alternative fuels and their implementation...</p>
        </div>
        <div class="article-tags">
          <span class="tag">Alternative Fuels</span>
          <span class="tag">Marine Technology</span>
        </div>
      </article>

      <article class="article-card">
        <img src="{{asset('asset/image/foto_home.jpg')}}" alt="Energy efficiency white paper" class="article-image">
        <div class="article-content">
          <div class="article-meta">
            <span>White Paper</span>
            <span>20 pages</span>
          </div>
          <h2 class="article-title">Maximizing Energy Efficiency in Modern Marine Vessels</h2>
          <p>Technical analysis of energy optimization strategies for marine vessels...</p>
        </div>
        <div class="article-tags">
          <span class="tag">Energy Efficiency</span>
          <span class="tag">Marine Engineering</span>
        </div>
      </article>
    </div>

    <div class="more-papers-container">
      <a href="#" class="more-papers-link">More white papers</a>
    </div>
  </section>
  <!-- Latest insights end -->

  <!-- Latest press releases and news -->
  <div class="container">
    <!-- News Section -->
    <section class="news-section">
      <h1>Latest press releases and news</h1>

      <a href="#" class="news-item">
        <img src="{{asset('asset/image/kapal report.jpg')}}" alt="District heating" class="news-image">
        <div class="news-content">
          <div class="news-date">20 Nov 2024 · Press release</div>
          <h2 class="news-title">District heating: the key to affordable and flexible decarbonised energy, says new
            study</h2>
        </div>
      </a>

      <a href="#" class="news-item">
        <img src="{{asset('asset/image/foto_home.jpg')}}" alt="Wärtsilä engine" class="news-image">
        <div class="news-content">
          <div class="news-date">13 Nov 2024 · Trade press release</div>
          <h2 class="news-title">Wärtsilä engines to deliver reliable power for generating facility</h2>
        </div>
      </a>

      <a href="#" class="news-item">
        <img src="{{asset('asset/image/pabrik report.jpg')}}" alt="Wärtsilä logo" class="news-image">
        <div class="news-content">
          <div class="news-date">11 Nov 2024 · Stock exchange release</div>
          <h2 class="news-title">Wärtsilä President & CEO Håkan Agnevall on sick leave until 25 November</h2>
        </div>
      </a>
      <div class="more-papers-container">
        <a href="#" class="more-papers-link">More press releases and news</a>
      </div>
    </section>

    <!-- Events Section -->
    <section class="events-section">
      <h1>Upcoming events</h1>

      <a href="#" class="event-item">
        <img src="{{asset('asset/image/foto pekerja pabrik.jpg')}}" alt="Perú Energía Norte" class="event-logo">
        <div class="event-content">
          <div class="event-date">21 - 22 November 2024</div>
          <div class="event-location">Piura, Perú</div>
          <h2 class="event-title">Perú Energía Norte</h2>
          <span class="event-category">Energy</span>
        </div>
      </a>

      <a href="#" class="event-item">
        <img src="{{asset('asset/image/pabrik.jpg')}}" alt="Seatrade Cruise Global" class="event-logo">
        <div class="event-content">
          <div class="event-date">07 - 10 April 2025</div>
          <div class="event-location">Fort Lauderdale</div>
          <h2 class="event-title">Seatrade Cruise Global</h2>
          <span class="event-category">Marine</span>
        </div>
      </a>
      <div class="more-papers-container">
        <a href="#" class="more-papers-link">More events</a>
      </div>
    </section>
  </div>
  <!-- Latest press releases and news end -->
  <!-- Career at Wärtsilä -->
  <section class="career-section">
    <div class="career-image-container">
      <img src="{{asset('asset/image/foto pekerja pabrik.jpg')}}" alt="Career at Wärtsilä" class="career-image">
    </div>

    <div class="career-content">
      <h1 class="career-title">Career at Wärtsilä</h1>
      <p class="career-description">
        We at Wärtsilä are always on the look for bright minds to join us in our journey in shaping the decarbonisation
        of marine and energy. Since 1834, Wärtsilians have challenged the general status quo and decided to make a
        difference in our society – together.
      </p>
      <div class="more-papers-container">
        <a href="#" class="more-papers-link">Find out more</a>
      </div>
    </div>
  </section>
  <section class="career-section">
    <div class="career-content">
      <h1 class="career-title">Career at Wärtsilä</h1>
      <p class="career-description">
        We at Wärtsilä are always on the look for bright minds to join us in our journey in shaping the decarbonisation
        of marine and energy. Since 1834, Wärtsilians have challenged the general status quo and decided to make a
        difference in our society – together.
      </p>
      <div class="more-papers-container">
        <a href="#" class="more-papers-link">Find out more</a>
      </div>
    </div>
    <div class="career-image-container">
      <img src="{{asset('asset/image/kapal report.jpg')}}" alt="Career at Wärtsilä" class="career-image">
    </div>
  </section>
  <section class="career-section">
    <div class="career-image-container">
      <img src="{{asset('asset/image/pabrik.jpg')}}" alt="Career at Wärtsilä" class="career-image">
    </div>
    <div class="career-content">
      <h1 class="career-title">Career at Wärtsilä</h1>
      <p class="career-description">
        We at Wärtsilä are always on the look for bright minds to join us in our journey in shaping the decarbonisation
        of marine and energy. Since 1834, Wärtsilians have challenged the general status quo and decided to make a
        difference in our society – together.
      </p>
      <div class="more-papers-container">
        <a href="#" class="more-papers-link">Find out more</a>
      </div>
    </div>
  </section>
  <section class="career-section">
    <div class="career-content">
      <h1 class="career-title">Career at Wärtsilä</h1>
      <p class="career-description">
        We at Wärtsilä are always on the look for bright minds to join us in our journey in shaping the decarbonisation
        of marine and energy. Since 1834, Wärtsilians have challenged the general status quo and decided to make a
        difference in our society – together.
      </p>
      <div class="more-papers-container">
        <a href="#" class="more-papers-link">Find out more</a>
      </div>
    </div>
    <div class="video-container">
      <video id="myVideo" class="career-video">
          <source src="{{asset('asset/video/The Vamps - Somebody To You ft. Demi Lovato.mp4')}}" type="video/mp4">
          Your browser does not support the video tag.
      </video>
      
      <div class="video-controls">
          <div class="controls-left">
              <button class="control-btn" id="playPauseBtn">
                  <span class="control-icon">▶️</span>
              </button>
              
              <span class="time-display">0:00 / 0:00</span>
              
              <div class="progress-container">
                  <div class="progress-bar">
                      <div class="progress-hover"></div>
                      <div class="progress-filled"></div>
                  </div>
              </div>
          </div>
          
          <div class="controls-right">
              <div class="volume-container">
                  <button class="control-btn" id="volumeBtn">
                      <span class="control-icon">🔊</span>
                  </button>
                  <div class="volume-slider">
                      <input type="range" id="volumeRange" min="0" max="100" value="100">
                  </div>
              </div>
              
              <button class="control-btn" id="settingsBtn">
                  <span class="control-icon">⚙️</span>
              </button>
              
              <button class="control-btn" id="fullscreenBtn">
                  <span class="control-icon">⛶</span>
              </button>
          </div>
      </div>
      
      <div class="settings-menu" id="settingsMenu">
          <div class="settings-section">
              <div class="settings-header">
                  <span>Playback Speed</span>
                  <span class="current-speed">1x</span>
              </div>
              <div class="speed-options">
                  <div class="speed-option" data-speed="0.25">0.25x</div>
                  <div class="speed-option" data-speed="0.5">0.5x</div>
                  <div class="speed-option" data-speed="0.75">0.75x</div>
                  <div class="speed-option active" data-speed="1">1x</div>
                  <div class="speed-option" data-speed="1.25">1.25x</div>
                  <div class="speed-option" data-speed="1.5">1.5x</div>
                  <div class="speed-option" data-speed="2">2x</div>
              </div>
          </div>
          
          <div class="settings-section">
              <div class="settings-header">
                  <span>Quality</span>
                  <span class="current-quality">Auto</span>
              </div>
              <div class="quality-options">
                  <div class="quality-option active" data-quality="auto">Auto</div>
                  <div class="quality-option" data-quality="1080p">1080p</div>
                  <div class="quality-option" data-quality="720p">720p</div>
                  <div class="quality-option" data-quality="480p">480p</div>
                  <div class="quality-option" data-quality="360p">360p</div>
              </div>
          </div>
      </div>
  </div>
  </section>
  <!-- career at watsila end -->
  <!-- 4 konten -->
  <section>
    <div class="container">
      <div class="card">
        <img src="{{asset('asset/image/foto_home.jpg')}}" alt="Annual Report 2023">
        <div class="card-content">
          <h2 class="card-title">Annual Report 2023</h2>
          <p class="card-description">Wärtsilä Corporation's annual report for the year 2023.</p>
        </div>
      </div>

      <div class="card">
        <img src="{{asset('asset/image/kapal report.jpg')}}" alt="Encyclopedia">
        <div class="card-content">
          <h2 class="card-title">Encyclopedia of Marine and Energy Technology</h2>
          <p class="card-description">Contains close to 6000 terms related to the marine and energy industries.</p>
        </div>
      </div>

      <div class="card">
        <img src="{{asset('asset/image/pabrik.jpg')}}" alt="Every Second Counts">
        <div class="card-content">
          <h2 class="card-title">Every second counts</h2>
          <p class="card-description">Discover what optimised, flexible systems look like</p>
        </div>
      </div>

      <div class="card">
        <img src="{{asset('asset/image/kapal.jpg')}}" alt="Global footprint">
        <div class="card-content">
          <h2 class="card-title">Global footprint</h2>
          <p class="card-description">Interactive visualization of Wärtsilä's global footprint.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- 4 konten end -->
