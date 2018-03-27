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

		<section id="tag-banner" class="tag-banner">
			<div class="container banner-text-container">
				<div class="row">
					<div id="text-container-bg"></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>Team</h1>
						<p>Whether you’re looking to build a business, join a highly motivated management team or share your industry expertise with budding entrepreneurs as a venture coach, IDEA: Northeastern University’s Venture Accelerator has an opportunity for you. </p>
					</div>
				</div>
			</div>
	</section>

		<!-- Main body of page -->
		<div class="container white">
			<div class="row top">

				<?php /* Start the Loop */ ?>
				<?php query_posts($query_string . '&orderby=title&order=ASC') ?>
				<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'team_mgmt' ); ?> <!-- See content-tem_mgmt.php -->

			<?php endwhile; ?>

		</div>
	</div>


	<?php scout_base_paging_nav(); ?>

<?php else : ?>

	<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
