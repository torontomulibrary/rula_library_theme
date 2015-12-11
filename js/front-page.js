$(function() {
  $('.tabset').rula_tabs();
  $('.slick').slick({
    arrows: false,
    // lazyLoad: 'ondemand',
    speed: 300,
    infinite: true,
    variableWidth: true,
    slidesToShow: 7,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500
  });
});