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
  $('.modal').modal({
      dismissible: true, // If true, modal will be dismissed by clicking outside
      opacity: .5, // Opacity of modal background
      in_duration: 300, // Transition in duration
      out_duration: 200, // Transition out duration
      starting_top: '4%', // Starting top style attribute
      ending_top: '10%', // Ending top style attribute
    }
  );

  }); // end of document ready
})(jQuery); // end of jQuery name space
