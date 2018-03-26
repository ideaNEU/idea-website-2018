<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Scout-Base
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section class="error-404 not-found">
            <div class="container">
                <div class="row">
                    <header class="page-header">
                        <h1 class="page-title"><?php _e( 'Sorry! We can&rsquo;t find that page.', 'scout-base' ); ?></h1>
                    </header><!-- .page-header -->
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-content">
                            <p><?php _e( 'Try searching or using the links below!', 'scout-base' ); ?></p>
                            
                            <div id="search-form-container">
                            <?php get_search_form(); ?>
                            </div>

                            <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

                            <?php if ( scout_base_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
                            <div class="widget widget_categories">
                                <h2 class="widget-title"><?php _e( 'Most Used Categories', 'scout-base' ); ?></h2>
                                <ul>
                                <?php
                                    wp_list_categories( array(
                                        'orderby'    => 'count',
                                        'order'      => 'DESC',
                                        'show_count' => 1,
                                        'title_li'   => '',
                                        'number'     => 10,
                                    ) );
                                ?>
                                </ul>
                            </div><!-- .widget -->
                            <?php endif; ?>
                        </div><!-- .page-content -->
                    </div>
                </div>
        </section><!-- .error-404 -->
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
