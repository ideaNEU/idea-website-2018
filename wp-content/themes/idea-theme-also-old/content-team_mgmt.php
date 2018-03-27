<?php
/**
 * The template part for displaying a Management Member thumbnail on the archive page
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */
?>
                <!-- This one whole faculty / staff thumbnail that appears on the archive page -->
                <!-- This code is generated multiple times by wordpress -->
<div class="col-xs-6 col-md-4 col-lg-3 <?php $terms = get_the_terms( $post->ID, 'team_type'); if (! empty($terms)) : foreach ( $terms as $term ) {echo $term->slug.' '; } endif;  ?>">
	<div class="team-member">
		<div class="box">
	    <img id="team-thumb" src="<?php the_field('team_profile_picture'); ?>" class="img-responsive">
	    <div class="row team__caption">
	        <div class="col-xs-12 team__name"><?php the_title(); ?><br /></div>

	        <div class="team__position col-xs-8"><?php the_field('position'); ?></div>
	        <div class="team__links col-xs-4">
	            <?php if(get_field('team_linkedin')): ?>
	                <a href="<?php the_field('team_linkedin');?>" target="_blank" class="linkedin_icons">
	                    <img class="team__img" src="<?php bloginfo('url'); ?>/wp-content/themes/idea-theme/images/icons/team-linkedin2.png">
	                </a>
	            <?php endif; ?>

	            <?php if(get_field('team_email')): ?>
	                <a href='mailto:<?php the_field('team_email');?>' class="email_icons">
	                    <img class="team__img" src="<?php bloginfo('url'); ?>/wp-content/themes/idea-theme/images/icons/team-email.png">
	                </a>
	            <?php endif; ?>
	        </div>
	    </div>
	    </div>
	</div>
</div>
