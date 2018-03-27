<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: About Idea
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Scout-Base
 */


/*

TO DO LIST:

Styling:
	- Banner picture background
	- Learn more and Get involved buttons
	- Any other final changes at designer's discretion

Functions:


Almost done! Yay!

*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section id="about-banner" class="tag-banner">
			<div class="container banner-text-container">
				<div class="row">
					<!-- <div id="text-container-bg"></div> -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>About IDEA</h1>
						<p>IDEA aims to provide Northeastern affiliated entrepreneurs the opportunity to turn their ideas into a business by providing them with the skills, tools and support to succeed. </p>
					</div>
				</div>
			</div>

		</section>

		<section id="our-mission">
			<div class="container about-idea-page">
				<div class="row block-margin">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<h2>OUR MISSION</h2>
							<p class="lead">
							IDEA's mission is to educate entrepreneurs from Northeastern's community and help them launch successful businesses. 
							We believe that our unique combination of student leadership and alumni support allows us to serve entrepreneurs in Northeastern's community unlike anywhere else in the world.
							</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme_v2/images/photos/about-mission.jpg" class="img-responsive" />
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="our-history" class="light-blue-shattered">
			<div class="container about-idea-page">
				<div class="row block-margin">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-push-6 col-lg-push-6">
						<h2>OUR HISTORY</h2>
							<p class="lead">
							It all began in 2009 when six undergraduate students approached then Dean Tom Moore of the business school and expressed the need to support entrepreneurial endeavors within Northeastern. 
							Under student leadership and with the backing of the university, a program to provide resources and support for entrepreneurs across all academic backgrounds was created. 
							Today, IDEA's management team and coaches, along with the help of service providers, mentors and our advisory board, work with hundreds of Northeastern affiliated student and alumni ventures.
							</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-pull-6 col-lg-pull-6">
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme_v2/images/photos/about-history.jpg" class="img-responsive" />
						</div>
					</div>
				</div>
			</section>	

			<section id="our-promise">
				<div class="container about-idea-page">
					<div class="row block-margin">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h2>OUR PROMISE</h2>
								<p class="lead">
								The resources that IDEA provides to ventures are broken up into Coach, Connect, and Fund. "Coach" includes dedicated coaching on IDEA's process and resources from peers, 
								as well as industry-expert mentoring and a strategic workshop curriculum. The "Connect" portion centers around providing ventures the resources they need through Service Providers and partners. 
								"Fund" refers to each venture's access to IDEA's $250,000 yearly Gap Fund, as well as our network of angel investors and venture capital firms.
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme_v2/images/photos/about-promise.jpg" class="img-responsive" />
							</div>
						</div>
					</div>
				</section>


			<section id="about-cta" class="about-cta light-orange-shattered">
				<div class="section-arrow" id="about-arrow"></div>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<h2>GET INVOLVED</h2>
						<p class="lead">There is no time like the present to join IDEA as a Venture, Coach or Management member! Click the link below to view all available positions. </p>
						<a href="/idea/get-involved"><button class="btn btn-lg white-btn" type="button">GET INVOLVED NOW</button></a>
						</div>
						<div class="col-md-2 col-lg-2">&nbsp;</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<h2>LEARN MORE</h2>
						<p class="lead">Learn more about all of the unique in-kind resources IDEA has to offer its ventures.  </p>
						<a href="/idea/resources"><button class="btn btn-lg white-btn" type="button">VENTURE RESOURCES</button></a>							
						</div>						
				</div>
			</section>			
			</main><!-- #main -->
		</div><!-- #primary -->


		<?php get_footer(); ?>
