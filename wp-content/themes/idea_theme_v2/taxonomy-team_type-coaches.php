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

		<section id="tag-banner" class="tag-banner coaches-bg">
			<div class="container banner-text-container">
				<div class="row">
					<div id="text-container-bg"></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>Coaches</h1>
						<p>IDEA's Coaches are current Northeastern undergraduates, graduate students, and recent alumni that help ventures through IDEA. They are the experts on our process, our network, and all of the resources we offer.</p>
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

					<?php get_template_part( 'content', 'team_mgmt' ); ?> <!-- See content-tem_mgmt.php -->

				<?php endwhile; ?>
			</div>
		</div>
	</section>


<section id="team-section-cta" class="light-orange-shattered">
	<div class="section-arrow" id="about-arrow"></div>
	<div class="container">
		<div class="row">
			<div class="team-cta col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h2>Want to join us at IDEA?</h2>
				<a href="https://ideanortheastern.wufoo.com/forms/qu92x1u1tzp2s6/" onclick="window.open(this.href,  null, 'height=2156, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false">
				    <button class="btn btn-lg white-btn" type="button">APPLY NOW</button>
				</a>
			</div>				
		</div>
	</section>


	<?php scout_base_paging_nav(); ?>

<?php else : ?>

	<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
