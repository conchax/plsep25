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
        <h1 class="titulo text-center ">Boletines <span>PL-SEP</span></h1>
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

  <div class="container-xxl">
    <div class="row mt-5">
      <?php $blogs = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'has_password' => false, 'posts_per_page' => 6,  'paged' => get_query_var('paged') ? get_query_var('paged') : 1, 'post__not_in' => array((35061))));
      ?>
      <?php while ($blogs->have_posts()) : $blogs->the_post(); ?>
        <?php if ($blogs->current_post == 0) : ?>

          <div class="col-12">
            <a class="zoom" href="<?php the_permalink(); ?>">
              <div class="card-principal my-4">
                <div class="row align-items-center">
                  <div class="col-12 col-md-6">
                    <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                    </div>
                    <div class=" col-12 col-md-6">
                    <h3><?php the_title(); ?></h3>
                    <div class="excerpt my-3">
                      <?php echo excerpt('31'); ?>
                    </div>
                    <p class="fecha my-3 ps-3"><time datetime="<?php the_time('c') ?>" title="<?php the_time('c') ?>"><?php the_time('j \d\e F \d\e Y'); ?></p>
                    <div>
                      Continuar leyendo
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

        <?php elseif ($blogs->current_post == 1 || $blogs->current_post == 2) : ?>
          <div class="col-12 col-md-6 my-2">
            <div class="card-secundario">
              <a class="zoom" href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                        <p class=" fecha my-3 ps-3"><time datetime="<?php the_time('c') ?>" title="<?php the_time('c') ?>"><?php the_time('j \d\e F \d\e Y'); ?></p>
                  <div>
                    <p>Continuar leyendo</p>
                  </div>
              </a>
            </div>
          </div>
        <?php elseif ($blogs->current_post == 3 || $blogs->current_post == 4 || $blogs->current_post == 5) : ?>

          <div class="col-12 col-md-4 my-4 align-self-center">

            <a class="zoom" href="<?php the_permalink(); ?>">
              <div class="card-boletin">
                <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                    
                        <p class=" fecha my-3 ps-3"><time datetime="<?php the_time('c') ?>" title="<?php the_time('c') ?>"><?php the_time('j \d\e F \d\e Y'); ?></p>
                  <div>
                    <p>Continuar leyendo</p>
                  </div>
              </div>
            </a>

          </div>
        <?php endif; ?>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </div>

  </div>

  <div class="container ">
    <div class="row justify-content-center">
      <div class="col-12  my-5">


        <nav class="pagination">
          <div class="nav-links m-auto">
            <?php echo paginate_links([
              'prev_text' => '&laquo;',
              'next_text' => '&raquo;',
              'mid_size' => 1,
              'end_size' => 1,
              'total' =>  $blogs->max_num_pages,

            ]); ?>
          </div>
        </nav>



      </div>
    </div>
  </div>

</section>





<?php get_footer(); ?>