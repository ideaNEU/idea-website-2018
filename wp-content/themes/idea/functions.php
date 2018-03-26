<?php
/**
 * StrapPress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package StrapPress
 */

if ( ! function_exists( 'strappress_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function strappress_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on StrapPress, use a find and replace
	 * to change 'strappress' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'strappress', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'strappress' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'strappress_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	function strappess_widgets_init() {

		register_sidebar( array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '',
			'after_widget'  => '',
		) );

	}
	add_action( 'widgets_init', 'strappess_widgets_init' );

}
endif;
add_action( 'after_setup_theme', 'strappress_setup' );


function idea_create_post_type() {

  register_post_type( 'idea_home_slide',
          array(
                  'labels' => array(
                          'name' => __( 'Home Slides' ),
                          'singular_name' => __( 'Home Slides' )
                  ),
          'public' => true,
          'has_archive' => false,
          'menu_position' => 20, // 5 - below Posts | 10 - below Media | 20 - below Pages
          'hierarchical' => false,
          'rewrite' => array('slug' => 'partners', 'with_front' => false ),
          'supports' => array( 'title', 'editor', 'custom-fields', 'excerpt' )
          )
  );

  register_post_type( 'idea_partners',
          array(
                  'labels' => array(
                          'name' => __( 'Partners' ),
                          'singular_name' => __( 'Partners' )
                  ),
          'public' => true,
          'has_archive' => false,
          'menu_position' => 20, // 5 - below Posts | 10 - below Media | 20 - below Pages
          'hierarchical' => false,
          'rewrite' => array('slug' => 'partners', 'with_front' => false ),
          'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'excerpt' )
          )
  );

	register_post_type( 'idea_ventures',
	        array(
	                'labels' => array(
	                        'name' => __( 'Ventures' ),
	                        'singular_name' => __( 'Venture' )
	                ),
	        'public' => true,
	        'has_archive' => true,
	        'menu_position' => 20, // 5 - below Posts | 10 - below Media | 20 - below Pages
	        'hierarchical' => false,
	        'rewrite' => array('slug' => 'ventures', 'with_front' => false ),
	        'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'excerpt' )
	        )
	);

	// Status Category
	register_taxonomy('idea_ventures_status',
		array( 'idea_ventures' ),
		array(
		        'hierarchical' => true,
		        'labels' => array(
		                'name' => _x( 'Venture Status', 'taxonomy general name' ),
		                'menu_name' => __( 'Venture Status' ),
		        ),
		        'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'venture_status' )
		)
	);

	register_post_type( 'idea_team',
	        array(
	                'labels' => array(
	                        'name' => __( 'Team' ),
	                        'singular_name' => __( 'Team' )
	                ),
	        'public' => true,
	        'has_archive' => false,
	        'menu_position' => 20, // 5 - below Posts | 10 - below Media | 20 - below Pages
	        'hierarchical' => false,
	        'rewrite' => array('slug' => 'team', 'with_front' => false ),
	        'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'excerpt' )
	        )
	);
	register_taxonomy('team_type',
	  array( 'idea_team' ),
	  array(
	    'hierarchical' => true,
	    'labels' => array(
	            'name' => _x( 'Team Type', 'taxonomy general name' ),
	            'menu_name' => __( 'Team Type' ),
	    ),
	    'show_ui' => true,
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'team_type' )
	      )
	);

  if(function_exists("register_field_group"))
  {
    register_field_group(array (
      'id' => 'acf_contact-us-content',
      'title' => 'Contact Us Content',
      'fields' => array (
        array (
          'key' => 'field_5a1f60e247450',
          'label' => 'Contact Page Header',
          'name' => 'contact_page_header',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_5a1f60e99de4a',
          'label' => 'Visit Subheader',
          'name' => 'visit_subheader',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_5a1f60f8afc3c',
          'label' => 'Visit Description',
          'name' => 'visit_description',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_5a1f61161ead3',
          'label' => 'Lab Address Header',
          'name' => 'lab_address_header',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_5a1f6120932cc',
          'label' => 'Lab Address Content',
          'name' => 'lab_address_content',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_5a1f625ef5d85',
          'label' => 'Parking Header',
          'name' => 'parking_header',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_5a1f62657fe6f',
          'label' => 'Parking Content',
          'name' => 'parking_content',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_5a1f6275d08ed',
          'label' => 'Transportation Header',
          'name' => 'transportation_header',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_5a1f70e502eb6',
          'label' => 'Transportation Content',
          'name' => 'transportation_content',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_5a1f71252f305',
          'label' => 'Contact Form Header',
          'name' => 'contact_form_header',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_5a1f712a2f306',
          'label' => 'Name Field',
          'name' => 'name_field',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_5a1f72cb6842e',
          'label' => 'Email Field',
          'name' => 'email_field',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_5a1f72e31eb65',
          'label' => 'Reason for contacting field',
          'name' => 'reason_for_contacting_field',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_5a1f72ea1eb66',
          'label' => 'Message Field',
          'name' => 'message_field',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'template_contact.php',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'normal',
        'layout' => 'no_box',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));
    register_field_group(array (
      'id' => 'acf_faq-content',
      'title' => 'FAQ Content',
      'fields' => array (
        array (
          'key' => 'field_59f62f9cca50f',
          'label' => 'FAQ Header',
          'name' => 'faq_header',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59f62fa7ca510',
          'label' => '',
          'name' => '',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'template_faq.php',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'normal',
        'layout' => 'no_box',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));
    register_field_group(array (
      'id' => 'acf_home-page-content',
      'title' => 'Home Page Content',
      'fields' => array (
        array (
          'key' => 'field_59d2e87f93ce3',
          'label' => 'Page Header',
          'name' => 'page_header',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e27a6c55b20',
          'label' => 'About Header',
          'name' => 'about_header',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e27a8155b21',
          'label' => 'About Section 1 Title',
          'name' => 'about_section_1_title',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e27aa055b22',
          'label' => 'About Section 2 Title',
          'name' => 'about_section_2_title',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e27aae55b23',
          'label' => 'About Section 3 Title',
          'name' => 'about_section_3_title',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e27ab455b24',
          'label' => 'About Section 4 Title',
          'name' => 'about_section_4_title',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e27aba55b25',
          'label' => 'About Section 1 Content',
          'name' => 'about_section_1_content',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e27ac155b26',
          'label' => 'About Section 2 Content',
          'name' => 'about_section_2_content',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e27ac855b27',
          'label' => 'About Section 3 Content',
          'name' => 'about_section_3_content',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e27ae655b28',
          'label' => 'About Section 4 Content',
          'name' => 'about_section_4_content',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e280d8b3c35',
          'label' => 'About Section 1 Image',
          'name' => 'about_section_1_image',
          'type' => 'image',
          'save_format' => 'url',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
        array (
          'key' => 'field_59e280eab3c36',
          'label' => 'About Section 2 Image',
          'name' => 'about_section_2_image',
          'type' => 'image',
          'save_format' => 'url',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
        array (
          'key' => 'field_59e280fbb3c37',
          'label' => 'About Section 3 Image',
          'name' => 'about_section_3_image',
          'type' => 'image',
          'save_format' => 'url',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
        array (
          'key' => 'field_59e28102b3c38',
          'label' => 'About Section 4 Image',
          'name' => 'about_section_4_image',
          'type' => 'image',
          'save_format' => 'url',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
        array (
          'key' => 'field_59e6c096a7dfa',
          'label' => 'About Button Text',
          'name' => 'about_button_text',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e6aa2e3d141',
          'label' => 'Impact Header',
          'name' => 'impact_header',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e6aa423d142',
          'label' => 'First Impact Stat Number',
          'name' => 'impact_stat_1_number',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e6aa533d143',
          'label' => 'First Impact Stat Title',
          'name' => 'impact_stat_1_title',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e6aa9175f8c',
          'label' => 'Second Impact Stat Number',
          'name' => 'impact_stat_2_number',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e6aaa075f8d',
          'label' => 'Second Impact Stat Title',
          'name' => 'impact_stat_2_title',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e6aaae75f8e',
          'label' => 'Third Impact Stat Number',
          'name' => 'impact_stat_3_number',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e6aaba75f8f',
          'label' => 'Third Impact Stat Title',
          'name' => 'impact_stat_3_title',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e546be96991',
          'label' => 'Get Involved Blurb',
          'name' => 'get_involved_blurb',
          'type' => 'text',
          'required' => 1,
          'default_value' => 'So you interested?',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e6ab3d1a3dc',
          'label' => 'Featured Header',
          'name' => 'featured_header',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_59e6ab461a3dd',
          'label' => 'Feature Content',
          'name' => 'featured_content',
          'type' => 'wysiwyg',
          'default_value' => '',
          'toolbar' => 'full',
          'media_upload' => 'yes',
        ),
        array (
          'key' => 'field_59e6c09da7dfb',
          'label' => '',
          'name' => '',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'template_home.php',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'normal',
        'layout' => 'no_box',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));
    register_field_group(array (
      'id' => 'acf_home-slides',
      'title' => 'Home Slides',
      'fields' => array (
        array (
          'key' => 'field_5a5e9d4122b59',
          'label' => 'Background Image',
          'name' => 'background_image',
          'type' => 'image',
          'save_format' => 'url',
          'preview_size' => 'full',
          'library' => 'all',
        ),
        array (
          'key' => 'field_5a5e9d5722b5a',
          'label' => 'Background Video',
          'name' => 'background_video',
          'type' => 'text',
          'instructions' => 'Enter a YouTube URL. This has precedence over the background image.',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'idea_home_slide',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'normal',
        'layout' => 'no_box',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));
  }


}

add_action( 'init', 'idea_create_post_type' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function strappress_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'strappress_content_width', 640 );
}
add_action( 'after_setup_theme', 'strappress_content_width', 0 );


/**
 * Add CSS/JS Scritps
 */
require get_template_directory() . '/inc/scripts.php';

/**
 * Register Widget Areas
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Bootstrap Walker.
 */
require get_template_directory() . '/inc/bootstrap-walker.php';
