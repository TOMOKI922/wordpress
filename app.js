jQuery(function() {
  jQuery('.js-smart-search').on('click', function() {
    jQuery(this).toggleClass('active');
    jQuery('.js-smart-target').toggleClass('active');
  });
  jQuery('.close').on('click', function() {
    jQuery('.js-smart-target').toggleClass('active');
  });
  jQuery('.js-toggle-sp-menu').on('click', function(){
    jQuery(this).toggleClass('open');
    jQuery('.js-toggle-sp-menu-target').toggleClass('open');
  });
  jQuery('.menu-link').on('click', function(event) {
    jQuery('.js-toggle-sp-menu').trigger('click');
  });
  var $nav = jQuery('.nav-menu');
  var navHeight = $nav.outerHeight();
  jQuery('a[href^="#"]').on('click', function() {
    var href = jQuery(this).attr('href');
    var target = jQuery(href == '#' || href == "" ? "html" : href);
    var position = target.offset().top - navHeight;
    jQuery('html, body').animate(
      {
        scrollTop: position,
      },
      300,
      'swing'
    );
    return false;
  });
});
