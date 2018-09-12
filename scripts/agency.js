$(window).on('load', function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
});
 

$(document).ready(function() {
    $('#wholeBody').fadeIn().removeClass('hideBody');

$('#secondSection').fadeOut();
$('#thirdSection').fadeOut();
$('#fourthSection').fadeOut();
    $('#rightArrow').on('click', function() {
        $('#firstSection').fadeOut();
        $('#secondSection').fadeIn();
    });
  $('#rightArrow2').on('click', function() {

            $('#secondSection').fadeOut();
            $('#thirdSection').fadeIn();

  });
  $('#rightArrow3').on('click', function() {
                $('#thirdSection').fadeOut();
                $('#fourthSection').fadeIn();
    });
    $('#rightArrow4').on('click', function() {
                  $('#fourthSection').fadeOut();
                  $('#firstSection').fadeIn();
      });


        $('#leftArrow').on('click', function() {
            $('#secondSection').fadeOut();
            $('#firstSection').fadeIn();
        });
            $('#leftArrow2').on('click', function() {
                $('#thirdSection').fadeOut();
                $('#secondSection').fadeIn();
            });
                $('#leftArrow3').on('click', function() {
                    $('#fourthSection').fadeOut();
                    $('#thirdSection').fadeIn();
                });
                    $('#leftArrow4').on('click', function() {
                        $('#firstSection').fadeOut();
                        $('#fourthSection').fadeIn();
                    });
});
