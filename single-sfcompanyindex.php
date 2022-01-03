<?php $image = get_field('image') ?>
<?php get_header(); ?>


<main class="company-index bg-sky" id="main">
  <div class="container">
    <h1><?= get_the_title() ?></h1>

    <div class="index" data-component="company-index">
      <div class="results">
        <div class="static-content mt-4 p-4 flex bg-purple">
          <div class="w-1/2 p-8">
            <h3 class="text-white"><?= get_field('quote') ?></h3>
          </div>
          <div class="w-1/2">
            <img src="<?= $image['url'] ?>"/>
          </div>
        </div>
      </div>
      <button class="load-more btn text-black">Load More</button>
    </div>
  </div>
</main>

<?php get_footer(); ?>
