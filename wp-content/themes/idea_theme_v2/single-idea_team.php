<?php
/**
* The template for displaying all single posts.
*
* @package Scout-Base
*/




$post_objects = get_field('worked_ventures');


$args = array(
 	'post_type' => 'post',
 	'tax_query' => array(
 		array(
 			'taxonomy' => 'idea-team',
 			'field'    => 'mgmt_member_tag',
 			'terms'    => $mgmt_name,
 		),
 	),
 );

$the_query = new WP_Query( $args );
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php get_template_part( 'content', 'team_mgmt_single' ); ?> <!-- See content-tem_mgmt.php -->
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>