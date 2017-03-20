<?php $section = get_field('h_hps_section_5');
$post_data = get_post( $section[0] );
global $post;
$post = $post_data;
setup_postdata($post); ?>

<div id="blog" class="blog-contacts">
  <div class="blog-contacts-inner">
    <div class="blog-contacts-body pure-g">

      <div class="blog pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
        <?php
        $link = get_field('h_fl_link_url');
        ?>
        <a href="<?php echo $link; ?>"><h2 class="page-title-blog"><?php the_title(); ?></h2><img src="<?php the_post_thumbnail_url(); ?>" class="blog-img"></a>
      </div>

      <?php
      $address_l = get_field('h_ci_address_label');
      $address = get_field('h_ci_address');
      $email_l = get_field('h_ci_email_label');
      $email = get_field('h_ci_email');
      $phone_l = get_field('h_ci_telephone_label');
      $phone = get_field('h_ci_telephone');
      $contacts_h = get_field('h_ch_contacts_headline');
      $contacts_img = get_field('h_oi_other_image');
      ?>

      <div id="contacts" class="contact-us pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
        <div class="contacts-info">
          <a href="#"><h2 class="page-title-contacts"><?php echo $contacts_h; ?></h2></a>
          <div class="contacts-table">
            <table>
              <tbody>
                <tr>
                  <td><?php echo $address_l . ' ' ; ?></td>
                  <td>:</td>
                  <td><?php echo ' ' . $address; ?></td>
                </tr>
                <tr><td><?php echo $email_l . ' ' ; ?></td>
                  <td>:</td>
                  <td><?php echo ' ' . $email; ?></td>
                  </tr>
                <tr>
                  <td><?php echo $phone_l . ' ' ; ?></td>
                  <td>:</td>
                  <td><?php echo ' ' . $phone; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <img class="contacts-img" src="<?php echo $contacts_img; ?>">
      </div>

    </div>
  </div>
</div>

</main>

<?php wp_reset_postdata(); ?>
