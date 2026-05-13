<?php

define('SITE_URL', get_bloginfo('url'));
define('SITE_TITLE', get_bloginfo('title'));

function plsep_assets()
{
  /*  wp_enqueue_style("estilos", get_template_directory_uri() . "/css/style.css"); */
  wp_enqueue_style("fachada", get_template_directory_uri() . "/css/lite-yt-embed.css");
}
add_action("wp_enqueue_scripts", "plsep_assets");

function funcion_footer()
{
  wp_enqueue_script("botstrap-js", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js");
  wp_enqueue_script("fachada", get_template_directory_uri() . "/js/lite-yt-embed.min.js");
  wp_enqueue_script("main-js", get_template_directory_uri() . "/js/main.js");
  /*   wp_enqueue_script("plsep-js", "https://prepaenlinea.sep.gob.mx/assets/menu.min.js");
 */
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


register_nav_menus(array(
  'menu-movil' => 'movil',
  'menu-conoce' => 'DT-conoce',
  'menu-perfiles' => 'DT-perfiles',
  'menu-nuestroPro' => 'DT-nuestroPro',
  'menu-transparencia' => 'DT-transparencia',
  'menu-contacto' => 'DT-contacto',
  'menu-des_integral' => 'DT-desintegral',
  'menu-vinculaciones' => 'DT-vinculaciones',
));


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


/* Exclude Password Protected Posts */
function alm_exclude_password_protected_posts($alm_query)
{
  if (isset($alm_query->query['alm_id']) && ! $alm_query->is_singular()) {
    $alm_query->set('has_password', false);
  }
}

add_action('pre_get_posts', 'alm_exclude_password_protected_posts');

//bolquar jquery-migrate
function remove_jquery_migrate($scripts)
{
  if (! is_admin() && isset($scripts->registered['jquery'])) {
    $script = $scripts->registered['jquery'];
    if ($script->deps != array_diff($script->deps, array('jquery-migrate'))) {
      $script->deps = array_diff($script->deps, array('jquery-migrate'));
    }
  }
}
add_action('wp_default_scripts', 'remove_jquery_migrate');


/* evitar carga del front de calendar */
add_action('wp_enqueue_scripts', 'deregister_tribe_events_resources', 100);

function deregister_tribe_events_resources() {
    // Verifica si NO es una página propia de The Events Calendar
    if ( ! function_exists('tribe_is_event') || 
         (! tribe_is_event() && ! tribe_is_event_category() && ! tribe_is_in_main_loop()) ) {
        
        // Desactivar Estilos CSS principales
        wp_dequeue_style('the-events-calendar');
        wp_dequeue_style('tribe-events-calendar-style');
        wp_dequeue_style('tribe-events-calendar-full-calendar-style');
        wp_dequeue_style('tribe-events-custom-templates');
        
        // Desactivar Bloques de Gutenberg (si usas otros editores)
        wp_dequeue_style('tribe-events-gutenberg');
        wp_dequeue_script('tribe-events-gutenberg-blocks');

        // Desactivar Scripts JavaScript principales
        wp_dequeue_script('the-events-calendar');
        wp_dequeue_script('tribe-events-calendar-script');
        wp_dequeue_script('tribe-events-bootstrap-datepicker');
        wp_dequeue_script('tribe-events-jquery-resize');
    }
}

add_action('wp_enqueue_scripts', 'remove_remaining_tribe_scripts', 999);

function remove_remaining_tribe_scripts() {
    // Reemplaza la condición según tus necesidades (ej. si no es página de eventos)
    if ( ! function_exists('tribe_is_event') || ! tribe_is_event() ) {
        
        // Remueve los estilos V2 Single Skeleton que mencionas
        wp_dequeue_style('tribe-events-v2-single-skeleton');
        wp_deregister_style('tribe-events-v2-single-skeleton');
        
        wp_dequeue_style('tribe-events-v2-single-skeleton-full');
        wp_deregister_style('tribe-events-v2-single-skeleton-full');
        
        // Remueve la integración de estilos con Elementor
        wp_dequeue_style('tec-events-elementor-widgets-base-styles');
        wp_deregister_style('tec-events-elementor-widgets-base-styles');
        
        // Remueve el script general tec-user-agent
        wp_dequeue_script('tec-user-agent');
        wp_deregister_script('tec-user-agent');
    }
}


/* carga de wp-polls */
add_action('wp_enqueue_scripts', 'load_wp_polls_only_when_present', 999);

function load_wp_polls_only_when_present() {
    // Si no es un post, página o contenido individual, salimos rápido
    if ( ! is_singular() ) {
        wp_dequeue_style('wp-polls');
        wp_deregister_style('wp-polls');
        wp_dequeue_script('wp-polls');
        wp_deregister_script('wp-polls');
        return;
    }

    // Obtenemos el contenido del post actual
    $post = get_post();
    
    // Verificamos si el contenido tiene el shortcode [poll o si es un bloque de WP-Polls
    $has_poll_shortcode = has_shortcode($post->post_content, 'poll');
    $has_poll_block     = has_block('wp-polls/poll', $post->post_content) || strpos($post->post_content, 'wp-polls') !== false;

    // Si NO se encuentra ninguna encuesta en el contenido, removemos los recursos
    if ( ! $has_poll_shortcode && ! $has_poll_block ) {
        wp_dequeue_style('wp-polls');
        wp_deregister_style('wp-polls');
        
        wp_dequeue_script('wp-polls');
        wp_deregister_script('wp-polls');
    }
}

/* eliminar ccs de gutenger */
add_action('wp_enqueue_scripts', 'clean_classic_elementor_styles', 999);

function clean_classic_elementor_styles() {
    // Elimina el CSS de la biblioteca de bloques que mencionas
    wp_dequeue_style('wp-block-library');
    wp_deregister_style('wp-block-library');
    
    // Elimina estilos innecesarios que inyecta WordPress para inline/global styles
    wp_dequeue_style('global-styles');
    wp_deregister_style('global-styles');
    
    // Elimina estilos de soporte clásico para bloques (innecesarios con Elementor)
    wp_dequeue_style('classic-theme-styles');
    wp_deregister_style('classic-theme-styles');
}

