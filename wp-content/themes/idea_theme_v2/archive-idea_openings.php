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

		<!-- Page Title (Header) -->
		<section class="title-banner text-banner" id="openings-banner"> 
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1 class="banner-headline">Management Team Openings</h1>
					</div>
				</div>
			</div>
		</section> <!-- .page-header -->

		<!-- Main body of page -->
		<div class="openings">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'open_position' ); ?> <!-- See content-tem_mgmt.php -->

			<?php endwhile; ?>

	</div>


	<?php scout_base_paging_nav(); ?>

<?php else : ?>

	<?php get_template_part( 'content', 'no_openings' ); ?>

<?php endif; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
