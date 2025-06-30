<?php
/**
 * The template for displaying search results pages
 *
 * 
 *
 * @package WordPress
 * @subpackage Prepa en Línea-SEP 2025
 * @since Prepa en Línea-SEP 2025 2.1
 */

get_header(); ?>
<section class="section-w">
	<div class="container-xxl">
		<div class="row">
			
		</div>
	</div>
</section>
<main>


<div class="container">
        <h1 class="my-4 text-center">Resultados para: <em><?php the_search_query(); ?></em></h1>
        <div class="row align-items-center">
            <?php 
                /* $query = new WP_Query(array( "orderby"=>"ID","order"=>"ASC",'post_type' => array( 'post', 'page' ), 'posts_per_page' => 12 ,'paged' => get_query_var('paged') ? get_query_var('paged') : 1) ); */
            ?>
            <?php if (have_posts() ) : ?>
                <?php
                while (have_posts() ) : the_post(); 
                       $post_link = get_permalink(); ?>
                    <div class="col-12 col-md-9 my-2">
                        <article class="post">
                            <?php
                            printf( '<h3 class="%s"><a href="%s">%s</a></h3>', 'entry-title color: var(--color-titulos)!important;', esc_url( $post_link ), wp_kses_post( get_the_title() ) );
                            echo excerpt('50'); 
                            ?>
                        </article>
                    </div>
                    <div class="col-12 col-md-3">
                        <?php                        
                            if ( has_post_thumbnail() ) {  
                                printf( '<a href="%s">%s</a>', esc_url( $post_link ), get_the_post_thumbnail( $post, 'small', ['class' => 'img-fluid'] ) );
                            }                        
                        ?>
                    </div>
                    <hr>
                    <?php
                endwhile;
                ?>
            <?php else : ?>
                
                <div class="row">
                    <div class="col-12">
                        <p><?php esc_html_e( 'Lo siento, pero no hay nada que coincida con tus términos de búsqueda. Por favor, inténtalo de nuevo con algunas palabras clave diferentes.', 'PL-SEP-2023' ); ?></p>
                    </div>          
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-5 ">
                        <div id="contenido">
                            <form action="<?php echo SITE_URL; ?>" method="get" enctype="multipart/form-data" class="form-only-controls">
                                <div class="input-group">
                                    <input type="text" name="s" placeholder="Busca en PL-SEP" value="" class="form-control text-left autocomplete" />
                                    <button type="submit" class="btn btn-default link-menu"><span class="text-hide sr-only">Buscar</span>
                                            <svg class="iconos-m" width="20" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 54.99 54.96"><defs><style>      .icono-m-1 {        fill: none;        stroke: #E0E7A5;        stroke-linecap: round;        stroke-linejoin: round;        stroke-width: 5px;      }    </style></defs><g data-name="Capa 1"><g><line class="icono-m-1" x1="52.49" y1="52.46" x2="36.62" y2="36.59"></line><circle class="icono-m-1" cx="22.48" cy="22.48" r="19.98"></circle></g></g></svg>
                                    </button>
                                </div>
                            </form>   
                        </div>                        
                    </div>
                </div>

            <?php endif; ?>
        </div>
       
        <div class="container ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 my-5">

           
                <nav class="pagination">               
                    <div class="nav-links m-auto">
                    <?php 
                    global $wp_query;
                        echo paginate_links([
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;',
                        'mid_size' => 1,
                        'end_size' => 0,
                        'total' =>  $wp_query->max_num_pages,
                    ]); ?>
                    </div>
                </nav> 
                
            </div>
          </div>
      </div>
    </div>
<hr>
    <div class="container-xxl">
        <div class="row">
            <h2 class="my-5">Boletines de
            <br>Prepa en Línea-SEP</h2>
        </div>
    </div>
    <div class="container-xxl">
        <div class="row align-items-center">
        <?php
        $args = array(
            'orderby' => 'rand',
            'posts_per_page' => 3
        );      
        $blogsearch = new WP_Query( $args );
        if ( $blogsearch->have_posts() ) {
            // Start looping over the query results. 
            while ( $blogsearch->have_posts() ) {
                $blogsearch->the_post();
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

        <div class="row mt-5 pb-5">
            <div class="col">
                <div class="text-end">
                <a class="btn btn-home" href="<?php echo SITE_URL ?>/boletines" role="button">Leer todos los boletines</a>
                </div>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>
