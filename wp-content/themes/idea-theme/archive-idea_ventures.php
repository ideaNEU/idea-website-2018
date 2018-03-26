<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */
get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/ventures.css">
<section id="primary" class="content-area venture">
	<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>

    <section class="banner">
      <div class="container">
        <div class="row">
          <h1 class="centered" id="bigText">IDEA starts with</h1>
          <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <h1 class="centered" id="bodyText">ventures in the concept phase and works with them through our business planning stage-gate process.</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="stats">
      <div class="container">
        <h2 class="centered">Venture Statistics</h2>
        <p id="active-ventures">Right now we have <span class="counter orange-text">
          <?php the_field('active_ventures', 'options');?></span> active ventures.</p>

          <div class="row">
            <div class="col-sm-4">
              <div id="ready-number">
                <div class="stage-gate-numbers"><?php the_field('ready_stage','options');?></div>
                <div class="stage-gate-name">Ready</div>
                <div class="pitch-name">Customer Validation</div>
              </div>
            </div>
            <div class="col-sm-4">
              <div id="set-number">
                <div class="stage-gate-numbers"><?php the_field('set_stage','options');?></div>
                <div class="stage-gate-name">Set</div>
                <div class="pitch-name">Business Model</div>
              </div>
            </div>
            <div class="col-sm-4">
              <div id="go-number">
                <div class="stage-gate-numbers"><?php the_field('go_stage','options');?></div>
                <div class="stage-gate-name">Go</div>
                <div class="pitch-name">Scale</div>
              </div>
            </div>
          </div>

            <div class="row" id="history-stats">
             <p id="header">Since we began IDEA has...</p>
             <div class="col-sm-4 col-md-3 col-md-offset-1">
              <div class="stat-container col-centered" id="concepts">
                <div class="topText">Worked with</div>
                <div class="stat-number counter"><?php the_field('concepts','options')?></div>
                <div class="bottom">concepts</div>
              </div>
            </div>
            <div class="col-sm-4 col-md-3">
              <div class="stat-container col-centered" id="launched">
                <div class="topText">Launched</div>
                <div class="stat-number counter">
                 <?php the_field('launched_ventures','options')?></div>            
                 <div class="bottom">ventures</div>
               </div>
             </div>
             <div class="col-xs-12 col-sm-4 col-md-3 col-md-offset-1">
              <div class="stat-container col-centered" id="funding">
                <div class="topText">Helped ventures raise</div>
                <div class="stat-number__wrapper">
                <div class="stat-number counter">
                 <?php the_field('money_raised','options')?></div><span id="million">M</span>
                 </div>
                 <div class="bottom">in external funding</div>
               </div>
             </div>
           </div>
         </div> <!-- ./Container -->
       </section>

      <hr/>

        <!-- Filter Bar -->
      <section class="filterBar"> 
        <h2 class="centered">Venture Portfolio</h2>
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-6" id="filter-container">
              <div class="filters button-group js-radio-button-group filterType" data-filter-group="sector">
                <h5>Sector</h5>
                <ul role="tablist" id="sector-filter">
                  <li><a class="filterBtn current" data-filter="">All</a></li>        
                  <li><a class="filterBtn" data-filter=".sector-consumer">Consumer</a></li>
                  <li><a class="filterBtn" data-filter=".sector-enterprise">Enterprise</a></li>
                </ul>
              </div>
              <div class="filters js-radio-button-group button-group filterType" data-filter-group="funding">
                <h5>Funding</h5>
                <ul role="tablist" id="funding-filter">
                  <li><a class="filterBtn current" data-filter="">All</a></li>
                  <li><a class="filterBtn" data-filter=".gap-funded">Gap Funded<img id="icon-gap-funded" src="<?php bloginfo('url'); ?>/wp-content/themes/idea-theme/images/icons/icon-gap-funded.svg" onerror="this.src='<?php bloginfo('url'); ?>/wp-content/themes/idea-theme/images/icons/icon-gap-funded.png'; this.onerror=null;"></a></li>
                  <li><a class="filterBtn" id="prototype-funded-btn" data-filter=".prototype-funded">Prototype Funded<img id="icon-prototype-funded" src="<?php bloginfo('url'); ?>/wp-content/themes/idea-theme/images/icons/icon-prototype-funded.svg" onerror="this.src='<?php bloginfo('url'); ?>/wp-content/themes/idea-theme/images/icons/icon-prototype-funded.png'; this.onerror=null;"></a></li>
                </ul>
              </div>
            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
      </section>

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

    <?php else : ?>
     <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>

  </main><!-- #main -->
</section><!-- #primary --> 

<?php get_footer(); ?>

<script type="text/javascript">
// external js: isotope.pkgd.js
// Controls the filtering of the venture objects
jQuery(document).ready( function() {

  //Styles the lettering in the Venture Statistics Section
  jQuery(".stage-gate-numbers").lettering();

  //Uses the jquery counter plugin to make the numbers count up
  jQuery('.counter').counterUp({
    delay: 10,
    time: 2000
  });

  // Fades in the ready set go numbers
  jQuery('#ready-number').delay( 0 ).fadeTo(1000,1);;
  jQuery('#set-number').delay( 1000 ).fadeTo(1000,1);;
  jQuery('#go-number').delay( 2000 ).fadeTo(1000,1);;

  // init Isotope
  var $grid = jQuery('.venture-container').isotope({
    itemSelector: '',
    layoutMode: 'masonry',
  });

  // store filter for each group
  var filters = {};

  jQuery('.filters').on( 'click', '.filterBtn', function() {
    var $this = jQuery(this);
    // get group key
    var $buttonGroup = $this.parents('.button-group');
    var filterGroup = $buttonGroup.attr('data-filter-group');
    // set filter for group
    filters[ filterGroup ] = $this.attr('data-filter');
    // combine filters
    var filterValue = concatValues( filters );
    // set filter for Isotope
    $grid.isotope({ filter: filterValue });
  });

  // change current class on buttons
  jQuery('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = jQuery( buttonGroup );
    $buttonGroup.on( 'click', 'a', function() {
      $buttonGroup.find('.current').removeClass('current');
      jQuery( this ).addClass('current');
    });
  });
  
});

// flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}

</script>
