/* ==================================
    Video play & fullscreen onhover
================================== */
document.addEventListener("DOMContentLoaded", function () {
    let portfolioVideo = document.getElementById("ourworksVideo");
    let isPlaying = false;

    if (portfolioVideo) {
        portfolioVideo.addEventListener("mouseenter", function () {
            if (!isPlaying) {
                isPlaying = true;
                portfolioVideo.play()
                    .then(() => {
                        if (portfolioVideo.requestFullscreen) {
                            portfolioVideo.requestFullscreen();
                        } else if (portfolioVideo.mozRequestFullScreen) {
                            portfolioVideo.mozRequestFullScreen();
                        } else if (portfolioVideo.webkitRequestFullscreen) {
                            portfolioVideo.webkitRequestFullscreen();
                        } else if (portfolioVideo.msRequestFullscreen) {
                            portfolioVideo.msRequestFullscreen();
                        }
                    })
                    .catch(error => {
                        console.error("Error playing video:", error);
                    });
            }
        });

        portfolioVideo.addEventListener("mouseleave", function () {
            if (isPlaying) {
                isPlaying = false;
                portfolioVideo.pause();
                exitFullscreen();
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
    custom cursor for video items 
======================================= */
let videoContainer       = document.querySelector(".workvideo_customcursor");
let videoCustomCursor    = document.querySelector(".videocustom-cursor"); 

if(videoContainer && videoCustomCursor){
    videoContainer.addEventListener("mouseenter", function () {
        videoCustomCursor.style.display = "block";
    });
    videoContainer.addEventListener("mouseleave", function () {
        videoCustomCursor.style.display = "none";
    });
    videoContainer.addEventListener("click", function () {
        videoCustomCursor.style.display = "block";
    });
    videoContainer.addEventListener("mousemove", function (e) {
        const x = e.clientX;
        const y = e.clientY;
    
        videoCustomCursor.style.left = x + "px";
        videoCustomCursor.style.top = y + "px";
    });
}