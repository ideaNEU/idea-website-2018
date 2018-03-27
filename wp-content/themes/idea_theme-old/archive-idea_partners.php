



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


		<div class="banner text-banner partner-banner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1 id="banner-headline-partners" class="banner-headline">In order to help our ventures grow in and outside of the Northeastern Community
							we have established relationships with student organizations, companies, and programs.
							Through this network, we share resources and expertise to better serve our ventures
							and strengthen the entrepreneurship ecosystem as a whole.</h1>
					</div>
				</div>
			</div>
		</div>


		<!-- Main body of page -->
	<section class="section-pad">		
		<div class="container white">
		     <div class="row">
			<h2 class="partner-headline"> Service Providers </h2>
			<?php /* Returns related articles if they exist. In not, return nothing.*/ 
			$resources_loop = new WP_Query( array( 
                    	'post_type' => 'idea_partners', 
                    	'tax_query' => array( 
                        'relation' => 'AND', 
                               array( 
                                  'taxonomy' => 'partner', 
                                  'field' => 'slug',
                                  'terms' => array( 
                                                    'service-providers',
                                                   )                                                                    
			              ) 
			          ) 
			));  

			if ( $resources_loop->have_posts() ) : ?>
				<?php while ( $resources_loop->have_posts() ) : $resources_loop->the_post();  ?>
				      <?php get_template_part( 'content', 'partners' ); ?>
				<?php endwhile;?>  
			<?php endif; wp_reset_postdata(); ?>
			</div>
			<div class="row">
			<h2 class="partner-headline"> Resources </h2>
			<?php /* Returns related articles if they exist. In not, return nothing.*/ 

			$resources_loop = new WP_Query( array( 
                    	'post_type' => 'idea_partners', 
                    	'tax_query' => array( 
                        'relation' => 'AND', 
                               array( 
                                  'taxonomy' => 'partner', 
                                  'field' => 'slug',
                                  'terms' => array( 
                                                    'resources',
                                                   )
				    ) 
			       ) 
			));  

			if ( $resources_loop->have_posts() ) : ?>
			<?php while ( $resources_loop->have_posts() ) : $resources_loop->the_post();  ?>
				<div><?php get_template_part( 'content', 'partners' ); ?></div>
			<?php endwhile;?>  
			<?php endif; wp_reset_postdata(); ?>
		</div>
	</div>
</section>

</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>






