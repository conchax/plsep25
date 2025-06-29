
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
    <nav class="dt d-none d-md-inline-block">
      <div class="menu-dt container">
        <div class="d-flex align-items-start">
          <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link" id="v-pills-conocenos-tab" data-bs-toggle="pill" data-bs-target="#v-pills-conocenos" type="button" role="tab" aria-controls="v-pills-conocenos" aria-selected="true">Conócenos <i class="fa-solid fa-sort-down"></i></button>
            <button class="nav-link" id="v-pills-perfiles-tab" data-bs-toggle="pill" data-bs-target="#v-pills-perfiles" type="button" role="tab" aria-controls="v-pills-perfiles" aria-selected="false">Perfiles de la
              comunidad <i class="fa-solid fa-sort-down"></i></button>
            <button class="nav-link" id="v-pills-programa-tab" data-bs-toggle="pill" data-bs-target="#v-pills-programa" type="button" role="tab" aria-controls="v-pills-programa" aria-selected="false">Nuestro programa <i class="fa-solid fa-sort-down"></i></button>
            <button class="nav-link" id="v-pills-desintegral-tab" data-bs-toggle="pill" data-bs-target="#v-pills-desintegral" type="button" role="tab" aria-controls="v-pills-desintegral" aria-selected="false">Desarrollo integral <i class="fa-solid fa-sort-down"></i></button>
            <a  href="<?php echo SITE_URL ?>/boletines" class="nav-link">Boletines</a>
            <button class="nav-link" id="v-pills-transparencia-tab" data-bs-toggle="pill" data-bs-target="#v-pills-transparencia" type="button" role="tab" aria-controls="v-pills-transparencia" aria-selected="false">Transparencia <i class="fa-solid fa-sort-down"></i></button>
            <!-- <button class="nav-link" id="v-pills-vinculaciones-tab" data-bs-toggle="pill" data-bs-target="#v-pills-vinculaciones" type="button" role="tab" aria-controls="v-pills-vinculaciones" aria-selected="false">Vinculación <i class="fa-solid fa-sort-down"></i></button> -->
            <button class="nav-link" id="v-pills-contacto-tab" data-bs-toggle="pill" data-bs-target="#v-pills-contacto" type="button" role="tab" aria-controls="v-pills-contacto" aria-selected="false">Contacto <i class="fa-solid fa-sort-down"></i></button>                        
            <hr class="menu">
            <a class="nav-link" href="<?php echo SITE_URL ?>/convocatorias-2024/"><svg class="iconos-m" width="30" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve"><style>	.mst0{fill:none;stroke:#E0E7A5;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}	.icono-m-1{fill:none;stroke:#E0E7A5;stroke-width:5;stroke-linecap:round;stroke-miterlimit:10;}</style><polyline class="mst0" points="85.4,12 75,27.6 71.1,23.7 "></polyline><path class="mst0" d="M90,25c0,8.3-6.7,15-15,15s-15-6.7-15-15s6.7-15,15-15"></path><polyline class="mst0" points="85.4,62 75,77.6 71.1,73.7 "></polyline><path class="mst0" d="M90,75c0,8.3-6.7,15-15,15s-15-6.7-15-15s6.7-15,15-15"></path><g>	<g>		<circle class="icono-m-1" cx="30" cy="34.8" r="11.3"></circle>	</g>	<path class="icono-m-1" d="M31.8,47.6l-3.7,0c-8.3,0-15,6.7-15,15l0,6c0,0.8,0.7,1.5,1.5,1.5L45.4,70c0.8,0,1.5-0.7,1.5-1.5v-5.9  C46.9,54.3,40.1,47.5,31.8,47.6z"></path></g></svg> Registro</a>
            <a  href="<?php echo SITE_URL ?>/mesadeservicio" class="nav-link"><svg class="iconos-m" width="23" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 95 95"><defs><style>.icono-m-1 {stroke-linejoin: round;} .icono-m-1, .icono-m-2 {        fill: none;        stroke: #E0E7A5;        stroke-linecap: round;        stroke-width: 5px;      }      .icono-m-2 {        stroke-miterlimit: 10;      }    </style></defs><g data-name="Capa 1"><path class="icono-m-1" d="M7.5,57.5H87.5c2.76,0,5,2.24,5,5v30H2.5v-30c0-2.76,2.24-5,5-5Z"></path><g><circle class="icono-m-2" cx="47.49" cy="15.84" r="13.34"></circle><path class="icono-m-2" d="M67.5,48.77c0-9.83-7.98-17.8-17.81-17.78h-4.45c-9.81,.03-17.75,7.98-17.75,17.79"></path></g></g></svg> Mesa de servicio</a>
            <a id="btn-comunidad" data-bs-toggle="modal" data-bs-target="#micomunidad"  href="#micomunidad"  class="nav-link"><svg  class="iconos-m"  width="23" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 82.28 82.12"><defs><style>      .icono-m-1 {        fill: none;        stroke: #E0E7A5;        stroke-linecap: round;        stroke-linejoin: round;        stroke-width: 5px;      }    </style></defs><g data-name="Capa 1"><g><g><circle class="icono-m-1" cx="20.14" cy="19.64" r="10.02"></circle><path class="icono-m-1" d="M28.34,13.89c1.32-.62,2.69-1.14,4.1-1.57,2.14-.64,3.62-2.57,3.62-4.8h0c0-3.31-3.17-5.76-6.35-4.82C16.75,6.53,6.53,16.75,2.7,29.71c-.94,3.17,1.51,6.35,4.82,6.35h0c2.23,0,4.16-1.49,4.8-3.62,.49-1.64,1.12-3.22,1.87-4.73"></path></g><g><circle class="icono-m-1" cx="62.64" cy="20.14" r="10.02"></circle><path class="icono-m-1" d="M68.39,28.34c.62,1.32,1.14,2.69,1.57,4.1,.64,2.14,2.57,3.62,4.8,3.62h0c3.31,0,5.76-3.17,4.82-6.35-3.83-12.96-14.04-23.18-27.01-27.01-3.17-.94-6.35,1.51-6.35,4.82h0c0,2.23,1.49,4.16,3.62,4.8,1.64,.49,3.22,1.12,4.73,1.87"></path></g><g><circle class="icono-m-1" cx="62.14" cy="62.48" r="10.02"></circle><path class="icono-m-1" d="M53.94,68.23c-1.32,.62-2.69,1.14-4.1,1.57-2.14,.64-3.62,2.57-3.62,4.8h0c0,3.31,3.17,5.76,6.35,4.82,12.96-3.83,23.18-14.04,27.01-27.01,.94-3.17-1.51-6.35-4.82-6.35h0c-2.23,0-4.16,1.49-4.8,3.62-.49,1.64-1.12,3.22-1.87,4.73"></path></g><g><circle class="icono-m-1" cx="19.64" cy="61.99" r="10.02"></circle><path class="icono-m-1" d="M13.89,53.78c-.62-1.32-1.14-2.69-1.57-4.1-.64-2.14-2.57-3.62-4.8-3.62h0c-3.31,0-5.76,3.17-4.82,6.35,3.83,12.96,14.04,23.18,27.01,27.01,3.17,.94,6.35-1.51,6.35-4.82h0c0-2.23-1.49-4.16-3.62-4.8-1.64-.49-3.22-1.12-4.73-1.87"></path></g></g></g></svg> Mi comunidad</a>
          </div>

          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade" id="v-pills-conocenos" role="tabpanel" aria-labelledby="v-pills-conocenos-tab" tabindex="0"> 
              <?php wp_nav_menu( array('menu' => 'DT-conoce')); ?>
            </div>
            <div class="tab-pane fade" id="v-pills-perfiles" role="tabpanel" aria-labelledby="v-pills-perfiles-tab" tabindex="0">
            <?php wp_nav_menu( array('menu' => 'DT-perfiles')); ?>
            </div>
            <div class="tab-pane fade" id="v-pills-programa" role="tabpanel" aria-labelledby="v-pills-programa-tab" tabindex="0">
            <?php wp_nav_menu( array('menu' => 'DT-nuestroPro')); ?>
            </div>
            <div class="tab-pane fade" id="v-pills-desintegral" role="tabpanel" aria-labelledby="v-pills-desintegral-tab" tabindex="0">
            <?php wp_nav_menu( array('menu' => 'DT-desintegral')); ?>
            </div>
            <div class="tab-pane fade" id="v-pills-transparencia" role="tabpanel" aria-labelledby="v-pills-transparencia-tab" tabindex="0">
            <?php wp_nav_menu( array('menu' => 'DT-transparencia')); ?>  
            </div>
            <div class="tab-pane fade" id="v-pills-vinculaciones" role="tabpanel" aria-labelledby="v-pills-vinculaciones-tab" tabindex="0">
            <?php wp_nav_menu( array('menu' => 'DT-vinculaciones')); ?>
            </div>
            <div class="tab-pane fade" id="v-pills-contacto" role="tabpanel" aria-labelledby="v-pills-contacto-tab" tabindex="0">
            <?php wp_nav_menu( array('menu' => 'DT-contacto')); ?>
            </div>  
          </div>

          <div class="banner-menu d-none d-lg-block">
            <a href="https://prepaenlinea.sep.gob.mx/mesadeservicio/" target="_blank" >
              <img class="banner" src="<?php echo get_template_directory_uri(); ?>/img/Bannner_300x600.jpg" width="250" alt="banner">
            </a>
            
          </div>

        </div>
  
        <div class="input-wrapper">
          <?php get_template_part('template-parts/form-menu-all'); ?>
        </div>
      </div>
    </nav>

    <nav class="movil sidebar menu-dt py-2 d-block d-md-none">
      <div class="container-xxl">
        <ul class="nav flex-column" id="nav_accordion">
           <li class="nav-item has-submenu">
            <a class="nav-link" href="#"> Conócenos <i class="fa-solid fa-sort-down"></i> </a>
            <ul class="submenu collapse">
            <?php wp_nav_menu( array('menu' => 'DT-conoce')); ?>
            </ul>
          </li>
          <li class="nav-item has-submenu">
            <a class="nav-link" href="#"> Perfiles de la comunidad <i class="fa-solid fa-sort-down"></i> </a>
            <ul class="submenu collapse">
            <?php wp_nav_menu( array('menu' => 'DT-perfiles')); ?>
            </ul>
          </li>
          <li class="nav-item has-submenu">
            <a class="nav-link" href="#"> Nuestro programa <i class="fa-solid fa-sort-down"></i> </a>
            <ul class="submenu collapse">
            <?php wp_nav_menu( array('menu' => 'DT-nuestroPro')); ?>
            </ul>
          </li>
          <li class="nav-item has-submenu">
            <a class="nav-link" href="#"> Desarrollo integral <i class="fa-solid fa-sort-down"></i> </a>
            <ul class="submenu collapse">
            <?php wp_nav_menu( array('menu' => 'DT-desintegral')); ?>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?php echo SITE_URL ?>/boletines"> Boletines </a>
          </li>
          <li class="nav-item has-submenu">
            <a class="nav-link" href="#"> Transparencia <i class="fa-solid fa-sort-down"></i> </a>
            <ul class="submenu collapse">
            <?php wp_nav_menu( array('menu' => 'DT-transparencia')); ?>
            </ul>
          </li>
          <!-- <li class="nav-item has-submenu">
            <a class="nav-link" href="#"> Vinculación <i class="fa-solid fa-sort-down"></i> </a>
            <ul class="submenu collapse">
            <?php wp_nav_menu( array('menu' => 'DT-vinculaciones')); ?>
            </ul>
          </li> -->   
          <li class="nav-item has-submenu">
            <a class="nav-link" href="#"> Contacto <i class="fa-solid fa-sort-down"></i> </a>
            <ul class="submenu collapse">
            <?php wp_nav_menu( array('menu' => 'DT-contacto')); ?>
            </ul>
          </li>          
          <hr class="menu">
          <li>
            <a class="nav-link" href="<?php echo SITE_URL ?>/convocatorias-2024/" ><svg class="iconos-m" width="30" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve"><style>	.mst0{fill:none;stroke:#E0E7A5;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}	.icono-m-1{fill:none;stroke:#E0E7A5;stroke-width:5;stroke-linecap:round;stroke-miterlimit:10;}</style><polyline class="mst0" points="85.4,12 75,27.6 71.1,23.7 "></polyline><path class="mst0" d="M90,25c0,8.3-6.7,15-15,15s-15-6.7-15-15s6.7-15,15-15"></path><polyline class="mst0" points="85.4,62 75,77.6 71.1,73.7 "></polyline><path class="mst0" d="M90,75c0,8.3-6.7,15-15,15s-15-6.7-15-15s6.7-15,15-15"></path><g>	<g>		<circle class="icono-m-1" cx="30" cy="34.8" r="11.3"></circle>	</g>	<path class="icono-m-1" d="M31.8,47.6l-3.7,0c-8.3,0-15,6.7-15,15l0,6c0,0.8,0.7,1.5,1.5,1.5L45.4,70c0.8,0,1.5-0.7,1.5-1.5v-5.9  C46.9,54.3,40.1,47.5,31.8,47.6z"></path></g></svg> Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?php echo SITE_URL ?>/mesadeservicio"><svg class="iconos-m"   width="20" xmlns="http://www.w3.org/2000/svg" data-name="Capa 2" viewBox="0 0 95 95"><defs><style>      .cls-1 {        stroke-linejoin: round;      }      .cls-1, .cls-2 {        fill: none;        stroke: #E0E7A5;        stroke-linecap: round;        stroke-width: 5px;      }      .cls-2 {        stroke-miterlimit: 10;      }    </style></defs><g id="Capa_1-2" data-name="Capa 1"><path class="cls-1" d="M7.5,57.5H87.5c2.76,0,5,2.24,5,5v30H2.5v-30c0-2.76,2.24-5,5-5Z"></path><g><circle class="cls-2" cx="47.49" cy="15.84" r="13.34"></circle><path class="cls-2" d="M67.5,48.77c0-9.83-7.98-17.8-17.81-17.78h-4.45c-9.81,.03-17.75,7.98-17.75,17.79"></path></g></g></svg> Mesa de servicio </a>
          </li>
          <li class="nav-item">
            <a id="btn-comunidad" class="nav-link"  data-bs-toggle="modal" data-bs-target="#micomunidad"  href="#micomunidad"><svg class="iconos-m" width="20" xmlns="http://www.w3.org/2000/svg" data-name="Capa 2" viewBox="0 0 82.28 82.12"><defs><style>      .cls-1 {        fill: none;        stroke: #E0E7A5;        stroke-linecap: round;        stroke-linejoin: round;        stroke-width: 5px;      }    </style></defs><g id="Capa_1-2" data-name="Capa 1"><g><g><circle class="cls-1" cx="20.14" cy="19.64" r="10.02"></circle><path class="cls-1" d="M28.34,13.89c1.32-.62,2.69-1.14,4.1-1.57,2.14-.64,3.62-2.57,3.62-4.8h0c0-3.31-3.17-5.76-6.35-4.82C16.75,6.53,6.53,16.75,2.7,29.71c-.94,3.17,1.51,6.35,4.82,6.35h0c2.23,0,4.16-1.49,4.8-3.62,.49-1.64,1.12-3.22,1.87-4.73"></path></g><g><circle class="cls-1" cx="62.64" cy="20.14" r="10.02"></circle><path class="cls-1" d="M68.39,28.34c.62,1.32,1.14,2.69,1.57,4.1,.64,2.14,2.57,3.62,4.8,3.62h0c3.31,0,5.76-3.17,4.82-6.35-3.83-12.96-14.04-23.18-27.01-27.01-3.17-.94-6.35,1.51-6.35,4.82h0c0,2.23,1.49,4.16,3.62,4.8,1.64,.49,3.22,1.12,4.73,1.87"></path></g><g><circle class="cls-1" cx="62.14" cy="62.48" r="10.02"></circle><path class="cls-1" d="M53.94,68.23c-1.32,.62-2.69,1.14-4.1,1.57-2.14,.64-3.62,2.57-3.62,4.8h0c0,3.31,3.17,5.76,6.35,4.82,12.96-3.83,23.18-14.04,27.01-27.01,.94-3.17-1.51-6.35-4.82-6.35h0c-2.23,0-4.16,1.49-4.8,3.62-.49,1.64-1.12,3.22-1.87,4.73"></path></g><g><circle class="cls-1" cx="19.64" cy="61.99" r="10.02"></circle><path class="cls-1" d="M13.89,53.78c-.62-1.32-1.14-2.69-1.57-4.1-.64-2.14-2.57-3.62-4.8-3.62h0c-3.31,0-5.76,3.17-4.82,6.35,3.83,12.96,14.04,23.18,27.01,27.01,3.17,.94,6.35-1.51,6.35-4.82h0c0-2.23-1.49-4.16-3.62-4.8-1.64-.49-3.22-1.12-4.73-1.87"></path></g></g></g></svg> Mi comunidad </a>
          </li>
        </ul>
        <div class="row mt-2">
          <div class="col-12">
          <?php get_template_part('template-parts/form-menu-all'); ?>
          </div>     
        </div>       
      </div>

    </nav>

    <div class="menu-social">
      <div class="container-fluid">
        <div class="row justify-content-center mso">
          <div class="col d-block d-sm-block d-md-none">
            <hr class="social-line">
          </div>
          <div class="col d-none d-md-inline-block">
            <hr class="social-line">
          </div>        
          <div class="col d-flex justify-content-center">
          <a title="Facebook" href="https://www.facebook.com/PrepaEnLineadelaSEP/" target="_blank" rel="noopener noreferrer" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
            <a title="X" href="https://twitter.com/PrepaLineaSEP" target="_blank" rel="noopener noreferrer" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a>
            <a title="Instagram"  href="https://www.instagram.com/prepaenlineasep/" target="_blank" rel="noopener noreferrer" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            <a title="Youtube" href="https://www.youtube.com/@PrepaenLineaMexico" target="_blank" rel="noopener noreferrer" class="social-icon"><i class="fa-brands fa-youtube"></i></a>
            <a title="Tik tok" href="https://www.tiktok.com/@prepaenlinea_sep" target="_blank" rel="noopener noreferrer" class="social-icon"><i class="fa-brands fa-tiktok"></i></a>
            <a title="Spotify" href="https://open.spotify.com/show/5GH1mXSrMx6AMchq1EAsHc?si=f407167b9a89491a&nd=1" target="_blank" rel="noopener noreferrer" class="social-icon"><i class="fa-brands fa-spotify"></i></a>
          </div>
          <div class="col d-none d-md-inline-block">
            <hr class="social-line">
          </div>
        </div>
      </div>
    </div>