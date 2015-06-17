<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>

  </head>

  <body <?php  body_class(); ?>>
    <header class="row no-max  main">

    	<img src="http://www.philandsamantha.com/wp-content/uploads/2015/03/header.png">


    <div class="navholder"> 
         
      <a href="" class="nav-toggle"><span></span>Menu</a>
    
      <nav>
        <h1 class="site-title">
            <a class='current' href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'title' ); ?></a>
        </h1>

        <?php 

          $defaults = array(
            'container' => false,
            'theme_location'  => 'primary-menu',
            'menu_class'  => 'no-bullet'
          );

          wp_nav_menu( $defaults );

        ?>

      </nav>
    </div>
</header>

<div class="front_page">

<div class="grid_12 ceremony">
	<a href="philandsamantha.com/directions/">
		<img src="/wp-content/themes/studio-42-template/images/ceremony.png">
	</a>
</div>

<div class="triple">
	<a href="philandsamantha.com/our-story/">
		<img src="/wp-content/themes/studio-42-template/images/story.png">
	</a>
</div>

<div class="triple">
	<a href="philandsamantha.com/rsvp/">
		<img src="/wp-content/themes/studio-42-template/images/rsvp.png">
	</a>
</div>

<div class="triple">
	<a href="philandsamantha.com/wedding-party/">
		<img src="/wp-content/themes/studio-42-template/images/wedding-party.png">
	</a>
</div>

<div class="grid_12 regfp">
<div class="regintro"><?php get_template_part('content', 'regintro'); ?></div>
	<a href="philandsamantha.com/registry/">
		<img src="/wp-content/themes/studio-42-template/images/registry.png">
	</a>
</div>

</div>

<?php get_footer(); ?>