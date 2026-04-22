<?php

/**
 *
 * Template Name: boletines de actividades NEM 2026
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

    <div class="container">
        <div class="row">
            <div class="col-12">
                <hr>
    <?php 
        echo 'Explora nuestras actividades del mes de:';
        $tags_fiter = array('enero-y-febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');

        $current_post_id = get_the_ID();

        echo '<div class="boletines-container" style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 20px;">';

        foreach ($tags_fiter as $slug) {
            $args = array(
                'tag'            => $slug,
                'posts_per_page' => 1,
                'post_status'    => 'publish'
            );
            
            $query_posts = get_posts($args);

            if (!empty($query_posts)) {
                $found_post = $query_posts[0]; 
                
                if ($found_post->ID == $current_post_id) {
                    continue; 
                }

                $post_url = get_permalink($found_post->ID);
                
                // CAMBIO AQUÍ: Usamos 'medium' en lugar de 'post-thumbnail'
                $post_thumbnail = get_the_post_thumbnail($found_post->ID, 'medium', array('class' => 'img-boletin-mediana'));

                if ($post_thumbnail) {
                    echo '<div class="item-boletin" style="max-width: 188px; text-align: center;">';
                        echo '<a href="' . esc_url($post_url) . '">';
                            echo $post_thumbnail;
                        echo '</a>';
                        
                        // Opcional: Si aún quieres que aparezca el nombre del mes debajo de la imagen
                        $tag_obj = get_term_by('slug', $slug, 'post_tag');
                        $tag_name = ($tag_obj) ? $tag_obj->name : $slug;
                        //echo '<p style="margin-top: 10px; font-weight: bold;">' . esc_html($tag_name) . '</p>';
                    echo '</div>';
                }
            }
        }

        echo '</div>';
    ?>                
                <hr>
            </div>
        </div>
    </div>
    <style>
        header.nem26 {
            background-image: url(https://prepaenlinea.sep.gob.mx/wp-content/uploads/2026/03/nueva_identidad_NEM.png);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 350px;
        }

        .main-nem26 {
            font-family: "Noto Sans", serif !important;
            color: #474747;
            font-size: 18px;
            line-height: 2.2rem;
            font-weight: 400;
            letter-spacing: .4px;
        }

        .main-nem26 a {
            color: #0d6efd;
            text-decoration: underline;
        }

        .main-nem26 a:hover {
            color: #474747;
        }

        .entry-title-nem {
            font-size: 40px;
            font-weight: 600;
            color: #7D2982;
            font-family: "Noto Sans", serif !important;
        }

        .post-template-single-nem26 .text-invitacion {
            color: #474747;
            font-family: "Noto Sans", serif !important;
            font-size: 18px;
            font-weight: 400;
        }

        .text-invitacion {
            font-size: 26px;
            font-weight: 500;
            color: #7D2982;
            font-family: "Noto Sans", serif;
        }

        .main-nem25,
        .main-nem25 p,
        .main-nem25 .elementor-widget-container {
            font-size: 18px;
            line-height: 2.2rem;
            color: #7D2982;
            font-weight: 400;
            font-family: "Noto Sans", serif;
            letter-spacing: .4px;
        }

        .main-nem25 .widget-image-caption,
        .main-nem25 .wp-caption-text {
            font-size: 16px !important;
            font-weight: 400 !important;
            color: #4a274b !important;
            font-family: "Noto Sans", serif !important;
        }

        .main-nem25 .elementor a:hover {
            color: #f4565b;
        }

        .main-nem25 .elementor a {
            color: #7C2C82;
            font-weight: 500;
            text-decoration: underline;
        }

        .color {
            background-image: linear-gradient(to right, #f25754, #851982);
            color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
        }

        h1 {
            font-family: "Noto Sans", Sans-serif !important;
        }

        figcaption {
            font-family: "Noto Sans", Sans-serif !important;
            font-size: 15px !important;
            font-weight: 300;
            margin-top: 10px;
        }

        .carousel-inner a {
            text-decoration: underline !important;
        }

        .grays {
            position: relative;
            top: 12px;
        }

        .nem .share,
        .nem .share i {
            color: #86aa02;
        }

        /* carusel */


        .carousel-indicators [data-bs-target] {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid #86aa02;
            margin-right: 20px;
            margin-left: 20px;
            position: relative;
            opacity: 1;
        }

        .carousel-indicators .active {
            opacity: 1;
            background-color: #86aa02;
        }

        .carousel-control-prev-icon {

            margin-left: -100px
        }

        .carousel-control-next-icon {

            margin-right: -100px
        }

        .carousel-inner {
            top: 50px;
            margin-bottom: 60px;
        }

        .carousel-inner p {
            font-size: 18px;
            color: #474747;
            font-family: "Noto Sans", Sans-serif !important;
        }

        .carousel-indicators {
            bottom: unset;
            margin-left: 0;
            margin-right: 0;
        }

        .carousel-indicators button.active::after {
            content: "";
            display: block;
            height: 28px;
            width: 2px;
            position: absolute;
            top: 21px;
            left: 47%;
            transition: opacity 0.3s ease-in-out;
            background-color: #3C4760;
        }

        .carousel-indicators button.active::after {
            content: "";
            display: block;
            height: 17px;
            width: 2px;
            position: absolute;
            top: -19px;
            left: 47%;
            transition: opacity 0.3s ease-in-out;
            background-color: #3C4760;
        }

        .carousel-control-next,
        .carousel-control-prev {
            top: 23px;
            width: 1em;
            align-items: baseline;
        }

        .bb {
            border-top: 5px solid #3C4760;
            border-image: linear-gradient(45deg, #f25754, #851982) 1;

            opacity: 1;
            margin: 1rem 0 !important;
        }

        .recuadro {
            border: 3px solid #3C4760;
            border-radius: 20px;
            padding-bottom: 2em;
        }


        .tt {
            background-color: #86aa02;
            font-size: 25px;
            line-height: 27px;
            font-weight: 700;
            color: #fff;
            padding: 16px 0;
            text-align: center;
            border-radius: 17px 17px 0 0;
            font-family: "Noto Sans", Sans-serif !important;
        }

        .tt2 {
            font-size: 30px;
            line-height: 32px;
            font-weight: 700;
            color: #3C4760;
            margin-bottom: 1em;
            font-family: "Noto Sans", Sans-serif !important;
        }

        .borde-categorias {
            border-radius: 14px;
            box-shadow: 0px 0px 12px 2px #00000026;
            padding: 8px 0;
        }

        .btn-mes {
            color: #86aa02 !important;
            font-size: 20px;
        }

        /*Para ocultar Slides anteriores*/
        .carousel-item {
            transition: transform 0.6s ease-in-out;
            backface-visibility: hidden;
            will-change: transform, opacity;
        }

        /* Oculta completamente los que no están activos */
        .carousel-item:not(.active):not(.carousel-item-next):not(.carousel-item-prev) {
            opacity: 0;
            visibility: hidden;
        }

        .carousel-item.carousel-item-next,
        .carousel-item.carousel-item-prev {
            opacity: 0;
        }

        /* Solo el visible real */
        .carousel-item.active {
            opacity: 1;
            visibility: visible;
        }


        @media (max-width: 575.98px) {
            .carousel-control-prev-icon {
                margin-left: -50px;
                position: sticky;
                top: 125px;
            }

            .carousel-control-next-icon {
                margin-right: -50px;
                position: sticky;
                top: 125px;
            }

            .tt {
                font-size: 20px;
                line-height: 22px;
            }

            .tt2 {
                font-size: 25px;
                line-height: 25px;
            }

            .carousel-inner p,
            {
            font-size: 14px;

            }
        }
        .carousel-indicators button.active::after {
            height: 0;
        }

        .carousel-indicators [data-bs-target] {
            margin-right: auto;
            margin-left: auto;
        }

        /* Selecciona todos los elementos excepto el último */
        .nem-tag:not(:last-child)::after {
        content: ", "; /* Agrega la coma y un espacio */
        }
        .item-boletin{
            overflow: hidden;
        }
        .item-boletin img{
            width:188px;
            height: 97px;
            border-radius:5px;
            border: 2px solid var(--color-border);
            transition: transform 0.5s ease;
        }
        .item-boletin img:hover{
            transform: scale(1.1);
        }
    </style>

<?php endwhile;

get_footer();

?>