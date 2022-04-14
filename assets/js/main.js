(function($) {
	$(document).ready(function(){

       //START HERE JQUERY CODE

	  // search button
	 $("#search-btn").click(function(){
	    $(".search-content").slideToggle("slow");
	  });

	 $("#search-btn").click(function(){
	    $(".mobile-menu").slideUp("slow");
	  });

	$(".search-hide").click(function(){
	    $(".search-content").slideUp("slow");
	  });


	// Mobile menu button
	$("#mobile_menu_btn").click(function(){
	    $(".mobile-menu").slideToggle("slow");
	  });

	$("#mobile_menu_btn").click(function(){
	    $(".search-content").slideUp("slow");
	  });

	$(".menu-hide").click(function(){
	    $(".mobile-menu").slideUp("slow");
	  });

       // END JQUERY CODE
   });
}(jQuery));


