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

// Get DOM elements
const searchIcon = document.querySelector('.search-icon');
const searchContainer = document.querySelector('.search-container');
const searchInput = document.querySelector('.search-input');
const searchInputContainer = document.querySelector('.search-input-container');

// Toggle search input visibility
function toggleSearch(event) {
    event.preventDefault(); // Prevent default behavior
    event.stopPropagation(); // Prevent event bubbling
    
    searchInputContainer.classList.toggle('active');
    
    if (searchInputContainer.classList.contains('active')) {
        // Focus the input when shown
        setTimeout(() => {
            searchInput.focus();
        }, 100);
    }
}

// Handle search submission
function handleSearch(event) {
    event.preventDefault();
    
    const searchTerm = searchInput.value.trim();
    
    if (searchTerm) {
        // You can modify this to match your actual search route
        const searchUrl = `/search?q=${encodeURIComponent(searchTerm)}`;
        window.location.href = searchUrl;
    }
}

// Close search when clicking outside
function handleClickOutside(event) {
    if (!searchContainer.contains(event.target)) {
        searchInputContainer.classList.remove('active');
    }
}

// Handle Enter key press
function handleKeyPress(event) {
    if (event.key === 'Enter') {
        handleSearch(event);
    }
}

// Initialize event listeners
function initializeSearchFunctionality() {
    // Toggle search on icon click
    searchIcon.addEventListener('click', toggleSearch);
    
    // Handle search submission
    searchInput.addEventListener('keypress', handleKeyPress);
    
    // Close search when clicking outside
    document.addEventListener('click', handleClickOutside);
    
    // Handle form submission if search is wrapped in a form
    const searchForm = searchContainer.closest('form');
    if (searchForm) {
        searchForm.addEventListener('submit', handleSearch);
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', initializeSearchFunctionality);


// =============================================
//   responsive
// =============================================
document.addEventListener('DOMContentLoaded', function() {
    // Get all navigation elements
    const menuToggle = document.querySelector('.menu-toggle');
    const closeMenu = document.querySelector('.close-menu');
    const navItems = document.querySelector('.nav-items');
    const navButtons = document.querySelectorAll('.nav-item[id$="-nav"]');
    const homeLink = document.querySelector('.nav-items li a[href*="welcome"]');
    const searchIcon = document.querySelector('.search-icon');
    const searchInput = document.querySelector('.search-input-container');

    // Content configuration for each section
    const sectionContents = {
        'energy-nav': [
            { title: "Marines & Shipbuilding", route: "marine_shipbuilding" },
            { title: "Power Generation", route: "power_generation" },
            { title: "Oil & Gas", route: "oil_gas" },
            { title: "Industrial Solutions", route: "Industrial_Solutions" }
        ],
        'marine-nav': [
            { title: "News & Articles", route: "News_Articles" },
            { title: "Case Study", route: "case_study" },
            { title: "Exhibitions", route: "exhibitions" }
        ],
        'gallery-nav': [
            { title: "Photos", route: "gallery_foto" },
            { title: "Video", route: "gallery_video" }
        ],
        'company-nav': [
            { title: "About", route: "about" },
            { title: "Suppliers", route: "suppliers" },
            { title: "Investors", route: "investors" },
            { title: "Contact Information", route: "contact_information" },
            { title: "Careers & Multitechnic", route: "" }
        ]
    };

    // Create mobile dropdown menu
    function createMobileDropdown(sectionId) {
        const mobileDropdown = document.createElement('div');
        mobileDropdown.classList.add('mobile-dropdown');

        // Add header with back button
        const backHeader = document.createElement('div');
        backHeader.classList.add('mobile-dropdown-header');
        backHeader.innerHTML = `
            <button class="back-button">
                <span class="back-arrow">←</span> Back
            </button>
        `;
        mobileDropdown.appendChild(backHeader);

        // Add content container
        const contentContainer = document.createElement('div');
        contentContainer.classList.add('mobile-dropdown-content');

        // Get section-specific content
        const sections = sectionContents[sectionId] || [];
        
        // Add sections
        sections.forEach(section => {
            const sectionElem = document.createElement('a');
            sectionElem.href = section.route ? `/${section.route}` : '#';
            sectionElem.classList.add('mobile-section');
            sectionElem.innerHTML = `
                ${section.title}
                <span class="forward-arrow">→</span>
            `;
            contentContainer.appendChild(sectionElem);
        });

        mobileDropdown.appendChild(contentContainer);
        return mobileDropdown;
    }

    // Add styles for mobile navigation
    const style = document.createElement('style');
    style.textContent = `
        .mobile-dropdown {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: white;
            z-index: 1002;
            padding-top: 10px;
            overflow-y: auto;
        }
        
        .mobile-dropdown-header {
            padding: 15px;
            border-bottom: 1px solid #eee;
            background: white;
            position: sticky;
            top: 0;
            z-index: 1;
        }
        
        .back-button {
            background: none;
            border: none;
            font-size: 16px;
            color: #333;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0;
        }
        
        .mobile-dropdown-content {
            padding: 15px;
        }
        
        .mobile-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            color: #333;
            text-decoration: none;
            border-bottom: 1px solid #eee;
            font-size: 16px;
        }
        
        .mobile-section:active {
            background: #f8f8f8;
        }
        
        .forward-arrow {
            color: #666;
        }
        
        .back-arrow {
            font-size: 20px;
            line-height: 1;
        }

        @media screen and (max-width: 768px) {
            .nav-items li a[href*="welcome"] {
                display: block;
                width: 100%;
                padding: 15px;
                color: #333;
                text-decoration: none;
                border-bottom: 1px solid #eee;
                font-size: 16px;
            }

            .nav-items li a[href*="welcome"]:active {
                background: #f8f8f8;
            }

            .search-input-container.active {
                display: flex;
                position: relative;
                right: 0;
                width: 100%;
                padding: 10px 15px;
                border-bottom: 1px solid #eee;
            }

            .search-input {
                width: 100%;
                padding: 8px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
        }
    `;
    document.head.appendChild(style);

    // Handle mobile menu interactions
    navButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                const sectionId = this.id;
                
                // Create and show mobile dropdown
                const mobileDropdown = createMobileDropdown(sectionId);
                document.body.appendChild(mobileDropdown);

                // Handle back button
                const backButton = mobileDropdown.querySelector('.back-button');
                backButton.addEventListener('click', () => {
                    mobileDropdown.remove();
                });
            }
        });
    });

    // Handle Home link click
    if (homeLink) {
        homeLink.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                // Close the mobile menu before navigation
                navItems.classList.remove('active');
                closeMenu.style.display = 'none';
                menuToggle.style.display = 'block';
                document.body.style.overflow = '';
            }
        });
    }

    // Toggle menu open
    menuToggle?.addEventListener('click', function() {
        navItems.classList.add('active');
        closeMenu.style.display = 'block';
        menuToggle.style.display = 'none';
        document.body.style.overflow = 'hidden';
    });

    // Toggle menu close
    closeMenu?.addEventListener('click', function() {
        navItems.classList.remove('active');
        closeMenu.style.display = 'none';
        menuToggle.style.display = 'block';
        document.body.style.overflow = '';
        
        // Remove any open mobile dropdowns
        const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');
        mobileDropdowns.forEach(dropdown => dropdown.remove());
    });

    // Handle search functionality
    if (searchIcon && searchInput) {
        searchIcon.addEventListener('click', function() {
            searchInput.classList.toggle('active');
        });
    }

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.nav-items') && 
            !event.target.closest('.menu-toggle') && 
            !event.target.closest('.close-menu') && 
            !event.target.closest('.mobile-dropdown') &&
            navItems.classList.contains('active')) {
            
            navItems.classList.remove('active');
            closeMenu.style.display = 'none';
            menuToggle.style.display = 'block';
            document.body.style.overflow = '';
            
            // Remove any open mobile dropdowns
            const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');
            mobileDropdowns.forEach(dropdown => dropdown.remove());
        }
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            navItems.classList.remove('active');
            closeMenu.style.display = 'none';
            menuToggle.style.display = 'block';
            document.body.style.overflow = '';
            
            // Remove any open mobile dropdowns
            const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');
            mobileDropdowns.forEach(dropdown => dropdown.remove());

            // Reset search input
            if (searchInput) {
                searchInput.classList.remove('active');
            }
        }
    });
});

