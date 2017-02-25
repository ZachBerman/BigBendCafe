var $ = jQuery.noConflict();
// Loader
//*******************
// Wait for window load
$(window).load(function() {
// Animate loader off screen
$(".se-pre-con").fadeOut("slow");;
});

// Closes the Responsive Menu on Menu Item Click
//*******************
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});
