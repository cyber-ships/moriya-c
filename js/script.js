$(function () {
  $(".company_client_accordion_btn").click(function () {
    var $container = $(this).closest(".company_client_box");
    var $open = $container.find(".company_client_accordion");

    if ($open.hasClass("open")) {
      $open.removeClass("open");
      $open.slideUp();
      $(this).text("∨");
      $container.find(".company_client_accordion_text").fadeOut();
    } else {
      $open.addClass("open");
      $open.slideDown();
      $(this).text("∧");
      $container.find(".company_client_accordion_text").fadeIn();
    }
  });
});

$(function() {
  $(".head_year_btn").click(function() {
      $(".head_year_list").toggleClass("active");
      console.log();
  });
});