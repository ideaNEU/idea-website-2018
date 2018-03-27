<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */
?>

<div class="news-post">
        <div id="blog-tag"><?php  // Pulls the first category selected
                            $category = get_the_category(); 
                            echo $category[0]->cat_name;?>
        </div>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div id="post-author <?php the_field('post_author'); ?>

		<?php the_date();?>

		<img src="<?php the_field('blog_post_image'); ?>" class="img-responsive">

		<p><?php the_field('blog_post_blurb'); ?></p>

		<?php the_tags(); ?>


</div> <!-- ./ news-post -->