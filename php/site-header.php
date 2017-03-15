<div class="container">

  <header  id="home" class="header">
    <div class="header-inner">
      <div class="header-body" >

        <

        <?php vcs_menu('primary-navigation', 'desktop nav-main'); ?>

        <!---logo needs to be in the center between nav items, best way?--->

            <a href='#home'class="logo"><img src="<?php echo get_template_directory_uri() . "/assets/images/logo.png"; ?>" alt="Hotelin"></a>

            <!--burger nav needs to be php'ed-->


        <nav class="mobile nav-burger">
          <a href='#home' class="logo-burger"><img src="images/logo.png" alt="Hotelin"></a>
          <button><?php _e('Toggle','vcs-starter'); ?></button>
          <div>
            <a href='#about-us'>About Us</a>
            <a href='#rooms'>Rooms</a>
            <a href='#service'>Service</a>
            <a href='#testimonials'>Testimonials</a>
            <a href='#blog'>Blog</a>
            <a href='#contacts'>Contacts</a>
          </div>
        </nav>

      </div>
    </div>
  </header>

  <main>

    <!--Bilboard section-->

    <div class="billboard">
      <div class="billboard-inner">
        <div class="billboard-body">

          <div class="billboard-background">

            <!--whatch for has_post_thumbnail, php adapted from inline style img from WP-4 lesson, works fine, but is it the right way-->
            <img class="background-img"<?php if( has_post_thumbnail() ): ?> src=<?php the_post_thumbnail_url(); ?> alt="Hotelino exterior"<?php endif; ?>>
          </div>

          <div class="billboard-foreground">

            <!--posts_loop, order of elements?, how to use echo the_content(); when the h1 is in the middle of paragraph, can you put h1 in the WP back-end?-->

            <?php

            // The number of all posts for a given query
            $posts_found = $GLOBALS['wp_query']->found_posts;
            // The number of posts for just the page
            $posts_count = $GLOBALS['wp_query']->post_count;

            if(have_posts()): ?>

            	<?php while (have_posts()) : the_post(); ?>

                <?php echo the_content(); ?>
                <h1 class="billboard-heading"><?php echo bloginfo('name'); ?></h1>

            	<?php endwhile; ?>

            <?php endif; ?>

          </div>

        </div>
      </div>
    </div>
