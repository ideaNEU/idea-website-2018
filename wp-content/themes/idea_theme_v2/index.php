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

    <section class="banner text-banner news-banner" id="news-banner">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 id="banner-headline-news"  class="banner-headline">Catch up on the latest original posts written by IDEA's management team as well as news and press about our program and ventures from outside of the IDEA lab.</h1>
          </div>
        </div>
      </div>
    </section>

  <section id="featured-post" class="featured-post">
   <?php get_template_part( 'content', 'featured_post' ); ?> 
  </section> <!-- ./ Featured Post -->

  <section id="news-posts" class="news-posts top">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"> <!-- The Sidebar with Category, tags, and search -->
          <div id="news-sidebar">
          <hr/>
          <div id="news-categories">
            <h5>CATEGORY</h5>
            <ul>
              <li><a href="/idea/category/idea-originals/">IDEA Originals</a></li>
              <li><a href="/idea/category/external-press/">External Press</a></li>
            </ul>
          </div>

          <div id="news-tags">
            <h5>COMMON TAGS</h5>
            <ul>
              <li><a href="/idea/tag/friday-5">Friday 5</a></li>
              <li><a href="/idea/tag/ventures/">Ventures</a></li>
              <li><a href="/idea/tag/management-team">Management Team</a></li>
            </ul>
          </div>

          <div id="news-search">
            <h5>SEARCH</h5>
          <?php include('searchform.php'); ?>
          </div>
        
           <?php get_sidebar(); ?> 
                   </div></div>

        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
      <?php if ( have_posts() ) : ?>
      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'post' );?>
      <?php endwhile; ?>

      <?php // scout_base_paging_nav(); ?>
      <?php wp_pagenavi() ?>

    <?php else : ?>

      <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>
        </div>
      </div>
    </div> <!-- ./ Column containing all the posts -->
  </section>  <!-- ./ News Post Section -->

    </main><!-- #main -->
  </section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
