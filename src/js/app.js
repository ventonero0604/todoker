import $ from 'jquery'

$(function () {
  var nav = $('.js-localNavWrapper'),
      navItem = $('.js-localNavItem'),
      navLink = $('.js-localNavLink'),
      fixedClassName = "is-fixed",
      currentClassName = "is-current",
      offset = nav.offset();

  // フローティングメニュー(localNavi)
  $(window).scroll(function () {
    if ($(window).scrollTop() > offset.top) {
      nav.addClass(fixedClassName);
    } else {
      nav.removeClass(fixedClassName);
    }
  });

  // localNaviのcurrent表示
  navLink.click(function (event) {
    navItem.removeClass(currentClassName);
    $(this).parent().addClass(currentClassName);
  })

  // localNaviのアンカーリンクは途中でフローティングする影響でズレる
  navLink.click(function () {
    var headerHight = nav.height();
    if (!nav.hasClass(fixedClassName)) {
      headerHight = nav.height() * 2;
    }
    var speed = 300;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - headerHight;
    $('body,html').animate({ scrollTop: position }, speed, '');
    return false;
  });

});