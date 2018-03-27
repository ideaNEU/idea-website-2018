<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Scout-Base
 */
?>

</div><!-- #content -->

<div id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<?php dynamic_sidebar( 'footer-1' ); ?>
		<div class="row site-footer-bottom-row">
				<div class="col-sm-4">
					<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea-theme/images/logos/northeastern-logo.png" height="100%" width="100%">
				</div>
				<div class="col-sm-offset-4 col-sm-4">
					<div class="footer-social-media"><p>
						<a class="footer-social-media-icon" href="https://www.facebook.com/IDEA.NEU" target="_blank"><i class="fa fa-facebook"></i></a>
						<a class="footer-social-media-icon" href="https://www.twitter.com/IDEANEU" target="_blank"><i class="fa fa-twitter"></i></a>
						<a class="footer-social-media-icon" href="https://www.linkedin.com/company/idea-northeastern's-venture-accelerator" target="_blank"><i class="fa fa-linkedin"></i></a>
						<span class="footer-social-media-seperator"></span>
						<a href="mailto:idea@neu.edu">idea@neu.edu</a></p>
					</div>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
		<div class="footer-scout">
			<p>Built by <a href="https://neu.edu/scout">Scout</a> © 2015</p>
		</div>
		</div>
</div><!-- #page -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close modal-close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>			      </div>
				<iframe class="modal-iframe" src="https://eepurl.com/bsBPvf"></iframe>
				<div class="modal-body">
				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
