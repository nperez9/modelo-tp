  $(window).scroll(function() {
    if ($(this).scrollTop() > 75){  
        $('nav').addClass("sticky");
        $('ajusteTamaño').addClass("AjActive");
      }
      else{
        $('nav').removeClass("sticky");
      }
});

    $(".slidingDiv").hide();

    $('.show_hide').unbind().click(function () {
        $(".slidingDiv").animate({
                width: "toggle"
            }, 235 );
    });


    $(".desplegableBtn").hide();

    $('.ServiceBtn').unbind().click(function () {
            if ($('.ServiceBtn').hasClass("activeBtn")) {
                $('.ServiceBtn').removeClass("activeBtn");
            }else{
                $('.ServiceBtn').addClass("activeBtn");
            }
        $(".desplegableBtn").animate({
                height: "toggle"
            }, 235 );
    });

