
<?php 
/*
Template Name: Registry Page
*/
?>

<?php get_header(); ?>
<div class="container clearfix">

<div class="work grid_12 omega">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h3>   <?php the_title(); ?></h3>
	<p><?php the_content(); ?></p>
	<hr>

<?php endwhile; endif; ?>



<div class="clearfix registry">

<img class="container" src="/wp-content/themes/studio-42-template/images/map.png">
	
	<div class="holder">
		<div class="boxes">
			<ul>
				<li id="London"><a href="javascript:void(0)" id="link" class="open">London</a><div class="box" style="display:none;"><?php get_template_part('content', 'london'); ?></div></li>
				<li id="Paris"><a href="javascript:void(0)" id="link" class="open">Paris</a><div class="box"><?php get_template_part('content', 'paris'); ?></div></li>
				<li id="Geneva"><a href="javascript:void(0)" id="link" class="open">Geneva</a><div class="box"><?php get_template_part('content', 'geneva'); ?></div></li>
				<li id="Lyon"><a href="javascript:void(0)" id="link" class="open">Nice</a><div class="box"><?php get_template_part('content', 'lyon'); ?></div></li>
				<li id="Florence"><a href="javascript:void(0)" id="link" class="open">Florence</a><div class="box"><?php get_template_part('content', 'florence'); ?></div></li>
				<li id="CinqueTerra"><a href="javascript:void(0)" id="link" class="open">Krakow</a><div class="box"><?php get_template_part('content', 'cinque'); ?></div></li>
				<li id="Rome"><a href="javascript:void(0)" id="link" class="open">Rome</a><div class="box"><?php get_template_part('content', 'rome'); ?></div></li>
				<li id="Venice"><a href="javascript:void(0)" id="link" class="open">Venice</a><div class="box"><?php get_template_part('content', 'venice'); ?></div></li>
				<li id="Salzburg"><a href="javascript:void(0)" id="link" class="open">Salzburg</a><div class="box"><?php get_template_part('content', 'salzburg'); ?></div></li>
				<li id="Prague"><a href="javascript:void(0)" id="link" class="open">Prague</a><div class="box"><?php get_template_part('content', 'prague'); ?></div></li>
				<li id="Berlin"><a href="javascript:void(0)" id="link" class="open">Berlin</a><div class="box"><?php get_template_part('content', 'berlin'); ?></div></li>
				<li id="Amsterdam"><a href="javascript:void(0)" id="link" class="open">Amsterdam</a><div class="box"><?php get_template_part('content', 'amsterdam'); ?></div></li>
				<li id="Brussels"><a href="javascript:void(0)" id="link" class="open">Brussels</a><div class="box"><?php get_template_part('content', 'brussels'); ?></div></li>
			</ul>
		</div>
	</div>
</div>	
	<div class="regsub"><a href="http://philandsamantha.zankyou.com">Click Here to See the Registry!</a></div>

</div>
</div>


<?php get_template_part('content', 'testimonials'); ?>

<?php get_footer(); ?>