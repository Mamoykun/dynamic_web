<nav class="navbar">
    <div class="logo">
        <img src="{{asset('asset/image/images.png')}}" alt="Wärtsilä">
    </div>
    <ul class="nav-items">
      <li class="nav-item">Home</li>
      <li class="nav-item" id="energy-nav">
  Product & Services
  <span class="arrow">&#9662;</span>
  <div class="mega-dropdown">
    <!-- Left Sidebar -->
    <div class="nav-sidebar">
      <!-- About Section -->
      <div class="about-section">
        <h3>About Product & Services</h3>
        <p>Learn about what we do in the energy market where Wärtsilä is a global leader in complete lifecycle power solutions.</p>
      </div>

      <!-- Navigation List -->
      <div class="nav-list">
        <a href="#" class="nav-item" id="marine-button">
          <span>Marines & Shipbuilding</span>
          <span class="arrow">→</span>
        </a>
        <a href="#" class="nav-item" id="power-button">
          <span>Power Generation</span>
          <span class="arrow">→</span>
        </a>
        <a href="#" class="nav-item" id="oil-button">
          <span>Oil & Gas</span>
          <span class="arrow">→</span>
        </a>
        <a href="#" class="nav-item" id="industrial-button">
          <span>Industrial Solutions</span>
          <span class="arrow">→</span>
        </a>
      </div>
    </div>

    <!-- Right Content -->
    <div class="right-content">
      <div class="content-grid">
        <!-- Marines & Shipbuilding Section -->
        <div id="marinesContent" class="menu-section">
          <h4>Marines & Shipbuilding</h4>
          <ul>
            <li><a href="#">Energy storage</a></li>
            <li><a href="#">Engine power plants</a></li>
            <li><a href="#">Hybrid power plants</a></li>
            <li><a href="#">Design your power plant</a></li>
          </ul>
        </div>

        <!-- Power Generation Section -->
        <div id="powerGenerationContent" class="menu-section">
          <h4>Power Generation</h4>
          <ul>
            <li><a href="#">Lifecycle solutions</a></li>
            <li><a href="#">Lifecycle upgrades</a></li>
            <li><a href="#">Spare parts and field services</a></li>
            <li><a href="#">Wärtsilä Decarbonisation services</a></li>
          </ul>
        </div>

        <!-- Oil & Gas Section -->
        <div id="oilAndGasContent" class="menu-section">
          <h4>Oil & Gas</h4>
          <ul>
            <li><a href="#">Our vision of 100% renewable energy future</a></li>
            <li><a href="#">Sustainable fuels</a></li>
            <li><a href="#">Atlas of 100% renewable energy</a></li>
            <li><a href="#">Power system modelling</a></li>
            <li><a href="#">Every second counts</a></li>
          </ul>
        </div>

        <!-- Industrial Solutions Section -->
        <div id="industrialSolutionsContent" class="menu-section">
          <h4>Industrial Solutions</h4>
          <ul>
            <li><a href="#">Technology solutions</a></li>
            <li><a href="#">Engineering and maintenance</a></li>
            <li><a href="#">Project consultancy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</li>

<li class="nav-item" id="marine-nav">
  Insights
  <span class="arrow">&#9662;</span>
  <div class="mega-dropdown">
      <!-- Sidebar -->
      <div class="nav-sidebar">
          <div class="about-section">
              <h3>About Insight</h3>
              <p>Learn about what we do in the marine market where Wärtsilä is a global leader in complete lifecycle power solutions.</p>
          </div>

          <div class="nav-list">
              <a href="#" class="nav-item">
                  <span>Articles</span>
                  <span class="arrow">→</span>
              </a>
              <a href="#" class="nav-item">
                  <span>Case Studies</span>
                  <span class="arrow">→</span>
              </a>
              <a href="#" class="nav-item">
                  <span>Exhibitions</span>
                  <span class="arrow">→</span>
              </a>
          </div>
      </div>

      <!-- Right Content -->
      <div class="right-content">
          <div class="content-grid-marine">
              <!-- Section 1 -->
              <div class="menu-section">
                  <img src="{{asset('asset/image/foto_home.jpg')}}" alt="Power and propulsion" class="section-img">
                  <a href=""><h4>Articles</h4></a>
                  <ul>
                      <li><a href="#">Electric shipping and hybrid ships</a></li>
                      <li><a href="#">Engines and generating sets</a></li>
                      <li><a href="#">Propulsors and gears</a></li>
                      <li><a href="#">Shaft line solutions</a></li>
                  </ul>
              </div>

              <!-- Section 2 -->
              <div class="menu-section">
                  <img src="{{ asset('asset/image/foto pekerja pabrik.jpg')}}" alt="Liquid and gas handling" class="section-img">
                  <a href=""><h4>Case Studies</h4></a>
                  <ul>
                      <li><a href="#">Gas solutions</a></li>
                      <li><a href="#">Exhaust treatment and CCS</a></li>
                      <li><a href="#">Ballast water management systems</a></li>
                      <li><a href="#">Fresh water generation</a></li>
                      <li><a href="#">Waste and wastewater treatment</a></li>
                  </ul>
              </div>

              <!-- Section 3 -->
              <div class="menu-section">
                  <img src="{{ asset('asset/image/pabrik.jpg')}}" alt="Voyage and fleet optimisation" class="section-img">
                  <a href=""><h4>Exhibitions</h4></a>
                  <ul>
                      <li><a href="#">Fleet optimisation</a></li>
                      <li><a href="#">Port optimisation</a></li>
                      <li><a href="#">Simulation and training</a></li>
                      <li><a href="#">Dynamic positioning systems and sensors</a></li>
                      <li><a href="#">Integrated vessel control systems</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</li>

      <li class="nav-item" id="gallery-nav">
        Gallery
        <span class="arrow">&#9662;</span>
        <div class="mega-dropdown">
            <!-- Sidebar -->
            <div class="nav-sidebar">
                <div class="about-section">
                    <h3>About Gallery</h3>
                    <p>Learn about what we do in the marine market where Wärtsilä is a global leader in complete lifecycle power solutions.</p>
                </div>
    
                <div class="nav-list">
                    <a href="#" class="nav-item">
                        <span>Photos</span>
                        <span class="arrow">→</span>
                    </a>
                    <a href="#" class="nav-item">
                        <span>Video</span>
                        <span class="arrow">→</span>
                    </a>
                </div>
            </div>
    
            <!-- Right Content -->
            <div class="right-content">
                <div class="content-grid-marine">
                    <!-- Photos Section -->
                    <div class="menu-section">
                        <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Power and propulsion" class="section-img">
                        <a href=""><h4>Photos</h4></a>
                        <ul>
                            <li><a href="#">Why Wartsila?</a></li>
                            <li><a href="#">Career areas</a></li>
                            <li><a href="#">Join us</a></li>
                        </ul>
                    </div>
    
                    <!-- Videos Section -->
                    <div class="menu-section">
                        <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Liquid and gas handling" class="section-img">
                        <a href=""><h4>Video</h4></a>
                        <ul>
                            <li><a href="#">Our approach</a></li>
                            <li><a href="#">Climate and environment</a></li>
                            <li><a href="#">People</a></li>
                            <li><a href="#">Responsible business</a></li>
                            <li><a href="#">Reporting</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </li>
    
      
    <li class="nav-item" id="company-nav">
      Company
      <span class="arrow">&#9662;</span>
      <div class="mega-dropdown">
        <!-- Sidebar -->
        <div class="nav-sidebar">
          <div class="about-section">
            <h3>Company</h3>
            <p>Learn about what we do in the marine market where Wärtsilä is a global leader in complete lifecycle power solutions.</p>
          </div>
    
          <div class="nav-list">
            <a href="#" class="nav-item" id="about-button">
              <span>About</span>
              <span class="arrow">→</span>
            </a>
            <a href="#" class="nav-item" id="suppliers-button">
              <span>Suppliers</span>
              <span class="arrow">→</span>
            </a>
            <a href="#" class="nav-item" id="investors-button">
              <span>Investors</span>
              <span class="arrow">→</span>
            </a>
            <a href="#" class="nav-item" id="contact-button">
              <span>Contact Information</span>
              <span class="arrow">→</span>
            </a>
            <a href="#" class="nav-item" id="careers-button">
              <span>Careers & Multitechnic</span>
              <span class="arrow">→</span>
            </a>
          </div>
        </div>
    
        <!-- Right Content -->
        <div class="right-content">
          <div class="content-grid-marine">
            <!-- Careers Section -->
            <div id="careersContent" class="menu-section">
              <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Careers" class="section-img">
              <a href=""><h4>Careers</h4></a>
              <ul>
                <li><a href="#">Why Wärtsilä?</a></li>
                <li><a href="#">Career Areas</a></li>
                <li><a href="#">Join Us</a></li>
              </ul>
            </div>
    
            <!-- Sustainability Section -->
            <div id="sustainabilityContent" class="menu-section">
              <img src="{{ asset('asset/image/kapal.jpg') }}" alt="Sustainability" class="section-img">
              <a href=""><h4>Sustainability</h4></a>
              <ul>
                <li><a href="#">Our Approach</a></li>
                <li><a href="#">Climate and Environment</a></li>
                <li><a href="#">People</a></li>
                <li><a href="#">Responsible Business</a></li>
                <li><a href="#">Reporting</a></li>
              </ul>
            </div>
    
            <!-- Media Section -->
            <div id="mediaContent" class="menu-section">
              <img src="{{ asset('asset/image/pabrik.jpg') }}" alt="Media" class="section-img">
              <a href=""><h4>Media</h4></a>
              <ul>
                <li><a href="#">Press Releases and News</a></li>
                <li><a href="#">Image Bank</a></li>
                <li><a href="#">Social Media at Wärtsilä</a></li>
                <li><a href="#">Media Contacts</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </li>
    
      <li class="search-icon">
        <i class="fas fa-search"></i>
      </li>
      <li class="globe-icon" id="globe-nav">
        <a href="/map" title="Select country">
          <i class="fas fa-globe"></i>
        </a>
        <div class="tooltip"></div>
      </li>
      <li class="portal-button">
        <a href="#" class="btn-portal">Wärtsilä Portals</a>
      </li>
    </ul>
  </nav>