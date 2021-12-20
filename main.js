// Author: A. Litsa litsa@briccoblends.com
// I'm old!
$( document ).ready(function() {

  mainmenu();
  triggermenu();

  $( window ).resize(function() {
    mainmenu();
  });

  function triggermenu(){
    $('.trigger').click(function(event){

      event.preventDefault();
      var bean = $(this).next('.menu').toggleClass('hidden');

    });
  }


  function mainmenu(){

    var nav = $('.navmenu');
    var trigger = $('.navmenu .trigger');
    var menu = $('.navmenu .menu');

    var width = $(window).width() / parseFloat($("body").css("font-size"));

    if(width < 40)
    {
      $(trigger).show();
       $(menu).addClass('hidden')
    } else {
       $(menu).removeClass('hidden');
       $(trigger).hide();
    }

  }

});
