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
    .btn-c26 {
        background-color: transparent;
        border: 1px solid #9DA73D;
        border-radius: 7px;
        color: #9DA73D;
        padding: 10px 20px;
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
        transition: all .4s ease-out;
    }
    .btn-c26:hover {
        transition: all .4s ease-out;
        background-color: #9DA73D;
        color: #5B5B5B;
        font-size: 17px;
    }
    .main-c26, .main-c26 .elementor-widget-text-editor {
    font-family: "Noto Sans", serif!important;
    font-weight: 18px;
    font-weight: 400;
    color: #5B5B5B!important;
    }
    .main-c26 img{
    border-bottom: 5px solid #9DA73D!important;
    box-shadow: 0px 6px 7px 0px #00000040!important;
    margin-bottom: 14px;
    }
    .post-template-single-c26 .share, .post-template-single-c26 .share i {
        color: #9DA73D;
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

   
<?php endwhile;

get_footer();

?>