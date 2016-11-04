$(document).ready(function(e){
	$('.menu-bar').on('click', function(e){
		$(this).toggleClass('change');
	});

	$(window).scroll(function(e){
		var y = $(window).scrollTop();
        $('.welcome').css('bottom',-y*0.5 + 'px');
    });

    $('.menu-bar').on('click', function(e){
    	$('.fullscreen-menu').toggle('slow');
    	e.stopPropagation();
    });

    $(window).on('click', function(e){
    	if($('.fullscreen-menu').css('display') == 'block'){
    		$('.menu-bar').trigger('click');
    	}
    })

    $('.sign-up-button').on('click', function(e){
    	$('.modal-body.login').toggle();
    	$('.modal-body.sign-up').toggle();
    });

    $('.back-to-login').on('click', function(e){
    	$('.modal-body.login').toggle();
    	$('.modal-body.sign-up').toggle();
    });
})
