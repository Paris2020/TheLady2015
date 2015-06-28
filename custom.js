(function($){
  
  Drupal.behaviors.runfunctions = {
    attach: function (context){

      function runEffect() {
      // run the effect
        $( ".effect", context ).effect('shake', options, 500, callback );
      }
    
      // callback function to 
      function callback() {
        setTimeout(function() {
          $( ".effect", context ).removeAttr( "style" ).hide().fadeIn();
        }, 1000 );
      }

      runEffect();
    }
  };

})(jQuery);

