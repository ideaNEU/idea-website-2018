<?php
/**
 * The template for displaying all single posts.
 *
 * @package Scout-Base
 */

get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/news.css">

<section id="primary" class="content-area news">
	<main id="main" class="site-main" role="main">
			<section class="banner">
		      <div class="container">
		        <div class="row">
		          <div class="col-xs-12">
		          <h1 class="" id="bigText"><?php the_title(); ?></h1>
		          </div>
		        </div>
		      </div>
		    </section>

			<?php while ( have_posts() ) : the_post(); ?>

			<section class="single-post-body">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8">
						<!-- This grabs the actual content of the post, we broke this up because we use the
						 content-single.php on the index.php to show previews of the blog posts -->
						<div class="single-content"><?php get_template_part( 'content', 'single' ); ?></div>

						<?php endwhile; // end of the loop. ?>
						</div>
					</div>
				</div>
			</section><!-- /.post-body -->
	</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>