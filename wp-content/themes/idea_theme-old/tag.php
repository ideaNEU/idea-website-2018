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
			<div class="title-banner" id="contact-banner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1 class="banner-headline"><?php single_tag_title("",true) ?></h1>
						</div>
					</div>
				</div>
			</div>

		<!-- Main body of page -->
		<div class="container white">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'post' ); ?> <!-- See content-ventures.php -->
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

