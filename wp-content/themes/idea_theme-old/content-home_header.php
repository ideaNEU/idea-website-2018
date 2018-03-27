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

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="icon" 
      type="image/png" 
      href="<?php bloginfo('template_directory'); ?>/images/icons/favicon.png">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body style="position:relative">
  <div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'scout-base' ); ?></a>


    <header id="masthead" class="site-header" role="banner">
      <div class="home-header"> <!-- This just wraps the navbar in a div to target these classes to tweak styling for the homepage -->
      <nav id="site-navigation" class="main-navigation headeraffix" role="navigation" data-spy="affix" data-offset-top="450">

<a href="/idea/home">
      <img class="nav-logo" src="<?php bloginfo('template_directory'); ?>/images/logos/IDEA_logo_full.png" width="250px" height="150px">
</a>
        <button class="menu-toggle"><i class="fa fa-bars fa-2x"></i>
          <?php _e( '', 'scout-base' ); ?></button>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </nav><!-- #site-navigation -->
      </div>
    </header><!-- #masthead -->


    <div id="content" class="site-content">
