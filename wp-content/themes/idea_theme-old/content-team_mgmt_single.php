<?php
/**
 * The template part for displaying a single management member's profile page
 * @package Scout-Base
 */


	$worked_ventures = get_field('worked_ventures');
	$the_query = new WP_Query( $args );

	?>

	<section class="text-banner title-banner" id="mgmt-banner"> 
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1 class="banner-headline" id="mgmt-name"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</section>

	<div class="container white single-management-member">
		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> <!--This is where the picture of the Member would go -->
				<div class="mgmt-sidebar">
					<img id="mgmt-img" src="<?php the_field('mgmt_profile_pic'); ?>" class="thumbnail img-responsive">
					<div id="mgmt-position"><h3><?php the_field('position'); ?></h3></div>
					<?php if (get_field('major') ): ?>
					      <h5>MAJOR</h5>
					      <div id="mgmt-major"><p><?php the_field('major'); ?></p></div>
					<?php endif; ?>
					<?php if (get_field('year') ): ?>
					      <h5>YEAR</h5>
					      <div id="mgmt-year"><p><?php the_field('year'); ?></p></div>
					<?php endif; ?>
					<div id="mgmt-links">
						<ul>
							<?php if( get_field('email') ): ?>
								<li><a href="mailto:<?php the_field('email'); ?>"><i class="fa fa-envelope"></i> <?php the_field('email'); ?></a></li>
							<?php endif; ?>
							<?php if( get_field('linkedin') ): ?>
								<li><a target="blank" href="http://<?php the_field('linkedin'); ?>"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
							<?php endif; ?>
							<?php if( get_field('twitter') ): ?>
								<li><a target="blank" href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
							<?php endif; ?>
							<?php if( get_field('personal_website') ): ?>
								<li><a target="blank" href="http://<?php the_field('personal_website'); ?>"><i class="fa fa-laptop"></i>&nbsp;Website</a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>


			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

				<div id="mgmt-desc-long"><?php the_content(); ?></div>
				<div id="mgmt-worked-ventures">

					<?php if( $worked_ventures ): ?>
					<h2>Ventures Worked With</h2>
					<?php foreach( $worked_ventures as $post): // variable must be called $post (IMPORTANT) ?>
					<?php setup_postdata($post); ?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<a href="<?php the_permalink(); ?>">
							<div class="mgmt-worked-venture-thumbnail">
									<img id="venture-thumb" src="<?php the_field('venture_profile_pic'); ?>" class="thumbnail img-responsive">
									<div class="mgmt-venture-caption"><?php the_title(); ?></div>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>

		</div>
		<div id="mgmt-recent-news-tag" class="mgmt-recent-news-tag">

			<?php /* Returns related articles if they exist. In not, return nothing.*/ 

			$p_loop = new WP_Query( array( 
				'post_type' => 'post',
				'showposts' => '-1',
				'meta_query' => array(
					array (
						'key' => 'related_team_member',
						'value' => $post->ID,
						'compare' => 'LIKE',
						)),
				));

				if ( $p_loop->have_posts() ) : ?>
				<h2>Recent Articles Tagged "<?php the_title(); ?>"</h2>
				<div class="mgmt-article light-gray">
					<div id="blog-tag">Blog</div>
					<?php while ( $p_loop->have_posts() ) : $p_loop->the_post();  ?>

					<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
					<h4><?php the_field('post_author'); ?></h4>
					<h5><?php the_date(); ?></h5>
					<p><?php the_content(); ?></p>

				<?php endwhile;?>  
			<?php endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>
</div>
</div>






