<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
<?php
$member_group_query = new WP_Query( array(
    'post_type' => 'idea_home_slide',
) );
?>
<div>
  <section class="front-top gray">
    <div id="home-carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php for ($i = 0; $i < $member_group_query->post_count; $i++): ?>
          <li data-target="#home-carousel" data-slide-to="0" class="<?php echo $i == 0 ? 'active' : ''; ?>"></li>
        <?php endfor; ?>
      </ol>
      <div class="carousel-inner">
        <div class="row">
        <?php
            if ( $member_group_query->have_posts() ) :
              $i = 0; 
              while ( $member_group_query->have_posts() ) : $member_group_query->the_post();
        ?>
        <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
            <?php  if($video = get_post_meta($post->ID, 'background_video', true)) { ?>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="<?php echo $video; ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <?php } else { ?>
              <img src="<?php the_field('background_image', $post->ID) ?>" class="w-100 img-responsive" />
            <?php } ?>
          <div class="overlay"></div>
          <div class="carousel-caption d-none d-md-block">
            <?php the_title( '<h2>', '</h2>' ); ?>
          </div>
        </div>
<?php
    $i++;
    endwhile;
  endif;
    wp_reset_postdata();
?>
      </div>
    </div>
  </section>
  <section class="front-about">
    <div class="container text-center">
      <h2><?php the_field('about_header')?></h2>
      <p class="mb-5 ml-4 mr-4">IDEA is a student-led venture accelerator that fosters the development of entrepreneurs in the Northeastern community through the educational exeperience of developing a business from concept to launch. We at IDEA, strive to provide a holistic experience for our ventures through support, in-kind resources, and opportunities to engage in an experiential learning  opportunity.</p>
      <div class="row">
        <div class="col-sm">
          <h3><?php the_field('about_section_1_title')?></h3>
          <p><?php the_field('about_section_1_content')?></p>
        </div>
        <div class="col-sm">
          <h3><?php the_field('about_section_2_title')?></h3>
          <p><?php the_field('about_section_2_content')?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <h3><?php the_field('about_section_3_title')?></h3>
          <p><?php the_field('about_section_3_content')?></p>
        </div>
        <div class="col-sm">
          <h3><?php the_field('about_section_4_title')?></h3>
          <p><?php the_field('about_section_4_content')?></p>
        </div>
      </div>
      <a href="about" class="btn btn-primary btn-lg"><?php the_field('about_button_text')?></a>
    </div>
  </section>
  <section class="front-impact text-center">
    <div class="container">
      <h2><?php the_field('impact_header')?></h2>
      <div class="row">
        <div class="col-sm">
          <div class="impact-circle">
            <img src="wp-content/themes/idea/img/lightbulb.png" />
            <?php the_field('impact_stat_1_number')?>
          </div>
          <h3><?php the_field('impact_stat_1_title')?></h3>
        </div>
        <div class="col-sm">
          <div class="impact-circle">
            <img src="wp-content/themes/idea/img/moneybag.png" />
            <?php the_field('impact_stat_2_number')?>
          </div>
          <h3><?php the_field('impact_stat_2_title')?></h3>
        </div>
        <div class="col-sm">
          <div class="impact-circle">
            <img src="wp-content/themes/idea/img/rocket.png" />
            <?php the_field('impact_stat_3_number')?>
          </div>
          <h3><?php the_field('impact_stat_3_title')?></h3>
        </div>
      </div>
    </div>
  </section>
  <section class="front-featured text-center">
    <div class="container">
      <h2><?php the_field('featured_header')?></h2>
      <div class="w-50 m-auto">
        <?php the_field('featured_content')?>
      </div>
      <div class="text-center">
        <a href="<?php echo site_url('/resources'); ?>" class="btn btn-lg btn-primary mt-4 mb-2">Access Resources</a>
      </div>
    </div>
  </section>
  <section class="front-faq">
    <a href="<?php echo site_url('/faq'); ?>">
      <h3>Questions? View Our FAQ</h3>
    </a>
  </section>
  <section class="front-get-involved">
    <div class="container text-center">
      <h2><?php the_field('get_involved_blurb')?></h2>
      <div class="row">
        <div class="col-md-4">
          <a target="_blank" href="http://www.tfaforms.com/365595" class="get-involved-btn btn btn-success">Become A Venture</a>
        </div>
        <div class="col-md-4">
          <a target="_blank" href="https://www.tfaforms.com/4660762" class="get-involved-btn btn btn-success">Become A Coach</a>
        </div>
        <div class="col-md-4">
          <a target="_blank" href="https://www.tfaforms.com/4660761" class="get-involved-btn btn btn-success">Join The Management Team</a>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer() ?>
