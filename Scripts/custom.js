$(document).ready(function() {

  $('button').click(function() {
    $(this).toggleClass('expanded').siblings('div').slideToggle();
  });

  $(document).on('scroll', function() {
    if ($(document).scrollTop() > 0) {
      $('.nav-main').addClass('nav-shrink');
    } else {
      $('.nav-main').removeClass('nav-shrink');
    }
  });

  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      },
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true
  });


  var offset = 600;
  var duration = 300;

  jQuery(window).scroll(function() {

    if (jQuery(this).scrollTop() > offset) {

    jQuery('.back-to-top').fadeIn(duration);
    } else {
    jQuery('.back-to-top').fadeOut(duration);
    }

  });


  jQuery('.back-to-top').click(function(event) {

    event.preventDefault();
    jQuery('html, body').animate({scrollTop: 0}, duration);
    return false;

  });

  $(document).on('click', '[data-lightbox]', lity);

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

  hotelinMap();

  console.log('test');


});
