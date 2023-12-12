/* ==================================
    Video play & fullscreen onhover
================================== */
document.addEventListener("DOMContentLoaded", function () {
    let heroVideo = document.getElementById("heroVideo");
    let isPlaying = false;

    if(heroVideo){
        heroVideo.addEventListener("click", function () {
            if (!isPlaying) {
                isPlaying = true;
                heroVideo.play()
                    .then(() => {
                        if (heroVideo.requestFullscreen) {
                            heroVideo.requestFullscreen();
                        } else if (heroVideo.mozRequestFullScreen) {
                            heroVideo.mozRequestFullScreen();
                        } else if (heroVideo.webkitRequestFullscreen) {
                            heroVideo.webkitRequestFullscreen();
                        } else if (heroVideo.msRequestFullscreen) {
                            heroVideo.msRequestFullscreen();
                        }
                    })
                    .catch(error => {
                        console.error("Error playing video:", error);
                    });
            }
        });

        // for video pause
        heroVideo.addEventListener("click", function () {
            if (isPlaying) {
                isPlaying = false;
                heroVideo.pause();
                exitFullscreen()
            }
        });

        // Function to exit fullscreen
        function exitFullscreen() {
            if (document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement) {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitExitFullscreen) {
                    document.webkitExitFullscreen();
                } else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                }
            }
        }

        // Event listener for the fullscreenchange event
        document.addEventListener("fullscreenchange", function () {
            // If the document is not in fullscreen mode, stop the video
            if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {
                isPlaying = false;
                heroVideo.pause();
            }
        });

        
    }
        
});

