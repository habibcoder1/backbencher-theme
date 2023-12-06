
/* ==================================
    Video play & fullscreen onhover
================================== */
document.addEventListener("DOMContentLoaded", function () {
    let heroVideo = document.getElementById("heroVideo");
    let isPlaying = false;

    if(heroVideo){
        heroVideo.addEventListener("mouseenter", function () {
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

        heroVideo.addEventListener("mouseleave", function () {
            if (isPlaying) {
                isPlaying = false;
                heroVideo.pause();
                exitFullscreen()
            }
        });

        // Function to exit fullscreen
        //NOTE:: if want fullscreeen again & again then remove below codes//
        function exitFullscreen() {
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

        // Event listener for the fullscreenchange event
        document.addEventListener("fullscreenchange", function () {
            // If the document is not in fullscreen mode, stop the video
            if (!document.fullscreenElement) {
                isPlaying = false;
                portfolioVideo.pause();
            }
        });
    }
        
});

/* =======================================
    for custom cursor in video section  (will load exact page //home page)
======================================= */
let heroVideoSec = document.querySelector(".hero_video-area");
let customCursor = document.querySelector(".magicvideo_cursor");

if (heroVideoSec && customCursor) {
    heroVideoSec.addEventListener("mouseenter", function() {
        customCursor.style.display = "block";
    });
    heroVideoSec.addEventListener("mouseleave", function() {
        customCursor.style.display = "none";
    });
    heroVideoSec.addEventListener("mousemove", function(e) {
        const x = e.clientX;
        const y = e.clientY;

        customCursor.style.left = x + "px";
        customCursor.style.top = y + "px";
    });
}
