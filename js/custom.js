/*--------------------
    Scroll on Click
----------------------*/

$(document).ready(function()
    {
        $("a").on('click', function(event)
            {
                if (this.hash !== "")
                    {
                        event.preventDefault();
                        var hash = this.hash;
        $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function()
                        {
                        window.location.hash = hash;
                        });
                    } 
            });
    });

$(function(){
    $('#pointer').hover(function(){
        $(this).addClass('animated pulse infinite');
    }).mouseout(function(){ 
        $(this).removeClass('animated pulse infinite');
    });
    });

 window.onload = function() {
  Particles.init({
    selector: '#myCanvas',
    color: '#00d19c',
      speed:1.5,
    
      
  });
};


/*----------------
    Preloader
------------------ */

$(window).on('load', function()
    {
       
     $('#preloader').delay(3000).fadeOut();
    
    }); 

$( "#departure" ).dateDropper();

$(document).ready(function(){
    
    $("#pointer").fadeIn(7000);
});


$(document).ready(function()
    {       
        $('#scroll').hide();
        var scroll_start = 0;
        var startchange = $('#about');
        var offset = startchange.offset();
      
$(document).scroll(function() 
    { 
        scroll_start = $(this).scrollTop();
        if(scroll_start > offset.top)
            {
                $('#scroll').show();
             } 
         else
             {
                 $('#scroll').hide();
            }
    });
    });