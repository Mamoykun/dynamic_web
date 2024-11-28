function initVideoPlayer() {
    // Mengambil semua elemen video dalam renewable-section
    const videos = document.querySelectorAll('.renewable-section video');
    
    // Untuk setiap video
    videos.forEach((video) => {
        // Auto play when in viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                // Jika video terlihat di viewport dan button play diklik
                if (entry.isIntersecting && video.hasAttribute('data-started')) {
                    // Play video
                    video.play().catch(function(error) {
                        console.log("Video play failed:", error);
                    });
                } else {
                    // Pause video jika tidak terlihat
                    video.pause();
                }
            });
        }, { threshold: 0.5 }); // Memicu ketika 50% video terlihat
        
        observer.observe(video);
        
        // Event listener untuk tombol play pertama
        video.addEventListener('play', () => {
            console.log('Video started playing');
            video.setAttribute('data-started', 'true'); // Menandai video sudah pernah diplay
        });
        
        video.addEventListener('pause', () => {
            console.log('Video paused');
        });
        
        video.addEventListener('ended', () => {
            console.log('Video finished');
            video.currentTime = 0; // Reset ke awal
            if(video.hasAttribute('data-started')) {
                video.play(); // Auto replay hanya jika sudah pernah diplay
            }
        });
        
        // Menambahkan mute toggle
        video.addEventListener('click', () => {
            if (video.muted) {
                video.muted = false;
            } else {
                video.muted = true;
            }
        });
        
        // Set default state
        video.muted = false; // Volume on by default
        video.loop = true; // Loop video
    });
}

// Jalankan fungsi saat DOM sudah siap
document.addEventListener('DOMContentLoaded', initVideoPlayer);

// Tambahan untuk handling resize dan scroll
window.addEventListener('resize', () => {
    // Recalculate video dimensions if needed
    const videos = document.querySelectorAll('.renewable-section video');
    videos.forEach(video => {
        video.style.height = video.parentElement.offsetWidth * (9/16) + 'px';
    });
});

// Smooth scroll untuk link anchor jika ada
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});