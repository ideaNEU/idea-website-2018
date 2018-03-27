<?php
/**
 * The template for displaying the Home Page
 *
 * Template Name: Home Page
 *
 *
 * @package Scout-Base
 */ ?>

<?php get_template_part('content','home_header'); ?>
<?php $featured_go_ventures = get_field('featured_go_ventures', 'options'); ?>


<div id="primary">
    <main id="main" class="site-main" role="main">
        <div class="site-header"></div>
        <section id="home-intro-section">
            <div id="home-intro-bg">
                <img id="home-intro-bg" src="<?php bloginfo('template_directory'); ?>/images/photos/home-background.jpg">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">&nbsp;</div>
                    <div id="home-intro" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <img id="home-logo" src="<?php bloginfo('template_directory'); ?>/images/logos/IDEA_lightbulb.svg" onerror="this.onerror=null; this.src='<?php bloginfo('template_directory'); ?>/images/logos/IDEA_lightbublb.png'"/>
                        <div id="home-intro-text">
                            <h1>IDEA is a student-run venture accelerator.</h1>
                            <p>that provides a variety of resources to Northeastern affiliated entrepreneurs who are looking to launch their own businesses.
                                Throughout the stage-gate process we provide ventures with coaching, mentoring, in-kind services, business planning framework,
                                and the opportunity to apply for our Gap Fund.</p>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
            <span id="test-top"></span> <!-- Resets the RSG Nav -->
        </section>
<!-- Commenting out NEXPO stuff
        <section class="highlighted-event">
          <div class="container">
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-1">
                        <h2>Join us at NEXPO! - November 20th, 6:30 to 9 pm</h2>
                        <p>NEXPO is Northeastern's premier entrepeneurship exposition. Whether you’re a student who is curious about starting your own company or an industry professional looking to share your experiences, NEXPO provides the perfect platform to connect with entrepreneurship at Northeastern.</p>
                        <p>Click below to learn more and register to attend!</p>
<button class="btn btn-primary cta-button"><span><a href="http://www.eventbrite.com/e/nexpo-fall-2014-gew-2014-tickets-12696322041">Learn more</a></span></button>
            </div>
          </div>
        </section>-->

        <section id="home-rsg" class="section-pad">
            <div class="container">
                <div class="row">

                    <div id="rsg-sidebar" class="col-xs-12 col-sm-12 col-md-3 col-lg-3" class="hidden-xs"> <!-- Sidebar where ready, set, go appears-->
                        <div id="rsg-stage-indicator">
                            <h1 class="rsg" id="stage-ready"><a href="#ready" class="ready-btn">READY</a></h1>
                            <h1 class="rsg"id="stage-set" ><a href="#set" class="set-btn">SET</a></h1>
                            <h1 class="rsg"id="stage-go"><a href="#go" class="go-btn">GO</a></h1>
                        </div>
                    </div>

                <!-- Ready -->
                    <div id="ready" class="col-xs-12 col-sm-12 col-md-9 col-lg-9 "> <!-- Main area with the three stage desc. -->
                        <h1 class="rsg-stage-title">READY</h1>
      <img id="rsg-img" src="<?php bloginfo('template_directory'); ?>/images/photos/ready.jpg">
                            <div id="rsg-heading"><p id="color-ready">Ready is the first stage in IDEA’s business model process and is where ventures submit their value propositions,
                                are paired with a coach and begin working on their business plans.</p>
                            </div>
                            <div id="rsg-paragraph"><p>This stage is critical in the development process, as founders will speak with potential customers, solidify their target market and potentially pivot their business plan. 
                This stage is also where each venture will figure out the problem their business is solving and how it will fit into the market.</p>
                            </div>
                            <div id="rsg-quote">
                                <div id="rsg-quote-icon">&#8220;</div>
                                <h6>The Ready stage provided a systematic way to translate my rough ideas into <span id="color-set">the</span> foundation of a sustainable business. </h6>
                                <p>&#8212; Gavin King, Tackboard</p>
                            </div>
                    </div>    
                 <!-- Set -->
                        <div id="set" class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-lg-offset-3">
                            <h1 class="rsg-stage-title">SET</h1>
          <img id="rsg-img" src="<?php bloginfo('template_directory'); ?>/images/photos/set.jpg">
                            <div id="rsg-heading"><p id="color-set">In the Set stage, ventures further evaluate their business model, learn how to acquire customers and research the cost of doing so.</p></div>
                                <div id="rsg-paragraph"><p>They dive deeper into the problem they are solving and discover how they will make money off of their solution. Ventures are also
                                    introduced to IDEA’s Mentor network that is made up of industry professionals who provide their expert opinion on a variety of
                                    topics. In addition to mentors, IDEA also provides its ventures with access to service providers such as law firms and
                                    accounting firms that offer in-kind services to help companies grow.</p></div>
                                <div id="rsg-quote">
                                    <div id="rsg-quote-icon">&#8220;</div>
                                    <h6>The response I received from investors following my <span id="color-go">pitch</span> was very encouraging.</h6>
                                    <p>&#8212; Toju <span id="unstick-go">Ometoruwa</span>, <span id="stick-go" >Pickasound</span></p>


                                </div>

                        </div>
                <!-- Go! -->
                        <div id="go" class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-lg-offset-3">
                            <h1 class="rsg-stage-title">GO</h1>
          <img id="rsg-img" src="<?php bloginfo('template_directory'); ?>/images/photos/go.jpg">
                                <div id="rsg-heading"><p id="color-go">Go, the final stage, is where ventures begin figuring out their financial structure, they talk to potential investors and have the opportunity to apply for IDEA’s Gap Fund.</p></div>
                                    <div id="rsg-paragraph"><p>At this point, grants from the Gap Fund allow ventures to grow through substantial milestones of building their business. In this stage, ventures are also connected to members of
                                        IDEA’s investor network to secure angel and seed funding to take their company to the next level. Companies are considered launched when the have raised a significant amount of capital, have entered another
                                        accelerator program, or are self-sustaining</p></div>
                                        <div id="rsg-featured-venture">
                                            <h6>Featured Ventures in the Go stage</h6>
                                            <ul class="rsg-go-ventures">

                                            <?php if( $featured_go_ventures ): ?>
                                                <?php foreach( $featured_go_ventures as $post): // variable must be called $post (IMPORTANT) ?>
                                                <?php setup_postdata($post); ?>
                                                <li><a href="<?php the_permalink(); ?>" target="blank"><?php the_title(); ?> </a></li>
                                                <?php endforeach; ?>
                                                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                            <?php endif; ?>

                                            </ul>
                                        </div>

                                </div>
                </div>  <!-- ./ Row -->   
            </div> <!-- ./ Container -->
    </section>

        <section id="home-cta" class="section-pad">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <a href="http://www.tfaforms.com/365595" onclick="window.open(this.href,  null, 'height=1408, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false" class="home-cta-link">
                            <div id="home-cta-idea" class="home-cta-btn visible-md-block visible-lg-block">
                                <img id="home-cta-bg" src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme_v2/images/photos/home-haveidea.jpg">
                                <h1 class="home-cta-q">HAVE A BUSINESS IDEA?</h1>
                                <p class="home-cta-info">Ventures are IDEA’s core clients. They are students in the process of developing a business idea,
                                    finding a team to pursue their idea, refining a business plan, or developing a structured timeline of key milestones.
                                    <br><br>
                                    <strong>Start a Venture</strong>
                                </p>

                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <a href="/idea/get-involved/" class="home-cta-link">
                            <div id="home-cta-involved" class="home-cta-btn visible-md-block visible-lg-block">
                                <img id="home-cta-bg" src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme_v2/images/photos/home-teaminvolved.jpg">
                                <h1>WANT TO GET INVOLVED?</h1>
                                <p class="home-cta-info">Whether you’re a student, alumni, professional, or just looking to learn,
                                    we have a place for you. There are many ways you can get involved and help accelerate entrepreneurship
                                    at Northeastern University.
                                    <br><br>
                                    <strong>View Roles</strong>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <a href="/idea/contact-us/" class="home-cta-link">
                            <div id="home-cta-donate" class="home-cta-btn visible-md-block visible-lg-block">
                                <img id="home-cta-bg" src="<?php bloginfo('url'); ?>/wp-content/themes/idea_theme_v2/images/photos/home-support.jpg">
                                <h1>SUPPORT OUR MISSION</h1>
                                <p class="home-cta-info">IDEA relies on the support of Northeastern alumni, entrepreneurs, and others who believe
                                    in our mission. Without the generous help of individuals, IDEA would not be able to operate or fund ventures.
                                <br><Br>
                                <strong>Donate to IDEA. Contact Us</strong>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="home-cta-mobile" class="visible-xs-block visible-s-block">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <a href="https://ideanortheastern.wufoo.com/forms/m1tmq8ah1la9q9z/" onclick="window.open(this.href,  null, 'height=1408, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false">
                            <div id="home-cta-block-mobile" class="visible-xs-block visible-s-block">
                                <h1 class="home-cta-q">HAVE A BUSINESS IDEA?</h1>
                                <p class="home-cta-info-mobile">Ventures are IDEA’s core clients. They are students in the process of developing a business idea,
                                    finding a team to pursue their idea, refining a business plan, or developing a structured timeline of key milestones.
                                 <br>
                                <br>
                                Start a Venture</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <a href="http://www.northeastern.edu/idea/get-involved/">
                            <div id="home-cta-block-mobile" class="visible-xs-block visible-s-block">
                                <h1>WANT TO GET INVOLVED?</h1>
                                <p class="home-cta-info-mobile">Whether you’re a student, alumni, professional, or just looking to learn,
                                    we have a place for you. There are many ways you can get involved and help accelerate entrepreneurship
                                    at Northeastern University.
                                <br>
                                <br>
                                View Roles</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <a href="http://www.northeastern.edu/idea/contact-us/">
                            <div id="home-cta-block-mobile" class="visible-xs-block visible-s-block">
                                <h1>SUPPORT OUR MISSION</h1>
                                <p class="home-cta-info-mobile">IDEA relies on the support of Northeastern alumni, entrepreneurs, and others who believe
                                    in our mission. Without the generous help of individuals, IDEA would not be able to operate or fund ventures.
                                <br>
                                <br>
                                Donate to IDEA</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section id="home-featured-venture">
<?php
 /* Loops through to find the featured venture */
 $paged = get_query_var('paged');
if ($paged < 2) :
  $featured_venture = get_field('featured_venture','options');
if( $featured_venture ): ?>
            <?php foreach( $featured_venture as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>

            <div id="featured-venture-bg">
                   <div class="background-gradient">
                    <img id="featured-bg-img" src="<?php the_field('featured_venture_bg','options'); ?>" class="img-responsive">
                 </div>
            </div>
            <div id="featured-venture-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h2>FEATURED VENTURE</h2>
                            <a id="read-more" href="<?php the_permalink(); ?>"><h1 id="featured-venture-title"><?php the_title(); ?></h1></a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="featured-venture-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <p><?php the_field('featured_venture_blurb','options');?><br /></p>
                            <a id="read-more" href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div id="featured-venture-quote">
                                <div id="rsg-quote-icon">&#8220;</div>
                                <h6><?php the_field('featured_venture_quote','options');?></h6>
                                <p>&#8212;<?php the_field('featured_venture_quote_atribution','options');?></p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; endif;?>
</section> <!-- /. Featured Venture -->

<section id="home-news">
     <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                <h1>RECENT NEWS</h1>
            </div>
        </div> 
     </div>        
        <div class="container">
            <div class="row">

                <?php /* Returns recent articles if they exist. In not, return nothing.*/ 

                $p_loop = new WP_Query( array( 
                  'post_type' => 'post',
                  'showposts' => '3',
                ));

if ( $p_loop->have_posts() ) : ?>
                    <?php while ( $p_loop->have_posts() ) : $p_loop->the_post();  ?>

                    <?php get_template_part('content','home_news')?>
                <?php endwhile;?>  
            <?php endif; wp_reset_postdata(); ?>  

             </div>
         </div>
</section>

  <script type="text/javascript">

  // Smooth Scrolling
  jQuery(document).ready(function($) { 

    // Smooth Scrolling

    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

    // Scrolling waypoints




    $('#test-top').waypoint(function() {
      $('#stage-ready').removeClass('rsg-active').css('background-color', '');
      $('#stage-set').removeClass('rsg-active').css('background-color', '');
      $('#stage-go').removeClass('rsg-active').css('background-color', '');
      $('#rsg-sidebar').css('position', 'relative').css('top', '').css('width', '');
      $('#ready').removeClass('col-lg-offset-3');
    });

    $('#home-rsg, #ready, #color-ready').waypoint(function() {
      $('#stage-ready').addClass('rsg-active').css('background-color', '#EA7624');
      $('#stage-set').removeClass('rsg-active').css('background-color', '');
      $('#stage-go').removeClass('rsg-active').css('background-color', '');
      $('#rsg-sidebar').css('position', 'fixed').css('top', '75px').css('width', '300px');
      $('#ready').addClass('col-lg-offset-3');
    });

    $('#color-set, #set').waypoint(function() {
      $('#stage-ready').removeClass('rsg-active').css('background-color', '');     
      $('#stage-go').removeClass('rsg-active').css('background-color', '');
      $('#stage-set').addClass('rsg-active').css('background-color', '#EA7624');
    });

    $('#color-go, #go').waypoint(function() {
      $('#stage-ready').removeClass('rsg-active').css('background-color', '');      
      $('#stage-set').removeClass('rsg-active').css('background-color', '');
      $('#stage-go').addClass('rsg-active').css('background-color', '#EA7624');
    });




    // $('#test-top').waypoint(function() {
    //     $('#stage-ready').css('background-color', '');
    //     $('#stage-set').css('background-color', '');
    //     $('#stage-go').css('background-color', '');
    //     $('#rsg-sidebar').css('position', 'relative').css('top', '').css('width', '');
    //     $('#ready').removeClass('col-lg-offset-3');
    //     });

    // $('#home-rsg, #ready, #color-ready').waypoint(function() {
    //     $('#stage-ready').css('background-color', '#EA7624');
    //     $('#stage-set').css('background-color', '');
    //     $('#stage-go').css('background-color', '');
    //     $('#rsg-sidebar').css('position', 'fixed').css('top', '75px').css('width', '300px');
    //     $('#ready').addClass('col-lg-offset-3');
    //  });

    // $('#color-set, #set').waypoint(function() {
    //     $('#stage-ready').css('background-color', '');      
    //     $('#stage-go').css('background-color', '');
    //     $('#stage-set').css('background-color', '#EA7624');
    //  });

    // $('#color-go, #go').waypoint(function() {
    //     $('#stage-ready').css('background-color', '');      
    //     $('#stage-set').css('background-color', '');
    //     $('#stage-go').css('background-color', '#EA7624');
    //  });


    var tick = 0;


    $('#unstick-go').waypoint(function() {
      if (tick == 1){
        $('#rsg-sidebar').css('position', 'fixed').css('top', '75px');  
      tick = 0;}
    });

    $('#stick-go').waypoint(function() {

      $('#rsg-sidebar').css('position', 'absolute').css('top', '2275px');
      tick = 1;
    });
  });

</script>
<?php get_footer(); ?>
