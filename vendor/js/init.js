(function($){
  $(function(){

    $('.button-collapse').sideNav({'edge': 'left'});
    $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      hover: true, // Activate on hover
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'right' // Displays dropdown with edge aligned to the left of button
    }
  );

  }); // end of document ready
})(jQuery); // end of jQuery name space
