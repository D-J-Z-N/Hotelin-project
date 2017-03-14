<?php wp_footer(); ?>

<script>
function hotelinMap() {
  var hotelin = {lat: -7.801389, lng: 110.364444};
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
    icon: "images/mappointer.png"
  });

}

</script>

</body>

</html>
