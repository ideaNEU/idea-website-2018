<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Contact Us
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Scout-Base
 */

/* 

TO DO LIST:

Styling:
  - Banner
    - pattern background
    - Banner needs to be the right height on mobile
  - Submit Message button
  - Form Inputs
  - Executive info circles
      - Figure out how to get these to center in their columns in mobile
    - Executive info header
    - Executive info info text
  - Address Section
    - Address info
    - Google embed

Functions:
  - connect input forms
  - connect email to 'submit message' button


 */

//response generation function


$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){

  global $response;

  if($type == "success") $response = "<div class='success'>{$message}</div>";
  else $response = "<div class='error'>{$message}</div>";

}

//response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Oops! Something went wrong. Please try again.";
$message_sent    = "Thanks for reaching out!";

//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];

//php mailer variables
$to = get_option('garcia.ka@husky.neu.edu');
$subject = "Someone sent a message from ".get_bloginfo('IDEA Contact Form');
$headers = 'From: '. $email . "\r\n" .
  'Reply-To: ' . $email . "\r\n";

if(!$human == 0){
  if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
  else {

    //validate email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      my_contact_form_generate_response("error", $email_invalid);
    else //email is valid
    {
      //validate presence of name and message
      if(empty($name) || empty($message)){
        my_contact_form_generate_response("error", $missing_content);
      }
      else //ready to go!
      {
        $sent = wp_mail($to, $subject, strip_tags($message), $headers);
        if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
        else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
      }
    }
  }
}
else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>

<?php get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="banner text-banner" id="contact-banner">
        <div class="container">
              <h1 class="banner-headline">Have a question? Send us a message, we would love to hear from you!</h1>
        </div>
      </div>


      <section id="contact-form" class="contact-form">
        <div class="container contact-page">
          <div class="row">
            <div class="col-md-3 col-lg-3">&nbsp;</div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <?php setup_postdata($post); ?>
                                                        <?php the_content(); ?>
                <?php do_shortcode('[the shortcode]'); ?>
            </div>
              <div class="col-md-3 col-lg-3">&nbsp;</div>

            </div>

          </div>
        </div>
      </section>

      <section class="contact-executives">
        <div class="container contact-page">
          <div class="row row-centered">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-centered">
              <div class="executive-circle responsive">
                <div id="inner-circle">
                  <div id="executive-desc">
                    <h5 id="executive-title">CEO</h5>
                    <p>&nbsp;</p>
                    <p class="text-center"><strong><?php the_field('ceo_name'); ?></strong></p>
                    <a href="mailto:<?php the_field('ceo_email'); ?>" target="blank">
                      <p><?php the_field('ceo_email'); ?></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-centered">
              <div class="executive-circle responsive">
                <div id="inner-circle">
                  <div id="executive-desc">
                    <h5 id="executive-title">OPERATIONS LEAD</h5>
                    <p>&nbsp;</p>
                    <p class="text-center"><strong><?php the_field('operations_lead_name'); ?></strong></p>
                    <a href="mailto:<?php the_field('operations_lead_email'); ?>" target="blank">
                      <p><?php the_field('operations_lead_email'); ?></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-centered">
              <div class="executive-circle responsive">
                <div id="inner-circle">
                  <div id="executive-desc">
                    <h5 id="executive-title">LAW OFFICER</h5>
                    <p>&nbsp;</p>
                    <p class="text-center"><strong><?php the_field('law_officer_name'); ?></strong></p>
                    <a href="mailto:<?php the_field('law_officer_email'); ?>" target="blank">	
                      <p><?php the_field('law_officer_email'); ?></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="contact-address light-gray">
        <div class="container contact-page">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
              <h2 id="address-heading">Visiting Idea</h2>
                <p class="address-instructions">
                The IDEA lab is located in the Hayden Hall basement which is 370 
                Huntington Avenue, Boston MA 02115.
                </p>
                <p id="address">
                  IDEA Lab<br />
                  001 Hayden Hall at Northeastern University<br />
                  370 Huntington Avenue<br />
                  Boston, MA 02116
                </p>
                <p class="get-here">
                <strong>Parking: </strong>There is parking available in the Renaissance Parking 
                  Garage at <a class="parking-address" href="https://www.google.com/maps/place/835+Columbus+Ave,+Northeastern+University,+Boston,+MA+02120/@42.3361566,-71.0880542,15z/data=!4m2!3m1!1s0x89e37a22fe33d8eb:0xd8e99c7caa3bd5e9" target="_blank">835 Columbus Ave</a>.
                  <br><br>
                <strong>Public Transportation: </strong>Take the orange line to Ruggle Station or the green line to Northeastern.
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1474.5720040011074!2d-71.0883931588608!3d42.33945298770844!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37a18882711db%3A0x781871daac1be034!2s370+Huntington+Ave+Hayden+Hall%2C+Northeastern+University%2C+Boston%2C+MA+02115!5e0!3m2!1sen!2sus!4v1408065111531" width="100%" height="300" frameborder="0" style="border:0"></iframe>
            </div>
          </div>
        </div>
      </section>
    </main><!-- #main -->
  </div><!-- #primary -->


  <?php get_footer(); ?>
