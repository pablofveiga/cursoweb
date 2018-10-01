$(document).ready(function(){

    // RESPONSIVE MENU
    $(".menu-trigger").click(function(e){
      $(".rwd-menu-list").toggleClass("visible");
    });
    $(".rwd-languages>a").click(function(e){
      e.preventDefault();
      $(this).parent().find($("ul.seccondary")).toggleClass("visible");
      $(this).find($(".fa-arrow-right")).toggleClass("flipped");
    });
    


	jQuery("#subir").hide();
	jQuery(function () {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 200) {
				jQuery('#subir').fadeIn();
			} else {
				jQuery('#subir').fadeOut();
			}
		});

		jQuery('#subir a').click(function () {
			jQuery('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});


	$(".muestra-atributos").click(function(e){
		e.preventDefault();
		$("#lista-atributos").toggleClass("visible");
	})

});