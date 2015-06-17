<?php

	$args = array(
		'post_type' => 'registry',
		'cat'=> 4
	);
	
	$query = new WP_Query( $args );

?>

<section class="capability container clearfix">

	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

		<div class="<?php the_field('sold_out'); ?>">

			<a id="boxlink" href="<?php the_field('link'); ?>"><h2><?php the_title(); ?> - <?php the_field('price'); ?></h2></a>
			
		</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>

</section>