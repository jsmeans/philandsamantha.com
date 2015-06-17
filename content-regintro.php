

<div class="grid_12 omega">

<?php

	$args = array(
		'post_type' => 'regintro'
	);
	
	$query = new WP_Query( $args );

?>

<section>

	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

		<div class="party">			
			<p><?php the_field('info'); ?></p>
		</div>

			

	<?php endwhile; endif; wp_reset_postdata(); ?>

</section>

</div>

