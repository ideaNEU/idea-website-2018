<?php
/**
 *
 * Template Name: Generic
 *
 *
 * @package Scout-Base
 */
get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/about.css">

<div id="primary" class="content-area about">
    <main id="main" class="site-main" role="main">
        <?php get_template_part( 'content', 'page' ); ?>

        <!-- This is the alternate version of the infographic to be displayed on mobile
             See content-infographic_mobile.php for this code -->
        <?php get_template_part( 'content', 'infographic_mobile' ); ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
