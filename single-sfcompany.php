<?php
  $logo = get_field('logo');
  $roles = get_field('roles');
?>

<?php get_header(); ?>

<main class="single-story" id="main">
  <div class="container">

    <h1><?= the_field('name') ?></h1>
    <img src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>" />

    <p><?= the_field('location') ?></p>
    <p><?= the_field('website') ?></p>
    <p><?= the_field('twitter') ?></p>
    <p><?= the_field('linkedin') ?></p>

    <?php foreach ($roles as $role): ?>
      <h3><?= $role['role_name'] ?></h3>
      <ul>
        <?php foreach ($role['role_user'] as $user): ?>
          <li>
            <a href="<?= $user->guid ?>"><?= $user->post_title ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    <?php endforeach ?>
  </div>
</main>

<?php get_footer(); ?>
