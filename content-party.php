

<div class="grid_12 omega">

<?php

	$args = array(
		'post_type' => 'party',
		'orderby'	=> 'menu_order',
		'order'		=> 'asc',
		'cat'		=> 18
	);
	
	$query = new WP_Query( $args );

?>

<section>

	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

		<div class="party">

			<div class="party-stuff grid_8">
			<h2>
			<?php the_field('name'); ?>
			</h2>
			<h3><?php the_field('party'); ?></h3>
			<p><?php the_field('description'); ?></p>
			</div>

			<div class="party-pic grid_4">
				<?php 

				$image = get_field('picture');

				if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>

			</div>
			
		</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>

</section>

</div>

