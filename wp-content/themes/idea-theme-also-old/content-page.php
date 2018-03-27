<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Scout-Base
 */
?>
		<section class="banner">
				<div class="container">
						<div class="row">
								<div class="col-xs-12">
										<h1 class="centered" id="bigText">
										<?php echo $post->post_title; /*the_title( '', '' );*/ ?>
										</h1>
								</div>
						</div>
				</div>
		</section>

		<section id="about-idea">
				<div class="container">
						<div class="row">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php
								$post = get_post();
								// If post password required and it doesn't match the cookie.
								if ( post_password_required( $post ) ) {
									echo get_the_password_form( $post );
								} else {
									echo get_post()->post_content;
								}
								 ?>
							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'scout-base' ),
									'after'  => '</div>',
								) );
							?>
						</article><!-- #post-## -->

						</div> <!-- ./row -->
				</div>
		</section>

	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'scout-base' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
