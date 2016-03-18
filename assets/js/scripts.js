var swiper =  new Swiper('.swiper-container', {
  pagination: '.swiper-pagination',
  paginationClickable: true,
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  spaceBetween: 30,
  loop: true,
  centeredSlides: true,
  // autoplay: 2500,
  // autoplayDisableOnInteraction: false
});


$(document).ready(function() {
    $(".newsletter").fancybox();

    $('.zoom').fancybox({
      openEffect    : 'none',
      closeEffect   : 'none'
    });

    $('nav').slicknav();


});
