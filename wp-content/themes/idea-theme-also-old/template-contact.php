<?php
/**
 * Template Name: Contact Us
 *
 *
 * @package Scout-Base
 */
// This adds the contactForm.css to the ninjaforms main styling within the plugin so we can customize the form style
// First it tests to see if there is a form on the page with the ID of 5 and then if it does it adds the styles.
function contactForm_add_nf_styles( $form_id ) {
  if( $form_id == 5 ) {
    wp_enqueue_style('contactForm-nf-css' , get_template_directory_uri() . '/stylesheets/contactForm.css', '3.0.1' );
  }
}
add_action ( 'ninja_forms_display_css', 'contactForm_add_nf_styles' );
?>

<?php get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/contact.css">
<div id="primary" class="content-area contact-page">
  <main id="main" class="site-main" role="main">
    <div class="banner text-banner" id="contact-banner">
      <div class="container">
        <h1 class="title-banner">Question, comment, want to get involved? We’d love to hear from you.</h1>
      </div>
    </div>
    <section id="contact-address">
      <div class="container">
        <div class="row">
          <h2 class="centered">Visiting Idea</h2>
          <div class="col-md-5">
            <p>
              The IDEA lab is located in the Hayden Hall basement which is 370
              Huntington Avenue, Boston MA 02115.
            </p>
            <p>
              <strong>IDEA Lab</strong><br />
              001 Hayden Hall at Northeastern University<br />
              370 Huntington Avenue<br />
              Boston, MA 02116
            </p>
            <p>
              <strong>Parking: </strong>There is parking available in the Renaissance Parking
              Garage at <a href="https://www.google.com/maps/place/835+Columbus+Ave,+Northeastern+University,+Boston,+MA+02120/@42.3361566,-71.0880542,15z/data=!4m2!3m1!1s0x89e37a22fe33d8eb:0xd8e99c7caa3bd5e9" target="_blank">835 Columbus Ave</a>.
              <br><br>
              <strong>Public Transportation: </strong>Take the orange line to Ruggles Station or the green line to Northeastern.
            </p>
          </div>
          <div class="col-md-6 col-lg-5 col-lg-offset-2 col-md-offset-1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1474.5720040011074!2d-71.0883931588608!3d42.33945298770844!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37a18882711db%3A0x781871daac1be034!2s370+Huntington+Ave+Hayden+Hall%2C+Northeastern+University%2C+Boston%2C+MA+02115!5e0!3m2!1sen!2sus!4v1408065111531" width="100%" height="300" frameborder="0" style="border:0"></iframe>
          </div>
        </div>
      </div>
    </section>
    <hr/>
    <section id="contact-form">
      <h2 class="centered">Contact Us</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <?php setup_postdata($post); ?>
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
