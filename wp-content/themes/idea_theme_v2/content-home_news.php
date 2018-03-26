<?php
/**
 * @package Scout-Base
 */
?>


<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="news-post">

			<div id="post-img"><img src="<?php the_field('blog_post_image'); ?>" class="img-responsive"></div>

			<h4 id="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

			<div id="post-date"><?php the_date();?></div>

			<div id="post-content">
        <?php $content = the_field('blog_post_blurb');
        echo substr($content, 0, 100); ?>
			</div>
		</div>
	</div> <!-- ./ news-post -->
</article><!-- #post-## -->
