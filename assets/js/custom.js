(function($){
    'use strict';
    jQuery(document).ready(function($){

        /* ======================
            menu hide show
        ====================== */
        let hambergerIcon = document.querySelectorAll('.hambergur-icon i');
        let menuCloseIcon = document.querySelectorAll('.logo-close_icon .close-icon i');
        let mainMenu      = document.querySelectorAll('.manu-address_area');

        jQuery(hambergerIcon).click(function(){
            jQuery(mainMenu).slideDown(300); //300 slidedown
        });

        jQuery(menuCloseIcon).click(function(){
            jQuery(mainMenu).slideUp(300); //300 slideup
        });

        /* ===========================
            Sticky Header by JS
        =========================== */
        window.addEventListener("scroll", function () {
            let stickyHeader = document.querySelector(".header-area");
            // check for mobile version
            if (window.innerWidth > 768) {
                stickyHeader.classList.toggle("bbs_sticky-menu", window.scrollY > 100);
            } else {
                stickyHeader.classList.remove("bbs_sticky-menu");
            }
        });
        

        /* ===========================
            Scroll To Top 
        =========================== */
        jQuery('.bbsscroll_top').hide();
        jQuery(window).scroll(function(){
            if (jQuery(window).scrollTop()>300) {
                jQuery('.bbsscroll_top').fadeIn();
            }
            else{
                jQuery('.bbsscroll_top').fadeOut();
            }
        });

        jQuery('.bbsscroll_top i').click(function(){
            jQuery('html,body').animate({scrollTop:0}, 180);
            return false;
        });

        /* ===========================
            Tooltip for Scroll Top
        =========================== */
        let scrollTooltip = document.querySelector('.bbsscroll_top');
        let tooltip   = new bootstrap.Tooltip(scrollTooltip, {
            boundary: document.body
        });
        
        /* ===============
            Blog Slider
        =============== */
        const progressCircle  = document.querySelector(".autoplay-progress svg");
        var swiper = new Swiper(".blog-slider_details", {
            spaceBetween: 30,
            loop: true,
            centeredSlides: true,
            slidesPerView: 1,
            speed: 800,
            autoplay:{
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            on: {
                autoplayTimeLeft(s, time, progress) {
                    progressCircle.style.setProperty("--progress", 1 - progress);
                }
            }
        }); 

        /* ========================
            About Service Slider
        ======================== */
        jQuery('.aboutservice-slider .serviceitems').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            speed: 500,
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            vertical: true,
            verticalSwiping: true,
            dots: false,
            arrows: false,
            pauseOnHover: false,
            centerMode: true,
        });
        
        /* ========================
            Testimonial Slider
        ======================== */
        jQuery('.testimonial-details').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            pauseOnHover: false,
        });        
        
       /* ==================
            Blog Mixitup 
        ================== */
        let blogItems = document.querySelector('.allblog-items');
        if(blogItems){
            var mixer = mixitup(blogItems);
        }

        /* ==========================
            Blog Page Fist Word Get  
        ========================== */
        jQuery('.blog-pageheading .blogpage-title h1').each(function(){
            var self = jQuery(this);
            var p    = self.text().split(' ');
            var html = self.html().replace(p[0], '<span>'+ p[0] +'</span>');  //0 for first item

            self.html(html);
        });

        /* =============================
            contact form item select
        ============================= */       
        jQuery('.service-choose label input').change(function() {
            let checkLabel = jQuery(this).closest('.service-choose label'); 
            if (this.checked) {
                checkLabel.css('background-color', '#50b800');
                checkLabel.css('color', '#fff');
            } else {
                checkLabel.css('background-color', '#202123');
                checkLabel.css('color', '#8E8EA0');
            }
        });
        

         /* =============================
            table of content sticky
        ============================= */ 
        window.addEventListener("scroll", function () {
            let stickyTableOfContent = document.querySelector(".tableofcontent-readingprogressbar");
            
            if (stickyTableOfContent) {
                if (window.innerWidth > 768) {
                    let fromTop    = window.scrollY > 2200;
                    let fromBottom = window.scrollY < (document.documentElement.scrollHeight - window.innerHeight - 1400);
                    
                    stickyTableOfContent.classList.toggle("tableofcontent-sticky", fromTop && fromBottom);
                } else {
                    stickyTableOfContent.classList.remove("tableofcontent-sticky");
                }
            }
        });
        
        
        /* =============================
            table of content set
        ============================= */ 
        jQuery('.tableof_content-items').toc({
            'selectors': 'h1,h2',             //elements to use as headings
            'container': '.single-blog.single-blog_secondpart .content-area',      //element to find all selectors in
            'smoothScrolling': true,          //enable or disable smooth scrolling on click
            'prefix': 'list-group-item toc',  //prefix for anchor tags and class names
            'onHighlight': function(el) {},   //called when a new section is highlighted 
            'highlightOnScroll': true,        //add class to heading that is currently in focus
            'highlightOffset': 100,           //offset to trigger the next headline 
        }); 
        // Add a class to the ul element
        jQuery('.tableof_content-items > ul').addClass('list-group-numbered');
        
        /* =============================
            blog reading progressbar
        ============================= */ 
        window.onscroll = function() {
            readingProgressbarFunction();
        };
        
        function readingProgressbarFunction() {
            let contentArea = document.querySelector('.single-blog.single-blog_secondpart .content-area');
            if (!contentArea) {
                return; // Abort if .content-area is not found
            }
        
            let winScroll     = window.scrollY || document.documentElement.scrollTop;
            let contentTop    = contentArea.offsetTop;
            let contentHeight = contentArea.clientHeight;
            let height        = contentTop + contentHeight - window.innerHeight;
            let scrolled      = Math.min((winScroll / height) * 100, 100); // Ensure it doesn't exceed 100%
        
            let progressBar = document.getElementById("blogProgressBar");
        
            if (progressBar) {
                progressBar.style.width = scrolled + "%";
                progressBar.innerHTML = Math.round(scrolled) + "%";
            }
        }
        

        /* =============================
            Searchform for Service
        ============================= */ 
        // Define a function to handle the AJAX search
        function performAjaxSearch() {
            // preloader
            jQuery('.allblog-items').html('<div class="service_preloader text-center mt-5" style="color: #4C4E57;">Loading...</div>');

            let searchQuery  = jQuery('input#servicesearch').val();
            let searchSelect = jQuery('#searvicefilter').val();

            jQuery.ajax({
                type: 'POST',
                url: ajax_object.ajax_url,
                data: {
                    action: 'bbs_project_ajax_search',
                    'bbsservice': searchQuery,
                    'bbssearchcat': searchSelect,
                },
                success: function(response) {
                    jQuery('.allblog-items').html(response);
                }
            });
        }

        // Bind the function to both input change and form submission
        jQuery('#service-serachform').on('input', function(e) {
            e.preventDefault();
            performAjaxSearch();
        });

        jQuery('#service-serachform').on('submit', function(e) {
            e.preventDefault();
            performAjaxSearch();
        });


        /* =============================
            Searchform for job
        ============================= */ 
        // Define a function to handle the AJAX search
        function performJobAjaxSearch() {
            // preloader
            jQuery('.job-post-items').html('<div class="job_preloader text-center mt-5" style="color: #4C4E57;">Loading...</div>');

            let jobSearchQuery  = jQuery('input#jobservice').val();
            let jobSearchSelect = jQuery('#jobsearchfilter').val();

            jQuery.ajax({
                type: 'POST',
                url: ajax_object.ajax_url,
                data: {
                    action: 'bbs_job_ajax_search',
                    'bbsjobsearch': jobSearchQuery,
                    'bbsjobsearchselect': jobSearchSelect,
                },
                success: function(response) {
                    jQuery('.job-post-items').html(response);
                }
            });
        }

        // Bind the function to both input change and form submission
        jQuery('#job-serachform').on('input', function(e) {
            e.preventDefault();
            performJobAjaxSearch();
        });

        jQuery('#job-serachform').on('submit', function(e) {
            e.preventDefault();
            performJobAjaxSearch();
        });


    });
})(jQuery);