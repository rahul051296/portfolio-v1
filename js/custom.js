/*--------------------
    Scroll on Click
----------------------*/

$(document).ready(function () {
    $("a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });
});

$(function () {
    $('#pointer').hover(function () {
        $(this).addClass('animated pulse infinite');
    }).mouseout(function () {
        $(this).removeClass('animated pulse infinite');
    });
});

window.onload = function () {
    Particles.init({
        selector: '#myCanvas',
        color: '#00d19c',
        speed: 1.5,


    });
};


/*----------------
    Preloader
------------------ */

$(window).on('load', function () {

    $('#preloader').delay(3000).fadeOut();

});

$("#departure").dateDropper();

$(document).ready(function () {

    $("#pointer").fadeIn(7000);
});


$(document).ready(function () {
    $('#scroll').hide();
    var scroll_start = 0;
    var startchange = $('#about');
    var offset = startchange.offset();

    $(document).scroll(function () {
        scroll_start = $(this).scrollTop();
        if (scroll_start > offset.top) {
            $('#scroll').show();
        } else {
            $('#scroll').hide();
        }
    });
});

function check() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var messsage = document.getElementById('message').value;
    $(document).ready(function () {
        $.ajax({
            url: "https://theparkingspace.000webhostapp.com/contact.php?name="+name+"&email="+email+"&phone="+phone+"&message="+messsage,
            success: function (result) {
                var res = document.getElementById('response');
                res.innerHTML = "Your request has been sent.";
                res.className = "text-center label label-success";
                setTimeout(()=>{
                    res.style.display = 'none';
                },4000);
            }
        });
    });
}
