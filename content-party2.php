

<div class="grid_12 omega">

<?php

	$args = array(
		'post_type' => 'party',
		'orderby'	=> 'menu_order',
		'order'		=> 'asc',
		'cat'		=> 19
	);
	
	$query = new WP_Query( $args );

?>

<section>

	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

		<div class="party2">

			<div class="party-pic2 grid_4">
				<?php 

				$image = get_field('picture');

				if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>

			</div>

			<div class="party-stuff2 grid_8">
			<h2>
			<?php the_field('name'); ?>
			</h2>
			<h3><?php the_field('party'); ?></h3>
			<p><?php the_field('description'); ?></p>
			</div>
			
		</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>

</section>

</div>

