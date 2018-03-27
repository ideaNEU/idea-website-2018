<?php
/**
 * The template part for displaying a Venture Member
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */
?>

<div class="col-xs-6 col-md-4 col-lg-3 <?php $terms = get_the_terms( $post->ID, 'idea_ventures_status'); if (! empty($terms)) : foreach ( $terms as $term ) {echo $term->slug.' '; } endif;  ?>">
	<div class="single-venture">
		<div class="box"> 
			<img class="img-responsive" src="<?php the_field('venture_profile_pic'); ?>" alt="<?php the_title(); ?>"/>
			<div class="overbox">
				<div class="title"><?php the_title(); ?></div>
				<a target="_blank" href="<?php the_field('venture_website'); ?>" class="website">Visit Website</a>
				<div class="">
					<?php $terms = get_the_terms( $post->ID, 'idea_ventures_status');
					$hasGapFunded = (bool)false;
					$hasPrototypeFunded = (bool)false; 
					if (! empty($terms)) : foreach ( $terms as $term ) {					
						if ($term->slug == 'gap-funded'){
							$hasGapFunded = true;
						}
						if ($term->slug == 'prototype-funded'){
							$hasPrototypeFunded = true;
						}
						if(($hasGapFunded == true) && ($hasPrototypeFunded == false)){
							echo '<img class="funded-badge" src="';
							bloginfo('url');
							echo '/wp-content/themes/idea-theme/images/icons/icon-gap-funded.png">'; 
						}
						if(($hasPrototypeFunded == true) && ($hasGapFunded == false)){
							echo '<img class="funded-badge" src="';
							bloginfo('url');
							echo '/wp-content/themes/idea-theme/images/icons/icon-prototype-funded.png">';
						}
						if(($hasGapFunded == true) && ($hasPrototypeFunded == true)){
							echo '<img class="funded-badge" src="';
							bloginfo('url');
							echo '/wp-content/themes/idea-theme/images/icons/icon-gap-funded.png">';
							echo '<img class="funded-badge" id="shift-right" src="';
							bloginfo('url');
							echo '/wp-content/themes/idea-theme/images/icons/icon-prototype-funded.png">'; 
						}	
					} endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
