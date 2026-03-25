<style>
    header.nem26{
    background-image: url(https://prepaenlinea.sep.gob.mx/wp-content/uploads/2026/01/09C.07_banner_portal.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 250px;
    }
    /* boletin convo 2026 */
    header.c26{
    padding: 24px 0;
    text-align: center;
    }
    .main-c26 h1{
    font-family: "Noto Sans", serif!important;
    font-weight: 800;
    font-size: 28px;
    text-align: center;
    color: #9DA73D;
    }
    .main-c26 h5{
    font-family: "Noto Sans", serif!important;
    font-size: 20px;
    font-weight: 700;
    color: #9DA73D;
    }
    .main-c26 a{
    color: #5B5B5B;
    font-weight: 700;
    text-decoration:underline!important;
    }
    .main-c26 a:hover{
    color: #9DA73D;
    }
    .main-c26 figcaption{
    font-size: 16px;
    font-weight: 700;
    color:#5B5B5B;
    text-align: center;
    }
    
.main-c26 .btn-c26 {
    background-color: transparent;
    border: 1px solid #9DA73D;
    border-radius: 7px;
    color: #9DA73D;
    padding: 10px 20px;
    text-decoration: none!important;
    font-weight: 500;
    font-size: 16px;
    transition: all .4s ease-out;
}

.main-c26 .btn-c26:hover {
    transition: all .4s ease-out;
    background-color: #9DA73D;
    border: 1px solid #5B5B5B;
    color: #fff;
    font-size: 16px;
}

    .main-c26, .main-c26 .elementor-widget-text-editor {
    font-family: "Noto Sans", serif!important;
    font-weight: 18px;
    font-weight: 400;
    color: #5B5B5B!important;
    }
    .postid-50093 img{
    border-bottom: 5px solid #9DA73D!important;
    box-shadow: 0px 6px 7px 0px #00000040!important;
    margin-bottom: 14px;
    }
   
.post-template-single-c26 .share {
    height: 110px;
    font-family: "Noto Sans", serif;
}

.post-template-single-c26 .share, .post-template-single-c26 .share svg {
    color: #9DA73D;
}

.button {
    position: relative;
    display: inline-block;
    cursor: pointer;
    outline: none;
    border: 0;
    vertical-align: middle;
    text-decoration: none;
    background: transparent;
    padding: 0;
    font-size: inherit;
    font-family: inherit;
}

.button.learn-more {
    width: 20rem;
    height: auto;
}

.button.learn-more .circle {
    transition: all 0.45s cubic-bezier(0, 1.25, 1, 0.99);
    position: relative;
    display: block;
    margin: 0;
    width: 56px;
    height: 58px;
    background: #7D2983;
    clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
    border-radius: 6px;
}

.button.learn-more .circle .icon {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    background: #fff;
}

.button.learn-more .circle .icon.arrow {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    left: 0.625rem;
    width: 1.125rem;
    height: 0.125rem;
    background: none;
}

.button.learn-more .circle .icon.arrow::before {
    position: absolute;
    content: "";
    top: -0.25rem;
    right: 0.0625rem;
    width: 0.625rem;
    height: 0.625rem;
    border-top: 0.125rem solid #fff;
    border-right: 0.125rem solid #fff;
    transform: rotate(45deg);
}

.button.learn-more .button-text {
    transition: all 0.45s cubic-bezier(0, 1.51, 1, 0.99);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 0.75rem 0;
    margin: 2px 0 0 40px;
    color: #7D2983;
    font-weight: 700;
    text-align: center;
    border: 1px solid #7D2983;
    border-left-width: 0px;
    font-size: 30px;
    line-height: 30px;
    height: 54px;
    border-radius: 6px;
}

.button:hover .circle {
    width: 100%;
    clip-path: inset(0 0 0 0);
}

.button:hover .circle .icon.arrow {
    background: #fff;
    transform: translate(1rem, 0);
}

.button:hover .button-text {
    color: #fff;
}

</style>
<?php

/**
 *
 * Template Name: boletines convos 2026
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
    <header class="c26">
        <img src="https://prepaenlinea.sep.gob.mx/wp-content/uploads/2026/02/convocatorias-2026.png" class="img-fluid" alt="convocatorias-2026">
    </header>
    
    <main class="main-c26">
        <?php the_content(); ?>
    </main>
   
    <div class="container share">
    <div class="row justify-content-center pb-5">
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