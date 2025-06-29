<?php get_header();


$slug = get_queried_object()->slug;
$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 12,
  'category_name' => $slug,
  'has_password' => false,
  'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
  'post__not_in' => array ((35061))
);
$query = new WP_Query( $args );?>

<section class="section-w">
	<div class="container-xxl">
		<div class="row">
			<div class="breadcrumb"><?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?></div>
		</div>
	</div>
</section>
<div class="container-xxl">
    <div class="row align-items-center">
      <?php
      if ( $query->have_posts() ) {
          // Start looping over the query results. 
          while ( $query->have_posts() ) {
              $query->the_post();
              ?>
              <div class="col-12 col-md-4 my-4">
                  <a class="zoom" href="<?php the_permalink(); ?>">
                    <div class="card-boletin">
                      <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                      
                      <p class="fecha my-3"><time datetime="<?php the_time('c') ?>" title="<?php the_time('c') ?>"><?php the_time('j \d\e F \d\e Y'); ?></p>
                      <div>
                        <p>Continuar leyendo</p>
                      </div>
                    </div>
                  </a>

                </div>   
              <?php
          }
      }
      // Restore original post data. 
    
      wp_reset_postdata();
      ?>
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
                        'total' =>  $query->max_num_pages,

                    ]); ?>
                    </div>
                </nav> 
                

                
            </div>
          </div>
      </div>

<?php get_footer(); ?>
