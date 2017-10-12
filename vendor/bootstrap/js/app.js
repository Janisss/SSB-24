$(".mobile-menu-popup").hide();

$(".close-me").click(function(){
	$(".mobile-menu-popup").fadeOut(200);
});

$(".minidiv").click(function(){
	$(".mobile-menu-popup").fadeIn(200);
});

// scroll bottom
$("#part-two").click(function() {
  $(".mobile-menu-popup").animate({ scrollTop: $(window).height() }, "fast");
  return false;
});
//scroll top
$("#slide-up").click(function() {
  $(".mobile-menu-popup").animate({ scrollTop: 0 }, "fast");
  return false;
});