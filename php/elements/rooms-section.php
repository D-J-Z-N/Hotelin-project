
<?php $section = get_field('h_hps_section_2');
$post_data = get_post( $section[0]  );
global $post;
$post = $post_data;
setup_postdata($post); ?>


<div id="rooms" class="rooms">
  <div class="rooms-inner">
    <div class="rooms-body">

      <div class="intro">
        <h2><?php the_title(); ?></h2>
        <?php
        $tagline = get_field('h_t_tagline');
        ?>
        <p><?php echo $tagline; ?></p>
        <?php the_content(); ?>
      </div>

        <?php

        $page = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $rooms_query = new WP_Query(array(
        	'post_type' => 'Room',
        	'posts_per_page' => get_option('posts_per_page'),
        	'orderby' => 'menu_order',
        	'order' => 'DESC',
        	'paged' => $page,
        ));

        if ( $rooms_query->have_posts() ) :

        ?>

        <div class="rooms-container pure-g">

          <?php
            $inline1 = 1;
            $inline2 = 1;
           ?>

          <?php $i = 1; while ($rooms_query->have_posts()) : $rooms_query->the_post(); ?>

            <section class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-3">
              <div class="image-container">
                <a href="#inline-<?php echo $inline1++; ?>" data-lity><img class= "rooms-item" src="<?php the_post_thumbnail_url(); ?>" alt="">
                  <div class="overlay">
                    <div class="view-more">view more</div>
                  </div>
                </a>
              </div>
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
            </section>

            <div  class="rooms-container-ext">

              <section id="inline-<?php echo $inline2++; ?>" style="background:#fff" class="lity-hide">
                <a  href='#'><img class= "room-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Room-view.jpg" alt=""></a>
                <div class="room-description">
                  <h2 class="page-title"><?php the_title(); ?></h2>
                  <div class="red-line"></div>

                  <?php $longdesc = get_field('h_ld_long_description_text'); ?>

                  <p class="more-info-text"><?php echo $longdesc ?></p>
                </div>
                <div class="clear"></div>
              </section>

            </div>

          <?php $i++; endwhile; ?>

        </div>

        <?php wp_reset_postdata(); unset($rooms_query); ?>

        <?php endif; ?>

      </div>

    </div>
  </div>
</div>

<?php wp_reset_postdata(); ?>
