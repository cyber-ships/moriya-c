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

  $(".ir_others_faq_accordion_open").click(function () {
    var $content = $(this).closest(".ir_others_faq_box_l");
    var $answer = $content.find(".ir_others_faq_box_answer");

    $(".ir_others_faq_box_answer").not($answer).slideUp();

    $answer.slideToggle();
  });

  $(".ir_others_faq_accordion_close").click(function () {
    var $content = $(this).closest(".ir_others_faq_box_l");
    var $answer = $content.find(".ir_others_faq_box_answer");

    $answer.slideUp();
  });
});
/*if ($answer.hasClass("open")) {
  $answer.removeClass("open");
  $answer.slideUp();
  $content.find(".company_client_accordion_text").fadeOut();
} else {
  $answer.addClass("open");
  $answer.slideDown();
  $content.find(".company_client_accordion_text").fadeIn();
}*/
