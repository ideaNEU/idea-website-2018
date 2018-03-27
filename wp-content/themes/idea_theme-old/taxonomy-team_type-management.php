<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */

get_header(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

		<section id="tag-banner" class="tag-banner mgmt-bg">
			<div class="container banner-text-container">
				<div class="row">
					<div id="text-container-bg"></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>Management Team</h1>
						<p>The IDEA Management Team is responsible for all aspects of the program in support of our ventures: organizing events, promoting IDEA, coordinating press, managing the coaching team, reviewing business plans and more. </p>
					</div>
				</div>
			</div>
		</section>


		<!-- Main body of page -->
		<section id="mgmt-body-section">	
			<div class="container white">
				<div class="row">

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'team_mgmt' ); ?> <!-- See content-team_mgmt.php -->

				<?php endwhile; ?>

			</div>
		</div>
	</section>
	

	<?php get_template_part( 'content', 'team_cta' ); ?> <!-- See content-team_cta.php -->


	<?php scout_base_paging_nav(); ?>

<?php else : ?>

	<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
