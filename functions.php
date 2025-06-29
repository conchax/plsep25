<?php

define('SITE_URL', get_bloginfo('url'));
define('SITE_TITLE', get_bloginfo('title'));

function plsep_assets()
{
  wp_enqueue_style("estilos", get_template_directory_uri() . "/css/style.css");
  wp_enqueue_style("fachada", get_template_directory_uri() . "/css/lite-yt-embed.css");
}
add_action("wp_enqueue_scripts", "plsep_assets");

function funcion_footer()
{
  wp_enqueue_script("botstrap-js", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js");
  wp_enqueue_script("fachada", get_template_directory_uri() . "/js/lite-yt-embed.min.js");
  wp_enqueue_script("plsep-js", get_template_directory_uri() . "/js/main.js");
}
add_action('wp_footer', 'funcion_footer');

function plsep_theme_supports()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action("after_setup_theme", "plsep_theme_supports");

function shortcode_boletines_home()
{
  get_template_part('template-parts/boletines-home');
}
add_shortcode("boletines_home", "shortcode_boletines_home");



function shortcode_social_blog($atts)
{
  get_template_part('template-parts/social-blog');
}
add_shortcode("social_blog", "shortcode_social_blog");


function shortcode_social_nem($atts)
{
  get_template_part('template-parts/social-nem');
}
add_shortcode("social_nem", "shortcode_social_nem");


function shortcode_title_blog($atts)
{
  get_template_part('template-parts/title-blog');
}
add_shortcode("title_blog", "shortcode_title_blog");


function shortcode_title_blog_nem($atts)
{
  get_template_part('template-parts/title-blog-nem');
}
add_shortcode("title_blog_nem", "shortcode_title_blog_nem");


function shortcode_title_page($atts)
{
  get_template_part('template-parts/title-page');
}
add_shortcode("title_page", "shortcode_title_page");


function shortcode_campus($atts)
{
  get_template_part('template-parts/campus');
}
add_shortcode("campus", "shortcode_campus");


function shortcode_log_comu($atts)
{
  get_template_part('template-parts/log-micomunidad');
}
add_shortcode("log_comu", "shortcode_log_comu");


/* register_nav_menus( array(
  'menu-movil' => 'movil',
  'menu-conoce' => 'DT-conoce',
  'menu-perfiles' => 'DT-perfiles',
  'menu-nuestroPro' => 'DT-nuestroPro',
  'menu-transparencia' => 'DT-transparencia',
  'menu-contacto' => 'DT-contacto',
  'menu-des_integral' => 'DT-desintegral',
  'menu-vinculaciones' => 'DT-vinculaciones',
  ));
 */

//Limitar con la funcion get_the_excerpt
function excerpt($limit)
{
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt) >= $limit) {
    array_pop($excerpt);
    $excerpt = implode(" ", $excerpt) . '...';
  } else {
    $excerpt = implode(" ", $excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
  return $excerpt;
}


add_filter('body_class', 'add_category_to_single');
function add_category_to_single($classes)
{
  if (is_single()) {
    global $post;
    foreach ((get_the_category($post->ID)) as $category) {
      // add category slug to the $classes array
      $classes[] = $category->category_nicename;
    }
  }
  // return the $classes array
  return $classes;
}

// Disable feed
function wp_disable_feeds()
{
  wp_die(__('No feeds available!'));
}

add_action('do_feed', 'wp_disable_feeds', 1);
add_action('do_feed_rdf', 'wp_disable_feeds', 1);
add_action('do_feed_rss', 'wp_disable_feeds', 1);
add_action('do_feed_rss2', 'wp_disable_feeds', 1);
add_action('do_feed_atom', 'wp_disable_feeds', 1);
add_action('do_feed_rss2_comments', 'wp_disable_feeds', 1);
add_action('do_feed_atom_comments', 'wp_disable_feeds', 1);


// Disable REST API user endpoints
function disable_rest_api_users_endpoints($endpoints)
{
  if (isset($endpoints['/wp/v2/users'])) {
    unset($endpoints['/wp/v2/users']);
  }
  if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
    unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
  }
  return $endpoints;
}
add_filter('rest_endpoints', 'disable_rest_api_users_endpoints');
