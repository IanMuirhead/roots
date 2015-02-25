<?php
/*
Template Name: Boats'n'Hoes
*/
?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  <?php endwhile; ?>

</div>
