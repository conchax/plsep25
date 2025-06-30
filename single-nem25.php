
<?php 
/**
 *
 * Template Name: boletines NEM25
 * Template Post Type: post
 */

get_header(); 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

while ( have_posts() ) :
	the_post();
	?>
<section class="section-w">
	<div class="container-xxl">
		<div class="row">
			<div class="breadcrumb"><?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?></div>
		</div>
	</div>
</section>
<header class="nem25">

</header>
<div class="container">                                     
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 text-center">
        <h1 class="entry-title-nem text-center"><?php the_title(); ?></h1>
        </div>
    </div>
</div>
<main class="main-nem25">
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 text-center">
            <p class="text-invitacion">
              ¿Te gustaría apoyar a la comunidad de aprendizaje <br>
            de Prepa en Línea-SEP participando en alguna grabación <br>
            de video para los boletines de la NEM?
            </p>
            <p><a href="https://forms.gle/hDzebAzq5bijaL8HA" target="_blank"><img src="https://prepaenlinea.sep.gob.mx/wp-content/uploads/2025/02/btn-formulario.png" class="img-fluid scale" alt="btn-formulario"></a></p>
        </div>
    </div>
</div>
<?php endwhile; 

get_footer(); 

?>