
<?php $section = get_field('h_hps_section_3');
$post_data = get_post( $section[0]  );
global $post;
$post = $post_data;
setup_postdata($post); ?>

<div id="service" class="facilities">
  <div class="facilities-inner">
    <div class="facilities-body">

      <div class="intro">
        <h2 class="heading-2"><?php the_title(); ?></h2>
        <?php
        $tagline = get_field('h_t_tagline');
        ?>
        <p class="tagline"><?php echo $tagline; ?></p>
        <?php the_content(); ?>
      </div>

      <div class="facilities pure-g">

          <?php

          $page = (get_query_var('paged')) ? get_query_var('paged') : 1;

          $service_query = new WP_Query(array(
          	'post_type' => 'facilities_item',
          	'posts_per_page' => get_option('posts_per_page'),
          	'orderby' => 'menu_order',
          	'order' => 'DESC',
          	'paged' => $page,
          ));

          if ( $service_query->have_posts() ) :

          ?>

          <div class="facilities-list">

            <?php $i = 1; while ($service_query->have_posts()) : $service_query->the_post(); ?>

              <?php
              $text = get_field('h_fl_link_text');
              $link = get_field('h_fl_link_url');
              ?>

              <!-- need a better condition for a,a,b,b,a,a,b,b-->

              <?php if (($i == 1) || ($i == 2)): ?>

                <div class="facility-image pure-u-1-2 pure-u-md-1-4 pure-u-lg-1-4"><img src="<?php the_post_thumbnail_url(); ?>"></div>

                <div class="facility-item-l pure-u-1-2 pure-u-md-1-4 pure-u-lg-1-4"><h3 class="text-subheadings"><?php the_title(); ?></h3><a href="<?php echo $link; ?>"><?php echo $text; ?></a></div>

              <?php else: ?>

                <div class="facility-item-r pure-u-1-2 pure-u-md-1-4 pure-u-lg-1-4"><h3 class="text-subheadings"><?php the_title(); ?></h3><a href="<?php echo $link; ?>"><?php echo $text; ?></a></div>

                <div class="facility-image pure-u-1-2 pure-u-md-1-4 pure-u-lg-1-4"><img src="<?php the_post_thumbnail_url(); ?>"></div>

              <?php endif ?>

            <?php $i++; endwhile; ?>

          </div>

          <?php wp_reset_postdata(); unset($service_query); ?>

          <?php endif; ?>

      </div>

    </div>
  </div>
</div>

<?php wp_reset_postdata(); ?>
