
<style>
    header.nem26{
    background-image: url(https://prepaenlinea.sep.gob.mx/wp-content/uploads/2026/01/09C.07_banner_portal.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 250px;
    }

    .main-nem26{
        font-family: "Noto Sans", serif!important;
        color:#474747;
        font-size: 18px;
        line-height: 2.2rem;
        font-weight: 400;
        letter-spacing: .4px;
    }
    .main-nem26 a{
        color: #0d6efd;
        text-decoration: underline;
    }
    .main-nem26 a:hover{
        color: #474747;
    }
    .entry-title-nem{
        font-size: 40px;
        font-weight: 600;
        color: #7D2982;
        font-family: "Noto Sans", serif!important;
    }

    .post-template-single-nem26 .text-invitacion{
        color: #474747;
        font-family: "Noto Sans", serif!important;
        font-size: 18px;
        font-weight: 400;
    }
    .text-invitacion{
        font-size: 26px;
        font-weight: 500;
        color: #7D2982;
        font-family: "Noto Sans", serif;
    }
    .main-nem25, .main-nem25 p, .main-nem25 .elementor-widget-container{
        font-size: 18px;
        line-height: 2.2rem;
        color: #7D2982;
        font-weight: 400;
        font-family: "Noto Sans", serif;
        letter-spacing: .4px;
    }
    .main-nem25 .widget-image-caption, .main-nem25 .wp-caption-text{
        font-size: 16px!important;
        font-weight: 400!important;
        color: #4a274b!important;
        font-family: "Noto Sans", serif!important;
    }

    .main-nem25 .elementor a:hover {
        color: #f4565b;
    }
    .main-nem25 .elementor a {
        color: #7C2C82;
        font-weight: 500;
        text-decoration: underline;
    }
</style>
<?php

/**
 *
 * Template Name: boletines NEM 2026
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
    <header class="nem26">

    </header>
    
    <main class="main-nem26">
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
    
  <div class="container formulario d-none">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <p class="text-invitacion">
¿Te gustaría apoyar a la comunidad de aprendizaje de Prepa en Línea-SEP <br>
participando en alguna grabación de video para los boletines de la NEM?
                </p>
                <p><a href="https://forms.gle/hDzebAzq5bijaL8HA" target="_blank"><img src="https://prepaenlinea.sep.gob.mx/wp-content/uploads/2025/02/btn-formulario.png" class="img-fluid scale" alt="btn-formulario"></a></p>
            </div>
        </div>
    </div>
<?php endwhile;

get_footer();

?>