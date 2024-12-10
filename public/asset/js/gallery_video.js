class VideoPlayer {
    constructor(container) {
        this.container = container;
        this.video = container.querySelector('.man_maintenance_video');
        this.controls = container.querySelector('.man_video_controls');
        this.playButton = container.querySelector('.man_play_button');
        this.progressContainer = container.querySelector('.man_progress_container');
        this.progressBar = container.querySelector('.man_progress_bar');
        this.timeDisplay = container.querySelector('.man_time_display');
        this.muteButton = container.querySelector('.man_mute_button');
        this.volumeContainer = container.querySelector('.man_volume_container');
        this.volumeSlider = container.querySelector('.man_volume_slider');
        this.volumeProgress = container.querySelector('.man_volume_progress');
        this.volumeHandle = container.querySelector('.man_volume_handle');
        this.fullscreenButton = container.querySelector('.man_fullscreen_button');

        // State variables
        this.isPlaying = false;
        this.isMuted = false;
        this.isDraggingProgress = false;
        this.isDraggingVolume = false;
        this.previousVolume = 1;
        this.hideControlsTimeout = null;

        this.initializePlayer();
    }

    initializePlayer() {
        // Video event listeners
        this.video.addEventListener('loadedmetadata', () => this.handleLoadedMetadata());
        this.video.addEventListener('timeupdate', () => this.updateProgress());
        this.video.addEventListener('play', () => this.handlePlay());
        this.video.addEventListener('pause', () => this.handlePause());
        this.video.addEventListener('volumechange', () => this.handleVolumeChange());
        this.video.addEventListener('ended', () => this.handleEnded());

        // Controls visibility
        this.container.addEventListener('mouseenter', () => this.showControls());
        this.container.addEventListener('mouseleave', () => this.hideControls());
        this.controls.addEventListener('mouseenter', () => this.cancelHideControls());
        this.controls.addEventListener('mouseleave', () => this.hideControls());

        // Play/Pause
        this.playButton.addEventListener('click', () => this.togglePlay());
        this.video.addEventListener('click', () => this.togglePlay());

        // Progress bar
        this.progressContainer.addEventListener('mousedown', (e) => this.startDraggingProgress(e));
        document.addEventListener('mousemove', (e) => this.handleProgressDrag(e));
        document.addEventListener('mouseup', () => this.stopDragging());
        this.progressContainer.addEventListener('click', (e) => this.setProgress(e));

        // Volume controls
        this.initializeVolume();

        // Fullscreen
        this.fullscreenButton.addEventListener('click', () => this.toggleFullscreen());

        // Keyboard controls
        document.addEventListener('keydown', (e) => this.handleKeypress(e));

        // Double click for fullscreen
        this.video.addEventListener('dblclick', () => this.toggleFullscreen());

        // Initial setup
        this.updateTimeDisplay();
        this.updateVolumeUI(this.video.volume);
    }

    // Play/Pause Methods
    togglePlay() {
        if (this.video.paused) {
            this.play();
        } else {
            this.pause();
        }
    }

    play() {
        this.video.play();
        this.playButton.textContent = '⏸';
        this.isPlaying = true;
    }

    pause() {
        this.video.pause();
        this.playButton.textContent = '▶';
        this.isPlaying = false;
    }

    // Progress Methods
    startDraggingProgress(e) {
        this.isDraggingProgress = true;
        this.setProgress(e);
    }

    handleProgressDrag(e) {
        if (this.isDraggingProgress) {
            const rect = this.progressContainer.getBoundingClientRect();
            const pos = (e.clientX - rect.left) / rect.width;
            const time = pos * this.video.duration;
            this.progressBar.style.width = `${pos * 100}%`;
            this.updateTimeDisplay(time);
        }
    }

    stopDragging() {
        if (this.isDraggingProgress) {
            this.isDraggingProgress = false;
        }
        this.isDraggingVolume = false;
    }

    setProgress(e) {
        const pos = e.offsetX / this.progressContainer.offsetWidth;
        this.video.currentTime = pos * this.video.duration;
        this.updateProgress();
    }

    updateProgress() {
        if (!this.isDraggingProgress) {
            const progress = (this.video.currentTime / this.video.duration) * 100;
            this.progressBar.style.width = `${progress}%`;
            this.updateTimeDisplay();
        }
    }

    // Volume Methods
    initializeVolume() {
        this.muteButton.addEventListener('click', () => this.toggleMute());
        
        this.volumeSlider.addEventListener('mousedown', (e) => {
            this.isDraggingVolume = true;
            this.setVolume(e);
        });

        document.addEventListener('mousemove', (e) => {
            if (this.isDraggingVolume) {
                const rect = this.volumeSlider.getBoundingClientRect();
                const x = Math.max(0, Math.min(e.clientX - rect.left, rect.width));
                const volume = x / rect.width;
                this.setVolume({ offsetX: x });
            }
        });

        this.volumeContainer.addEventListener('wheel', (e) => {
            e.preventDefault();
            const delta = e.deltaY > 0 ? -0.1 : 0.1;
            const newVolume = Math.max(0, Math.min(1, this.video.volume + delta));
            this.video.volume = newVolume;
            this.updateVolumeUI(newVolume);
        });
    }

    toggleMute() {
        if (this.video.volume === 0) {
            this.video.volume = this.previousVolume;
            this.updateVolumeUI(this.previousVolume);
        } else {
            this.previousVolume = this.video.volume;
            this.video.volume = 0;
            this.updateVolumeUI(0);
        }
    }

    setVolume(e) {
        const rect = this.volumeSlider.getBoundingClientRect();
        const volume = Math.max(0, Math.min(1, e.offsetX / rect.width));
        this.video.volume = volume;
        this.updateVolumeUI(volume);
    }

    updateVolumeUI(volume) {
        this.volumeProgress.style.width = `${volume * 100}%`;
        
        if (volume === 0) {
            this.muteButton.textContent = '🔇';
        } else if (volume < 0.5) {
            this.muteButton.textContent = '🔉';
        } else {
            this.muteButton.textContent = '🔊';
        }

        if (volume > 0) {
            this.previousVolume = volume;
        }
    }

    // Time Display Methods
    updateTimeDisplay(customTime) {
        const currentTime = customTime !== undefined ? customTime : this.video.currentTime;
        const duration = this.video.duration;
        this.timeDisplay.textContent = `${this.formatTime(currentTime)} / ${this.formatTime(duration)}`;
    }

    formatTime(seconds) {
        if (isNaN(seconds)) return '0:00';
        
        const minutes = Math.floor(seconds / 60);
        seconds = Math.floor(seconds % 60);
        return `${minutes}:${seconds.toString().padStart(2, '0')}`;
    }

    // Controls Visibility Methods
    showControls() {
        this.controls.style.opacity = '1';
        this.cancelHideControls();
    }

    hideControls() {
        if (!this.video.paused) {
            this.hideControlsTimeout = setTimeout(() => {
                this.controls.style.opacity = '0';
            }, 2000);
        }
    }

    cancelHideControls() {
        if (this.hideControlsTimeout) {
            clearTimeout(this.hideControlsTimeout);
            this.hideControlsTimeout = null;
        }
    }

    // Fullscreen Methods
    toggleFullscreen() {
        if (!document.fullscreenElement) {
            this.container.requestFullscreen();
            this.fullscreenButton.textContent = '⤓';
        } else {
            document.exitFullscreen();
            this.fullscreenButton.textContent = '⤢';
        }
    }

    // Event Handlers
    handleLoadedMetadata() {
        this.updateTimeDisplay();
        this.updateVolumeUI(this.video.volume);
    }

    handlePlay() {
        this.playButton.textContent = '⏸';
        this.isPlaying = true;
    }

    handlePause() {
        this.playButton.textContent = '▶';
        this.isPlaying = false;
    }

    handleVolumeChange() {
        this.updateVolumeUI(this.video.volume);
    }

    handleEnded() {
        this.pause();
        this.video.currentTime = 0;
    }

    handleKeypress(e) {
        // Only handle keypresses if the video container is focused
        if (this.container.contains(document.activeElement)) {
            switch(e.code) {
                case 'Space':
                    e.preventDefault();
                    this.togglePlay();
                    break;
                case 'ArrowLeft':
                    e.preventDefault();
                    this.video.currentTime -= 5;
                    break;
                case 'ArrowRight':
                    e.preventDefault();
                    this.video.currentTime += 5;
                    break;
                case 'ArrowUp':
                    e.preventDefault();
                    this.video.volume = Math.min(1, this.video.volume + 0.1);
                    break;
                case 'ArrowDown':
                    e.preventDefault();
                    this.video.volume = Math.max(0, this.video.volume - 0.1);
                    break;
                case 'KeyM':
                    e.preventDefault();
                    this.toggleMute();
                    break;
                case 'KeyF':
                    e.preventDefault();
                    this.toggleFullscreen();
                    break;
            }
        }
    }
}

// Initialize all video players when the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const videoContainers = document.querySelectorAll('.man_video_container');
    videoContainers.forEach(container => new VideoPlayer(container));
});