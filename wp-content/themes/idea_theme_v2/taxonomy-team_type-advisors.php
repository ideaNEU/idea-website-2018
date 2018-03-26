<?php
/**
 * The template for displaying archive page of Advisors
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */

get_header(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

		<section id="tag-banner" class="tag-banner advisors-bg">
			<div class="container banner-text-container">
				<div class="row">
					<div id="text-container-bg"></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>Advisory Board</h1>
						<p>Members of the Advisory board have made both financial and time commitments to IDEA. Through volunteering their expertise, they help guide IDE
						A to improve its services for ventures, network, and long-term mission.</p>
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
				<h2>Want to become an Advisor?</h2>
				<a href="/idea/contact-us/"><button class="btn btn-lg white-btn" type="button">Contact Us</button></a>
			</div>				
		</div>
	</section>


	<!-- 
	************** Dan Gregory, always killin' it. **************
	<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme/images/photos/dangregory.jpg" class="img-responsive" />
	-->



	<?php scout_base_paging_nav(); ?>

<?php else : ?>

	<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
