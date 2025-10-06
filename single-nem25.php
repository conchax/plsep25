<?php

/**
 *
 * Template Name: boletines NEM25
 * Template Post Type: post
 */

get_header();

if (! defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

while (have_posts()) :
  the_post();
?>
  <section class="section-w">
    <div class="container-xxl">
      <div class="row">
        <div class="breadcrumb"><?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?></div>
      </div>
    </div>
  </section>
  <header class="nem25">

  </header>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 text-center">
        <h1 class="entry-title-nem text-center"><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
  <main class="main-nem25">
    <?php the_content(); ?>
  </main>
  <div class="container share pb-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-4">
        <h4 class="text-center">Compartir boletín:</h4>
        <div class="col d-flex justify-content-center">

          <a title="Haz clic para compartir en Facebook"
            href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>"
            target="_blank" rel="nofollow noopener noreferrer">
            <svg class="scale" width="38" height="38">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/iconos-share.svg#facebook"></use>
            </svg>
          </a>

          <a title="Haz clic para compartir en X"
            href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>&amp;text=<?php echo urlencode(get_the_title()) ?>"
            target="_blank" rel="nofollow noopener noreferrer">
            <svg class="scale" width="38" height="38">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/iconos-share.svg#x"></use>
            </svg>
          </a>

          <a title="Haz clic para compartir en whatsapp"
            href="https://api.whatsapp.com/send?text=<?php the_permalink() ?>"
            target="_blank" rel="nofollow noopener noreferrer">
            <svg class="scale" width="38" height="38">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/iconos-share.svg#whatsapp"></use>
            </svg>
          </a>

          <a title="Haz clic para copiar la URL"
            href="javascript:getlink();">
            <svg class="scale" width="38" height="38">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/iconos-share.svg#copy"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>

<?php endwhile;

get_footer();

?>