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

	<section id="tag-banner" class="text-banner">
			<div class="container banner-text-container">
				<div class="row">
					<div id="text-container-bg"></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
						<h2>Venture Resources</h2>
						<p>Lorem ipsum dolor sit a eleifend. Curabitur sollicitudin lorem at tristique consequat. gula at est gravida dapibus at ut risus. Sed libero ante, sagittis sed leo non, ornare porta odio. Duis luctus ut nulla at ultricies. Phasellus vestibulum, augue facilisis tincidunt gravida, nunc augue tristique leo, vitae ultrices urna est tristique mauris. </p>
					</div>
				</div>
			</div>
	</section>

	<section id="featured_post" class="featured_post"></section>


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'post' );
				?>

			<?php endwhile; ?>

			<?php scout_base_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
