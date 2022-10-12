
/* popular question*/
$(document).ready(function(){
    $(".according-content").hide()
    $("#according-button-1").on('click',() => {
        $('#according-content-1').fadeToggle("slow");
        $('#according-content-2').hide();
        $('#according-content-3').hide();
        $('#according-content-4').hide();
        $('#up1').toggleClass('rotate');
        $('#up2').removeClass('rotate');
        $('#up3').removeClass('rotate');
        $('#up4').removeClass('rotate');
    });
    $("#according-button-2").on('click',() => {
        $('#according-content-2').fadeToggle("slow")
        $('#according-content-1').hide();
        $('#according-content-3').hide();
        $('#according-content-4').hide();
        $('#up2').toggleClass('rotate');
        $('#up1').removeClass('rotate');
        $('#up3').removeClass('rotate');
        $('#up4').removeClass('rotate');
    })
    $("#according-button-3").on('click',() => {
        $('#according-content-3').fadeToggle("slow")
        $('#according-content-2').hide();
        $('#according-content-1').hide();
        $('#according-content-4').hide();
        $('#up3').toggleClass('rotate');
        $('#up2').removeClass('rotate');
        $('#up1').removeClass('rotate');
        $('#up4').removeClass('rotate');
    })
    $("#according-button-4").on('click',() => {
        $('#according-content-4').fadeToggle("slow")
        $('#according-content-2').hide();
        $('#according-content-3').hide();
        $('#according-content-1').hide();
        $('#up4').toggleClass('rotate');
        $('#up2').removeClass('rotate');
        $('#up3').removeClass('rotate');
        $('#up1').removeClass('rotate');
    })
})