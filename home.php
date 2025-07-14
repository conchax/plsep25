<?php
/*
  Template  Name: Portal PL-SEP-2025
  */
?>
<?php get_header(); ?>

<section class="section-w">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h1 class="titulou">Boletines</h1>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="breadcrumb"><?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?></div>
    </div>
  </div>
</section>

<section>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-8 text-center mb-5 px-4">
        ¡Bienvenido! En esta sección descubrirás información esencial y relevantede Prepa en Línea-SEP. Explora cada categoría y mantente al día con la información que hemos preparado para ti.
      </div>
    </div>
  </div>
  <div class="container cont mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="text-center">
          <svg width="50" height="50">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/boletines.svg#icono-boletin-convocatoria" />
          </svg>
          <p><b>Boletines de convocatoria</b></p>
          <p class="parrafo-lineas-boletin">Te presentamos información de nuestras convocatorias, una guía para estar al tanto de fechas importantes, requisitos y particularidades del servicio.</p>
          <a class="btn-leer-mas mx-auto" href="<?php echo SITE_URL ?>/convocatorias/">
              Ver todos
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15px"
                  width="15px" class="icon">
                  <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10"
                      stroke-width="1.5" stroke="#292D32"
                      d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008">
                  </path>
              </svg>
          </a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="text-center">
          <svg width="50" height="50">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/boletines.svg#icono-boletin-nem" />
          </svg>
          <p><b>Boletines de la NEM</b></p>
          <p class="parrafo-lineas-boletin">Descubre temas relevantes de la Nueva Escuela Mexicana (NEM). Mantente informado sobre los pilares de la educación para la transformación educativa en México.</p>
          <a class="btn-leer-mas mx-auto" href="<?php echo SITE_URL ?>/nem/">
              Ver todos
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15px"
                  width="15px" class="icon">
                  <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10"
                      stroke-width="1.5" stroke="#292D32"
                      d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008">
                  </path>
              </svg>
          </a>          
        </div>
      </div>
      <div class="col-lg-4">
        <div class="text-center">
          <svg width="50" height="50">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/boletines.svg#icono-boletin-eventos" />
          </svg>
          <p><b>Eventos PL-SEP</b></p>
          <p class="parrafo-lineas-boletin">Aquí encontrarás información sobre noticias y eventos destacados para la comunidad de Prepa en Línea-SEP.</p>
          <a class="btn-leer-mas mx-auto" href="<?php echo SITE_URL ?>/especiales/">
              Ver todos
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15px"
                  width="15px" class="icon">
                  <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10"
                      stroke-width="1.5" stroke="#292D32"
                      d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008">
                  </path>
              </svg>
          </a>            
        </div>        
      </div>
    </div>
    <div class="row">
      <div class="line-boletines-svg d-none d-lg-inline-block">
          <div class=" text-center ">
            <svg viewBox="0 0 1324 343" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M662.068 48.4844H661.068V0L662.068 4.37112e-08V48.4844Z" fill="#D9D9D9"/>
              <path d="M1110.05 42.0391V48.4844H1109.05V42.0391C1109.05 34.0311 1102.56 27.5391 1094.55 27.5391L229.451 27.5392C221.443 27.5392 214.951 34.0311 214.951 42.0392V48.4845H213.951V42.0392C213.951 33.4789 220.89 26.5392 229.451 26.5392L1094.55 26.5391C1103.11 26.5391 1110.05 33.4788 1110.05 42.0391Z" fill="#D9D9D9"/>
              <path d="M398.901 341.189V342.189H30V341.189H398.901ZM427.901 312.189V78.4844C427.901 62.4682 414.918 49.4844 398.901 49.4844H30C13.9838 49.4844 1.00001 62.4682 1 78.4844V312.189C1 328.205 13.9837 341.189 30 341.189V342.189C13.4315 342.189 0 328.757 0 312.189V78.4844C1.06608e-05 62.1748 13.015 48.905 29.2256 48.4942L30 48.4844H398.901C415.47 48.4844 428.901 61.9159 428.901 78.4844V312.189C428.901 328.757 415.47 342.189 398.901 342.189V341.189C414.918 341.189 427.901 328.205 427.901 312.189Z" fill="#D9D9D9"/>
              <path d="M846.451 341.189V342.189H477.549V341.189H846.451ZM875.451 312.189V78.4844C875.451 62.4682 862.467 49.4844 846.451 49.4844H477.549C461.533 49.4844 448.549 62.4682 448.549 78.4844V312.189C448.549 328.205 461.533 341.189 477.549 341.189V342.189C460.981 342.189 447.549 328.757 447.549 312.189V78.4844C447.549 62.1748 460.564 48.905 476.775 48.4942L477.549 48.4844H846.451C863.019 48.4844 876.451 61.9159 876.451 78.4844V312.189C876.451 328.757 863.019 342.189 846.451 342.189V341.189C862.467 341.189 875.451 328.205 875.451 312.189Z" fill="#D9D9D9"/>
              <path d="M1294 341.189V342.189H925.099V341.189H1294ZM1323 312.189V78.4844C1323 62.4682 1310.02 49.4844 1294 49.4844H925.099C909.082 49.4844 896.099 62.4682 896.099 78.4844V312.189C896.099 328.205 909.082 341.189 925.099 341.189V342.189C908.53 342.189 895.099 328.757 895.099 312.189V78.4844C895.099 62.1748 908.114 48.905 924.324 48.4942L925.099 48.4844H1294C1310.57 48.4844 1324 61.9159 1324 78.4844V312.189C1324 328.757 1310.57 342.189 1294 342.189V341.189C1310.02 341.189 1323 328.205 1323 312.189Z" fill="#D9D9D9"/>
            </svg>
          </div>
      </div>
    </div>
  </div>
</section>

<section id="boletines">
  <div class="container">
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
                    <?php echo mb_strimwidth(get_the_title(), 0, 22, '...'); ?>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show"
                  data-bs-parent="#accordion-boletines-home">
                  <div class="accordion-body">
                    <h3 class="titulo-boletin-home mt-4"><?php the_title(); ?></h3>
                    <div class="container">
                      <div class="row align-items-center">
                        <div class="col-lg-4 text-center">
                          <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                                            </div>
                                            <div class=" col-lg-8">
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
                    <?php echo mb_strimwidth(get_the_title(), 0, 22, '...'); ?>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse"
                  data-bs-parent="#accordion-boletines-home">
                  <div class="accordion-body">
                    <h3 class="titulo-boletin-home mt-4"><?php the_title(); ?></h3>
                    <div class="container">
                      <div class="row align-items-center">
                        <div class="col-lg-4 text-center">
                          <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                                            </div>
                                            <div class=" col-lg-8">
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
                    <?php echo mb_strimwidth(get_the_title(), 0, 22, '...'); ?>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse"
                  data-bs-parent="#accordion-boletines-home">
                  <div class="accordion-body">
                    <h3 class="titulo-boletin-home mt-4"><?php the_title(); ?></h3>
                    <div class="container">
                      <div class="row align-items-center">
                        <div class="col-lg-4 text-center">
                          <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                                            </div>
                                            <div class=" col-lg-8">
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
                    <?php echo mb_strimwidth(get_the_title(), 0, 22, '...'); ?>
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse"
                  data-bs-parent="#accordion-boletines-home">
                  <div class="accordion-body">
                    <h3 class="titulo-boletin-home mt-4"><?php the_title(); ?></h3>
                    <div class="container">
                      <div class="row align-items-center">
                        <div class="col-lg-4 text-center">
                          <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                                            </div>
                                            <div class=" col-lg-8">
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
                    <?php echo mb_strimwidth(get_the_title(), 0, 22, '...'); ?>
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse"
                  data-bs-parent="#accordion-boletines-home">
                  <div class="accordion-body">
                    <h3 class="titulo-boletin-home mt-4"><?php the_title(); ?></h3>
                    <div class="container">
                      <div class="row align-items-center">
                        <div class="col-lg-4 text-center">
                          <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                                            </div>
                                            <div class=" col-lg-8">
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
      </div>
    </div>
  </div>
</section>





<?php get_footer(); ?>