(function($) {
  $(document).ready(function() {

    $(".hamburger-menu").click(function() {
      $(".hamburger-menu").toggleClass('close');
    });

    $('.hamburger-menu').on('click', function() {
      $('.bar').toggleClass('animate');
    });

    if (Modernizr.mq('only all')) {
      $('html').addClass('mq');
    } else {
      $('html').addClass('no-mq');
    }

    if ($(".contact-markup-position-right")[0]){
        $('.contact-form').addClass('contact-layout-2');
    }


    // User Account Menu
    $('.logged-in #block-system-user-menu .content .first:first').wrap('<li class="open-account-menu">My Account</li>');

    $('.open-account-menu').click(function() {
      $(".logged-in #block-system-user-menu").toggleClass('close-account-menu');
    });


    // Mobile Navigation

    $("#menu").clone().attr('id', 'menu-original').addClass("hidden-xs").insertBefore(".site-wrapper");
    $("#menu-original").mmenu({
      "extensions": [
        "theme-dark"
      ]
    });
   
  });
})(jQuery);

