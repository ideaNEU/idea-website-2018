<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StrapPress
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info">
				<?php
				 if ( is_active_sidebar( 'footer' ) ) : 
						 dynamic_sidebar( 'footer' ); 
				 endif; ?>
			</div><!-- .site-info -->
			<div class="row justify-content-between footer-bottom">
				<div class="col-sm-4">
					<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea-theme/images/logos/northeastern-logo.png" height="100%" width="100%">
				</div>
				<div class="col-sm-4">
					<div class="footer-social-media"><p>
						<a class="footer-social-media-icon" href="https://www.facebook.com/IDEA.NEU" target="_blank"><i class="fa fa-facebook"></i></a>
						<a class="footer-social-media-icon" href="https://www.twitter.com/IDEANEU" target="_blank"><i class="fa fa-twitter"></i></a>
						<a class="footer-social-media-icon" href="https://www.linkedin.com/company/idea-northeastern's-venture-accelerator" target="_blank"><i class="fa fa-linkedin"></i></a>
						<span class="footer-social-media-seperator"></span>
						<a href="mailto:idea@neu.edu">idea@neu.edu</a></p>
					</div>
				</div>
			</div><!-- .row -->
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Signup For Our Newsletter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<!-- Begin MailChimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
				<style type="text/css">
				    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
				    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
				       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup">
				<form action="https://northeastern.us10.list-manage.com/subscribe/post?u=e31d1113c806f81fdf67675a8&amp;id=161e88741c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				   <div id="mc_embed_signup_scroll">
				<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
				<div class="mc-field-group">
				    <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
				</label>
				    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
				</div>
				    <div id="mce-responses" class="clear">
				        <div class="response" id="mce-error-response" style="display:none"></div>
				        <div class="response" id="mce-success-response" style="display:none"></div>
				    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				   <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e31d1113c806f81fdf67675a8_161e88741c" tabindex="-1" value=""></div>
				   <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				   </div>
				</form>
				</div>
				<script type=‘text/javascript’ src=‘//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js’></script><script type=‘text/javascript’>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]=‘EMAIL’;ftypes[0]=‘email’;fnames[1]=‘FNAME’;ftypes[1]=‘text’;fnames[2]=‘LNAME’;ftypes[2]=‘text’;fnames[3]=‘MMERGE3’;ftypes[3]=‘text’;fnames[4]=‘MMERGE4’;ftypes[4]=‘text’;}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				<!--End mc_embed_signup-->

      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
