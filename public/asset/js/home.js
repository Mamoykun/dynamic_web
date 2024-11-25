// =============================================
// 1. NAVIGATION SECTION - Menu Management
// =============================================
// Deklarasi variabel DOM elements
const energyNav = document.getElementById('energy-nav');
const marineNav = document.getElementById('marine-nav');
const companyNav = document.getElementById('company-nav');
const galleryNav = document.getElementById('gallery-nav');
const globeNav = document.getElementById('globe-nav');
const navBtns = document.querySelectorAll('.nav-btn');
const navItems = [energyNav, marineNav, companyNav, galleryNav];

// Navigation State Variables
let activeNav = null;
let isDropdownOpen = false;

// Menu Items Configuration
const MENU_ITEMS = {
  product: '#energy-nav',
  insight: '#marine-nav',
  gallery: '#gallery-nav',
  company: '#company-nav'
};

const COMPANY_SECTIONS = {
  'About': 'careersContent',
  'Suppliers': 'sustainabilityContent',
  'Investors': 'mediaContent',
  'Contact Information': 'mediaContent',
  'Careers & Multitechnic': 'careersContent'
};

// Menu State Management
const menuState = {
  activeMenu: null,
  activeButton: null,
  isOpen: false
};

// Event Delegation untuk Navigation Items
document.querySelector('.nav-items').addEventListener('click', (event) => {
  const navItem = event.target.closest('.nav-item');
  if (!navItem || event.target.closest('.mega-dropdown')) return;
  
  event.preventDefault();
  event.stopPropagation();
  
  const dropdownButton = navItem;
  
  if (dropdownButton) {
    if (activeNav === navItem) {
      navItem.classList.remove('active');
      navItem.querySelector('.arrow').innerHTML = '&#9662;';
      navItem.querySelector('.mega-dropdown').classList.remove('active');
      activeNav = null;
      menuState.isOpen = false;
    } else {
      if (activeNav) {
        activeNav.classList.remove('active');
        activeNav.querySelector('.arrow').innerHTML = '&#9662;';
        activeNav.querySelector('.mega-dropdown').classList.remove('active');
      }
      navItem.classList.add('active');
      navItem.querySelector('.arrow').innerHTML = '&#9652;';
      navItem.querySelector('.mega-dropdown').classList.add('active');
      activeNav = navItem;
      menuState.isOpen = true;
    }
  }
});

// Content Toggle Functions
function toggleMegaDropdown(nav, show) {
  const dropdown = nav.querySelector('.mega-dropdown');
  if (dropdown) {
    dropdown.style.display = show ? 'flex' : 'none';
    menuState.isOpen = show;
  }
}

function toggleContentSections(nav, buttonId) {
  const sections = nav.querySelectorAll('.menu-section');
  sections.forEach(section => {
    const heading = section.querySelector('h4');
    if (heading && heading.textContent.trim() === buttonId) {
      section.style.display = 'block';
    } else {
      section.style.display = 'none';
    }
  });
}

function resetContentSections(nav) {
  const sections = nav.querySelectorAll('.menu-section');
  sections.forEach(section => {
    section.style.display = 'block';
  });
}

function toggleCompanyContent(buttonText) {
  const companyNav = document.querySelector('#company-nav');
  const sections = companyNav.querySelectorAll('.menu-section');
  const targetSection = COMPANY_SECTIONS[buttonText];
  
  sections.forEach(section => {
    section.style.display = section.id === targetSection ? 'block' : 'none';
  });
}

function resetCompanyContent() {
  const companyNav = document.querySelector('#company-nav');
  const sections = companyNav.querySelectorAll('.menu-section');
  sections.forEach(section => {
    section.style.display = 'block';
  });
}

// Sidebar Button Event Delegation
document.addEventListener('click', (event) => {
  const sidebarButton = event.target.closest('.nav-sidebar .nav-item');
  if (!sidebarButton || !activeNav) return;
  
  event.preventDefault();
  event.stopPropagation();
  
  const buttonText = sidebarButton.querySelector('span')?.textContent.trim();
  if (!buttonText) return;
  
  const isCompanyNav = activeNav.id === 'company-nav';
  
  if (menuState.activeButton === buttonText) {
    isCompanyNav ? resetCompanyContent() : resetContentSections(activeNav);
    menuState.activeButton = null;
  } else {
    isCompanyNav ? toggleCompanyContent(buttonText) : toggleContentSections(activeNav, buttonText);
    menuState.activeButton = buttonText;
  }
});

// Initialize Event Listeners
document.addEventListener('DOMContentLoaded', () => {
  // Search Icon
  const searchIcon = document.querySelector('.search-icon');
  searchIcon?.addEventListener('click', () => console.log('Search clicked'));

  // Globe Icon
  const globeIcon = document.querySelector('#globe-nav');
  const tooltip = globeIcon?.querySelector('.tooltip');
  if (globeIcon && tooltip) {
    globeIcon.addEventListener('mouseenter', () => tooltip.style.display = 'block');
    globeIcon.addEventListener('mouseleave', () => tooltip.style.display = 'none');
  }

  // Portal Button
  const portalButton = document.querySelector('.portal-button');
  portalButton?.addEventListener('click', (e) => {
    e.preventDefault();
    console.log('Portal clicked');
  });

  // Outside Click Handler
  document.addEventListener('click', (e) => {
    if (menuState.isOpen && !e.target.closest('.nav-item') && !e.target.closest('.mega-dropdown')) {
      if (activeNav) {
        activeNav.classList.remove('active');
        activeNav.querySelector('.arrow').innerHTML = '&#9662;';
        activeNav.querySelector('.mega-dropdown').classList.remove('active');
        activeNav = null;
        menuState.isOpen = false;
      }
      menuState.activeMenu = null;
    }
  });

  // Resize Handler with Debounce
  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      if (activeNav) {
        const isCompanyNav = activeNav.id === 'company-nav';
        isCompanyNav ? resetCompanyContent() : resetContentSections(activeNav);
        menuState.activeButton = null;
      }
    }, 250);
  });
});
// =============================================
// 2. SLIDER SECTION - Image/Content Slider
// =============================================
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');
let currentSlide = 0;
let slideInterval; // Variabel untuk interval otomatis

// Fungsi untuk menampilkan slide berdasarkan indeks
function showSlide(n) {
    // Hapus kelas 'active' dari slide dan dot saat ini
    slides[currentSlide].classList.remove('active');
    dots[currentSlide].classList.remove('active');

    // Update currentSlide dengan indeks baru
    currentSlide = n;

    // Jika currentSlide keluar dari batas, ulangi dari awal atau akhir
    if (currentSlide >= slides.length) currentSlide = 0;
    if (currentSlide < 0) currentSlide = slides.length - 1;

    // Tambahkan kelas 'active' pada slide dan dot baru
    slides[currentSlide].classList.add('active');
    dots[currentSlide].classList.add('active');
}

// Fungsi untuk pindah ke slide berikutnya
function nextSlide() {
    showSlide(currentSlide + 1);
}

// Fungsi untuk memulai slide otomatis
function startSlideShow() {
    slideInterval = setInterval(nextSlide, 5000); // Pindah slide setiap 5 detik
}

// Fungsi untuk menghentikan slide otomatis
function stopSlideShow() {
    clearInterval(slideInterval);
}

// Tambahkan event listener pada tombol bulat (dot)
dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        stopSlideShow(); // Hentikan slide otomatis
        showSlide(index); // Pindah ke slide yang sesuai dengan tombol yang ditekan
        startSlideShow(); // Mulai ulang slide otomatis
    });
});

// Mulai slide otomatis saat halaman dimuat
startSlideShow();


// =============================================
// 3. VIDEO PLAYER SECTION
// =============================================
// Initialize video player functionality
document.addEventListener('DOMContentLoaded', function() {
    // Get DOM elements
    const video = document.getElementById('myVideo');
    const videoContainer = document.querySelector('.video-container');
    const videoControls = document.querySelector('.video-controls');
    const playPauseBtn = document.getElementById('playPauseBtn');
    const volumeBtn = document.getElementById('volumeBtn');
    const volumeRange = document.getElementById('volumeRange');
    const settingsBtn = document.getElementById('settingsBtn');
    const settingsMenu = document.getElementById('settingsMenu');
    const fullscreenBtn = document.getElementById('fullscreenBtn');
    const progressContainer = document.querySelector('.progress-container');
    const progressBar = document.querySelector('.progress-bar');
    const progressFilled = document.querySelector('.progress-filled');
    const progressHover = document.querySelector('.progress-hover');
    const timeDisplay = document.querySelector('.time-display');
    const speedOptions = document.querySelectorAll('.speed-option');
    const qualityOptions = document.querySelectorAll('.quality-option');

    // State variables
    let isPlaying = false;
    let isMuted = false;
    let currentQuality = 'auto';
    let isSettingsVisible = false;
    let hideControlsTimeout;

    // Initialize video
    function initializeVideo() {
        video.volume = volumeRange.value / 100;
        updateTimeDisplay();
        setupProgressBar();
        initializeSettings();
    }

    // Initialize settings
    function initializeSettings() {
        speedOptions.forEach(option => {
            if (option.getAttribute('data-speed') === '1') {
                option.classList.add('active');
            }
        });

        qualityOptions.forEach(option => {
            if (option.getAttribute('data-quality') === 'auto') {
                option.classList.add('active');
            }
        });
    }

    // Time formatting
    function formatTime(seconds) {
        const minutes = Math.floor(seconds / 60);
        seconds = Math.floor(seconds % 60);
        return `${minutes}:${seconds.toString().padStart(2, '0')}`;
    }

    // Update time display
    function updateTimeDisplay() {
        const current = formatTime(video.currentTime);
        const total = formatTime(video.duration || 0);
        timeDisplay.textContent = `${current} / ${total}`;
    }

    // Progress bar functions
    function setupProgressBar() {
        video.addEventListener('timeupdate', () => {
            const percentage = (video.currentTime / video.duration) * 100;
            progressFilled.style.width = `${percentage}%`;
            updateTimeDisplay();
        });
    }

    function handleProgressHover(e) {
        const rect = progressContainer.getBoundingClientRect();
        const percentage = Math.min(Math.max(0, e.clientX - rect.left), rect.width) / rect.width;
        progressHover.style.width = `${percentage * 100}%`;
    }

    function handleProgressSeek(e) {
        const rect = progressContainer.getBoundingClientRect();
        const percentage = Math.min(Math.max(0, e.clientX - rect.left), rect.width) / rect.width;
        video.currentTime = percentage * video.duration;
    }

    // Play/Pause control
    function togglePlay() {
        if (video.paused) {
            video.play();
            playPauseBtn.querySelector('.control-icon').textContent = '⏸️';
            isPlaying = true;
        } else {
            video.pause();
            playPauseBtn.querySelector('.control-icon').textContent = '▶️';
            isPlaying = false;
        }
    }

    // Volume controls
    function toggleMute() {
        video.muted = !video.muted;
        isMuted = video.muted;
        volumeBtn.querySelector('.control-icon').textContent = isMuted ? '🔇' : '🔊';
        volumeRange.value = isMuted ? 0 : video.volume * 100;
    }

    function handleVolumeChange(e) {
        const value = e.target.value;
        video.volume = value / 100;
        video.muted = value === '0';
        volumeBtn.querySelector('.control-icon').textContent = value === '0' ? '🔇' : '🔊';
    }

    // Settings controls
    function toggleSettings(e) {
        if (e) e.stopPropagation();
        isSettingsVisible = !isSettingsVisible;
        settingsMenu.style.display = isSettingsVisible ? 'block' : 'none';
    }

    // Fullscreen control
    function toggleFullscreen() {
        if (!document.fullscreenElement) {
            videoContainer.requestFullscreen().catch(err => {
                console.log('Error attempting to enable fullscreen:', err.message);
            });
        } else {
            document.exitFullscreen();
        }
    }

    // Controls visibility
    function showControls() {
        videoControls.style.opacity = '1';
        clearTimeout(hideControlsTimeout);
    }

    function hideControls() {
        if (isPlaying && !isSettingsVisible) {
            hideControlsTimeout = setTimeout(() => {
                videoControls.style.opacity = '0';
            }, 2000);
        }
    }

    // Event listeners
    playPauseBtn.addEventListener('click', togglePlay);
    volumeBtn.addEventListener('click', toggleMute);
    volumeRange.addEventListener('input', handleVolumeChange);
    settingsBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleSettings(e);
    });
    fullscreenBtn.addEventListener('click', toggleFullscreen);

    // Progress bar events
    progressContainer.addEventListener('mousemove', handleProgressHover);
    progressContainer.addEventListener('mouseenter', () => progressBar.style.height = '8px');
    progressContainer.addEventListener('mouseleave', () => {
        progressBar.style.height = '4px';
        progressHover.style.width = '0';
    });
    progressContainer.addEventListener('click', handleProgressSeek);

    // Speed control
    speedOptions.forEach(option => {
        option.addEventListener('click', () => {
            const speed = parseFloat(option.getAttribute('data-speed'));
            video.playbackRate = speed;
            speedOptions.forEach(opt => opt.classList.remove('active'));
            option.classList.add('active');
            document.querySelector('.current-speed').textContent = speed + 'x';
            toggleSettings();
        });
    });

    // Quality control
    qualityOptions.forEach(option => {
        option.addEventListener('click', () => {
            const quality = option.getAttribute('data-quality');
            if (quality !== currentQuality) {
                currentQuality = quality;
                qualityOptions.forEach(opt => opt.classList.remove('active'));
                option.classList.add('active');
                document.querySelector('.current-quality').textContent = quality;
            }
            toggleSettings();
        });
    });

    // Controls visibility events
    videoContainer.addEventListener('mouseenter', showControls);
    videoContainer.addEventListener('mouseleave', hideControls);
    videoContainer.addEventListener('mousemove', showControls);

    // Keyboard controls
    document.addEventListener('keydown', (e) => {
        switch(e.code) {
            case 'Space':
                e.preventDefault();
                togglePlay();
                break;
            case 'KeyM':
                toggleMute();
                break;
            case 'KeyF':
                toggleFullscreen();
                break;
            case 'ArrowLeft':
                video.currentTime = Math.max(video.currentTime - 5, 0);
                break;
            case 'ArrowRight':
                video.currentTime = Math.min(video.currentTime + 5, video.duration);
                break;
            case 'ArrowUp':
                video.volume = Math.min(video.volume + 0.1, 1);
                volumeRange.value = video.volume * 100;
                break;
            case 'ArrowDown':
                video.volume = Math.max(video.volume - 0.1, 0);
                volumeRange.value = video.volume * 100;
                break;
        }
    });

    // Close settings when clicking outside
    document.addEventListener('click', (e) => {
        if (isSettingsVisible && !settingsMenu.contains(e.target) && e.target !== settingsBtn) {
            isSettingsVisible = false;
            settingsMenu.style.display = 'none';
        }
    });

    // Video ended event
    video.addEventListener('ended', () => {
        playPauseBtn.querySelector('.control-icon').textContent = '▶️';
        isPlaying = false;
    });

    // Initialize video player
    initializeVideo();
});
// =============================================
// 5. TAB SYSTEM SECTION
// =============================================
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab');
    const allContent = document.querySelectorAll('.articles-grid');

    function switchTab(tabName) {
        // Remove active class from all tabs
        tabs.forEach(tab => {
            tab.classList.remove('active');
        });

        // Hide all content sections
        allContent.forEach(content => {
            content.style.display = 'none';
            content.style.opacity = '0';
            content.style.visibility = 'hidden';
        });

        // Add active class to selected tab
        const selectedTab = document.querySelector(`.tab[data-tab="${tabName}"]`);
        if (selectedTab) {
            selectedTab.classList.add('active');
        }

        // Show selected content with animation
        const selectedContent = document.getElementById(`${tabName}-content`);
        if (selectedContent) {
            selectedContent.style.display = 'grid';
            // Trigger reflow
            void selectedContent.offsetWidth;
            selectedContent.style.opacity = '1';
            selectedContent.style.visibility = 'visible';
        }

        // Special handling for "white-papers" tab
        const morePapersContainer = document.querySelector('.more-papers-container');
        if (morePapersContainer) {
            morePapersContainer.style.display = tabName === 'white-papers' ? 'block' : 'none';
        }
    }

    // Add click event listeners to all tabs
    tabs.forEach(tab => {
        tab.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent default link behavior
            const tabName = tab.getAttribute('data-tab');
            switchTab(tabName);

            // Update URL hash without scrolling
            history.pushState(null, null, `#${tabName}`);
        });
    });

    // Handle initial load and browser back/forward
    function handleInitialState() {
        let initialTab = 'articles'; // Default tab

        // Check for URL hash
        const hash = window.location.hash.substring(1);
        if (hash && document.querySelector(`.tab[data-tab="${hash}"]`)) {
            initialTab = hash;
        } else {
            // Check for active tab in HTML
            const activeTab = document.querySelector('.tab.active');
            if (activeTab) {
                initialTab = activeTab.getAttribute('data-tab');
            }
        }

        switchTab(initialTab);
    }

    // Initialize the correct tab
    handleInitialState();

    // Handle browser back/forward buttons
    window.addEventListener('popstate', handleInitialState);

    // Optional: Add keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft' || e.key === 'ArrowRight') {
            e.preventDefault();
            
            const currentTab = document.querySelector('.tab.active');
            const tabsList = Array.from(tabs);
            const currentIndex = tabsList.indexOf(currentTab);
            
            let newIndex;
            if (e.key === 'ArrowLeft') {
                newIndex = currentIndex - 1;
                if (newIndex < 0) newIndex = tabsList.length - 1;
            } else {
                newIndex = currentIndex + 1;
                if (newIndex >= tabsList.length) newIndex = 0;
            }
            
            const newTab = tabsList[newIndex];
            const tabName = newTab.getAttribute('data-tab');
            switchTab(tabName);
            history.pushState(null, null, `#${tabName}`);
        }
    });

    // Optional: Add touch swipe support for mobile
    let touchStartX = 0;
    let touchEndX = 0;

    document.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });

    document.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });

    function handleSwipe() {
        const swipeThreshold = 50; // minimum distance for swipe
        const diff = touchStartX - touchEndX;

        if (Math.abs(diff) < swipeThreshold) return;

        const currentTab = document.querySelector('.tab.active');
        const tabsList = Array.from(tabs);
        const currentIndex = tabsList.indexOf(currentTab);

        let newIndex;
        if (diff > 0) { // Swipe left
            newIndex = currentIndex + 1;
            if (newIndex >= tabsList.length) newIndex = 0;
        } else { // Swipe right
            newIndex = currentIndex - 1;
            if (newIndex < 0) newIndex = tabsList.length - 1;
        }

        const newTab = tabsList[newIndex];
        const tabName = newTab.getAttribute('data-tab');
        switchTab(tabName);
        history.pushState(null, null, `#${tabName}`);
    }
});

// =============================================
// 6. EVENT LISTENERS SECTION - Global Events
// =============================================
document.addEventListener('click', (e) => {
    if (activeNav && !activeNav.contains(e.target)) {
        activeNav.classList.remove('active');
        activeNav.querySelector('.arrow').innerHTML = '&#9662;';
        activeNav.querySelector('.mega-dropdown').classList.remove('active');
        activeNav = null;
    }
});

document.addEventListener('keydown', (e) => {
    if (e.code === 'Space' && document.activeElement.tagName !== 'INPUT' && 
        document.activeElement.tagName !== 'TEXTAREA') {
        e.preventDefault();
        togglePlayPause();
    }
});
