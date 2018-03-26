<?php /* Template Name: FAQ */ ?>

<?php get_header(); ?>

<div class="detail-header-wrapper">
  <h2 class="detail-header"><?php the_field('faq_header')?></h2>
</div>
<div class="container">
  <div class="faq-container mt-2">
    <?php
      while ( have_posts() ) : the_post(); ?>
        <?php the_content();
      endwhile;
      wp_reset_query();
    ?>
  </div>
</div>

<?php get_footer() ?>
