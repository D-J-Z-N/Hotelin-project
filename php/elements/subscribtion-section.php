<?php
$section = get_field('h_hps_section_7');
$post_data = get_post( $section[0] );
global $post;
$post = $post_data;
setup_postdata($post); ?>

<div class="newsletter-form pure-u-1 pure-u-md-2-3 pure-u-lg-1-2">
  <label for="email"><?php the_content(); ?></label>

<?php echo do_shortcode('[contact-form-7 id="6" title="Subscription Form" html_id="SubscriptionForm"]'); ?>

</div>

<?php wp_reset_postdata();?>
