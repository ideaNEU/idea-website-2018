<div class="latest-news">
    <h2 class="latest-news__header">Latest News</h2>
    <h2 class="latest-news__title"><?php the_field('notification_title', 'options');?></h2>
    <p><?php the_field('notification_blurb', 'options'); ?></p>
    <div class="latest-news__read-more">
      <a href="<?php the_field('home_notification', 'options');?>">Read More</a>
    </div>
</div>