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
  <link rel="stylesheet" id="estilos-css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" media="all">
  <link rel="stylesheet" id="estilos-css" href="<?php echo get_template_directory_uri(); ?>/css/pls.min.css" type="text/css" media="all">
  
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
                <a class=" btn-menu" href="<?php echo SITE_URL ?>/mi-comunidad/">
                  <svg width="22" height="22">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icono-micomunidad" />
                  </svg> <span class="t"> Mi comunidad</span>
                </a>
                <a type="button" class=" btn-menu fw-bold" onclick="menufull()" id="toggle">                  
                  <svg style="margin-top: -4px;" width="20" height="20">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icono-menu" />
                  </svg>
                  <span class="t"> Menú</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- MENU over -->

  <aside id="over" class="over">
    <a class="btn-close-menu" onclick="menufull()" id="close">
      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M15 0C6.64286 0 0 6.64286 0 15C0 23.3571 6.64286 30 15 30C23.3571 30 30 23.3571 30 15C30 6.64286 23.3571 0 15 0ZM15 27.8571C7.92857 27.8571 2.14286 22.0714 2.14286 15C2.14286 7.92857 7.92857 2.14286 15 2.14286C22.0714 2.14286 27.8571 7.92857 27.8571 15C27.8571 22.0714 22.0714 27.8571 15 27.8571Z" fill="CurrentColor"/>
      <path d="M20.7857 22.5L15 16.7143L9.21429 22.5L7.5 20.7857L13.2857 15L7.5 9.21429L9.21429 7.5L15 13.2857L20.7857 7.5L22.5 9.21429L16.7143 15L22.5 20.7857L20.7857 22.5Z" fill="currentColor"/>
      </svg>
    </a>
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
        <li><a href="<?php echo SITE_URL ?>/egresados/certificado-electronico/" class="aside-anchor">Certificado electrónico</a></li>
        <li><a href="<?php echo SITE_URL ?>/egresados/" class="aside-anchor">Egresados</a></li>
      </ul>
  
      <div class="menu-footer">
        <div class="container-links">
          <a class="aside-anchor" href="<?php echo SITE_URL ?>/mapa-del-sitio/">Mapa de sitio</a> <a class="aside-anchor"
            type="button" data-bs-toggle="modal" data-bs-target="#mesa-servicio">Mesa de servicio</a> <a
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