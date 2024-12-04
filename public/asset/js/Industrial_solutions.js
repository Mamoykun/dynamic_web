// ====================
// 1. First Carousel Implementation
// ====================
class MainCarousel {
    constructor(options = {}) {
        this.carousel = document.querySelector(options.carouselSelector || '.carousel');
        this.slides = document.querySelectorAll(options.slideSelector || '.slide');
        this.prevBtn = document.querySelector(options.prevBtnSelector || '.prev');
        this.nextBtn = document.querySelector(options.nextBtnSelector || '.next');
        this.currentSlide = 0;
        this.autoplayDuration = options.autoplayDuration || 5000;
        this.autoplayInterval = null;
        
        this.init();
    }

    init() {
        if (!this.carousel || !this.slides.length) {
            console.error('Required carousel elements not found');
            return;
        }

        this.setupEventListeners();
        this.startAutoplay();
    }

    updateCarousel() {
        if (!this.carousel) return;
        this.carousel.style.transform = `translateX(-${this.currentSlide * 100}%)`;
    }

    setupEventListeners() {
        if (this.prevBtn) {
            this.prevBtn.addEventListener('click', () => {
                this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
                this.updateCarousel();
            });
        }

        if (this.nextBtn) {
            this.nextBtn.addEventListener('click', () => {
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
                this.updateCarousel();
            });
        }

        // Pause autoplay on hover
        this.carousel.addEventListener('mouseenter', () => this.stopAutoplay());
        this.carousel.addEventListener('mouseleave', () => this.startAutoplay());
    }

    startAutoplay() {
        if (this.autoplayInterval) return;
        this.autoplayInterval = setInterval(() => {
            this.currentSlide = (this.currentSlide + 1) % this.slides.length;
            this.updateCarousel();
        }, this.autoplayDuration);
    }

    stopAutoplay() {
        if (this.autoplayInterval) {
            clearInterval(this.autoplayInterval);
            this.autoplayInterval = null;
        }
    }
}

// ====================
// 2. Industrial Solutions Carousel
// ====================
class SustainableShippingCarousel {
    constructor(options = {}) {
        // Core elements
        this.containerSelector = options.containerSelector || '.sustainable-shipping-carousel';
        this.container = document.querySelector(this.containerSelector);
        this.slidesContainer = this.container?.querySelector('.ssc-slides');
        this.slides = Array.from(this.container?.querySelectorAll('.ssc-slide') || []);
        this.dots = Array.from(this.container?.querySelectorAll('.ssc-dot') || []);
        
        // Configuration
        this.autoplayDuration = options.autoplayDuration || 5000;
        this.transitionDuration = options.transitionDuration || 800;
        this.slideWidth = 16.666; // Percentage width of each slide
        
        // State
        this.currentSlide = 0;
        this.isAnimating = false;
        this.autoplayInterval = null;
        
        // Initialize when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.init());
        } else {
            this.init();
        }
    }
    
    init() {
        if (!this.validateElements()) {
            console.error('Required carousel elements not found');
            return;
        }

        // Initialize first slide
        this.updateSlide(this.currentSlide);
        
        // Set up event listeners
        this.setupEventListeners();
        
        // Start autoplay
        this.startAutoplay();
    }

    validateElements() {
        return this.container && this.slidesContainer && this.slides.length > 0 && this.dots.length > 0;
    }
    
    updateSlide(index) {
        if (this.isAnimating) return;
        
        this.isAnimating = true;
        
        // Ensure index is within bounds
        index = Math.max(0, Math.min(index, this.slides.length - 1));
        
        // Update classes
        this.slides.forEach(slide => slide.classList.remove('active'));
        this.dots.forEach(dot => dot.classList.remove('active'));
        
        this.slides[index].classList.add('active');
        this.dots[index].classList.add('active');
        
        // Move slides
        this.slidesContainer.style.transform = `translateX(-${index * this.slideWidth}%)`;
        
        // Update current slide
        this.currentSlide = index;
        
        // Reset animating flag after transition
        setTimeout(() => {
            this.isAnimating = false;
        }, this.transitionDuration);
    }
    
    setupEventListeners() {
        // Add click event to dots
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                if (this.currentSlide !== index) {
                    this.updateSlide(index);
                }
            });
        });

        // Touch events for mobile
        let touchStartX = 0;
        let touchEndX = 0;

        this.slidesContainer.addEventListener('touchstart', (e) => {
            touchStartX = e.touches[0].clientX;
            this.stopAutoplay();
        });

        this.slidesContainer.addEventListener('touchmove', (e) => {
            touchEndX = e.touches[0].clientX;
        });

        this.slidesContainer.addEventListener('touchend', () => {
            const difference = touchStartX - touchEndX;
            if (Math.abs(difference) > 50) { // Minimum swipe distance
                if (difference > 0) {
                    // Swipe left
                    this.updateSlide((this.currentSlide + 1) % this.slides.length);
                } else {
                    // Swipe right
                    this.updateSlide((this.currentSlide - 1 + this.slides.length) % this.slides.length);
                }
            }
            this.startAutoplay();
        });
        
        // Pause/resume autoplay on hover
        this.slidesContainer.addEventListener('mouseenter', () => this.stopAutoplay());
        this.slidesContainer.addEventListener('mouseleave', () => this.startAutoplay());
    }
    
    startAutoplay() {
        if (this.autoplayInterval) return;
        this.autoplayInterval = setInterval(() => {
            this.updateSlide((this.currentSlide + 1) % this.slides.length);
        }, this.autoplayDuration);
    }
    
    stopAutoplay() {
        if (this.autoplayInterval) {
            clearInterval(this.autoplayInterval);
            this.autoplayInterval = null;
        }
    }
}

// Initialize carousels
document.addEventListener('DOMContentLoaded', () => {
    // Initialize main carousel
    const mainCarousel = new MainCarousel({
        carouselSelector: '.carousel',
        slideSelector: '.slide',
        prevBtnSelector: '.prev',
        nextBtnSelector: '.next',
        autoplayDuration: 5000
    });

    // Initialize sustainable shipping carousel
    const sustainableCarousel = new SustainableShippingCarousel({
        containerSelector: '.sustainable-shipping-carousel',
        autoplayDuration: 5000,
        transitionDuration: 800
    });
});

// ====================
// 3. Industrial Solutions 
// ====================
const tabs = document.querySelectorAll('.offices-custom-tab-button');
const contents = document.querySelectorAll('.offices-custom-content');

tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
        // Remove active class from all tabs and contents
        tabs.forEach(t => t.classList.remove('active'));
        contents.forEach(c => c.classList.remove('active'));
        
        // Add active class to clicked tab and corresponding content
        tab.classList.add('active');
        contents[index].classList.add('active');
    });
});