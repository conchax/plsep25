<?php

if (!defined('ABSPATH'))
  exit; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://cdn.jsdelivr.net/">
  <link rel="preconnect" href="https://www.googletagmanager.com/">
  <link rel="preconnect" href="https://www.google-analytics.com/">

  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <?php wp_head(); ?>

  <?php get_template_part('template-parts/gatm'); ?>
  <link rel="stylesheet" id="estilos-css" href="<?php echo get_template_directory_uri(); ?>/css/style.css?ver=6.8.1" type="text/css" media="all">
  <link rel="stylesheet" id="estilos-css" href="<?php echo get_template_directory_uri(); ?>/css/menu.css?ver=6.8.1" type="text/css" media="all">
  
</head>

<body <?php body_class(); ?> data-offset="100">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQGQHDQN"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header>
    <nav class="navbar navbar-expand-lg nav-gob">
      <div class="container px-md-5">
        <a class="navbar-brand px-md-5" href="https://www.gob.mx/" target="_blank">
          <img src="https://framework-gb.cdn.gob.mx/gobmx/img/logo_blanco.svg" alt="Logo Gobierno de México"
            width="80">
        </a>
        <div>
          <div class="navbar-nav ms-auto">
            <div class="nav-item"><a class="nav-link" href="https://www.gob.mx/tramites"
                target="_blank">Trámites</a></div>
            <div class="nav-item"><a class="nav-link" href="https://www.gob.mx/gobierno"
                target="_blank">Gobierno</a></div>
            <div class="nav-item"><a class="nav-link" aria-label="Buscar en gob.mx"
                href="https://www.gob.mx/busqueda" target="_blank">
                <svg width="24" height="24">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icono-lupa" />
                </svg>

              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="fixedmenu">
      <div class="bg-institucional">
        <div class="container">
          <div class="row text-center">
            <svg id="convivencia" width="250" height="34">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#logo-convivencia" />
            </svg>
          </div>
        </div>
      </div>

      <div class=" bg-h shadow-sm">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-7 col-md-4 text-start">
              <a aria-label="home plsep" href="<?php echo SITE_URL ?>">
                <svg width="193" height="33">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#logo-plsep" />
                </svg>
              </a>
            </div>
            <div class="col-5 col-md-8 text-end">
              <div class="d-inline-flex gap-2">
                <a class=" btn-menu" href="<?php echo SITE_URL ?>/preguntas-frecuentes/">
                  <svg width="20" height="20">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icono-faq" />
                  </svg> <span class="t"> Preguntas frecuentes</span>
                </a>
                <a class=" btn-menu" href="#">
                  <svg width="22" height="22">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icono-micomunidad" />
                  </svg> <span class="t"> Mi comunidad</span>
                </a>
                <a type="button" class=" btn-menu fw-bold" >
                  <label for="myInput">
                    <svg style="margin-top: -4px;" width="20" height="20">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icono-menu" />
                    </svg> <span class="t"> Menú</span>
                  </label>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- MENU over -->
  <input type="checkbox" id="myInput">
  <label for="myInput">
    <span class="bar top"></span>
    <span class="bar middle"></span>
    <span class="bar bottom"></span>
  </label>
  <aside class="over">
    <div class="aside-section aside-left">
      <div class="aside-content">
        <a href="https://prepaenlinea.sep.gob.mx/convocatorias-2025/">
          <img class="bannerFull" alt="Banner" src="<?php echo get_template_directory_uri(); ?>/img/banner-registro.png" class="" alt="registro">
          <img class="bannerFullR" alt="Banner" src="<?php echo get_template_directory_uri(); ?>/img/banner-m-registro.png" class="" alt="registro">
        </a>
      </div>
    </div>
    <div class="aside-section aside-right">
  
      <ul class="aside-list">
        <li><a href="<?php echo SITE_URL ?>/quienes-somos/" class="aside-anchor">¿Quiénes somos?</a></li>
        <li><a href="<?php echo SITE_URL ?>/modelo-educativo/" class="aside-anchor">Modelo educativo</a></li>
        <li><a href="<?php echo SITE_URL ?>/plan-de-estudios/" class="aside-anchor">Plan de estudios</a></li>
        <li><a href="<?php echo SITE_URL ?>/boletines/" class="aside-anchor">Boletines</a></li>
        <li><a href="<?php echo SITE_URL ?>/egresados/" class="aside-anchor">Egresados</a></li>
        <li><a href="#" class="aside-anchor">Examen único</a></li>
      </ul>
  
      <div class="menu-footer">
        <div class="container-links">
          <a class="aside-anchor" href="#">Mapa de sitio</a> <a class="aside-anchor"
            href="https://prepaenlinea.sep.gob.mx/mesadeservicio" target="_blank">Mesa de servicio</a> <a
            class="aside-anchor" href="<?php echo SITE_URL ?>/transparencia/">Transparencia</a>
        </div>
        <hr class="line-menu-over">
        <div class="container-social">
          <a href="https://www.facebook.com/PrepaEnLineadelaSEP/" target="_blank" title="Facebbok">
            <svg width="40" height="40">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sociales.svg#facebook" />
            </svg>
          </a>
          <a href="https://x.com/PrepaLineaSEP/" target="_blank" title="X">
            <svg width="40" height="40">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sociales.svg#x" />
            </svg>
          </a>
          <a href="https://www.instagram.com/prepaenlineasep/" target="_blank" title="instagram">
            <svg width="40" height="40">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sociales.svg#instagram" />
            </svg>
          </a>
          <a href="https://www.youtube.com/@PrepaenLinea-SEP/" target="_blank" title="YouTube">
            <svg width="40" height="40">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sociales.svg#youtube" />
            </svg>
          </a>
          <a href="https://www.tiktok.com/@prepaenlinea_sep/" target="_blank" title="TikTok">
            <svg width="40" height="40">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sociales.svg#tiktok" />
            </svg>
          </a>
          <a href="https://open.spotify.com/show/5GH1mXSrMx6AMchq1EAsHc?si=f407167b9a89491a&nd=1" target="_blank"
            title="Spotify">
            <svg width="40" height="40">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sociales.svg#spotify" />
            </svg>
          </a>
        </div>
      </div>

      
    </div>

  </aside>    
  </header>