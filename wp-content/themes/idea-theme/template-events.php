<?php
/**
 * Template Name: Events
 *
 *
 * @package Scout-Base
 */
 get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/events.css">
<div id="primary" class="content-area events">
    <main id="main" class="site-main" role="main">
        <section class="banner">
            <div class="container">
                <div class="row">
                    <h1 class="centered" id="bigText">Events</h1>
                    <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                        <h1 class="centered" id="bodyText">Stay up to date with things going on at IDEA</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="events-calendar">
        	<div class="container">
        		<div class="row">
        			<div class="col-xs-12">
					<iframe src="https://www.google.com/calendar/embed?height=700&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=ideaneu%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FNew_York" style=" border-width:0 " width="1200" height="600" frameborder="0" scrolling="no"></iframe>	
        			</div>
        		</div>
        	</div>
        </section>
	

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();?>