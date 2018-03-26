<?php /* Template Name: Resources */ ?>

<?php get_header(); ?>

<div class="detail-header-wrapper">
  <h2 class="detail-header"><?php the_title()?></h2>
</div>
<div class="container">
  <section class="front-featured text-center">
    <div class="container">
      <div class="row mt-5 mb-5">
        <div class="col-sm-6">
          <h3 class="text-orange">Gap Fund</h3>
          <p>The IDEA Gap Fund is a $10,000 non-equity educational grant available to ventures in the Go stage of IDEA's process. Grants are available for applicants on a bi-monthly basis. Applications are reviewed by IDEA’s student Investment Committee before being selected to pitch in front of members of IDEA's Advisory Board.</p>
        </div>
        <div class="col-sm-6">
          <h3 class="text-orange">Prototype</h3>
          <p>The Prototype Fund is a resource to support builders and tinkerers to bring their ideas to life. This fund enables teams to quickly build, test and share their concepts by providing them prototyping support and up to $1,000 in funding. The fund is available to anyone at Northeastern, not just IDEA ventures.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <h3 class="text-orange">Support</h3>
          <p>To support our ventures in their business model and go-to-market IDEA relies on Bob Lentz our Entrepreneur in Residence. Bob has extensive executive management and entrepreneurial experience in the technology industry having been involved in the growth and eventual sale of a number of successful technology ventures.</p>
        </div>
        <div class="col-sm-6">
          <h3 class="text-orange">Investor Network</h3>
          <p>With the help of our Entrepreneur-in-Residence, IDEA has a network of investors to advise and finance ventures. Whether ventures are looking for an angel investor for a first round of outside capital or a venture capital firm to raise a Series A round, IDEA connects ventures who have made it all the way through the stage-gate process to investors that are a good fit.</p>
        </div>
      </div>
    </div>
  </section>
  <h2 class="text-center">Access Resources</h2>
  <?php
    while ( have_posts() ) : the_post(); ?>
      <?php the_content();
    endwhile;
    wp_reset_query();
  ?>
</div>

<?php get_footer() ?>
