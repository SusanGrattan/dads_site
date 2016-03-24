$(document).foundation();

// Slick stuff
$(document).ready(function(){


  $('.slick-carousel').slick({

    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    arrows: true,
    pauseOnDotsHover: true
  });
});


$(window).load(function(){
// Masonry
  $('.grid').masonry({
    // options
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true,
    transitionDuration: '0.5s',
    isAnimated: true
  });

});
