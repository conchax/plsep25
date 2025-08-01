<?php get_header();
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package 
 */

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
  <main>
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
            <i class="fab fa-facebook-f scale "></i>
          </a>


          <a title="Haz clic para compartir en X"
            href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>&amp;text=<?php echo urlencode(get_the_title()) ?>"
            target="_blank" rel="nofollow noopener noreferrer">
            <i class="fa-brands fa-x-twitter scale"></i>
          </a>

          <a title="Haz clic para compartir en whatsapp"
            href="https://api.whatsapp.com/send?text=<?php the_permalink() ?>"
            target="_blank" rel="nofollow noopener noreferrer">
            <i class="fab fa-whatsapp scale "></i>
          </a>

          <a title="Haz clic para copiar la URL"
            href="javascript:getlink();">
            <i class="fa-solid fa-link scale"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
<?php
endwhile;
get_footer(); ?>