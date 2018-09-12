$(window).on('load', function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
});
 


$(document).ready(function() {
    $('#wholeBody').fadeIn().removeClass('hideBody');

$('#thirdSection').fadeIn();
$('#fourthSection').fadeOut();
  $('#rightArrow3').on('click', function() {
                $('#thirdSection').fadeOut();
                $('#fourthSection').fadeIn();
    });
                $('#leftArrow3').on('click', function() {
                    $('#fourthSection').fadeOut();
                    $('#thirdSection').fadeIn();
                });
});
