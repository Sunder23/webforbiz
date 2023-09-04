<?php

/**
 * Template Name: Home-Page
 **/

get_header();
?>

<div class="swiper swiper_main">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <section class="hero">
                <div class="hero__container">
                    <h1 class="hero_title title_h1" data-aos="fade-up">
                        WebForBiz 
                    </h1>
                    <div class="hero_subtitle subtitle">
                        маркетингове агенство повного циклу 
                    </div>
                    <div class="hero_descr">
                        Робочі інтернет рішення для вашого бізнесу
                    </div>
                    <a href="#" class="hero_btn">More</a>
                </div>
            </section>
        </div>
        <div class="swiper-slide">
            <section class="hero">
                <div class="hero__container">
                    <h1 class=" title_h1" data-aos="fade-up" data-swiper-parallax-x="-30%">
                        WebForBiz
                    </h1>
                    <div class="hero_subtitle subtitle" data-swiper-parallax-x="-40%">
                        маркетингове агенство повного циклу 2
                    </div>
                    
                    <div class="hero_descr" data-swiper-parallax-x="-40%">
                        Робочі інтернет рішення для вашого бізнесу
                    </div>
                    <a href="#" class="hero_btn" data-swiper-parallax-x="-40%">More</a>
                </div>
            </section>
        </div>
        <div class="swiper-slide">
            <section class="hero">
                <div class="hero__container">
                    <h1 class="title_h1" data-aos="fade-up">
                        WebForBiz
                    </h1>
                    <div class="hero_subtitle subtitle">
                        маркетингове агенство повного циклу 3
                    </div>
                    <div class="hero_descr">
                        Робочі інтернет рішення для вашого бізнесу
                    </div>
                    <a href="#" class="hero_btn">More</a>
                </div>
            </section>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>




<?php
get_footer();
