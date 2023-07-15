
$(window).load(function() {
  //ひとつめのスライダー
    $('#slide1').flexslider({
      animation: "slide",
      direction: "vertical",
      reverse: "true",
      slideshowSpeed: 4000,
      controlNav: false
    });
  
  //2つ目のスライダー
    $('#slide2').flexslider({
      animation: "slide",
      direction: "vertical",
      reverse: "true",
      slideshowSpeed: 4000,
      controlNav: false
    });
  });