
<style>
    header.nem26{
    background-image: url(https://prepaenlinea.sep.gob.mx/wp-content/uploads/2026/01/09C.07_banner_portal.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 250px;
    }

    .main-nem26{
        font-family: "Noto Sans", serif!important;
        color:#474747;
        font-size: 18px;
        line-height: 2.2rem;
        font-weight: 400;
        letter-spacing: .4px;
    }
    .main-nem26 a{
        color: #0d6efd;
        text-decoration: underline;
    }
    .main-nem26 a:hover{
        color: #474747;
    }
    .entry-title-nem{
        font-size: 40px;
        font-weight: 600;
        color: #7D2982;
        font-family: "Noto Sans", serif!important;
    }

    .post-template-single-nem26 .text-invitacion{
        color: #474747;
        font-family: "Noto Sans", serif!important;
        font-size: 18px;
        font-weight: 400;
    }
    .text-invitacion{
        font-size: 26px;
        font-weight: 500;
        color: #7D2982;
        font-family: "Noto Sans", serif;
    }
    .main-nem25, .main-nem25 p, .main-nem25 .elementor-widget-container{
        font-size: 18px;
        line-height: 2.2rem;
        color: #7D2982;
        font-weight: 400;
        font-family: "Noto Sans", serif;
        letter-spacing: .4px;
    }
    .main-nem25 .widget-image-caption, .main-nem25 .wp-caption-text{
        font-size: 16px!important;
        font-weight: 400!important;
        color: #4a274b!important;
        font-family: "Noto Sans", serif!important;
    }

    .main-nem25 .elementor a:hover {
        color: #f4565b;
    }
    .main-nem25 .elementor a {
        color: #7C2C82;
        font-weight: 500;
        text-decoration: underline;
    }

.nem-principios{
  font-family: 'Noto Sans', sans-serif;
  padding:2rem 0 0;
}

.nem-accordion{
  border: 2px solid #851982;
  overflow: hidden;
  background: #fff;
  margin-bottom: 30px;
}

/* Header */
.nem-accordion-header{
  background: #851982;
  color: #fff;
  font-weight: 600;
  padding: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
}

/* Flecha cerrada */
.nem-arrow{
  width: 10px;
  height: 10px;
  border-right: 2px solid #fff;
  border-bottom: 2px solid #fff;
  transform: rotate(45deg); 
  transition: 0.3s ease;
}

/* Flecha abierta */
.nem-accordion.active .nem-arrow{
  transform: rotate(-135deg);
}

/* Body con animación */
.nem-accordion-body{
  max-height: 0;
  overflow: hidden;
  background: #f7f7f7;
  transition: max-height 0.4s ease;
}

/* Items */
.nem-item{
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 16px;
  padding: .5rem 1.25rem;
  border-bottom: 1px solid #c15ac1;
  font-weight: 600;
  line-height: 1.4;
  color: #851982;
  text-align: left;
}

.nem-item span{
  flex: 1;
}

.nem-item:last-child{
  border-bottom: none;
}

.nem-icon{
  width: 28px;
  height: auto;
  flex-shrink: 0;
}
.nem-accordion-header{
  position: relative;
  z-index: 5;
}


/* Solo móvil full width */
@media (max-width: 991px){

  .nem-principios{
    width: 100vw;
    margin-left: calc(-50vw + 50%);

  }

  .nem-accordion{
    width: 100%;
    border-radius: 0;
  }

}



    /* SECCIÓN GENERAL */
.nem-section {
  padding: 2rem 0;
}

/* SUBTÍTULO */
.nem-subtitle {
  color: #851982;
  font-weight: 400;
  font-size: 22px;
  margin-bottom: 1rem;
}

/* ITEM */
.nem-icon-item {
  position: relative;
  text-align: center;
}

/* CÍRCULO */
.nem-icon {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto;
  transition: transform 0.5s ease;
}

.nem-icon img {
  width: 100px;
  height: auto;
}

/* HOVER ICONO */
.nem-icon-item:hover .nem-icon {
  transform: translateY(-6px);
}

/* CONTENEDOR TEXTO ANIMADO */
.nem-icon-text {
  display: grid;
  grid-template-rows: 0fr;
  transition: grid-template-rows 0.35s ease;
}

/* TEXTO REAL */
.nem-icon-text span {
  overflow: hidden;
  font-size: 16px;
  color: #851982;
  line-height: 1.4;
  text-align: center;
  max-width: 160px;
  margin: 0 auto;
  font-weight: 400;
}

/* HOVER TEXTO */
.nem-icon-item:hover .nem-icon-text {
  grid-template-rows: 1fr;
}

/* DIVISOR */
.nem-divider {
  height: 2px;
  background-color: #851982;
  width: 80%;
  margin: 1.5rem auto;
  border-radius: 4px;
  transition: all 0.5s ease;
}

/* 8 ICONOS EN DESKTOP */
@media (min-width: 992px) {
  .col-lg-nem {
    flex: 0 0 12.5%;
    max-width: 12.5%;
  }
}

/* RESPONSIVE */
@media (max-width: 576px) {
  .nem-icon {
    width: 70px;
    height: 70px;
  }

  .nem-icon img {
    width: 70px;
  }
}
</style>
<?php

/**
 *
 * Template Name: boletines NEM 2026
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

    <header class="nem26"></header>
    
    <section class="nem-principios d-lg-none"> 
        <div class="nem-accordion">

            <div class="nem-accordion-header" role="button">
            Principios NEM
            <span class="nem-arrow"></span>
            </div>

            <div class="nem-accordion-body">

            <div class="nem-item p-uno">
                <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/identidad-con-Mexico.svg" alt="Identidad con México" />
                <span>Identidad con México</span>
            </div>
            
            <div class="nem-item p-dos">
                <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/responsabilidad-ciudadana.svg" alt="Responsabilidad ciudadana" />
                <span>Responsabilidad ciudadana</span>
            </div>

            <div class="nem-item p-tres">
                <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/honestidad.svg" alt="Honestidad" />
                <span>Honestidad</span>
            </div>
            
            <div class="nem-item p-cuatro">
                <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/participacion-en-la-transformacion-de-la-sociedad.svg" alt="Participación en la transformación de la sociedad" />
                <span>Participación en la transformación de la sociedad</span>
            </div>

            <div class="nem-item p-cinco">
                <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/respeto-de-la-dignidad-humana.svg" alt="Respeto por la dignidad humana" />
                <span>Respeto por la dignidad humana</span>
            </div>
            
            <div class="nem-item p-seis">
                <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/interculturalidad.svg" alt="Interculturalidad" />
                <span>Interculturalidad</span>
            </div>

            <div class="nem-item p-siete">
                <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/cultura-paz.svg" alt="Cultura de la paz" />
                <span>Cultura de la paz</span>
            </div>

            <div class="nem-item p-ocho">
                <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/respeto-naturaleza.svg" alt="Respeto por la naturaleza" />
                <span>Respeto por la naturaleza</span>
            </div>

            </div>

        </div>
    </section>

    <section class="nem-section container text-center d-none d-lg-block">

        <h6 class="nem-subtitle">Principios de la NEM</h6>

        <div class="nem-icons row justify-content-center">

            <!-- Identidad con México  -->
            <div class="nem-icon-item col-lg-nem p-uno">
                <div class="nem-icon">
                    <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/identidad-con-Mexico.svg" alt="Identidad con México" />
                </div>
                <span class="nem-icon-text">
                    <span>Identidad con México</span>
                </span>
            </div>

            <!-- Responsabilidad ciudadana -->
            <div class="nem-icon-item col-lg-nem p-dos">
                <div class="nem-icon">
                    <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/responsabilidad-ciudadana.svg" alt="Responsabilidad ciudadana" />
                </div>
                <span class="nem-icon-text">
                    <span>Responsabilidad ciudadana</span>
                </span>
            </div>

            <!-- Honestidad -->
            <div class="nem-icon-item col-lg-nem p-tres">
                <div class="nem-icon">
                    <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/honestidad.svg" alt="Honestidad" />
                </div>
                <span class="nem-icon-text">
                    <span>Honestidad</span>
                </span>
            </div>

            <!-- Participación -->
            <div class="nem-icon-item col-lg-nem p-cuatro">
                <div class="nem-icon">
                    <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/participacion-en-la-transformacion-de-la-sociedad.svg" alt="Participación en la transformación de la sociedad" />
                </div>
                <span class="nem-icon-text">
                    <span>Participación en la transformación de la sociedad</span>
                </span>
            </div>

            <!-- Respeto dignidad humana  -->
            <div class="nem-icon-item col-lg-nem p-cinco">
                <div class="nem-icon">
                    <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/respeto-de-la-dignidad-humana.svg" alt="Respeto por la dignidad humana" />
                </div>
                <span class="nem-icon-text">
                    <span>Respeto de la dignidad humana</span>
                </span>
            </div>

            <!-- Interculturalidad -->
            <div class="nem-icon-item col-lg-nem p-seis">
                <div class="nem-icon">
                    <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/interculturalidad.svg" alt="Interculturalidad" />
                </div>
                <span class="nem-icon-text">
                    <span>Interculturalidad</span>
                </span>
            </div>

            <!-- Cultura de la paz -->
            <div class="nem-icon-item col-lg-nem p-siete">
                <div class="nem-icon">
                    <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/cultura-paz.svg" alt="Cultura de la paz" />
                </div>
                <span class="nem-icon-text">
                    <span>Cultura de la paz</span>
                </span>
            </div>

            <!-- Respeto naturaleza -->
            <div class="nem-icon-item col-lg-nem p-ocho">
                <div class="nem-icon">
                    <img src="https://prepaenlinea.sep.gob.mx/wp-content/themes/plsep25/svg/respeto-naturaleza.svg" alt="Respeto por la naturaleza" />
                </div>
                <span class="nem-icon-text">
                    <span>Respeto por la naturaleza</span>
                </span>
            </div>

        </div>

        <div class="nem-divider"></div>

    </section>

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
    
    <div class="container formulario d-none">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <p class="text-invitacion">
                    ¿Te gustaría apoyar a la comunidad de aprendizaje de Prepa en Línea-SEP <br>
                    participando en alguna grabación de video para los boletines de la NEM?
                </p>
                <p><a href="https://forms.gle/hDzebAzq5bijaL8HA" target="_blank"><img src="https://prepaenlinea.sep.gob.mx/wp-content/uploads/2025/02/btn-formulario.png" class="img-fluid scale" alt="btn-formulario"></a></p>
            </div>
        </div>
    </div>
<script>
document.addEventListener("DOMContentLoaded", function(){

  const headers = document.querySelectorAll(".nem-accordion-header");

  headers.forEach(header => {

    header.addEventListener("click", function(e){

      e.preventDefault();
      e.stopPropagation();

      const accordion = this.closest(".nem-accordion");
      const body = accordion.querySelector(".nem-accordion-body");

      const isOpen = accordion.classList.contains("active");

      /* cerrar todos */
      document.querySelectorAll(".nem-accordion").forEach(acc => {
        acc.classList.remove("active");
        acc.querySelector(".nem-accordion-body").style.maxHeight = null;
      });

      /* abrir actual */
      if(!isOpen){
        accordion.classList.add("active");
        body.style.maxHeight = body.scrollHeight + "px";
      }

    }, { passive: false });

  });

});
</script>
<?php endwhile;

get_footer();

?>