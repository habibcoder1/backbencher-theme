/* =======================================
    custom cursor for service items
======================================= */
let serviceContainers    = document.querySelectorAll(".servicewith_customcursor");
let serviceCustomCursors = document.querySelectorAll(".servicecustom-cursor");

// Check if the NodeList is not empty
if (serviceContainers.length > 0 && serviceCustomCursors.length > 0) {
    // Loop through each service container
    serviceContainers.forEach(function (serviceContainer, index) {
        // Get the corresponding custom cursor
        let serviceCustomCursor = serviceCustomCursors[index];

        // Add event listeners to each service container
        serviceContainer.addEventListener("mouseenter", function () {
            serviceCustomCursor.style.display = "block";
        });

        serviceContainer.addEventListener("mouseleave", function () {
            serviceCustomCursor.style.display = "none";
        });

        serviceContainer.addEventListener("click", function () {
            serviceCustomCursor.style.display = "block";
        });

        serviceContainer.addEventListener("mousemove", function (e) {
            const x = e.clientX;
            const y = e.clientY;

            serviceCustomCursor.style.left = x + "px";
            serviceCustomCursor.style.top = y + "px";
        });
    });
}