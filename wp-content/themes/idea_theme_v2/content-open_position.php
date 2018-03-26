<?php
/**
 * The template part for displaying a Management Team Postition Opening
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */
?>
				<!-- This one whole open position post that appears on the open positions archive page -->
				<!-- This code is generated multiple times by wordpress -->
			<section id="openings-single" class="openings-single">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left:0">
						<h2><?php the_title(); ?></h2>
						<p class="lead"><?php the_field('position_desc'); ?></p>
						<p><strong>Requirements:</strong></p>
						<div class="openings-requirements"><p><?php the_field('position_requirements'); ?></p></div>
					</div>
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" style="padding-left:0">
								<strong>Think you've got what it takes? Apply today!</strong>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding-left:0">
							     <a href="<?php the_field('application_link'); ?>" onclick="window.open(this.href,  null, 'height=880, width=825, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><button class="btn btn-log">APPLY NOW</button></a>
							</div>
						</div>
					</div>
				</div> 
			</section><!-- .Team-Member -->




