jQuery(document).ready(function ($) {

  //popup
  $(".fancybox").fancybox({
    touch:false,
    autoFocus:false,
  });

  //scroll to block
  $(document).on('click', '.scroll', function (e) {
    e.preventDefault();
    $.fancybox.close();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 1000);
  });

  //close popup - open new popup
  $(document).on('click', '.fancybox-form', function (e){
    e.preventDefault();
    $.fancybox.close();
    var $this = $(this),
      id = $this.attr('href');

    $.fancybox.open( $(id), {
      touch:false,
      autoFocus:false,
    });
  });

  //slider
  var swiperHome = new Swiper(".home-slider", {
    slidesPerView: "auto",
    spaceBetween: 22,
    navigation: {
      nextEl: ".home-next",
      prevEl: ".home-prev",
    },
  });

});