<?php
/**
 * The template for displaying the Under Construction
 *
 * Template Name: Under Construction
 *
 *
 * @package Scout-Base
 */ get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/home.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/pageScroll.css">

<style>
.slide__text{
font-size: 2em;
text-align: center;
}
</style>

<div id="primary">
  <main id="main" class="site-main" role="main">
    <div class="big-logo">
      <img class="big-logo__image" src="<?php bloginfo('template_directory'); ?>/images/logos/IDEA_lightbulb.svg">
    </div>
    <div id="scroll-container">
      <div id="home-scroll" class="wrapper">
        <div class="slide">
          <div class="slide__content">
            <div class="logo-spacing-placeholder"></div>
            <p class="slide__text">
              Hey there! IDEA is getting a facelift, we'll be back shortly!
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<script type="text/javascript">
  jQuery('#home-scroll').pageScroll({
    pageContainer: '.slide'
  });

</script>


<!-- DONT TOUCH BELOW -->
</div><!-- #content -->
<?php wp_footer(); ?>
</body>
</html>
