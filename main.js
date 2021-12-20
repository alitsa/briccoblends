// Author: A. Litsa litsa@briccoblends.com
// I'm old!
$( document ).ready(function() {

  triggermenu();

  $(window).resize(function(){
    var width = $(window).width() / parseFloat($("body").css("font-size"));
    menulayout('.navmenu .menu', width);

  });

  function menulayout(menu, width){

    if (width < 40){
      $(menu).removeClass('showing');
    }

  }


  function triggermenu(){
    $('.trigger').click(function(event){

      event.preventDefault();

      $('.navmenu .menu').toggleClass('showing');


    });
  }




    // var width = $(window).width() / parseFloat($("body").css("font-size"));



});
