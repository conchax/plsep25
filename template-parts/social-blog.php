<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage PL-SEP-2024
 * @since PL-SEP-2024 1.8
 */

?>
<div class="container">
  <div class="row justify-content-center">
        <div class="col-12 col-md-4">
          <p class="text-center">Compartir boletín:</p>
          <div class="col d-flex justify-content-center">
              <a title="Haz clic para compartir en Facebook" class="social-nem"
                href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>"
                target="_blank" rel="nofollow noopener noreferrer">
                <img class="scale" src="https://prepaenlinea.sep.gob.mx/wp-content/uploads/2022/07/icon-facebook-black.png"
                  alt="Facebook" width="24" />
              </a>
          
            
              <a title="Haz clic para compartir en Twitter" class="social-nem"
                href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>&amp;text=<?php echo urlencode(get_the_title()) ?>"
                target="_blank" rel="nofollow noopener noreferrer">
                <img class="scale" src="https://prepaenlinea.sep.gob.mx/wp-content/uploads/2022/07/icon-twitter-black.png"
                  alt="Twitter" width="24" />
              </a>
          
            
              <a title="Haz clic para compartir en whatsapp" class="social-nem"
                href="https://api.whatsapp.com/send?text=<?php the_permalink() ?>"
                target="_blank" rel="nofollow noopener noreferrer">
                <img class="scale" src="https://prepaenlinea.sep.gob.mx/wp-content/uploads/2022/07/icon-whatsapp-black.png"
                  alt="WhatsApp" width="24" />
              </a>
          </div>
        </div>
    </div>
</div>

