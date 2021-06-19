
function scroll_to(clicked_link, nav_height) {
  var element_class = clicked_link.attr('href').replace('#', '.');
  var scroll_to = 0;
  if (element_class != '.top-content') {
    element_class += '-container';
    scroll_to = $(element_class).offset().top - nav_height;
  }
  if ($(window).scrollTop() != scroll_to) {
    $('html, body').stop().animate({ scrollTop: scroll_to }, 1000);
  }
}


jQuery(document).ready(function () {

	/*
	    Navigation
	*/
  $('a.scroll-link').on('click', function (e) {
    e.preventDefault();
    scroll_to($(this), $('nav').outerHeight());
  });

  /*
      Background slideshow
  */
  $('.top-content').backstretch("../media/imgs/flafds/bg-arabic-manuscript-8.jpg");
  $('.section-4-container').backstretch("../media/imgs/flafds/bg-arabic-manuscript-13.jpg");

  /*
    Wow
*/
  new WOW().init();

});