<?php
/**
 * The template part for displaying a Venture Member
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */
?>

<div class="col-md-4 <?php $terms = get_the_terms( $post->ID, 'idea_ventures_status'); if (! empty($terms)) : foreach ( $terms as $term ) {echo $term->slug.' '; } endif;  ?>">
  <div class="text-center m-5">
    <a target="_blank" href="<?php the_field('venture_website'); ?>" class="website">
      <img class="img-responsive" src="<?php the_field('venture_profile_pic'); ?>" alt="<?php the_title(); ?>"/>
      <?php the_title( '<h5 class="mt-2 mb-0">', '</h5>' ); ?>
    </a>
  </div>
</div>