(function ($) {
  
  Drupal.behaviors.aboutPage = {
    attach: function (context, settings) {
      // $('.effect', context).click(function () {
      //   $(this).next('ul').toggle('show');
      // });
      $('.about-para-intro effect',context).css('color','red');
    }
  };

})(jQuery);