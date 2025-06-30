<?php

/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage PL-SEP-2025
 */

?>
<section id="boletines">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="titulou">Boletines</h2>
            </div>
        </div>
        <div class="row my-4">
            

                <div class="col-12">
                    <div class="accordion" id="accordion-boletines-home">
                        <?php $boletines_home = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'has_password' => false, 'posts_per_page' => 5)); ?>
                        <?php while ($boletines_home->have_posts()) : $boletines_home->the_post(); ?>
                        <?php if ($boletines_home->current_post == 0) : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo mb_strimwidth(get_the_title(), 0, 22, '...');?>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion-boletines-home">
                                    <div class="accordion-body">
                                        <h3 class="titulo-boletin-home mt-4"><?php the_title(); ?></h3>
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-md">
                                                    <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                                                </div>
                                                <div class=" col-12 col-md-7">
                                                    <p><?php echo excerpt('31'); ?></p>
                                                    <p class="fecha-boletin-home">Prepa en Línea-SEP, <time datetime="<?php the_time('c') ?>" title="<?php the_time('c') ?>"><?php the_time('j \d\e F \d\e Y'); ?>.
                                                    </p>
                                                    <a class="btn-leer-mas" href="<?php the_permalink(); ?>">
                                                        Leer completo
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" height="15px" width="15px" class="icon">
                                                            <path stroke-linejoin="round" stroke-linecap="round"
                                                                stroke-miterlimit="10" stroke-width="1.5" stroke="#292D32"
                                                                d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php elseif ($boletines_home->current_post == 1) : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <?php echo mb_strimwidth(get_the_title(), 0, 22, '...');?>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-boletines-home">
                                    <div class="accordion-body">
                                        <h3 class="titulo-boletin-home mt-4"><?php the_title(); ?></h3>
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-md">
                                                    <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                                                </div>
                                                <div class=" col-12 col-md-7">
                                                    <p><?php echo excerpt('31'); ?></p>
                                                    <p class="fecha-boletin-home">Prepa en Línea-SEP, <time datetime="<?php the_time('c') ?>" title="<?php the_time('c') ?>"><?php the_time('j \d\e F \d\e Y'); ?>.
                                                    </p>
                                                    <a class="btn-leer-mas" href="<?php the_permalink(); ?>">
                                                        Leer completo
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" height="15px" width="15px" class="icon">
                                                            <path stroke-linejoin="round" stroke-linecap="round"
                                                                stroke-miterlimit="10" stroke-width="1.5" stroke="#292D32"
                                                                d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php elseif ($boletines_home->current_post == 2) : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <?php echo mb_strimwidth(get_the_title(), 0, 22, '...');?>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-boletines-home">
                                    <div class="accordion-body">
                                        <h3 class="titulo-boletin-home mt-4"><?php the_title(); ?></h3>
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-md">
                                                    <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                                                </div>
                                                <div class=" col-12 col-md-7">
                                                    <p><?php echo excerpt('31'); ?></p>
                                                    <p class="fecha-boletin-home">Prepa en Línea-SEP, <time datetime="<?php the_time('c') ?>" title="<?php the_time('c') ?>"><?php the_time('j \d\e F \d\e Y'); ?>.
                                                    </p>
                                                    <a class="btn-leer-mas" href="<?php the_permalink(); ?>">
                                                        Leer completo
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" height="15px" width="15px" class="icon">
                                                            <path stroke-linejoin="round" stroke-linecap="round"
                                                                stroke-miterlimit="10" stroke-width="1.5" stroke="#292D32"
                                                                d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php elseif ($boletines_home->current_post == 3) : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       <?php echo mb_strimwidth(get_the_title(), 0, 22, '...');?>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-boletines-home">
                                    <div class="accordion-body">
                                        <h3 class="titulo-boletin-home mt-4"><?php the_title(); ?></h3>
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-md">
                                                    <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                                                </div>
                                                <div class=" col-12 col-md-7">
                                                    <p><?php echo excerpt('31'); ?></p>
                                                    <p class="fecha-boletin-home">Prepa en Línea-SEP, <time datetime="<?php the_time('c') ?>" title="<?php the_time('c') ?>"><?php the_time('j \d\e F \d\e Y'); ?>.
                                                    </p>
                                                    <a class="btn-leer-mas" href="<?php the_permalink(); ?>">
                                                        Leer completo
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" height="15px" width="15px" class="icon">
                                                            <path stroke-linejoin="round" stroke-linecap="round"
                                                                stroke-miterlimit="10" stroke-width="1.5" stroke="#292D32"
                                                                d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php elseif ($boletines_home->current_post == 4) : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <?php echo mb_strimwidth(get_the_title(), 0, 22, '...');?>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-boletines-home">
                                    <div class="accordion-body">
                                        <h3 class="titulo-boletin-home mt-4"><?php the_title(); ?></h3>
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-md">
                                                    <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                                                </div>
                                                <div class=" col-12 col-md-7">
                                                    <p><?php echo excerpt('31'); ?></p>
                                                    <p class="fecha-boletin-home">Prepa en Línea-SEP, <time datetime="<?php the_time('c') ?>" title="<?php the_time('c') ?>"><?php the_time('j \d\e F \d\e Y'); ?>.
                                                    </p>
                                                    <a class="btn-leer-mas" href="<?php the_permalink(); ?>">
                                                        Leer completo
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" height="15px" width="15px" class="icon">
                                                            <path stroke-linejoin="round" stroke-linecap="round"
                                                                stroke-miterlimit="10" stroke-width="1.5" stroke="#292D32"
                                                                d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                    <p class="my-3 text-center"><a class="btn-menu   active" aria-current="page" href="<?php echo SITE_URL ?>/boletines">Ver todos</a>
                    </p>
                </div>
            
        </div>
    </div>
</section>