<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Scout-Base
 */


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/icons/favicon.png">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target="#affix-sidenav">
  <div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'scout-base' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
      <nav id="site-navigation" class="main-navigation" role="navigation">
      <a href="<?php bloginfo('template_directory'); ?>/home">
          <img class="nav-logo" src="<?php bloginfo('template_directory'); ?>/images/logos/IDEA_logo_full.png" width="200px" height="100px">
      </a>

        <button class="menu-toggle"><i class="fa fa-bars fa-2x"></i>
          <?php _e( '', 'scout-base' ); ?></button>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </nav><!-- #site-navigation -->

      <?php if ( is_front_page() && (get_field('show_notification', 'options') === true ) ) { ?>
<div class="latest-news">
    <h2 class="latest-news__header">Latest News</h2>
    <h2 class="latest-news__title">Join The Team</h2>
    <p>Management team applications are now open!</p>
    <div class="latest-news__read-more">
      <a href="https://www.northeastern.edu/idea/2017/12/06/join-the-idea-team/">See Open Positions</a>
    </div>
</div>
        <?php 

//get_template_part( 'content', 'header_notification' ); 

?>
      <?php } ?>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
