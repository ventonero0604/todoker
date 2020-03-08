import $ from 'jquery'
import slick from 'slick-carousel'

$(function () {
  var nav = $('.js-localNavWrapper'),
      navItem = $('.js-localNavItem'),
      navLink = $('.js-localNavLink'),
      fixedClassName = "is-fixed",
      currentClassName = "is-current",
      slider = $('.slider'),
      sliderMenu = $('.js-outerSliderMenu'),
      offset = nav.offset();

  // ハンバーガーメニュー
  $('.js-smpMenu').click(function() {
    $('.Header__menu').toggleClass('is-show');
  })

  if (nav) {
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
  }

  // スライダー
  if (slider) {
    slider.slick();

    // メニューからの操作
    sliderMenu.click(function (event) {
      var sliderMenuNumber = $('.Top__reasonContentsMenu li a');

      event.preventDefault();

      sliderMenu.parent().removeClass(currentClassName);
      $(this).parent().addClass(currentClassName);

      slider.slick('slickGoTo', sliderMenuNumber.index(this));
    })

    // インジケーターからの操作
    $('.slick-dots button').click(function (){
      var menuList = $('.slick-dots li button').index(this);
      var indicatorNumber = $('.slick-dots li button').index(this);

      sliderMenu.parent().removeClass(currentClassName);
      menuList.eq(indicatorNumber).addClass(currentClassName);
    }) 
  }
});