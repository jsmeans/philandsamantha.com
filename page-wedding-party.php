<?php 
/*
Template Name: Party Page
*/
?>

<?php get_header(); ?>
<div class="container clearfix">

<div class="work grid_12 omega ">

<div class="grid_6 alpha">

<?php get_template_part('content', 'party'); ?>

</div>
<div class="grid_6 omega">

<?php get_template_part('content', 'party2'); ?>

</div>
</div>
</div>
<?php get_footer(); ?>