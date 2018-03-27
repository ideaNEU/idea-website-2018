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
<!-- This code is generated multiple times by wordpress -->
<div class="partner partner-btn col-xs-6 col-sm-6 col-md-3 col-lg-3"> 
<a href="<?php the_field('partner_url') ?>" target="blank"> 
	<figure class="cap-bot">
		<img id="partner-thumb" src="<?php the_field('partner_logo');?>" class="thumbnail img-responsive">
		<figcaption>
			<div id="partner-name"><?php the_title(); ?></div>
		</figcaption>
		<div class="partner-cap">
			<div id="partner-name-hover"><?php the_title(); ?></div>
      		<p class="partner-info">
      			<?php $content = get_the_content();
      			echo substr($content, 0, 300);  ?>
      		</p>

		</div>
	</figure>
</a>
</div> <!-- /.Partner -->
