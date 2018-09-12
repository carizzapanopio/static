$(document).ready(function(){
    $('.sect').hide();
    $('#sectionOne').show();

    $('#leftArrowOne').on('click',function(){
        $('#sectionEight').show();
        $('#sectionOne').hide();
    });

    $('#rightArrowOne').on('click',function(){ 
        $('#sectionTwo').show();
        $('#sectionOne').hide();
    });

    $('#leftArrowTwo').on('click',function(){
        $('#sectionOne').show();
        $('#sectionTwo').hide();
    });

    $('#rightArrowTwo').on('click',function(){
        $('#sectionThree').show();
        $('#sectionTwo').hide();
    });

    $('#leftArrowThree').on('click',function(){
        $('#sectionTwo').show();
        $('#sectionThree').hide();
    });

    $('#rightArrowThree').on('click',function(){
        $('#sectionFour').show();
        $('#sectionThree').hide();
    });

    $('#leftArrowFour').on('click',function(){
        $('#sectionThree').show();
        $('#sectionFour').hide();
    });

    $('#rightArrowFour').on('click',function(){
        $('#sectionFive').show();
        $('#sectionFour').hide();
    });

    $('#leftArrowFive').on('click',function(){
        $('#sectionFour').show();
        $('#sectionFive').hide();
    });

    $('#rightArrowFive').on('click',function(){
        $('#sectionSix').show();
        $('#sectionFive').hide();
    });

    $('#leftArrowSix').on('click',function(){
        $('#sectionFive').show();
        $('#sectionSix').hide();
    });

    $('#rightArrowSix').on('click',function(){
        $('#sectionSeven').show();
        $('#sectionSix').hide();
    });

    $('#leftArrowSeven').on('click',function(){
        $('#sectionSix').show();
        $('#sectionSeven').hide();
    });

    $('#rightArrowSeven').on('click',function(){
        $('#sectionEight').show();
        $('#sectionSeven').hide();
    });

    $('#leftArrowEight').on('click',function(){
        $('#sectionSeven').show();
        $('#sectionEight').hide();
    });

    $('#rightArrowEight').on('click',function(){
        $('#sectionOne').show();
        $('#sectionEight').hide();
    });

});
