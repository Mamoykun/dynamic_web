document.addEventListener('DOMContentLoaded', function() {
    const slidesContainer = document.querySelector('.carousel-slides');
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.dot');
    let currentSlide = 0;
    let isAnimating = false;

    // Function to update slide
    function updateSlide(index) {
        if (isAnimating) return;
        isAnimating = true;

        // Remove active class from all slides and dots
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        // Add active class to current slide and dot
        slides[index].classList.add('active');
        dots[index].classList.add('active');

        // Move slides
        slidesContainer.style.transform = `translateX(-${index * 16.666}%)`;

        // Reset animating flag after transition
        setTimeout(() => {
            isAnimating = false;
        }, 800); // Match this with CSS transition time
    }

    // Add click event to dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            if (currentSlide !== index) {
                currentSlide = index;
                updateSlide(currentSlide);
            }
        });
    });

    // Auto slide function
    function autoSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        updateSlide(currentSlide);
    }

    // Start auto slide
    let slideInterval = setInterval(autoSlide, 5000);

    // Pause auto slide on hover
    slidesContainer.addEventListener('mouseenter', () => {
        clearInterval(slideInterval);
    });

    // Resume auto slide
    slidesContainer.addEventListener('mouseleave', () => {
        slideInterval = setInterval(autoSlide, 5000);
    });
});