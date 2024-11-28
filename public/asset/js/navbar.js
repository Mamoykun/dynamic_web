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
//   search
// =============================================

function toggleSearch() {
    const inputContainer = document.querySelector('.search-input-container');
    inputContainer.classList.toggle('active');
    
    if (inputContainer.classList.contains('active')) {
        // Focus input saat muncul
        inputContainer.querySelector('.search-input').focus();
    }
}

// Tutup search saat klik di luar
document.addEventListener('click', function(event) {
    const searchContainer = document.querySelector('.search-container');
    const inputContainer = document.querySelector('.search-input-container');
    
    if (!searchContainer.contains(event.target)) {
        inputContainer.classList.remove('active');
    }
});

// Handle search saat tekan Enter
document.querySelector('.search-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        const searchTerm = this.value.trim();
        if (searchTerm) {
            // Redirect ke halaman hasil pencarian
            window.location.href = `search-results.html?q=${encodeURIComponent(searchTerm)}`;
        }
    }});