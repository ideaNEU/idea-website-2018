
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
						<h1>Faculty and Staff</h1>
						                                                <p>IDEA is supported by faculty and staff from the <a href="http://www.northeastern.edu/entrepreneurship/">Northeastern University Center for Entrepreneurship Education</a>, 
                                                   who provide guidance, assistance, and engagement with Northeastern’s entrepreneurial ecosystem.</p>
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

			<?php get_template_part( 'content', 'team_faculty_staff' ); ?> <!-- See content-tem_mgmt.php -->

			<?php endwhile; ?>

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
