/* -------------------------------------------------------
 nav
------------------------------------------------------- */

$(".menu-trigger").click(function () {
  $(this).toggleClass("active");
  $(".global-nav").toggleClass("active");

  if ($(".global-nav").hasClass("active")) {
    $("html").css("overflow", "hidden");
  } else {
    $("html").css("overflow", "auto");
  }
});

/* SP */
$(document).ready(function () {
  if (window.matchMedia("(max-width: 768px)").matches) {
    $(".nav-item").on("click", function (e) {
      e.stopPropagation();

      var subMenu = $(this).children(".nav-item_sub");
      var isActive = subMenu.hasClass("active");

      $(".nav-item_sub").slideUp().removeClass("active");
      $(".nav-item").removeClass("active");

      if (!isActive) {
        subMenu.slideDown().addClass("active");
        $(this).addClass("active");
      }
    });

    $(document).on("click", function (e) {
      if (!$(e.target).closest(".nav-item").length) {
        $(".nav-item_sub").slideUp().removeClass("active");
        $(".nav-item").removeClass("active");
      }

      /*
      $(this).children(".nav-item_sub").slideToggle();
      $(".nav-item").not($(this)).children(".nav-item_sub").slideUp();
      if ($(".nav-item_sub").hasClass("active")) {
        $(this).removeClass("active");
        $(".nav-item_sub").removeClass("active");
      } else {
        $(this).addClass("active");
        $(".nav-item_sub").addClass("active");
      }
      */
    });

    $("header > .inner > .contact").appendTo(".global-nav");

    $("header > .inner > .language").wrap("<div class='nav-bottom'></div>");
    $("header > .inner > .nav-bottom").appendTo(".global-nav");

    /* header内のnavにfooterの「ポリシー&サイトマップ」のリンクを複製*/
    $("footer .inner nav ul").clone().appendTo(".nav-bottom");
  }
});

/* -------------------------------------------------------
 scroll
------------------------------------------------------- */
$(function () {
  $('a[href^="#"]').click(function () {
    var adjust = 0;
    var speed = 400;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top + adjust;
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});

/* -------------------------------------------------------
 page-top
------------------------------------------------------- */
$(function () {
  var pagetop = $("#page-top");
  pagetop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function () {
    $("body, html").animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });
});

$(window).on("scroll", function () {
  var scrollHeight = $(document).height();
  var scrollPosition = $(window).height() + $(window).scrollTop();
  var footerHeight = $("footer").innerHeight();
  if (scrollHeight - scrollPosition <= footerHeight) {
    $("#page-top").addClass("fixed");
  } else {
    $("#page-top").removeClass("fixed");
  }
});

$(function () {
  $(".company_client_accordion_btn").click(function () {
    var $container = $(this).closest(".company_client_box");
    var $open = $container.find(".company_client_accordion");

    if ($open.hasClass("open")) {
      $open.removeClass("open");
      $open.slideUp();
      $(this).removeClass("open");
      $container.find(".company_client_accordion_text").text("もっと見る");
    } else {
      $open.addClass("open");
      $open.slideDown();
      $(this).addClass("open");
      $container.find(".company_client_accordion_text").text("閉じる");
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

$(function () {
  $(".head_year_btn").click(function () {
    $(".head_year_list").toggleClass("active");
    $(this).next(".head_year_list").slideToggle();
  });
});

//recruit_faq accordion
$(function () {
  $(".recruit_faq_accordion_item").click(function () {
    var $answer = $(this).find(".answer");

    if ($answer.hasClass("open")) {
      $answer.removeClass("open");
      $answer.slideUp();
      $(this).find(".arrow").removeClass("open");
    } else {
      $answer.addClass("open");
      $answer.slideDown();
      $(this).find(".arrow").addClass("open");
    }
  });
});

//ir_pulldown_menu
$(function () {
  $(".ir_pulldown_menu").click(function () {
    $(this).find("ul").slideToggle();
  });
});
