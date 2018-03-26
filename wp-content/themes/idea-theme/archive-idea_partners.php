<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */
get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/partners.css">
<section id="primary" class="content-area partners">
    <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : ?>
        <section class="banner">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h1 class="centered" id="bodyText">IDEA works closely with a group of local firms to provide in-kind services to ventures in the later  stages of our process. Our network of service providers expands over a number of industries, including finance, law, marketing, public relations, and technology.</h1>
              </div>
            </div>
          </div>
        </section>

        <!-- Main body of page -->
        <section class="section-pad">        
            <div class="container white">
                <div class="row">
                    <h2 class="partner-headline">Service Providers</h2>
                <?php /* Start the Loop */ ?>
                <!-- See content-partners.php -->
                <?php while ( have_posts() ) : the_post(); ?>
                 <?php get_template_part( 'content', 'partners' ); ?> 
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