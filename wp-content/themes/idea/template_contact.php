<?php /* Template Name: Contact Us */ ?>

<?php get_header(); ?>

<div class="detail-header-wrapper">
  <h2 class="detail-header"><?php the_title(); ?></h2>
</div>
<div class="container">
  <section>
    <div class="row">
      <div class="col-md-4">
        <h3><?php the_field('visit_subheader')?></h3>
        <p><?php the_field('visit_description')?></p>
        <h4><?php the_field('lab_address_header')?></h4>
        <p><?php the_field('lab_address_content')?></p>
        <h4><?php the_field('parking_header')?></h4>
        <p><?php the_field('parking_content')?></p>
        <h4><?php the_field('transportation_header')?></h4>
        <p><?php the_field('transportation_content')?></p>
      </div>
      <div class="col-md-8">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1474.5720040011074!2d-71.0883931588608!3d42.33945298770844!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37a18882711db%3A0x781871daac1be034!2s370+Huntington+Ave+Hayden+Hall%2C+Northeastern+University%2C+Boston%2C+MA+02115!5e0!3m2!1sen!2sus!4v1408065111531" width="100%" height="600" frameborder="0" style="border:0"></iframe>
      </div>
    </div>
    <div class="row contact-form-section justify-content-center">
      <div class="col-sm-6">
        <h3><?php the_field('contact_form_header')?></h3>
        <?php
          while (have_posts()) : the_post();
            the_content();
          endwhile;
        ?>
      </div>
    </div>
  </section>
</div>

<?php get_footer() ?>
