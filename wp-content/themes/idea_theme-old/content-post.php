<?php
/**
 * @package Scout-Base
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="news-post">
		<?php if ( is_home()) { ?>
        	<div id="blog-tag">
		    <?php  // Pulls the first category selected
    		$category = get_the_category(); 
			echo $category[0]->cat_name;?>
			</div>
		<?php  } ?>

		<h1 id="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

    	<div id="post-author"><?php the_field('post_author'); ?></div>

	    <div id="post-date"><?php the_date();?></div>

    	<img id="post-img" src="<?php the_field('blog_post_image'); ?>" class="img-responsive">

	    <div id="post-content"><?php the_field('blog_post_blurb'); ?></div>

    	<div id="post-tags"><?php the_tags(); ?></div>

	</div> <!-- ./ news-post -->
</article><!-- #post-## -->