<?php
/*
Template Name: Ian Muirhead - Homepage
*/
?>

<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  <?php endwhile; ?>

</div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
  <div style="background-color: red; width: 100%; height: 200px;"></div>
</div>
