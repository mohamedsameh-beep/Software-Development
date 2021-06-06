$(document).ready(function(){
  "use strict";
  $("body.home .main-header").css("display", "block");
  $("body.home .main-header").addClass("navbar-transparent").removeClass("navbar-fixed-top");
  $(window).scroll(function () {
    if ($(document).scrollTop() > 10) {
      $("body.home .main-header").addClass("before-appearing").removeClass("navbar-transparent");
    }
    if ($(document).scrollTop() > 400) {
      $("body.home .main-header").addClass("navbar-fixed-top");
      $("body.home .navbar .btn-white").addClass("btn-primary").removeClass("btn-white");
    } else {
      $("body.home .navbar .btn-primary").addClass("btn-white").removeClass("btn-primary");
      $("body.home .main-header").removeClass("navbar-fixed-top").removeClass("before-appearing").addClass("navbar-transparent");
    }
  });
  $(".show__pass").on("click", function () {
    $(this).find("span i").toggleClass("fa-eye").toggleClass("fa-eye-slash");
    if ($(this).find("span i").hasClass("fa-eye-slash")) {
      $(this).parent().find("input").attr("type", "text");
    } else {
      $(this).parent().find("input").attr("type", "password")
    }
  });
  $("body.jobs .block h6.arrow").on("click", function () {
    $(this).toggleClass("active").parent().find(".inputs").slideToggle(500);
  });
});
