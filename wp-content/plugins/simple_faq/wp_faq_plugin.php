<?php
/*
Plugin Name: Simple FAQ System
Plugin URI: http://code.ideaplus.com/
Description: Helps you create an FAQ section for your WordPress website. Shortcode usage: <code>[faq]</code>
Version: 1.0
Author: Barış Ünver
Author URI: http://hub.ideaplus.com/authors/baris-unver
License: Public Domain
*/

if ( ! function_exists( 'idea_faq_item' ) ) {

// register custom post type
    function idea_faq_item() {

        // these are the labels in the admin interface, edit them as you like
        $labels = array(
            'name'                => _x( 'FAQs', 'Post Type General Name', 'idea_faq' ),
            'singular_name'       => _x( 'FAQ', 'Post Type Singular Name', '_faq' ),
            'menu_name'           => __( 'FAQ', 'idea_faq' ),
            'parent_item_colon'   => __( 'Parent Item:', 'idea_faq' ),
            'all_items'           => __( 'All Items', 'idea_faq' ),
            'view_item'           => __( 'View Item', 'idea_faq' ),
            'add_new_item'        => __( 'Add New FAQ Item', 'idea_faq' ),
            'add_new'             => __( 'Add New', 'idea_faq' ),
            'edit_item'           => __( 'Edit Item', 'idea_faq' ),
            'update_item'         => __( 'Update Item', 'idea_faq' ),
            'search_items'        => __( 'Search Item', 'idea_faq' ),
            'not_found'           => __( 'Not found', 'idea_faq' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'idea_faq' ),
        );
        $args = array(
            // use the labels above
            'labels'              => $labels,
            // we'll only need the title, the Visual editor and the excerpt fields for our post type
            'supports'            => array( 'title', 'editor', ),
            // we're going to create this taxonomy in the next section, but we need to link our post type to it now
            'taxonomies'          => array( 'idea_faq_tax' ),
            // make it public so we can see it in the admin panel and show it in the front-end
            'public'              => true,
            // show the menu item under the Pages item
            'menu_position'       => 20,
            // show archives, if you don't need the shortcode
            'has_archive'         => false,
        );
        register_post_type( 'idea_faq', $args );

    }

    // hook into the 'init' action
    add_action( 'init', 'idea_faq_item', 0 );

}

if ( ! function_exists( 'idea_faq_tax' ) ) {

    // register custom taxonomy
    function idea_faq_tax() {

        // again, labels for the admin panel
        $labels = array(
            'name'                       => _x( 'FAQ Categories', 'Taxonomy General Name', 'idea_faq' ),
            'singular_name'              => _x( 'FAQ Category', 'Taxonomy Singular Name', 'idea_faq' ),
            'menu_name'                  => __( 'FAQ Categories', 'idea_faq' ),
            'all_items'                  => __( 'All FAQ Cats', 'idea_faq' ),
            'parent_item'                => __( 'Parent FAQ Cat', 'idea_faq' ),
            'parent_item_colon'          => __( 'Parent FAQ Cat:', 'idea_faq' ),
            'new_item_name'              => __( 'New FAQ Cat', 'idea_faq' ),
            'add_new_item'               => __( 'Add New FAQ Cat', 'idea_faq' ),
            'edit_item'                  => __( 'Edit FAQ Cat', 'idea_faq' ),
            'update_item'                => __( 'Update FAQ Cat', 'idea_faq' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'idea_faq' ),
            'search_items'               => __( 'Search Items', 'idea_faq' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'idea_faq' ),
            'choose_from_most_used'      => __( 'Choose from the most used items', 'idea_faq' ),
            'not_found'                  => __( 'Not Found', 'idea_faq' ),
        );
        $args = array(
            // use the labels above
            'labels'                     => $labels,
            // taxonomy should be hierarchial so we can display it like a category section
            'hierarchical'               => true,
            // again, make the taxonomy public (like the post type)
            'public'                     => true,
        );
        // the contents of the array below specifies which post types should the taxonomy be linked to
        register_taxonomy( 'idea_faq_tax', array( 'idea_faq' ), $args );

    }

    // hook into the 'init' action
    add_action( 'init', 'idea_faq_tax', 0 );

}

if ( ! function_exists( 'idea_faq_shortcode' ) ) {

    function idea_faq_shortcode( $atts ) {
        extract( shortcode_atts(
                array(
                    // category slug attribute - defaults to blank
                    'category' => '',
                    // full content or excerpt attribute - defaults to full content
                    'excerpt' => 'false',
                ), $atts )
        );

        $output = '';

        // set the query arguments
        $query_args = array(
            // show all posts matching this query
            'posts_per_page'    =>   -1,
            // show the 'idea_faq' custom post type
            'post_type'         =>   'idea_faq',
            // show the posts matching the slug of the FAQ category specified with the shortcode's attribute
            'tax_query'         =>   array(
                array(
                    'taxonomy'  =>   'idea_faq_tax',
                    'field'     =>   'slug',
                    'terms'     =>   $category,
                )
            ),
            // tell WordPress that it doesn't need to count total rows - this little trick reduces load on the database if you don't need pagination
            'no_found_rows'     =>   true,
            'orderby'          => 'date',
            'order'            => 'ASC',
        );

        // get the posts with our query arguments
        $faq_posts = get_posts( $query_args );
        $output .= '<div class="idea-faq-section">';
		$term = get_term_by('slug', $category, 'idea_faq_tax');
        $output .= '<h3 class="idea-faq-category-title">' . $term->name . '</h3>';
        // handle our custom loop
        foreach ( $faq_posts as $post ) {
           setup_postdata( $post );
            $faq_item_title = get_the_title( $post->ID );
            $faq_item_content = get_the_content();

            $output .= '<div class="idea-faq-item" id="faq-question-' . $post->ID . '">';
            $output .= '<h5 class="faq-item-title">' . $faq_item_title . '</h5>';
            $output .= '<div class="faq-item-content">';
            $output .= '<p class="faq-item-answer">'. $faq_item_content . '</p>';
            $output .= '</div>';
            $output .= '</div>';
        }

        wp_reset_postdata();

        $output .= '</div>';

        return $output;
    }

    add_shortcode( 'faq', 'idea_faq_shortcode' );

    function idea_faq_toc_shortcode( $atts ) {
        extract( shortcode_atts(
                array(
                    // category slug attribute - defaults to blank
                    'category' => ''
                ), $atts )
        );

        $output = '';

        // set the query arguments
        $query_args = array(
            // show all posts matching this query
            'posts_per_page'    =>   -1,
            // show the 'idea_faq' custom post type
            'post_type'         =>   'idea_faq',
            // show the posts matching the slug of the FAQ category specified with the shortcode's attribute
            'tax_query'         =>   array(
                array(
                    'taxonomy'  =>   'idea_faq_tax',
                    'field'     =>   'slug',
                    'terms'     =>   $category,
                )
            ),
            // tell WordPress that it doesn't need to count total rows - this little trick reduces load on the database if you don't need pagination
            'no_found_rows'     =>   true,
            'orderby'          => 'date',
            'order'            => 'ASC',
        );

        // get the posts with our query arguments
        $faq_posts = get_posts( $query_args );
        $output .= '<div class="idea-faq-section">';
        $term = get_term_by('slug', $category, 'idea_faq_tax');
        $output .= '<h5 class="idea-faq-category-toc-title">' . $term->name . '</h5>';
        // handle our custom loop
        foreach ( $faq_posts as $post ) {
           setup_postdata( $post );
            $faq_item_title = get_the_title( $post->ID );
            $faq_item_content = get_the_content();

            $output .= '<div class="idea-faq-item">';
            $output .= '<a class="orange faq-item-title" href="#faq-question-' . $post->ID . '">' . $faq_item_title . '</a>';
            $output .= '</div>';
        }

        wp_reset_postdata();

        $output .= '</div>';

        return $output;
    }

    add_shortcode( 'faq_toc', 'idea_faq_toc_shortcode' );
}

function idea_faq_activate() {
    idea_faq_item();
    flush_rewrite_rules();
}

register_activation_hook( __FILE__, 'idea_faq_activate' );

function idea_faq_deactivate() {
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'idea_faq_deactivate' );

?>
