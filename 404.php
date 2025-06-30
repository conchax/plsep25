<?php
/**
 * The template for displaying search results pages
 *
 * 
 *
 * @package WordPress
 * @subpackage Portal PL-SEP-2025
 * @since Portal PL-SEP-2025 2.1
 */

get_header();?>

<section class="section-w">
    <div class="container-xxl">
        <div class="row">
            <div class="breadcrumb"><?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?></div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row justify-content-center align-items-center text-center">
        <div class="col-12 col-md-8">
            <img src="<?php echo get_template_directory_uri(); ?>/img/error_404.webp" class="img-fluid" alt="404" style="width:600px">
        </div>
        <div class="col-12 col-md-4">
            <h1> Ooops! </h1> 
            <h3 >Lo siento, Esta página no se puede encontrar</h3> 
            <p class="mt-5"><a class="btn btn-home" href="<?php echo SITE_URL ?>/" role="button">Regresar a la página principal</a></p>
            <p>o</p>
            <p class="text-center"> ¿Quizás intentar una búsqueda?</p>
            <div id="contenido">
                <form action="<?php echo SITE_URL; ?>" method="get" enctype="multipart/form-data" class="form-only-controls">
                    <div class="input-group">
                        <input type="text" name="s" placeholder="Busca en PL-SEP" value="" class="form-control text-left autocomplete" />
                        <button type="submit" class="btn btn-default link-menu"><span class="text-hide sr-only">Buscar</span>
                                <svg class="iconos-m" width="20" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 54.99 54.96"><defs><style>      .icono-m-1 {        fill: none;        stroke: #E0E7A5;        stroke-linecap: round;        stroke-linejoin: round;        stroke-width: 5px;      }    </style></defs><g data-name="Capa 1"><g><line class="icono-m-1" x1="52.49" y1="52.46" x2="36.62" y2="36.59"></line><circle class="icono-m-1" cx="22.48" cy="22.48" r="19.98"></circle></g></g></svg>
                        </button>
                    </div>
                </form>    
            </div> 

        </div>
    </div>
</div>





<?php get_footer(); ?>