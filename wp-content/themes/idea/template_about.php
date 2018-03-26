<?php /* Template Name: About */ ?>

<?php get_header(); ?>


<div class="detail-header-wrapper">
  <h2 class="detail-header"><?php the_title()?></h2>
</div>
<div class="container text-center">
  <section>
    <?php
      while ( have_posts() ) : the_post(); ?>
        <?php the_content();
      endwhile;
      wp_reset_query();
    ?>
  </section>
  <section class="container">
    <h1>Who are we?</h1>
    <?php
    $member_group_terms = get_terms( 'team_type', 'orderby=name&order=desc' );

    foreach ( $member_group_terms as $member_group_term ) {
        $member_group_query = new WP_Query( array(
            'post_type' => 'idea_team',
            'tax_query' => array(
                array(
                    'taxonomy' => 'team_type',
                    'field' => 'slug',
                    'terms' => array( $member_group_term->slug ),
                    'operator' => 'IN'
                )
            )
        ) );
        ?>
        <h3><?php echo $member_group_term->name; ?></h3>
        <p><?php echo $member_group_term->description; ?></p>
        <div class="row">
          <?php
            if ( $member_group_query->have_posts() ) : 
              while ( $member_group_query->have_posts() ) : $member_group_query->the_post();
?>
                                <?php get_template_part( 'content', 'team_mgmt' ); ?> <!-- See content-team_mgmt.php -->


<?php
              endwhile; 
              wp_reset_postdata();
            endif;
          ?>
        </div>
        <?php
        // Reset things, for good measure
        $member_group_query = null;
    }
    ?>
  </section>
  <section>
    <h3>Partners</h3>
    <?php
        $member_group_query = new WP_Query( array(
            'post_type' => 'idea_partners',
        ) );
        ?>
        <div class="row">
          <?php
            if ( $member_group_query->have_posts() ) : 
              while ( $member_group_query->have_posts() ) : $member_group_query->the_post();
?>
                                <?php get_template_part( 'content', 'partner' ); ?>


<?php
              endwhile; 
              wp_reset_postdata();
            endif;
          ?>
        </div>
        <?php
        // Reset things, for good measure
        $member_group_query = null;
    ?>
  </section>
</div>
<?php get_footer() ?>
