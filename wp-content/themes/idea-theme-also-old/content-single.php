<?php
/**
 * @package Scout-Base
 */
?>


<article>
	<div class="container">
		<div class="row">
			<div id="news-post-sidebar" class="col-xs-12 col-md-3"> <!-- The Sidebar with Category, tags, and search -->
				<hr/>
				<a href="<?php bloginfo('template_directory'); ?>/news"><-- Back to Recent News</a>
				<br><br>
				<p>TAGS</p>
				<div class="postclass">
					<?php the_tags( '<p class="posttag">', '</p><p class="posttag">', '</p>' ); ?>
				</div>
			</div>

			<div class="col-xs-12 col-md-8">
				<div class="post-header">
					<h4 id="post-author">by <?php the_field('post_author');?></h4>
					<h4 id="post-date"><?php scout_base_posted_on(); ?></h4>
				</div>
				<img src="<?php the_field('blog_post_image');?>">
				<div id="post-img-cap"><?php the_field('post_img_cap');?></div>

				<div id="post-content">
					<p>
					<?php the_content(); ?>
					<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'scout-base' ),
						'after'  => '</div>',
						) );
						?>
					</p>

					<p class="share"> Share this article </p>
					<?php echo do_shortcode('[simple-social-share]'); ?>
				</div>
			</div>

			<div class="col-xs-12 col-md-6">
				<?php
				/* translators: used between list items, there is a space after the comma */
				$category_list = get_the_category_list( __( ', ', 'scout-base' ) );

				/* translators: used between list items, there is a space after the comma */
				$tag_list = get_the_tag_list( '', __( ', ', 'scout-base' ) );


				printf(
					$meta_text,
					$category_list,
					$tag_list,
					get_permalink()
					);
					?>
					<?php /* scout_base_post_nav(); */ ?>
					
			</div><!-- .entry-footer -->
		</div>
	</div>				
</article><!-- #post-## -->
