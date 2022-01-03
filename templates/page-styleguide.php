<?php
/*
Template Name: Styleguide
*/

get_header();?>

<main class="styleguide bg-black min-h-screen" id="main">
  <div class="container pt-e200">
    <h1 class="text-white">Styleguide</h1>
  </div>
  <div class="container mt-20">
    <h2 class="text-white">Buttons</h2>
    <div class="w-full items-center flex mt-10">
      <button class="btn">test button</button>
    </div>
  </div>
  <div class="container mt-20">
    <h2 class="text-white">SVG/Icons</h2>
    <div class="w-full items-center flex mt-10 flex-wrap">
      <span class="text-white m-10"><?= get_component('svg', ['icon' => 'main-logo', 'width' => 145.771, 'height' => 49.904]) ?></span>
      <span class="text-white m-10"><?= get_component('svg', ['icon' => 'mini-logo', 'width' => 60, 'height' => 60]) ?></span>
      <span class="text-white m-10"><?= get_component('svg', ['icon' => 'twitter', 'width' => 60, 'height' => 60, 'viewbox' => '0 0 17 14']) ?></span>
      <span class="text-white m-10"><?= get_component('svg', ['icon' => 'facebook', 'width' => 60, 'height' => 60, 'viewbox' => '0 0 10 19']) ?></span>
      <span class="text-white m-10"><?= get_component('svg', ['icon' => 'linkedin', 'width' => 60, 'height' => 60, 'viewbox' => '0 0 17 17']) ?></span>
      <span class="text-white m-10"><?= get_component('svg', ['icon' => 'close', 'width' => 60, 'height' => 60]) ?></span>
      <span class="text-white m-10"><?= get_component('svg', ['icon' => 'footer-banner-logo', 'classes' => 'w-full', 'width' => 1440, 'height' => 246, 'viebox' => '0 0 1440 246']) ?></span>
    </div>
  </div>
</main>

<?php get_footer(); ?>