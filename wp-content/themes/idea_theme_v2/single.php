<?php
/**
 * The template for displaying all single posts.
 *
 * @package Scout-Base
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<section class="title-banner text-banner" id="blog-banner"> 
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1 id="blog-title"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</section>

		<?php while ( have_posts() ) : the_post(); ?>

		<section class="single-post-body">
			<div class="container">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				
				<div class="single-content"><?php get_template_part( 'content', 'single' ); ?></div>

			<?php endwhile; // end of the loop. ?>
		</div>
		<!-- <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"><a href="">< Back to Recent News</a></div> -->
	</section><!-- /.post-body -->


</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>