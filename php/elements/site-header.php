<div class="container">

  <header  id="home" class="header">
    <div class="header-inner">
      <div class="header-body">

        <nav class="desktop nav-main">
        <?php get_template_part('elements/main-nav'); ?>
        </nav>

        <nav class="mobile nav-burger">
          <a href='#home' class="logo-burger"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Hotelin"></a>
          <button>Toggle</button>
          <?php get_template_part('elements/main-nav'); ?>
        </nav>

      </div>
    </div>
  </header>

  <main>

    <!--Bilboard section-->

    <div class="billboard">
      <div class="billboard-inner">
        <div class="billboard-body">

          <!--<img> tag using the_post_thumbnail-->

          <div class="billboard-background">
            <img class="background-img" src="<?php the_post_thumbnail_url( 'full' );  ?>" alt="Hotelin exterior"/>
          </div>

          <div class="billboard-foreground welcome-text">

            <?php

            // The number of all posts for a given query
            $posts_found = $GLOBALS['wp_query']->found_posts;
            // The number of posts for just the page
            $posts_count = $GLOBALS['wp_query']->post_count;

            if(have_posts()): ?>

            	<?php while (have_posts()) : the_post(); ?>

                <?php echo the_content(); ?>

            	<?php endwhile; ?>

            <?php endif; ?>

          </div>

        </div>
      </div>
    </div>
