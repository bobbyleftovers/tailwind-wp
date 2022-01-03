<?php
global $post;

add_action( 'rest_api_init', 'register_routes' );

function register_routes () {
  register_rest_route( 'insight/v1', 'get-posts', array(
    'methods' => 'GET',
    'callback' => 'api_get_posts',
  ));

  /**
   * GET /insight/vi/get-companies
   * retrieves component HTML for a row of companies
   */
  register_rest_route('insight/v1', 'get-companies', [
    'methods' => 'GET',
    'callback' => 'api_get_companies',
  ]);
}

// return query results
function api_get_posts () {
  // get posts by type
  $args = [
    'post_type' => $_GET['type'] ? $_GET['type'] : 'post'
  ];

  $posts = new WP_Query($args);

  return json_encode([
    'request' => $_GET,
    'max' => $posts->max_num_pages,
    'posts' => $posts
  ]);
}


/**
 * Retrieve "sfcompany" posts for the index page.
 */
function api_get_companies() {
  $args = [
    'post_type' => 'sfcompany',
    'posts_per_page' => 6,
    'post__not_in' => isset($_GET['exclude']) ? [$_GET['exclude']] : [],
    'paged' => $_GET['page'] ?? false
  ];

  $rows = [];
  $posts = new WP_Query($args);
  if ($posts->have_posts()) {
    while ($posts->have_posts()) {
      $posts->the_post();
      $post = get_post();

      $rows[] = get_component('company-card', [
        'name' => get_field('name'),
        'logo' => get_field('logo'),
        'location' => get_field('location'),
      ]);
    }
  }

  $content = '';
  foreach (array_chunk($rows, 3) as $row) {
    $content .= '<div class="row flex">' . implode('', $row) . '</div>';
  }

  return json_encode([
    'request' => $_GET,
    'max' => $posts->max_num_pages,
    'content' => $content,
  ]);
}