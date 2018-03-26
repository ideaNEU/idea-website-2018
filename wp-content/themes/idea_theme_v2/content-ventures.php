<?php
/**
 * The template part for displaying a Venture Member
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */
?>

<div class="venture-member col-xs-6 col-sm-6 col-md-3 col-lg-3 <?php $terms = get_the_terms( $post->ID, 'idea_ventures_status'); if (! empty($terms)) : foreach ( $terms as $term ) {echo $term->slug.' '; } endif;  ?>">
	<a href="<?php the_permalink() ?>">
	<img class="venture-thumb thumbnail" src="<?php the_field('venture_profile_pic'); ?>" alt="<?php the_title(); ?>"/>
	<figure class="cap-bot">
		<figcaption>
			<div id="venture-name"><?php the_title(); ?><br /></div>
			<div id="venture-status"><?php get_the_terms( $post->ID , 'idea_ventures_status' ); ?></div>
		</figcaption>
	</figure>
	</a>
</div>