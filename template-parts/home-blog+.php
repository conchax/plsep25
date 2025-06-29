<div class="animated animated-fast zoomIn" data-settings="{&quot;animation&quot;:&quot;zoomIn&quot;,&quot;animation_delay&quot;:1000}">
  <div class="container-xxl">
    <div class="row">
      <h2 class="my-5">Boletines de
        <br>Prepa en Línea-SEP
      </h2>
    </div>
  </div>
  <div class="container-xxl">
    <div class="row align-items-center">
      <?php $home_blogs = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'has_password' => false, 'posts_per_page' => 3));
      ?>
      <?php while ($home_blogs->have_posts()) : $home_blogs->the_post(); ?>
        <?php if ($home_blogs->current_post == 0) : ?>
          <div class="col-12 col-md-5 my-4">

            <div class="card-boletin-principal">
              <a class="zoom" href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                
                <p class=" fecha my-3"><time datetime="<?php the_time('c') ?>" title="<?php the_time('c') ?>"><?php the_time('j \d\e F \d\e Y'); ?></p>
                  <div>
                    <p>Continuar leyendo</p>
                  </div>
              </a>
            </div>

          </div>
        <?php elseif ($home_blogs->current_post == 1 || $home_blogs->current_post == 2) : ?>
          <div class="col-12 col-md my-4">
            <a class="zoom" href="<?php the_permalink(); ?>">
              <div class="card-boletin">
                <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                
                <p class=" fecha my-3"><time datetime="<?php the_time('c') ?>" title="<?php the_time('c') ?>"><?php the_time('j \d\e F \d\e Y'); ?></p>
                  <div>
                    <p>Continuar leyendo</p>
                  </div>
              </div>
            </a>

          </div>
          
        <?php endif; ?>
      <?php endwhile; ?>

    </div>

    <div class="row mt-5">
      <div class="col">
        <div class="text-end">
          <a id="boletines" class="btn-home" href="<?php echo SITE_URL ?>/boletines" role="button">Leer todos los boletines</a>
        </div>
      </div>
    </div>

  </div>
</div>