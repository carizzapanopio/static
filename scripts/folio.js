
    $(document).ready(function() {

    $("#tradeMarketingSwitch").click(function() {
        $("#tradeMarketingModal").modal();
    });

    $("#digitalMarketingSwitch").click(function(){
      $('#digitalMarketingModal').modal();
    });

    $("#boothFabricationSwitch").click(function(){
      $('#boothFabricationModal').modal();
    });

    $("#keyAccountsSwitch").click(function(){
      $('#keyAccountsModal').modal();
    });

    $("#manpowerOutsourcingSwitch").click(function(){
      $('#manpowerOutsourcingModal').modal();
    });

    $("#eventManagementSwitch").click(function(){
      $('#eventManagementModal').modal();
    });

    $('#tradeMarketingCarousel, #digitalMarketingCarousel    ,#eventManagementCarousel , #boothFabricactionCarousel    ,#keyAccountsCarousel, #manpowerOutsourcingCarousel').bind('mousewheel', function(e) {
        if (e.originalEvent.wheelDelta / 120 > 0) {
            $(this).carousel('next');
        } else {
            $(this).carousel('prev');
        }
    });
    $('#tradeMarketingCarousel').bsTouchSlider();
});
