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

		
	<section class="banner text-banner venture-grid-banner" id="venture-grid-banner">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 id="banner-headline-ventures" class="banner-headline">Since 2009, IDEA has helped successfully launch 34 ventures into the market, provided over $730k in non-equity gap funding, and assisted ventures in raising over $24 Million in outside capital.</h1>
          </div>
        </div>
      </div>
    </section>

			<!-- Search Bar -->
     <section class="venture-search-bar"> 
			<div class="row">
				<div class="container">
                    <h4 id="stage-filter">Stage Filter</h4>
					<div class="filters"> <!-- Stage -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a class="filterbtn current" data-filter="*">All</a></li>
                            <li><a class="filterbtn" data-filter=".set">Set</a>
                            <li><a class="filterbtn" data-filter=".go">Go</a>
                            <li><a class="filterbtn" data-filter=".launched">Launched</a></li>
                            </ul>
					</div>
				</div>
			</div>
    </section>
			<!-- /.Search Bar -->

		<!-- Main body of page -->
		<section class="section-pad">
		<div class="container white">
			<div class="venture-container row">

				<?php /* Start the Loop */ ?>
                <!-- See content-ventures.php -->
				<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'ventures' ); ?> 

			<?php endwhile; ?>

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




<script type="text/javascript">
jQuery(document).ready(function($) {  

    var $container = $('.venture-container');
    
    $container.isotope({
        filter: '*',
        layoutMode: 'masonry',
    });


    $('.filters').on( 'click', 'a', function() {
      var filterValue = $(this).attr('data-filter');
      $container.isotope({ filter: filterValue });
      $('.filters').find('.current').removeClass('current');
      $(this).addClass('current');
    });



});
</script>








