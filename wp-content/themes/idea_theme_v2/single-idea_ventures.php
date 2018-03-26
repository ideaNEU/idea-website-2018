<?php
/**
* The template for displaying all single posts.
*
* @package Scout-Base
*/


$image = get_field('image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
$post_objects = get_field('veture_tag');

if( $image ) {
	echo wp_get_attachment_image( $image, $size );
}

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="title-banner text-banner venture-banner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1 class="banner-headline"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</section>


			<div class="container white venture-single">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> 
						<div class="venture-sidebar">
						<!--This is where the picture of the Member would go -->
						<img id="venture-profile" class="thumbnail" src="<?php the_field('venture_profile_pic'); ?>" alt="<?php the_field('venture_profile_pic'); ?>"/>
						

						<div id="mgmt-links">
						<ul>
							<?php if( get_field('venture_email') ): ?>
								<li><i class="fa fa-envelope"></i> <a href="<?php the_field('venture_email'); ?>"><?php the_field('venture_email'); ?></a></li>
							<?php endif; ?>
							<?php if( get_field('venture_linkedin') ): ?>
								<li><a target="blank" href="https://<?php the_field('venture_linkedin'); ?>"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
							<?php endif; ?>
							<?php if( get_field('venture_twitter') ): ?>
								<li><a target="blank" href="https://<?php the_field('venture_twitter'); ?>"><i class="fa fa-twitter"></i> Twitter</a></li>
							<?php endif; ?>
							<?php if( get_field('venture_website') ): ?>
								<li><a target="blank" href="http://<?php the_field('venture_website'); ?>"><i class="fa fa-laptop"></i> <?php the_field('venture_website'); ?></a></li>
							<?php endif; ?>
						</ul>
					</div>
							<div id="venture-team"> <!-- This displays the Venture's team members -->
								<h6>TEAM</h6>
								<p><?php the_field('venture_team_members'); ?></p>
							</div>
							<div id="venture-recent-news">
								<h6>RECENT NEWS</h6>
								<ul>
									<?php /* Returns related articles if they exist. In not, return nothing.*/ 
									$p_loop = new WP_Query( array( 
										'post_type' => '3rd_party_news',
										'showposts' => '-1',
										'meta_query' => array(
											array (
												'key' => 'venture_tag',
												'value' => $post->ID,
												'compare' => 'LIKE',
												)),
										));

										if ( $p_loop->have_posts() ) : ?>
										<?php while ( $p_loop->have_posts() ) : $p_loop->the_post();  ?>

										<!--  -->
										<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><p>(via <?php the_field('3rd_party_publisher');?>)</p></li>

									<?php endwhile;?>  
								<?php endif; wp_reset_postdata(); ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 venture-desc"> <!-- This is where the main desc. of the venture appears -->
					<?php the_content(); ?>
					<div class="venture-pics">
						<img src="<?php the_field('venture_pic-1'); ?>" alt="<?php the_field('pic_desc-1'); ?>"/> <!-- The first venture picture -->
						<p class="venture-caption"><?php the_field('pic_desc-1'); ?></p>
						<img src="<?php the_field('venture_pic-2'); ?>" alt="<?php the_field('pic_desc-2'); ?>"/> <!-- The second venture picture -->
						<p class="venture-caption"><?php the_field('pic_desc-2'); ?></p>

					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
