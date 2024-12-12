@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('asset/css/exhibitions.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @endpush

    <section class="first-hero">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Home</a> &gt; 
            <a href="#">Insight</a> &gt; 
            Exhibitions
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
   
    <section class="title-section">
    <h1 class="main-title">Decarbonisation and net zero for the shipping industry</h1>
    
    <section>
        <h2 class="section-title">What is decarbonisation</h2>
        <p class="text-content">
            Emission reduction, and especially greenhouse gas (GHG) reduction, is the challenge of the century. Decarbonisation usually refers to the overall process of reducing "carbon intensity." This means that the amount of greenhouse gas emissions is decreased. The ways to achieve this include increasing energy efficiency, replacing fossil fuels with low carbon alternatives or carbon emission abatement.
        </p>
        <p class="text-content">
            Decarbonisation has become a global imperative and a priority for governments, companies, and societies because it plays a key role in limiting global warming.
        </p>
        <p class="text-content">
            The marine sector must contribute significantly to fighting climate change, and decarbonisation is the way.
        </p>
    </section>

    <section>
        <h2 class="section-title">What is decarbonisation in shipping?</h2>
        <p class="text-content">
            Decarbonisation in shipping means that the shipping industry needs to transform into a form of green transport. The International Maritime Organization (IMO) has put regulations in place to drive this transformation.
        </p>
        <p class="text-content">
            The IMO's Greenhouse Gas Strategy was revised in 2023, and there are three interlinked ambitions:
        </p>
        <ul class="goals-list">
            <li>Reducing GHG emissions by at least 20% by 2030 compared to 2008.</li>
            <li>Reducing GHG emissions by at least 70% by 2040 compared to 2008.</li>
            <li>Achieving net zero GHG emissions from international shipping by 2050.</li>
        </ul>

        <div class="timeline">
            <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Timeline showing IMO targets">
        </div>
    </section>

    <section>
        <h2 class="section-title">Sustainable fuels for shipping by 2050 – the 3 key elements of success</h2>
        <div class="download-section">
            <div class="download-content">
                <p class="text-content">How to decrease the environmental footprint of shipping? What are the key actions that will keep the shipping industry on course to achieve net-zero by 2050?</p>
                <p class="text-content">Download this research-backed report on future fuels in the marine industry to find out:</p>
                <a href="#" class="download-button">Download now</a>
            </div>
            <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Report Cover" class="report-cover">
        </div>
    </section>
</section>

<section class="hero">
    <div class="container">
        <h2>Take a look at decarbonisation solutions</h2>
        <p class="subtitle">The best ways to reduce emissions in shipping are different for existing fleets and for newbuild vessels.</p>
        
        <div class="grid">
            <div class="card">
                <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Existing fleet ship at sunset">
                <div class="card-content">
                    <h2>Decarbonisation solutions for your existing fleet</h2>
                    <p>How to reduce emissions from your existing vessels now</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Future vessel concept with innovative design">
                <div class="card-content">
                    <h2>How to future-proof your newbuild vessels</h2>
                    <p>Which marine decarbonisation strategy is your smart choice?</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Standards -->
<section class="standards">
    <div class="container">
        <h2>Sustainable shipping and EEDI, EEXI, and CII</h2>
        <p>Newbuild ships must meet the requirements set in the Energy Efficiency Design Index (EEDI). The result is that new ships will be increasingly energy efficient.</p>
        <p>Existing ships must also meet certain requirements, set by the Energy Efficiency existing ship Index (EEXI).</p>
        <p>Complying with EEXI: these are the top 4 ways to comply with EEXI without slowing down your vessels.</p>
    </div>
</section>

<!-- Section 3: Facts -->
<section class="facts">
    <div class="container">
        <h2>4 shocking facts about CII ratings in shipping</h2>
        <ul class="facts-list">
            <li>Bulkers, oil tankers and container ships form the majority of vessels in the global fleet. More than one third of them are not compliant with the IMO targets.</li>
            <li>Almost all vessels aged 10-15 years fall into CII rating categories C, D, or E.</li>
            <li>In 2024, only one year after the IMO regulations come into force, more than half of the worldwide fleet will be non-compliant with CII.</li>
            <li>If no action is taken, 81% of bulkers, 57% of oil tankers, and 80% of container ships will be in category E in 2030.</li>
        </ul>
    </div>
</section>

<!-- Section 4: CII Status -->
<section class="cii-status-section">
    <div class="container">
        <h2>Everything you need to know about improving your CII rating</h2>
        <p>Vessel fleets must now comply with the new CII ratings. Thousands of ships need to start operating more efficiently – or there is a clear risk that they will become stranded assets. Knowing when and how to adapt will be critical for maximising business and ensuring that the vessels can stay in circulation.</p>
        
        <div class="cii-status-container">
            <div class="cii-guide-image">
                <a href=""><img src="{{ asset('asset/image/kapal.jpg') }}" alt="Guide: Discover the real CII status of your vessels"></a>
            </div>
            <div class="cii-content">
                <h2>How to discover the real CII status of your vessels</h2>
                <p>Knowing when and how to adapt is key to maximising the profitable service life of your vessels. But before you can choose from the range of solutions, you need to have an accurate idea of the problem.</p>
                <p>So how do you discover the real CII status of your vessel?</p>
                <a href="#" class="button download">Download this paper now to find out!</a>
            </div>
        </div>
    </div>
</section>

<!-- Section 5: Strategies -->
<section class="strategies">
    <div class="container">
        <h2>Marine decarbonising strategies for existing fleets</h2>
        <p>If you own or operate ships that must reduce emissions and improve fuel consumption, you have several options, including</p>
        <ul>
            <li>limiting engine loads (either by power limitation or by reducing speed)</li>
            <li>retrofitting energy-saving technologies</li>
            <li>switching to low-carbon fuels</li>
            <li>initiating engine upgrades</li>
            <li>adopting electric solutions (hybrid, shore power, shaft generators).</li>
        </ul>
        <p>Learn more! Take a closer look at <a href="#">decarbonisation solutions for existing fleets</a>.</p>
        <p>When you want even more insight, <a href="#">download a brilliant eBook to discover 50 great ways for the maritime industry to reduce its greenhouse gas emissions</a>.</p>
        <p>Another option to consider is a <a href="#">service agreement</a> with an expert partner such as Wärtsilä. Proper maintenance can help you decarbonise, cut emissions, and stay compliant. In practice, you would get a guarantee that your vessel would achieve a suitable CII rating in the agreed schedule.</p>
    </div>
</section>

<section class="maritime-section">
    <h1 class="maritime-title">More on energy saving technologies</h1>
    <p class="maritime-text">Download this helpful white paper: 
        <a href="#" class="maritime-link">"CII rating: 11 smart ways to boost it while staying competitive"</a>.
    </p>
    <p class="maritime-text">You may also be interested in this article: 
        <a href="#" class="maritime-link">"How energy saving technologies can help with CII compliance"</a>.
    </p>
    <p class="maritime-text">This article concentrates on one energy saving technology and discusses 
        <a href="#" class="maritime-link">if rotor sails are the answer to CII and EEXI compliance for ships</a>.
    </p>
    <p class="maritime-text">If you prefer to watch a webinar, choose this one: 
        <a href="#" class="maritime-link">"How to improve your CII rating with energy saving technologies"</a>.
    </p>
</section>

<section class="maritime-section">
    <h1 class="maritime-title">More on EEXI compliance</h1>
    <p class="maritime-text">How to achieve EEXI compliance? 
        <a href="#" class="maritime-link">Could power limitation solutions from Wärtsilä be the answer?</a> 
        Watch this webinar to find out!
    </p>

    <h2 class="maritime-subtitle">Decarbonisation for newbuild vessels</h2>
    <p class="maritime-text">If you own or operate ships that must reduce emissions and improve fuel consumption, you have several options, including</p>
    <ul class="maritime-list">
        <li>choosing modern, multi-fuel engines, complete with fuel handling systems</li>
        <li>adopting energy-saving propulsion systems</li>
        <li>implementing energy-saving technologies</li>
        <li>choosing electric solutions such as hybrid, shore power, shaft generators.</li>
    </ul>
    <p class="maritime-text">Learn more! Take a closer look at 
        <a href="#" class="maritime-link">decarbonisation solutions for newbuild vessels</a>.
    </p>
    <p class="maritime-text">When you want even more insight, 
        <a href="#" class="maritime-link">download a brilliant eBook to discover 50 great ways for the maritime industry to reduce its greenhouse gas emissions</a>.
    </p>
</section>

<section class="maritime-section">
    <h1 class="maritime-title">More than technology</h1>
    <p class="maritime-text">Decarbonisation will take more than technology. It is important that every actor in the shipping industry connects, collaborates, and shares their knowledge.</p>

    <div class="maritime-grid">
        <div class="maritime-card">
            <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Two professionals looking at laptop">
            <h3 class="maritime-card-title">Powerful partnerships</h3>
            <p class="maritime-card-text">An ecosystem approach that helps achieve decarbonisation of shipping and marine industry</p>
        </div>
        <div class="maritime-card">
            <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Modern office building at night">
            <h3 class="maritime-card-title">Frameworks that drive decarbonisation</h3>
            <p class="maritime-card-text">Financial institutions and major cargo companies have set their requirements</p>
        </div>
    </div>
</section>


<section class="maritime2-section">
    <h1 class="maritime2-title">Future fuels in shipping</h1>
    <p class="maritime2-text">
        To power shipping in the future, Wärtsilä is investigating a wide range of fuels and developing engines that produce less and less greenhouse gas emissions. In addition, <a href="#" class="maritime2-link">there are three keys to success when the shipping industry seeks to achieve net-zero by 2050</a>. Six fuel types are particularly interesting for the shipping industry:
    </p>
    <ul class="maritime2-list">
        <li>ammonia</li>
        <li>bio and synthetic liquefied natural gas (LNG) and natural gas</li>
        <li>biofuels</li>
        <li>ethanol</li>
        <li>hydrogen</li>
        <li>methanol.</li>
    </ul>
    <p class="maritime2-text">
        You will find alternative fuels knowledge in one place: <a href="#" class="maritime2-link">"Future fuels A to Z – 19 best picks on future marine fuel technology"</a>.
    </p>
    <div class="maritime2-buttons">
        <a href="#" class="maritime2-button maritime2-button-dark">Learn more about future fuels</a>
        <a href="#" class="maritime2-button maritime2-button-light">You may also want to take a look at fuel conversions</a>
    </div>
</section>

<section class="maritime2-section">
    <h1 class="maritime2-title">Webinars related to decarbonisation</h1>
    <p class="maritime2-text">
        Explore what you need to know about decarbonisation in shipping – learn from experts from the marine industry and associations. Register now! Or catch up on recent webinars.
    </p>
    <div class="maritime2-grid">
        <article class="maritime2-card">
            <img src="{{ asset('asset/image/foto_home.jpg') }}" alt="Methanol engine">
            <div class="maritime2-card-meta">17 Jan 2024 · Webinar</div>
            <h3 class="maritime2-card-title">New methanol engines: how will they power the future?</h3>
            <p class="maritime2-card-description">Watch this interesting webinar and you will learn how the new methanol engines will power the...</p>
            <div class="maritime2-tags">
                <span class="maritime2-tag">Decarbonisation and future fuels</span>
                <span class="maritime2-tag">Exhaust treatment</span>
            </div>
        </article>

        <article class="maritime2-card">
            <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Ships in harbor">
            <div class="maritime2-card-meta">14 Nov 2023 · Webinar</div>
            <h3 class="maritime2-card-title">Tech Talk - What does the future hold for small merchant vessels?</h3>
            <p class="maritime2-card-description">Follow a fascinating panel debate! You will get insight that helps you develop...</p>
            <div class="maritime2-tags">
                <span class="maritime2-tag">Decarbonisation and future fuels</span>
                <span class="maritime2-tag">Exhaust treatment</span>
            </div>
        </article>

        <article class="maritime2-card">
            <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Single ship in ocean">
            <div class="maritime2-card-meta">25 Oct 2023 · Webinar</div>
            <h3 class="maritime2-card-title">How to reduce methane slip – winning tactics for your maritime business</h3>
            <p class="maritime2-card-description">Watch this interesting webinar and you will lear...</p>
            <div class="maritime2-tags">
                <span class="maritime2-tag">Decarbonisation and future fuels</span>
                <span class="maritime2-tag">Exhaust treatment</span>
            </div>
        </article>
    </div>
</section>

<section class="maritime2-section">
    <h1 class="maritime2-title">Insights on maritime decarbonisation</h1>
    <p class="maritime2-text">
        Discover these insightful articles – they will build your understanding of decarbonisation-related topics!
    </p>
    <div class="maritime2-grid">
        <article class="maritime2-card">
            <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Yellow LNG tank">
            <div class="maritime2-card-meta">22 Nov 2024 · Article · 5 min read</div>
            <h3 class="maritime2-card-title">4 great reasons why bio-LNG is the bridge fuel of the future for vessels</h3>
            <p class="maritime2-card-description">Learn why bio-LNG is a good choice as a bridge fuel to move the maritime...</p>
            <div class="maritime2-tags">
                <span class="maritime2-tag">Decarbonisation and future fuels</span>
                <span class="maritime2-tag">Engine systems</span>
            </div>
        </article>

        <article class="maritime2-card">
            <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Industrial workers">
            <div class="maritime2-card-meta">11 Nov 2024 · Article · 5 min read</div>
            <h3 class="maritime2-card-title">Carbon capture: 17 facts that smart marine professionals should know</h3>
            <p class="maritime2-card-description">Carbon capture holds the potential to reduce...</p>
            <div class="maritime2-tags">
                <span class="maritime2-tag">Decarbonisation and future fuels</span>
                <span class="maritime2-tag">Exhaust treatment</span>
            </div>
        </article>

        <article class="maritime2-card">
            <img src="{{ asset('asset/image/kapal report.jpg') }}" alt="Worker with safety gear">
            <div class="maritime2-card-meta">24 Sep 2024 · Article · 7 min read</div>
            <h3 class="maritime2-card-title">Ship spares: Five top tips to help keep your operations compliant</h3>
            <p class="maritime2-card-description">If you own or operate a ship, these 5 top tips will help you comply with...</p>
            <div class="maritime2-tags">
                <span class="maritime2-tag">Decarbonisation and future fuels</span>
                <span class="maritime2-tag">Engine systems</span>
            </div>
        </article>
    </div>
    <div class="maritime2-read-more">
        <a href="#" class="maritime2-link">Read more articles</a>
    </div>
</section>

<section class="wartsila-section">
    <h1 class="wartsila-title">11 powerful reasons to choose Wärtsilä as your partner</h1>
    <p class="wartsila-subtitle">Choose Wärtsilä as your partner for your decarbonisation journey. These are the 11 most powerful reasons – and there are many more:</p>
    
    <ol class="wartsila-list">
        <li>Wärtsilä can tell you how IMO's new GHG regulations and timeline will affect your current and new fleet</li>
        <li>You can get a clear insight on carbon intensity and its link with Energy Efficiency Design Index (EEDI)</li>
        <li>You can discover ways to decarbonise and operate so that the carbon taxes are minimised</li>
        <li>You can discover the role of emissions trading and other market-based measures in reducing shipping's carbon footprint</li>
        <li>You will have access to the latest energy-saving technologies and smart energy solutions that combine batteries and conventional marine engines. This can significantly improve the efficiency of your fleet while saving you money</li>
        <li>You will learn about the utilization of energy efficiency improvements to realize emission reduction goals</li>
        <li>You can adopt the propulsion efficiency package: integration and optimization of Energy Saving Technologies – and achieve better efficiency for your fleet – through a single partner, Wärtsilä</li>
        <li>You will benefit from synergies in the delivery process (design, project management, commissioning, warranty)</li>
        <li>Machinery room and propulsion sizing and machinery room layout integration will bring you new efficiencies</li>
        <li>Wärtsilä's global service network means that you will find lifecycle support near your locations</li>
        <li>You can take advantage of Wärtsilä's digital capabilities and digital solutions for voyage optimisation.</li>
    </ol>
</section>

<section class="wartsila-section wartsila-connect">
    <p class="wartsila-connect-text">Take your easiest step on your decarbonisation journey - get in touch and let's discuss your needs and options!</p>
    
    <div class="wartsila-footer">
        <div class="wartsila-brand">Wärtsilä Marine. Let's connect.</div>
        <a href="#" class="wartsila-contact">Contact us</a>
        <div class="wartsila-social">
            <img src="{{ asset('asset/image/link.png') }}" alt="LinkedIn">
            <img src="{{ asset('asset/image/x.png') }}" alt="X">
            <img src="{{ asset('asset/image/yt.png') }}" alt="YouTube">
        </div>
    </div>
</section>

    @push('scripts')
    <script src="{{ asset('asset/js/exhibitions.js') }}"></script>
@endpush