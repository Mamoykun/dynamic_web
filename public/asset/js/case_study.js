document.addEventListener('DOMContentLoaded', function() {
    const videoContainer = document.getElementById('videoContainer');
    const video = document.getElementById('mainVideo');
    const playPauseBtn = document.getElementById('playPauseBtn');
    const fullscreenBtn = document.getElementById('fullscreenBtn');
    const pauseIcon = playPauseBtn.querySelector('.pause-icon');
    const playIcon = playPauseBtn.querySelector('.play-icon');

    function togglePlayPause() {
        if (video.paused) {
            video.play();
            pauseIcon.style.display = 'block';
            playIcon.style.display = 'none';
            videoContainer.classList.add('playing');
        } else {
            video.pause();
            pauseIcon.style.display = 'none';
            playIcon.style.display = 'block';
            videoContainer.classList.remove('playing');
        }
    }

    function toggleFullscreen() {
        if (!document.fullscreenElement) {
            if (videoContainer.requestFullscreen) {
                videoContainer.requestFullscreen();
            } else if (videoContainer.webkitRequestFullscreen) {
                videoContainer.webkitRequestFullscreen();
            } else if (videoContainer.msRequestFullscreen) {
                videoContainer.msRequestFullscreen();
            }
        } else {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }
        }
    }

    // Event Listeners
    playPauseBtn.addEventListener('click', togglePlayPause);
    fullscreenBtn.addEventListener('click', toggleFullscreen);
    video.addEventListener('click', togglePlayPause);

    // Show/hide controls on hover
    let timeoutId;
    videoContainer.addEventListener('mousemove', function() {
        clearTimeout(timeoutId);
        
        if (video.paused) {
            videoContainer.classList.remove('playing');
        }
        
        timeoutId = setTimeout(() => {
            if (!video.paused) {
                videoContainer.classList.add('playing');
            }
        }, 2000);
    });

    // Keep controls visible when video is paused
    video.addEventListener('pause', function() {
        videoContainer.classList.remove('playing');
    });

    // Set initial state for autoplay
    video.addEventListener('play', function() {
        pauseIcon.style.display = 'block';
        playIcon.style.display = 'none';
        videoContainer.classList.add('playing');
    });
});