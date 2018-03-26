<?php /* Template Name: Generic */ ?>

<?php get_header(); ?>

<div class="detail-header-wrapper">
  <h2 class="detail-header">Ventures</h2>
</div>
<div class="container">
  <div class="row justify-content-center">
    <?php /* Start the Loop */ ?>
    <!-- See content-ventures.php -->
    <?php while ( have_posts() ) : the_post(); ?>
     <?php get_template_part( 'content', 'ventures' ); ?> 
   <?php endwhile; ?>
  </div>
</div>

<?php get_footer() ?>
