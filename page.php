<?php
/*
  Template  Name: Portal PL-SEP-2025
*/

while ( have_posts() ) :
	the_post();
	?>
<section>
	<div class="container-xxl">
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