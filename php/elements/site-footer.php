<div class="footer">
  <div class="footer-inner">
      <div class="footer-body">

        <!--Footer nav-->

        <div class="footer-nav pure-g">

          <?php vcs_menu('footer-navigation-1', 'nav-column pure-u-1-2 pure-u-md-1-2 pure-u-lg-1-4'); ?>
          <?php vcs_menu('footer-navigation-2', 'nav-column pure-u-1-2 pure-u-md-1-2 pure-u-lg-1-4'); ?>

          <!--Subscription Form-->

          <?php get_template_part('elements/subscribtion-section'); ?>

          <!--End of Subscription-->

        </div>

        <div class="line"></div>

        <div class="footer-bottom pure-g">
          <div class="pure-u-1-2">
            <p class= "copyright">&copy; <?php echo date("Y") . " "; echo bloginfo('name'); ?>. <?php _e('All rights reserved', 'vcs_starter'); ?>.</p>
          </div>

          <!---Social icons-->

          <?php
          $icon = get_field('h_sl_image');
          $link = get_field('h_sl_link');
          $icon2 = get_field('h_sl_image_2');
          $link2 = get_field('h_sl_link_2');
          $icon3 = get_field('h_sl_image_3');
          $link3 = get_field('h_sl_link_3');
          $icon4 = get_field('h_sl_image_4');
          $link4 = get_field('h_sl_link_4');
          ?>
          <ul class="social pure-u-1-2">
            <?php if( $icon && $link ): ?><li class="link"><a href="<?php echo $link; ?>" data-icon="&#<?php echo $icon; ?>;"></a></li><?php endif; ?>
            <?php if( $icon2 && $link2 ): ?><li class="link"><a href="<?php echo $link2; ?>" data-icon="&#<?php echo $icon2; ?>;"></a></li><?php endif; ?>
            <?php if( $icon3 && $link3 ): ?><li class="link"><a href="<?php echo $link3; ?>" data-icon="&#<?php echo $icon3; ?>;"></a></li><?php endif; ?>
            <?php if( $icon4 && $link4 ): ?><li class="link"><a href="<?php echo $link4; ?>" data-icon="&#<?php echo $icon4; ?>;"></a></li><?php endif; ?>
          </ul>
        </div>

      </div>

    </div>
  </div>
</div>

<!--ScrollUp-->

<a href="#home" class="back-to-top" data-icon="&#xea3a;">
<i class="fa fa-arrow-circle-up"></i>
</a>
