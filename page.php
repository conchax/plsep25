
<?php get_header(); 
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package 
 */


while ( have_posts() ) :
	the_post();
	?>
<section class="section-w">
	<div class="container">
		<div class="row">
			<div class="breadcrumb"><?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?></div>
		</div>
	</div>
</section>
<main>
		<?php the_content(); ?>	
</main>

	<?php
endwhile; get_footer(); ?>