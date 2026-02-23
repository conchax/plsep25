<style>
 main .c25{
     font-family: "Noto Sans", serif!important;
        color:#474747;
        font-size: 18px;
        line-height: 2.2rem;
        font-weight: 400!important;
        letter-spacing: .4px;
  } 
    ul {
      list-style: none;
      margin-top: 20px; 
  }
  .elementor a {
      color: #0d6efd;
      font-weight: 500!important;
      text-decoration: underline!important;
      color: #67ab44
  }
  .elementor a:hover{
    color: #5C5B5B;
  }
  .caja{
      position: relative;
      display: inline-block;
    }
    .enlaces {
      position: absolute;
      top: 0px;
      width: 100%;
      padding: 0 12px
    }

    ul.links{
      display:flex;  
      list-style:none;
      justify-content: space-between;
      padding: 0 15px;
    }
    ul.links li{
      font-size: 38px;
    }  
    
</style>
<?php get_header();
/**
 *
 * Template Name:boletines  convos 2025
 * Template Post Type: post
 *
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
  <main class="c25">
    <?php the_content(); ?>
  </main>

   <section class="mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="caja">
                        <img src="https://prepaenlinea.sep.gob.mx/wp-content/uploads/2025/01/titulo.png" class="img-fluid" alt="lineas">
                        <div class="titulo">Enlaces de interés</div>
                        <div class="enlaces"> 
                            <ul class="links">
                                <li><a title="Sección preguntas frecuentes" href="https://prepaenlinea.sep.gob.mx/contacto/preguntas-frecuentes/" target="_blank">
                                    <svg class="scale" width="45" height="43">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/iconos-interes-share.svg#faqs"></use>
                                    </svg> 
                                </a></li>
                                <li><a title="Sección difusión y vinculación" href="https://prepaenlinea.sep.gob.mx/convocatorias-2026/difunde-plsep.php" target="_blank">
                                    <svg class="scale" width="30" height="42">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/iconos-interes-share.svg#difusion"></use>
                                    </svg>

                                </a></li>
                                <li><a title="Sección mesa de servicio" href="https://prepaenlinea.sep.gob.mx/mesadeservicio" target="_blank">
                                    <svg class="scale" width="30" height="42">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/iconos-interes-share.svg#mesas"></use>
                                    </svg>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="caja">
                        <img src="https://prepaenlinea.sep.gob.mx/wp-content/uploads/2025/01/titulo.png" class="img-fluid" alt="lineas">
                        <div class="titulo">Compartir boletín</div>
                        <div class="enlaces"> 
                            <ul class="links">
                                <li>
                                    <a title="Haz clic para compartir en Facebook"
                                      href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>"
                                      target="_blank" rel="nofollow noopener noreferrer">
                                      <svg class="scale" width="38" height="38">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/iconos-share.svg#facebook"></use>
                                      </svg>            
                                    </a>
                                </li>
                                <li>
                                    <a title="Haz clic para compartir en X"
                                      href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>&amp;text=<?php echo urlencode(get_the_title()) ?>"
                                      target="_blank" rel="nofollow noopener noreferrer">
                                      <svg class="scale" width="38" height="38">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/iconos-share.svg#x"></use>
                                      </svg>            
                                    </a>
                                </li>
                                <li>
                                    <a title="Haz clic para compartir en whatsapp"
                                      href="https://api.whatsapp.com/send?text=<?php the_permalink() ?>"
                                      target="_blank" rel="nofollow noopener noreferrer">
                                      <svg class="scale" width="38" height="38">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/iconos-share.svg#whatsapp"></use>
                                      </svg>            
                                    </a>

                                </li>
                                <li>
                                    <a title="Haz clic para copiar la URL"
                                      href="javascript:getlink();">
                                      <svg class="scale" width="38" height="38">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/iconos-share.svg#copy"></use>
                                      </svg> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      
  
<?php
endwhile;
get_footer(); ?>