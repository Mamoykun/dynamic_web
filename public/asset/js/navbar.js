// =============================================
// 1. NAVIGATION SECTION - Menu Management
// =============================================
// Deklarasi variabel DOM elements
// Company Navigation Logic - Tetap sama seperti sebelumnya
// Get all DOM elements
const energyNav = document.getElementById('energy-nav');
const marineNav = document.getElementById('marine-nav');
const companyNav = document.getElementById('company-nav');
const galleryNav = document.getElementById('gallery-nav');
const navBtns = document.querySelectorAll('.nav-btn');
const navItems = [energyNav, marineNav, companyNav, galleryNav];

// State management
let activeNav = null;
let isDropdownOpen = false;

// Menu mapping
const MENU_ITEMS = {
    product: '#energy-nav',
    insight: '#marine-nav',
    gallery: '#gallery-nav',
    company: '#company-nav'
};

// Section mappings (excluding company)
const PRODUCT_SECTIONS = {
    'Marines & Shipbuilding': 'marinesContent',
    'Power Generation': 'powerGenerationContent',
    'Oil & Gas': 'oilAndGasContent',
    'Industrial Solutions': 'industrialSolutionsContent'
};

const INSIGHT_SECTIONS = {
    'News & Articles': 'newsArticlesContent',
    'Case Study': 'caseStudyContent',
    'Exhibitions': 'exhibitionsContent'
};


// Menu state object
const menuState = {
    activeMenu: null,
    activeButton: null,
    isOpen: false,
    lastClickedSection: null  // Menambahkan state untuk section terakhir yang diklik
};

// Main navigation click handler
document.querySelector('.nav-items').addEventListener('click', (event) => {
    const navItem = event.target.closest('.nav-item');
    if (!navItem || event.target.closest('.mega-dropdown')) return;

    if (event.target.closest('.nav-list')) {
        return;
    }
    
    event.preventDefault();
    event.stopPropagation();
    
    const dropdownButton = navItem;
    
    if (dropdownButton) {
        if (activeNav === navItem) {
            // Close current dropdown and reset content
            navItem.classList.remove('active');
            navItem.querySelector('.arrow').innerHTML = '&#9662;';
            navItem.querySelector('.mega-dropdown').classList.remove('active');
            resetContentSections(navItem); // Reset content when closing
            activeNav = null;
            menuState.isOpen = false;
            menuState.lastClickedSection = null; // Reset last clicked section
        } else {
            // Close previous dropdown if exists
            if (activeNav) {
                activeNav.classList.remove('active');
                activeNav.querySelector('.arrow').innerHTML = '&#9662;';
                activeNav.querySelector('.mega-dropdown').classList.remove('active');
                resetContentSections(activeNav); // Reset content of previous nav
            }
            // Open new dropdown
            navItem.classList.add('active');
            navItem.querySelector('.arrow').innerHTML = '&#9652;';
            navItem.querySelector('.mega-dropdown').classList.add('active');
            activeNav = navItem;
            menuState.isOpen = true;
        }
    }
});

// Function to toggle content sections
function toggleContentSections(nav, buttonId) {
    // If clicking the same section again, reset all content
    if (menuState.lastClickedSection === buttonId) {
        resetContentSections(nav);
        menuState.lastClickedSection = null;
        return;
    }

    const sections = nav.querySelectorAll('.menu-section');
    const photoGrid = nav.querySelector('.photo-grid');
    
    // Hide all sections first
    sections.forEach(section => {
        section.style.display = 'none';
    });
    
    if (photoGrid) {
        photoGrid.style.display = 'none';
    }
    
    // Show relevant content based on button clicked
    sections.forEach(section => {
        const heading = section.querySelector('h4');
        if (heading && heading.textContent.trim() === buttonId) {
            section.style.display = 'block';
        }
    });
    
    // Special handling for photo grid in Gallery
    if (buttonId === 'Photos' && photoGrid) {
        photoGrid.style.display = 'grid';
    }

    // Update last clicked section
    menuState.lastClickedSection = buttonId;
}

// Function to reset content sections
function resetContentSections(nav) {
    if (nav === companyNav) return;
    
    const sections = nav.querySelectorAll('.menu-section');
    const photoGrid = nav.querySelector('.photo-grid');
    
    sections.forEach(section => {
        section.style.display = 'block';
    });
    
    if (photoGrid) {
        photoGrid.style.display = 'grid';
    }
}

// Product & Services Event Handlers
document.getElementById('marine-button').addEventListener('click', function(e) {
    e.preventDefault();
    toggleContentSections(energyNav, 'Marines & Shipbuilding');
});

document.getElementById('power-button').addEventListener('click', function(e) {
    e.preventDefault();
    toggleContentSections(energyNav, 'Power Generation');
});

document.getElementById('oil-button').addEventListener('click', function(e) {
    e.preventDefault();
    toggleContentSections(energyNav, 'Oil & Gas');
});

document.getElementById('industrial-button').addEventListener('click', function(e) {
    e.preventDefault();
    toggleContentSections(energyNav, 'Industrial Solutions');
});

// Insights Event Handlers
marineNav.querySelectorAll('.nav-list .nav-item').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        const sectionText = this.querySelector('span').textContent.trim();
        toggleContentSections(marineNav, sectionText);
    });
});

// Gallery Event Handlers
galleryNav.querySelectorAll('.nav-list .nav-item').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        const sectionText = this.querySelector('span').textContent.trim();
        toggleContentSections(galleryNav, sectionText);
    });
});

// Close dropdown when clicking outside
document.addEventListener('click', function(e) {
    if (!e.target.closest('.nav-item') && activeNav) {
        activeNav.classList.remove('active');
        activeNav.querySelector('.arrow').innerHTML = '&#9662;';
        activeNav.querySelector('.mega-dropdown').classList.remove('active');
        resetContentSections(activeNav); // Reset content when closing
        activeNav = null;
        menuState.isOpen = false;
        menuState.lastClickedSection = null; // Reset last clicked section
    }
});

// Add keyboard navigation support
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && activeNav) {
        activeNav.classList.remove('active');
        activeNav.querySelector('.arrow').innerHTML = '&#9662;';
        activeNav.querySelector('.mega-dropdown').classList.remove('active');
        resetContentSections(activeNav); // Reset content when closing
        activeNav = null;
        menuState.isOpen = false;
        menuState.lastClickedSection = null; // Reset last clicked section
    }
});

// Initialize dropdown transitions
document.querySelectorAll('.mega-dropdown').forEach(dropdown => {
    dropdown.style.transition = 'all 0.3s ease-in-out';
});

// Add hover effect for better UX
document.querySelectorAll('.nav-item').forEach(item => {
    item.addEventListener('mouseenter', () => {
        item.style.cursor = 'pointer';
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