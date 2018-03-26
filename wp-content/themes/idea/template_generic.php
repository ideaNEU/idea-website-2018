<?php /* Template Name: Generic */ ?>

<?php get_header(); ?>

<div class="detail-header-wrapper">
  <h2 class="detail-header"><?php the_title()?></h2>
</div>
<div class="container">
  <?php
    while ( have_posts() ) : the_post(); ?>
      <?php the_content();
    endwhile;
    wp_reset_query();
  ?>
</div>

<?php get_footer() ?>
