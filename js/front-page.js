$(function() {
  $('.tabset').rula_tabs();
  $('.featured-slider').slick({
    arrows: false,
    // lazyLoad: 'progressive',
    speed: 750,
    variableWidth: true,
    slidesToShow: 7,
    autoplay: true,
    autoplaySpeed: 1250
  });
});