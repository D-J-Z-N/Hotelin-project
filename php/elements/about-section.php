<!--About Section-->

<?php $section = get_field('h_hps_section_1');
$post_data = get_post( $section[0] );
global $post;
$post = $post_data;
setup_postdata($post); ?>

<div id="about-us" class="about">
  <div class="about-inner">
    <div class="about-body">
      <h2 class="page-title"><?php the_title(); ?></h2>
      <?php the_content(); ?>

      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutus.jpg" alt="Interior">

      <?php
      $text = get_field('h_fl_link_text');
      $link = get_field('h_fl_link_url');
      ?>

      <div class="view-more-button">
        <a href="<?php echo $link; ?>"><?php echo $text; ?></a>
      </div>
    </div>
  </div>
</div>

<?php wp_reset_postdata(); ?>
