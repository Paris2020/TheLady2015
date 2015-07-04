(function ($) {
  Drupal.behaviors.fadein = {
    attach: function (context, settings) {

      $(".effect").slideDown();
    }
  };
})(jQuery);
//Context - Gives you info about the page
