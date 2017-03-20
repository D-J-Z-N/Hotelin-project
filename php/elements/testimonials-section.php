<?php $section = get_field('h_hps_section_4');
$post_data = get_post( $section[0]  );
global $post;
$post = $post_data;
setup_postdata($post); ?>

  <div id="testimonials" class="testimonials-container">
    <div  class="testimonials-wrapper">
      <h2 class="testimonials-h2"><?php the_title(); ?></h2>

      <?php

      $page = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $testimonial_query = new WP_Query(array(
      	'post_type' => 'testimonial_item',
      	'posts_per_page' => get_option('posts_per_page'),
      	'orderby' => 'menu_order',
      	'order' => 'DESC',
      	'paged' => $page,
      ));

      if ( $testimonial_query->have_posts() ) :

      ?>

          <div class="owl-carousel testimonial-list">

            <?php $i = 1; while ($testimonial_query->have_posts()) : $testimonial_query->the_post(); ?>

              <div class="testimonial-item item">
                <img src="<?php the_post_thumbnail_url(); ?>" class="mugshot">
                <div class="testimonial-text"><?php the_content(); ?></div>
                <p class="guest-name"><?php the_title(); ?></p>
              </div>

            <?php $i++; endwhile; ?>

            <?php wp_reset_postdata(); unset($testimonial_query); ?>

            <?php endif; ?>

      </div>
    </div>
  </div>

<?php wp_reset_postdata(); ?>
