<?php $section = get_field('h_hps_section_6');
$post_data = get_post( $section[0]  );
global $post;
$post = $post_data;
setup_postdata($post); ?>

<div class="map">

        <div id="map"></div>

</div>

<?php
$lat = get_field('h_mi_latitude');
$lng = get_field('h_mi_longitude');
$marker = get_field('h_mi_map_marker');
?>
<?php wp_reset_postdata(); ?>

<script>

function hotelinMap() {
  var hotelin = {lat: <?php echo $lat; ?>, lng: <?php echo $lng; ?>};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 17,
    center: hotelin,
    scrollwheel: false,
    mapTypeControl: false,
    gestureHandling: 'cooperative',
    zoomControl: true,
    scaleControl: true,
    panControl: true,
    streetViewControl: false,
    zoomControlOptions: {
      position: google.maps.ControlPosition.RIGHT_TOP
    }

  });

  var marker = new google.maps.Marker({
    position: hotelin,
    map: map,
    icon: "<?php echo $marker; ?>"
  });

}

</script>
