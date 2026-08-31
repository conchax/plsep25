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
      <div class="breadcrumb">
        <nav aria-label="breadcrumbs" class="rank-math-breadcrumb">
          <p><a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a><span class="separator"> / </span><a href="<?php echo esc_url(home_url('/boletines')); ?>">Boletines</a></p>
        </nav>
      </div>
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
    /* $cat = get_query_var('cat');
    $category = get_category($cat);
    echo do_shortcode('[ajax_load_more seo="true" category="' . $category->slug . '" posts_per_page="12" post_status="publish" post_type="post" has_password="false" cache="false"]'); */
    ?>


<?php 
$queried_object = get_queried_object(); 

if ( $queried_object && isset($queried_object->slug) ) {
    $category_slug = $queried_object->slug;
    
    // Forzamos "false" en SEO para evitar el bloqueo estricto del WebKit de iOS
    echo do_shortcode('[ajax_load_more seo="false" button_label="Cargar más" scroll="false" category="' . $category_slug . '" posts_per_page="12" post_status="publish" post_type="post" has_password="false" cache="false"]'); 
} else {
    echo do_shortcode('[ajax_load_more seo="false" button_label="Cargar más" scroll="false" posts_per_page="12" post_status="publish" post_type="post" has_password="false" cache="false"]');
}
?>


  </div>
</div>

<?php get_footer(); ?>