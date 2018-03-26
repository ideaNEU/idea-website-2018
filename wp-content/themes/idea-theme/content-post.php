<?php
/**
 * @package Scout-Base
 */
?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/news.css">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="news-post">

		<h1 id="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

    	<div id="post-author"><?php the_field('post_author'); ?></div>

		
	    <div id="post-date"><?php the_date();?></div>

    	<div class="post-image-wrapper">
			<img id="post-img" src="<?php the_field('blog_post_image'); ?>">
		</div>

	    <div id="post-content"><?php the_field('blog_post_blurb'); ?></div>

    	<div id="post-tags"><?php the_tags(); ?></div>

    	<hr/>

	</div> <!-- ./ news-post -->
</article><!-- #post-## -->