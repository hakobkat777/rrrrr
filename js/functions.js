jQuery( document ).ready(function($) {

    // Mobile Menu
    $(".openMobMenu").click(function(){
    	$(".slideMenuOpen").slideToggle();
    });

    // SVG Injector
	var mySVGsToInject = document.querySelectorAll('img.inject');
	SVGInjector(mySVGsToInject);

});

