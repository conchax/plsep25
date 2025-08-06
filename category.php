<?php get_header();


/* $slug = get_queried_object()->slug;
$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 12,
  'category_name' => $slug,
  'has_password' => false,
  'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
  'post__not_in' => array((35061))
);
$query = new WP_Query($args);  */ ?>

<section class="section-w">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h1 class="titulou">Boletines</h1>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="breadcrumb"><?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?></div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row">
    <div class="col-12 text-center mt-5">
      <h2><?php single_cat_title(); ?></h2>
    </div>
  </div>
</div>


<div class="container">
  <div class="row align-items-center">

    <?php
    $cat = get_query_var('cat');
    $category = get_category($cat);
    echo do_shortcode('[ajax_load_more seo="true" category="' . $category->slug . '" posts_per_page="12" post_status="publish" post_type="post" has_password="false"]');
    ?>
  </div>
</div>

<?php get_footer(); ?>