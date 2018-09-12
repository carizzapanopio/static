$(window).on('load', function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut(2000);
});

function toggleMenu(x) {
    x.classList.toggle("change");
    x.classList.toggle("container-menu-active");
    $(html).classList.toggle("overflowHidden");
    $(body).classList.toggle("overflowHidden");
}

$('.voce a').hide();
$('.navigation').hide();

function bodyFadeOut() {

}


$('.link').click(function() {

    event.preventDefault();

    newLocation = this.href;

    $('body').fadeOut(1000, newpage);

});

function newpage() {

    window.location = newLocation;

}

var stato = false;
$(document).ready(function() {
    /* Navigation */
    $('#wholeBody').removeClass('hideBody');
    $('body').fadeIn(1000);
    $('#wholeBody').fadeIn(1000);

    $('#drop').click(function() {
        if (stato == false) {
            $('.navigation').show();
            stato = true;

            $('header nav').css({
                zIndex: 11
            });

            setTimeout(function() {
                $('.voce a').fadeIn();
            }, 1100);

            setTimeout(function() {
                $('header nav ul li').eq(0).addClass('openLi');
            }, 500);

            setTimeout(function() {
                $('header nav ul li').eq(1).addClass('openLi');
            }, 700);

            setTimeout(function() {
                $('header nav ul li').eq(2).addClass('openLi');
            }, 900);

            setTimeout(function() {
                $('header nav ul li').eq(3).addClass('openLi');
            }, 1100);

            setTimeout(function() {
                $('header nav ul li').eq(4).addClass('openLi');
            }, 1300);

            setTimeout(function() {
                $('header nav ul li').eq(5).addClass('openLi');
            }, 1500);


        } else {
            stato = false;

            $('.voce a').fadeOut(function() {

                setTimeout(function() {
                    $('header nav').css({
                        zIndex: -11
                    });
                }, 1370);

                setTimeout(function() {
                    $('.voce a').fadeOut();
                }, 1100);
                setTimeout(function() {
                    $('header nav ul li').eq(0).removeClass('openLi');
                }, 500);

                setTimeout(function() {
                    $('header nav ul li').eq(1).removeClass('openLi');
                }, 700);

                setTimeout(function() {
                    $('header nav ul li').eq(2).removeClass('openLi');
                }, 900);

                setTimeout(function() {
                    $('header nav ul li').eq(3).removeClass('openLi');
                }, 1100);

                setTimeout(function() {
                    $('header nav ul li').eq(4).removeClass('openLi');
                }, 1300);

                setTimeout(function() {
                    $('header nav ul li').eq(5).removeClass('openLi');
                }, 1500);

            });
        }
    });


});
