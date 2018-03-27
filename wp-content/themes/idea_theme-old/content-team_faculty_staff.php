<?php
/**
 * The template part for displaying a Management Member thumbnail on the archive page
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */
?>
				<!-- This one whole team member thumbnail that appears on the archive page -->
				<!-- This code is generated multiple times by wordpress -->
<div class="team-member col-xs-6 col-sm-6 col-md-3 col-lg-3">
	<a href="<?php the_permalink() ?>">
	<img id="team-thumb" src="<?php the_field('mgmt_profile_pic'); ?>" class="img-responsive">		
	<figure class="faculty-cap-bot">
		<figcaption>
			<div class="team-name"><?php the_title(); ?><br /></div>
			<div class="team-name"><?php the_field('position'); ?></div>
		</figcaption>
	</figure>
	</a>
</div>