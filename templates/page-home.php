<?php
/*
Template Name: Home
*/

get_header();?>

<main class="home overflow-hidden bg-black" id="main" data-component="home">
  <section class="hero-video overflow-visible relative">
    <video loop muted playsinline autoplay class="relative z-50 object-cover w-full h-screen" data-placeholder="<?= get_stylesheet_directory_uri() ?>/images/home-page-hero-image-scaled.jpg">
      <source src="<?= get_stylesheet_directory_uri() ?>/video/Drone-Montage-Homepage_final_1080p.mp4" type="video/mp4">
    </video>
    <div class="absolute h-screen w-full top-0 left-0">
      <div class="container relative h-full">
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-light font-sans text-white z-100 top-1/3 absolute hero-animated-text">We help scale up ambitious companies at every stage</h1>
      </div>
    </div>
  </section>
  <?= get_component('gsap-carousel') ?>
</main>

<?php get_footer(); ?>