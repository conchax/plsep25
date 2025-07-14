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
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h1 class="titulou">Boletines</h1>
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

<div class="container">
  <div class="row">
    <div class="col-12 text-center mt-5">
      <h2><?php single_cat_title(); ?></h2>
    </div>
  </div>
</div>
<div class="container">
    <div class="row align-items-center">
      <?php
      if ( $query->have_posts() ) {
          // Start looping over the query results. 
          while ( $query->have_posts() ) {
              $query->the_post();
              ?>
              <div class="col-12 col-md-4 my-4">
                    <div class="card-boletin">
                      <img src="<?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?> 
                      <h3 class="titulo-post mt-2"><?php the_title(); ?></h3>
                      <div>
                      <a class="btn-leer-mas mx-auto" href="<?php the_permalink(); ?>">
                          Leer boletín
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15px"
                              width="15px" class="icon">
                              <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10"
                                  stroke-width="1.5" stroke="#292D32"
                                  d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008">
                              </path>
                          </svg>
                      </a>
                      </div>
                    </div>
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
