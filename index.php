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
    <?php get_template_part('template_parts/blog_page'); ?>
    
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