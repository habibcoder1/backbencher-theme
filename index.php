<?php  
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * This template for displaying blog page
 */


if(!defined('ABSPATH')){
    exit('not valid');
};


get_header(); ?>

    <!-- =========================
        Blog Page Heading Start
    ========================== -->
    <section class="blog-pageheading">
        <div class="container">
            <div class="page-title text-center">
                <h3 class="text-uppercase dot-title">blog</h3>
            </div>
            <div class="blogpage-title">
                <h1 class="text-uppercase text-center"><span>best</span>of the week</h1>
            </div>
            <div class="pageheading-content text-center">
                <p>Discover a plethora of articles and personal accounts spanning various topics, offering valuable insights and diverse perspectives from individuals' experiences and knowledge. Explore a wide array of narratives and informative pieces shared by people worldwide.</p>
            </div>
        </div>
    </section>
    <!-- =========================
        Blog Page Heading End
    ========================== -->
    <!-- =========================
        Blog Slider Start
    ========================== -->
    <section class="blog_slider-area" style="background-image: url('assets/img/blog-sliderbg.svg')">
        <div class="container">
            <div class="blog-slider_details swiper mySwiper">
                <div class="blog-slider swiper-wrapper">
                    <!-- single slider -->
                    <article class="single-item swiper-slide">
                        <!-- thumb -->
                        <div class="thumb-img">
                            <a href="#" title="blog title">
                                <img src="assets/img/thumbnail-big.png" alt="thumbnail-img">
                            </a>
                        </div>
                        <!-- title -->
                        <div class="blog-title">
                            <a href="#"><h2 class="text-uppercase">Cross Channel Marketing</h2></a>
                        </div>
                        <!-- blog content -->
                        <div class="blog-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem </p>
                        </div>
                        <!-- category -->
                        <div class="category-name">
                            <h4 class="text-uppercase">UI/UX</h4>
                        </div>
                        <!-- reading time -->
                        <div class="reading-time">
                            <p class="text-capitalize">3 min</p>
                        </div>
                    </article> <!-- end single item -->
                    <!-- single slider -->
                    <article class="single-item swiper-slide">
                        <!-- thumb -->
                        <div class="thumb-img">
                            <a href="#" title="blog title">
                                <img src="assets/img/thumbnail-big.png" alt="thumbnail-img">
                            </a>
                        </div>
                        <!-- title -->
                        <div class="blog-title">
                            <a href="#"><h2 class="text-uppercase">Cross Channel Marketing</h2></a>
                        </div>
                        <!-- blog content -->
                        <div class="blog-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem </p>
                        </div>
                        <!-- category -->
                        <div class="category-name">
                            <h4 class="text-uppercase">UI/UX</h4>
                        </div>
                        <!-- reading time -->
                        <div class="reading-time">
                            <p class="text-capitalize">3 min</p>
                        </div>
                    </article> <!-- end single item -->
                    <!-- single slider -->
                    <article class="single-item swiper-slide">
                        <!-- thumb -->
                        <div class="thumb-img">
                            <a href="#" title="blog title">
                                <img src="assets/img/thumbnail-big.png" alt="thumbnail-img">
                            </a>
                        </div>
                        <!-- title -->
                        <div class="blog-title">
                            <a href="#"><h2 class="text-uppercase">Cross Channel Marketing</h2></a>
                        </div>
                        <!-- blog content -->
                        <div class="blog-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem </p>
                        </div>
                        <!-- category -->
                        <div class="category-name">
                            <h4 class="text-uppercase">UI/UX</h4>
                        </div>
                        <!-- reading time -->
                        <div class="reading-time">
                            <p class="text-capitalize">3 min</p>
                        </div>
                    </article> <!-- end single item -->
                    <!-- single slider -->
                    <article class="single-item swiper-slide">
                        <!-- thumb -->
                        <div class="thumb-img">
                            <a href="#" title="blog title">
                                <img src="assets/img/thumbnail-big.png" alt="thumbnail-img">
                            </a>
                        </div>
                        <!-- title -->
                        <div class="blog-title">
                            <a href="#"><h2 class="text-uppercase">Cross Channel Marketing</h2></a>
                        </div>
                        <!-- blog content -->
                        <div class="blog-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem </p>
                        </div>
                        <!-- category -->
                        <div class="category-name">
                            <h4 class="text-uppercase">UI/UX</h4>
                        </div>
                        <!-- reading time -->
                        <div class="reading-time">
                            <p class="text-capitalize">3 min</p>
                        </div>
                    </article> <!-- end single item -->
                </div>
            </div>  
            </div>
        </div>
        <!-- pagination //number -->
        <div class="swiper-pagination"></div>
        <!-- autoplay round -->
        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div>
    </section>
    <!-- =========================
        Blog Slider End
    ========================== -->
    <!-- =========================
        Blog Area Start
    ========================== -->
    <section class="blog_tab-area">
        <div class="container">
            <div class="category_blog-tab">
                <!-- tab menu item -->
                <ul class="tab-menuitem">
                    <li data-filter="all">all</li>
                    <li data-filter=".uiux">UI/UX</li>
                    <li data-filter=".mobileapp">mobile app</li>
                    <li data-filter=".website">website</li>
                    <li data-filter=".development">development</li>
                    <li data-filter=".graphics">graphics</li>
                    <li data-filter=".motiondesign">motion design</li>
                </ul>
                <!-- blog items -->
                <div class="allblog-items">
                    <!-- mobileapp -->
                    <div  class="mobileapp mix blog-details">
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                    </div>
                    <!-- uiux -->
                    <div  class="uiux mix blog-details">
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <div class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </div>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                    </div>
                    <!-- website -->
                    <div class="website mix blog-details">
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                    </div>
                    <!-- development -->
                    <div class="development mix blog-details">
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                    </div>
                    <!-- graphics -->
                    <div  class="graphics mix blog-details">
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                    </div>
                    <!-- motiondesign -->
                    <div class="motiondesign mix blog-details">
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb1.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                        <!-- single item -->
                        <article class="blog-box blog-item">
                            <!-- thumb -->
                            <div class="thumbnail">
                                <a href="#" class="text-decoration-none" title="blog title">
                                    <img src="assets/img/thumb2.png" alt="post-thumbnail">
                                </a>
                            </div>
                            <!-- title -->
                            <div class="post-title">
                                <a href="#" class="text-decoration-none">
                                    <h2 class="text-uppercase">Creative approach </h2>
                                </a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p>05 min</p>
                            </div>
                            <!-- category -->
                            <div class="categories">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="text-uppercase dot-title">ux/ui design</h3>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================
        Blog Area End
    ========================== -->


<?php 
get_footer();