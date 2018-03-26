
<div class="col-sm-4 col-md-3 text-center">
  <div class="team-photo-wrapper">
    <img src="<?php the_field('team_profile_picture'); ?>" class="team-photo">
  </div>
  <div class="team__block">
    <?php the_title( '<h5 class="mt-2 mb-0">', '</h5>' ); ?>
    <p class="team__position mb-2"><?php echo get_post_meta($post->ID, 'position', true); ?></p>

    <div class="team__links mb-3">
        <?php  if($linkedin = get_post_meta($post->ID, 'team_linkedin', true)): ?>
            <a href="<?php echo $linkedin ;?>" target="_blank" class="linkedin_icons">
                <img class="team__img" src="<?php bloginfo('url'); ?>/wp-content/themes/idea/img/icons/linkedin.png">
            </a>
        <?php endif; ?>

        <?php  if($email = get_post_meta($post->ID, 'team_email', true)): ?>
            <a href='mailto:<?php echo $email; ?>' target="_blank" class="email_icons">
                <img class="team__img" src="<?php bloginfo('url'); ?>/wp-content/themes/idea/img/icons/email.png">
            </a>
        <?php endif; ?>
    </div>
  </div>
</div>
