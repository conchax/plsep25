<?php

/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage PL-SEP-2024
 */

?>

<nav class="navbar navbar-expand-lg nav-gob">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logoheader.svg" alt="Logo Gobierno de México" width="80"></a>
    <div>
      <div class="navbar-nav ms-auto ">
        <div class="nav-item">
          <a class="nav-link" href="https://www.gob.mx/tramites">Trámites</a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="https://www.gob.mx/tramites" target="_blank">Gobierno</a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="https://www.gob.mx/busqueda?utf8=%E2%9C%93" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lupa.png" width="16px" alt="lup"></a>
        </div>
      </div>
    </div>
  </div>
</nav>

<div class="menu-principal f-top">
  <div class="text-start ms-3">
    <a href="<?php echo SITE_URL ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/lcono-proteccion.svg" width="104" alt="Logo"></a>
  </div>
  <div class="menu-desk" id="menu-buttoms">
    <a class="link-menu d-none d-md-inline-block" href="<?php echo SITE_URL ?>/convocatorias-2024/"><svg width="35" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
        <style>
          .mst0 {
            fill: none;
            stroke: #E0E7A5;
            stroke-width: 5;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10;
          }

          .icono-m-1 {
            fill: none;
            stroke: #E0E7A5;
            stroke-width: 5;
            stroke-linecap: round;
            stroke-miterlimit: 10;
          }
        </style>
        <polyline class="mst0" points="85.4,12 75,27.6 71.1,23.7 "></polyline>
        <path class="mst0" d="M90,25c0,8.3-6.7,15-15,15s-15-6.7-15-15s6.7-15,15-15"></path>
        <polyline class="mst0" points="85.4,62 75,77.6 71.1,73.7 "></polyline>
        <path class="mst0" d="M90,75c0,8.3-6.7,15-15,15s-15-6.7-15-15s6.7-15,15-15"></path>
        <g>
          <g>
            <circle class="icono-m-1" cx="30" cy="34.8" r="11.3"></circle>
          </g>
          <path class="icono-m-1" d="M31.8,47.6l-3.7,0c-8.3,0-15,6.7-15,15l0,6c0,0.8,0.7,1.5,1.5,1.5L45.4,70c0.8,0,1.5-0.7,1.5-1.5v-5.9  C46.9,54.3,40.1,47.5,31.8,47.6z"></path>
        </g>
      </svg> Registro</a>
    <a class="link-menu d-none d-md-inline-block" href="<?php echo SITE_URL ?>/mesadeservicio"><svg class="iconos-m" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 95 95">
        <defs>
          <style>
            .icono-m-1 {
              stroke-linejoin: round;
            }

            .icono-m-1,
            .icono-m-2 {
              fill: none;
              stroke: #E0E7A5;
              stroke-linecap: round;
              stroke-width: 5px;
            }

            .icono-m-2 {
              stroke-miterlimit: 10;
            }
          </style>
        </defs>
        <g data-name="Capa 1">
          <path class="icono-m-1" d="M7.5,57.5H87.5c2.76,0,5,2.24,5,5v30H2.5v-30c0-2.76,2.24-5,5-5Z"></path>
          <g>
            <circle class="icono-m-2" cx="47.49" cy="15.84" r="13.34"></circle>
            <path class="icono-m-2" d="M67.5,48.77c0-9.83-7.98-17.8-17.81-17.78h-4.45c-9.81,.03-17.75,7.98-17.75,17.79"></path>
          </g>
        </g>
      </svg> Mesa de servicio</a>
    <a id="btn-comunidad" class="link-menu d-none d-md-inline-block" data-bs-toggle="modal" data-bs-target="#micomunidad" href="#micomunidad"><svg class="iconos-m" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 82.28 82.12">
        <defs>
          <style>
            .icono-m-1 {
              fill: none;
              stroke: #E0E7A5;
              stroke-linecap: round;
              stroke-linejoin: round;
              stroke-width: 5px;
            }
          </style>
        </defs>
        <g data-name="Capa 1">
          <g>
            <g>
              <circle class="icono-m-1" cx="20.14" cy="19.64" r="10.02"></circle>
              <path class="icono-m-1" d="M28.34,13.89c1.32-.62,2.69-1.14,4.1-1.57,2.14-.64,3.62-2.57,3.62-4.8h0c0-3.31-3.17-5.76-6.35-4.82C16.75,6.53,6.53,16.75,2.7,29.71c-.94,3.17,1.51,6.35,4.82,6.35h0c2.23,0,4.16-1.49,4.8-3.62,.49-1.64,1.12-3.22,1.87-4.73"></path>
            </g>
            <g>
              <circle class="icono-m-1" cx="62.64" cy="20.14" r="10.02"></circle>
              <path class="icono-m-1" d="M68.39,28.34c.62,1.32,1.14,2.69,1.57,4.1,.64,2.14,2.57,3.62,4.8,3.62h0c3.31,0,5.76-3.17,4.82-6.35-3.83-12.96-14.04-23.18-27.01-27.01-3.17-.94-6.35,1.51-6.35,4.82h0c0,2.23,1.49,4.16,3.62,4.8,1.64,.49,3.22,1.12,4.73,1.87"></path>
            </g>
            <g>
              <circle class="icono-m-1" cx="62.14" cy="62.48" r="10.02"></circle>
              <path class="icono-m-1" d="M53.94,68.23c-1.32,.62-2.69,1.14-4.1,1.57-2.14,.64-3.62,2.57-3.62,4.8h0c0,3.31,3.17,5.76,6.35,4.82,12.96-3.83,23.18-14.04,27.01-27.01,.94-3.17-1.51-6.35-4.82-6.35h0c-2.23,0-4.16,1.49-4.8,3.62-.49,1.64-1.12,3.22-1.87,4.73"></path>
            </g>
            <g>
              <circle class="icono-m-1" cx="19.64" cy="61.99" r="10.02"></circle>
              <path class="icono-m-1" d="M13.89,53.78c-.62-1.32-1.14-2.69-1.57-4.1-.64-2.14-2.57-3.62-4.8-3.62h0c-3.31,0-5.76,3.17-4.82,6.35,3.83,12.96,14.04,23.18,27.01,27.01,3.17,.94,6.35-1.51,6.35-4.82h0c0-2.23-1.49-4.16-3.62-4.8-1.64-.49-3.22-1.12-4.73-1.87"></path>
            </g>
          </g>
        </g>
      </svg> Mi comunidad</a>
    <div class="link-menu d-none d-md-inline-block cursor" onClick="muestra_oculta('contenido')"> <svg class="iconos-m" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54.99 54.96">
        <defs>
          <style>
            .icono-m-1 {
              fill: none;
              stroke: #E0E7A5;
              stroke-linecap: round;
              stroke-linejoin: round;
              stroke-width: 5px;
            }
          </style>
        </defs>
        <g data-name="Capa 1">
          <g>
            <line class="icono-m-1" x1="52.49" y1="52.46" x2="36.62" y2="36.59"></line>
            <circle class="icono-m-1" cx="22.48" cy="22.48" r="19.98"></circle>
          </g>
        </g>
      </svg>
    </div>
    <div id="contenido" style="opacity: 0;">
      <form action="<?php bloginfo('url') ?>" method="get" enctype="multipart/form-data" class="form-only-controls">

        <div class="input-group">
          <input type="text" id="s" name="s" placeholder="Busca en PL-SEP" value="" class="form-control text-left autocomplete" />
          <button type="submit" class="btn btn-default link-menu"><span class="text-hide sr-only">Buscar</span>
            <svg class="iconos-m" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54.99 54.96">
              <defs>
                <style>
                  .icono-m-1 {
                    fill: none;
                    stroke: #E0E7A5;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                    stroke-width: 5px;
                  }
                </style>
              </defs>
              <g data-name="Capa 1">
                <g>
                  <line class="icono-m-1" x1="52.49" y1="52.46" x2="36.62" y2="36.59"></line>
                  <circle class="icono-m-1" cx="22.48" cy="22.48" r="19.98"></circle>
                </g>
              </g>
            </svg>
          </button>
        </div>

      </form>
    </div>
  </div>

  <div class="button_container" onclick="myFunction()" id="toggle">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
    <div class="middle text-m">MENÚ</div>
  </div>

</div>