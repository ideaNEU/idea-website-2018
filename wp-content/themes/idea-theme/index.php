<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */

get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/news.css">

  <section id="primary" class="content-area news">
    <main id="main" class="site-main" role="main">

    <section class="banner">
      <div class="container">
        <div class="row">
          <h1 class="centered" id="bigText">Keep up with news at IDEA</h1>
        </div>
      </div>
    </section>

  <section id="news-posts" class="news-posts top">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-3 col-lg-3"> <!-- The Sidebar with Category, tags, and search -->
          <div id="news-sidebar">
          <hr/>
          <div id="news-categories">
            <h5 class="widget-title">CATEGORY</h5>
            <ul>
              <li><a href="/idea/category/idea-originals/">IDEA Originals</a></li>
              <li><a href="/idea/category/external-press/">External Press</a></li>
            </ul>
          </div>

          <div id="news-tags">
            <h5 class="widget-title">COMMON TAGS</h5>
            <ul>
              <li><a href="/idea/tag/friday-5">Friday 5</a></li>
              <li><a href="/idea/tag/ventures/">Ventures</a></li>
              <li><a href="/idea/tag/management-team">Management Team</a></li>
            </ul>
          </div>

          <div id="news-search">
            <h5 class="widget-title">SEARCH</h5>
          </div>
        
           <?php get_sidebar(); ?> 

          </div>
        </div>

        <div class="col-sm-8">
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
