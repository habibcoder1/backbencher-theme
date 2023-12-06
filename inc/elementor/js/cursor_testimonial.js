/* =======================================
    custom cursor for testimonial 
======================================= */
let testimonialContainer = document.querySelector(".testimonial-container");
let testiCustomCursor    = document.querySelector(".testicustom-cursor"); 

if(testimonialContainer && testiCustomCursor){
    testimonialContainer.addEventListener("mouseenter", function () {
        testiCustomCursor.style.display = "block";
    });
    testimonialContainer.addEventListener("mouseleave", function () {
        testiCustomCursor.style.display = "none";
    });
    testimonialContainer.addEventListener("click", function () {
        testiCustomCursor.style.display = "block";
    });
    testimonialContainer.addEventListener("mousemove", function (e) {
        const x = e.clientX;
        const y = e.clientY;
    
        testiCustomCursor.style.left = x + "px";
        testiCustomCursor.style.top = y + "px";
    });
} 



