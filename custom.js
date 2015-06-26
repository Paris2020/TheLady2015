$(document).ready(function() {

  function runEffect() {
    // run the effect
    $( ".effect" ).effect('slide', options, 500, callback );
  }
  

  // callback function to 
  function callback() {
    setTimeout(function() {
      $( ".effect" ).removeAttr( "style" ).hide().fadeIn();
    }, 1000 );
  }

  runEffect();

});