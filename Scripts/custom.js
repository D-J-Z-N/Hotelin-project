$(document).ready(function() {

  $(document).on('scroll', function() {
    if ($(document).scrollTop() > 0) {
      $('.nav-main').addClass('nav-shrink');
    } else {
      $('.nav-main').removeClass('nav-shrink');
    }
  });


  console.log('test');

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
      }
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








});
