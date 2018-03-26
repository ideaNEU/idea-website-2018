<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scout-Base
 */
get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/team.css">
<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>
            <section>
                <div class="row">
                    <div class="col-xs-12 team__banner">
                        <div class="col-xs-10 col-lg-6 aligncenter nofloat">
                            <div class="aligncenter team__row">
                                <h1 class="team__banner__bigtext">IDEA Team</h1>
                                <p class="team__banner__text">We love startups and solving big problems, it's why we're all here!</p>
                            </div>
                        </div> <!-- team__banner -->
                    </div>
                </div>
            </section>

            <!--Sorting Feature -->
            <section>
                <div class="container">
                    <div class="row col-md-10 aligncenter nofloat">
                        <div class="filters team__circle__container nofloat">
                            <div class="team__circle__wrapper">
                                <div class="team__circle__button aligncenter nofloat coaches" data-filter=".coaches">
                                    <div class="team__circle">
                                        <p>Coaches</p>
                                    </div> <!-- team__circle -->
                                </div> <!-- team__circle__button -->
                            </div> <!-- team__circle__wrapper -->
                            <div class="team__circle__wrapper">
                                <div class="team__circle__button aligncenter nofloat management" data-filter=".management">
                                    <div class="team__circle">
                                        <p>Management</p>
                                    </div> <!-- team__circle -->
                                </div> <!-- team__circle__button -->
                            </div> <!-- team__circle__wrapper -->
                            <div class="team__circle__wrapper">
                                <div class="team__circle__button aligncenter nofloat advisors" data-filter=".advisors">
                                    <div class="team__circle">
                                        <p>Advisory Board</p>
                                    </div> <!-- team__circle -->
                                </div> <!-- team__circle__button -->
                            </div> <!-- team__circle__wrapper -->
                            <div class="team__circle__wrapper">
                                <div class="team__circle__button aligncenter nofloat faculty-staff" data-filter=".faculty-staff">
                                    <div class="team__circle">
                                        <p>Faculty/Staff</p>
                                    </div> <!-- team__circle -->
                                </div> <!-- team__circle__button -->
                            </div> <!-- team__circle__wrapper -->
                        </div> <!-- filters -->
                    </div> <!-- row -->

                    <div class="row">
                        <div class="col-xs-10 col-md-6 nofloat team__info__container">
                            <p class="coaches__text team__text__container" id="p__coaches">
                                <!-- coaches__text class contains description of coaches -->
                            </p>
                            <p class="management__text team__text__container" id="p__management">
                                <!-- management__text class contains description of management -->
                            </p>
                            <p class="advisoryBoard__text team__text__container" id="p__advisors">
                                <!-- advisoryBoard__text class contains description of advisors -->
                            </p>
                            <p class="facultyStaff__text team__text__container" id="p__faculty-staff">
                                <!-- facultyStaff__text class contains description of faculty-staff -->
                            </p>
                        </div> <!-- team__info__container -->
                    </div> <!-- row -->
                </div> <!-- container -->
            </section>


            <!-- Main body of page -->
            <section id="team_grid">
                <div class="container">
                    <div class="row">
                        <div class="team__container">
                            <?php /* Start the Loop */ ?>
                            <?php query_posts($query_string . '&orderby=title&order=ASC') ?>
                            <?php while ( have_posts() ) : the_post(); ?>

                                <?php get_template_part( 'content', 'team_mgmt' ); ?> <!-- See content-team_mgmt.php -->

                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php else : ?>

                <?php get_template_part( 'content', 'none' ); ?>

            <?php endif; ?>

        </div>
    </div>
</section>
</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>


<script type="text/javascript">
  jQuery(document).ready(function($) {
    $("#p__coaches").hide();
    $("#p__management").hide();
    $("#p__advisors").hide();
    $("#p__faculty-staff").hide();
  })
    jQuery(window).load(function() {
      var $ = jQuery;
      var $container = $('.team__container');

        $container.isotope({
            filter: '',
            layoutMode: 'masonry',
        });

        $('.filters').on( 'click', 'div.team__circle__button', function() {

            var filterValue = jQuery(this).attr('data-filter');
            $container.isotope({ filter: filterValue });
            jQuery('.team__circle__container').find('.team__circle--active').removeClass('team__circle--active');

            jQuery(this).children().addClass('team__circle--active');

        });


        $(".team__text__container").hide();

        $(".coaches").click(function(){
            $("#p__coaches").show();
            $("#p__management").hide();
            $("#p__advisors").hide();
            $("#p__faculty-staff").hide();
        });

        $(".management").click(function(){
            $("#p__coaches").hide();
            $("#p__management").show();
            $("#p__advisors").hide();
            $("#p__faculty-staff").hide();
        });

        $(".advisors").click(function(){
            $("#p__coaches").hide();
            $("#p__management").hide();
            $("#p__advisors").show();
            $("#p__faculty-staff").hide();
        });

        $(".faculty-staff").click(function(){
            $("#p__coaches").hide();
            $("#p__management").hide();
            $("#p__advisors").hide();
            $("#p__faculty-staff").show();
        });

    });
</script>
