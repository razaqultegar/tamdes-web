(function($){
  $(function(){

    $('.button-collapse').sideNav({'edge': 'left'});
    $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      hover: true,
      belowOrigin: true,
      alignment: 'right'
    }
  );
  $('.modal').modal({
      dismissible: true,
      opacity: .5,
      in_duration: 300,
      out_duration: 200,
      starting_top: '4%',
      ending_top: '10%',
    }
  );

  });
})(jQuery); 
