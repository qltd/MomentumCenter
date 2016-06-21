jQuery(function($){

	$('input[type="text"]').focus(function(){
		if($(this).val() == $(this).prop('defaultValue'))
		{ $(this).val(''); }
	});

	$('input[type="text"]').blur(function(){
		if($(this).val() == '')
		{$(this).val($(this).prop('defaultValue'));}
	});

	var timer;

	function clearTimer(){
		clearInterval(timer)
		$('#home-callouts .video a img').css('margin-top', '-' + 0 + 'px');
	}

	$('#home-callouts .col.video a').mouseover(function(){
		var px = 0;
		var i = $(this).find('img');
		timer = setInterval(function(){
			var h = i.height();
			if (px < h){
				i.css('margin-top', '-' + px + 'px');
				px = px + 194;
			}
		}, 40);
	});

	$('#home-callouts .col.video a').mouseout(function(){
		clearTimer();
	});

	$('#container').click(function() {
		var $menu = $('#main-nav');
	    $menu.animate({
	      left: "-400px"
	    });
	});

	$('#menu, #close').click(function(event){
		event.stopPropagation();
		var $menu = $('#main-nav');
	    $menu.animate({
	      left: parseInt($menu.css('left'),10) == 0 ? '-400px' : '0px'
	    });
		return false;
	});


	$('.info-btn').click(function(){
		var txt = $(this).closest('.member').next('.member-info').is(':visible') ? 'More <i class="icon-expand"></i>' : 'Less <i class="icon-collapse"></i>';
     	$(this).find('.more').html(txt);
     	$(this).closest('.member').next('.member-info').slideToggle();
		return false;
	});

});

