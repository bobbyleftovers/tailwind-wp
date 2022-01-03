<?php get_header(); ?>

<main class="single-story" id="main">
  <div class="container">
    <h1><?= the_field('full_name') ?></h1>
    <p><?= the_field('bio') ?></p>
  </div>
</main>

<?php get_footer(); ?>
