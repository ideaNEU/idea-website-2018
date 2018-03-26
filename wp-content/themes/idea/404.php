<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package StrapPress
 */

get_header(); ?>
<div class="detail-header-wrapper">
  <h2 class="detail-header">Sorry you’re lost, but you found Vidhan!</h2>
</div>
	<div class="container">
		<div class="row">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<section class="error-404 not-found">
						<img src="wp-content/themes/idea/img/vidhan.gif" class="w-100" />
					</section><!-- .error-404 -->

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--  .row -->
	</div><!--  .container -->

<?php
get_footer();
