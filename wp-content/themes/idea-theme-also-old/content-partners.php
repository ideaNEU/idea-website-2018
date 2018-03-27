<?php
/**
 * The template part for displaying a Venture Member
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */
?>
<!-- This one whole partner thumbnail that appears on the archive page -->
<div class="col-xs-6 col-md-4 col-lg-3">
	<div class="single-partner">
		<div class="box"> 
			<img class="img-responsive" src="<?php the_field('partner_logo'); ?>" alt="<?php the_title(); ?>"/>
			<div class="overbox">
				<div class="title"><?php the_title(); ?></div>
				<a target="_blank" href="<?php the_field('partner_website'); ?>" class="website">Visit Website</a>
			</div>
		</div>
	</div>
</div>