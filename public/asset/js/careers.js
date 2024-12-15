// Handle clicks on menu items
document.querySelectorAll('.wartsila-nav-item.has-submenu').forEach(item => {
    item.addEventListener('click', function(e) {
        // Prevent clicks from bubbling up to parent menu items
        e.stopPropagation();
        
        // Toggle active state on the clicked item
        this.classList.toggle('active');
        
        // Find the immediate submenu of the clicked item
        const submenu = this.querySelector(':scope > .wartsila-submenu');
        if (submenu) {
            submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
        }
        
        // Keep parent menus open
        let parent = this.closest('.wartsila-submenu');
        while (parent) {
            parent.style.display = 'block';
            parent.parentElement.classList.add('active');
            parent = parent.parentElement.closest('.wartsila-submenu');
        }
    });
});

// Handle clicks on submenu items
document.querySelectorAll('.wartsila-submenu-item').forEach(item => {
    item.addEventListener('click', function(e) {
        e.stopPropagation(); // Prevent menu from closing when clicking items
    });
});

// Close menus when clicking outside
document.addEventListener('click', function(e) {
    if (!e.target.closest('.wartsila-sidebar')) {
        document.querySelectorAll('.wartsila-submenu').forEach(submenu => {
            submenu.style.display = 'none';
        });
        document.querySelectorAll('.wartsila-nav-item').forEach(item => {
            item.classList.remove('active');
        });
    }
});


// ====================
// 3. about side bar conten video 
// ====================
document.addEventListener('DOMContentLoaded', () => {
    // Get all video containers
    const videoContainers = document.querySelectorAll('.video-container');

    // Initialize each video player
    videoContainers.forEach(container => {
        const video = container.querySelector('.video-player');
        const overlay = container.querySelector('.video-overlay');
        const playPauseButton = container.querySelector('.play-pause');
        const overlayPlayButton = container.querySelector('.play-button');
        const progress = container.querySelector('.progress-filled');
        const progressBar = container.querySelector('.progress-bar');
        const timeDisplay = container.querySelector('.time');
        const fullscreenButton = container.querySelector('.fullscreen');
        const volumeButton = container.querySelector('.volume');
        const settingsButton = container.querySelector('.settings');
        const videoControls = container.querySelector('.video-controls');

        let currentTime = 0;
        let wasPlaying = false;

        function togglePlay() {
            if (video.paused) {
                video.play();
                playPauseButton.textContent = '⏸';
                overlay.style.opacity = '0';
            } else {
                video.pause();
                playPauseButton.textContent = '►';
                overlay.style.opacity = '1';
            }
        }

        function toggleMute() {
            if (video.volume > 0) {
                video.volume = 0;
                volumeButton.textContent = '🔇';
            } else {
                video.volume = 1;
                volumeButton.textContent = '🔊';
            }
        }

        function handleProgress() {
            const percent = (video.currentTime / video.duration) * 100;
            progress.style.width = `${percent}%`;
            timeDisplay.textContent = formatTime(video.currentTime);
        }

        function scrub(e) {
            const scrubTime = (e.offsetX / progressBar.offsetWidth) * video.duration;
            video.currentTime = scrubTime;
        }

        function toggleFullscreen() {
            if (!document.fullscreenElement) {
                container.requestFullscreen();
            } else {
                document.exitFullscreen();
            }
        }

        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            seconds = Math.floor(seconds % 60);
            return `${minutes}:${seconds.toString().padStart(2, '0')}`;
        }

        function createSettingsMenu() {
            const settingsMenu = document.createElement('div');
            settingsMenu.className = 'settings-menu';
            settingsMenu.style.cssText = `
                position: absolute;
                bottom: 50px;
                right: 10px;
                background: rgba(0, 0, 0, 0.8);
                border-radius: 4px;
                padding: 10px;
                display: none;
                z-index: 1000;
                min-width: 150px;
            `;

            // Speed settings
            const speedSection = document.createElement('div');
            speedSection.innerHTML = '<h4 style="color: white; margin-bottom: 8px;">Playback Speed</h4>';
            
            [0.25, 0.5, 0.75, 1, 1.25, 1.5, 1.75, 2].forEach(speed => {
                const button = document.createElement('button');
                button.textContent = `${speed}x`;
                button.style.cssText = `
                    display: block;
                    width: 100%;
                    padding: 5px 10px;
                    margin: 2px 0;
                    background: transparent;
                    border: none;
                    color: white;
                    text-align: left;
                    cursor: pointer;
                `;
                button.addEventListener('click', (e) => {
                    e.stopPropagation();
                    video.playbackRate = speed;
                    settingsMenu.style.display = 'none';
                });
                speedSection.appendChild(button);
            });

            // Quality settings
            const qualitySection = document.createElement('div');
            qualitySection.innerHTML = '<h4 style="color: white; margin: 8px 0;">Quality</h4>';
            
            ['1080p', '720p', '480p', '360p'].forEach(quality => {
                const button = document.createElement('button');
                button.textContent = quality;
                button.style.cssText = `
                    display: block;
                    width: 100%;
                    padding: 5px 10px;
                    margin: 2px 0;
                    background: transparent;
                    border: none;
                    color: white;
                    text-align: left;
                    cursor: pointer;
                `;
                button.addEventListener('click', (e) => {
                    e.stopPropagation();
                    currentTime = video.currentTime;
                    wasPlaying = !video.paused;
                    
                    const videoSource = video.querySelector('source');
                    const newSrc = videoSource.src.replace(
                        /(1080p|720p|480p|360p)/,
                        quality
                    );
                    
                    videoSource.src = newSrc;
                    video.load();
                    settingsMenu.style.display = 'none';
                });
                qualitySection.appendChild(button);
            });

            settingsMenu.appendChild(speedSection);
            settingsMenu.appendChild(qualitySection);
            return settingsMenu;
        }

        const settingsMenu = createSettingsMenu();
        container.appendChild(settingsMenu);

        // Event listeners for container click
        container.addEventListener('click', (e) => {
            if (!e.target.closest('.video-controls') && 
                !e.target.closest('.play-button') &&
                !e.target.closest('.settings-menu')) {
                togglePlay();
            }
        });

        // Event listeners for controls
        playPauseButton.addEventListener('click', togglePlay);
        overlayPlayButton.addEventListener('click', togglePlay);
        volumeButton.addEventListener('click', toggleMute);
        video.addEventListener('timeupdate', handleProgress);

        let mousedown = false;
        progressBar.addEventListener('click', scrub);
        progressBar.addEventListener('mousemove', (e) => mousedown && scrub(e));
        progressBar.addEventListener('mousedown', () => mousedown = true);
        progressBar.addEventListener('mouseup', () => mousedown = false);
        progressBar.addEventListener('mouseleave', () => mousedown = false);

        fullscreenButton.addEventListener('click', toggleFullscreen);

        settingsButton.addEventListener('click', (e) => {
            e.stopPropagation();
            settingsMenu.style.display = settingsMenu.style.display === 'none' ? 'block' : 'none';
        });

        // Close settings menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.settings-menu') && !e.target.closest('.settings')) {
                settingsMenu.style.display = 'none';
            }
        });

        video.addEventListener('loadeddata', () => {
            if (currentTime > 0) {
                video.currentTime = currentTime;
                if (wasPlaying) video.play();
            }
        });

        video.addEventListener('ended', () => {
            playPauseButton.textContent = '►';
            overlay.style.opacity = '1';
        });

        // Prevent click events from bubbling up from controls
        videoControls.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    });

    // Keyboard shortcuts (global)
    document.addEventListener('keydown', (e) => {
        if (e.code === 'Space') {
            e.preventDefault();
            // Find the video that is currently in view or focused
            const videoContainer = document.querySelector('.video-container:hover');
            if (videoContainer) {
                const video = videoContainer.querySelector('.video-player');
                if (video.paused) {
                    video.play();
                    videoContainer.querySelector('.play-pause').textContent = '⏸';
                    videoContainer.querySelector('.video-overlay').style.opacity = '0';
                } else {
                    video.pause();
                    videoContainer.querySelector('.play-pause').textContent = '►';
                    videoContainer.querySelector('.video-overlay').style.opacity = '1';
                }
            }
        }
    });
});

