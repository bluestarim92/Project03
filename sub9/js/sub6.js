$(function(){
	var menu = $('.sidewrap>div');
	var wrap = $('.aside1');
	var menuHeight = menu.children('span').height();
	var menuHeight2 = $('.aside1').height();
	var pageURL = location.href;
	var activeMenu;
	
	menu.on({
		mouseover:function(){
			var tg = $(this);
			menu.removeClass('on');
			tg.addClass('on');
			var th = menuHeight2 + tg.find('>.subsidemenu').height();
			wrap.stop().animate({height: th});
		}, 
		mouseout:function(){
			var tg = $(this);
			menu.removeClass('on');
			wrap.stop().animate({height: menuHeight2});
			onActive();
		}
	});
	
	menu.each(function(i){
		var tg = $(this);
		var sub = tg.find('>.subsidemenu > ul > li');
		var menuURL = tg.children('a').attr('href');
		var active = pageURL.indexOf(menuURL);
		
		if(active >-1) activeMenu = tg;
		
		sub.each(function(j){
			var tg = $(this);
			var subURL = tg.children('a').attr('href');
			active = pageURL.indexOf(subURL);
			if(active >-1) activeMenu = tg;
		});
		
		sub.on({
			mouseover:function(){
				var tg = $(this);
				sub.removeClass('on');
				tg.addClass('on');
			}, 
			mouseout:function(){
				var tg = $(this);
				tg.removeClass('on');
				onActive();
			}
		});
	});
	
	function onActive(){
		if(activeMenu)
			activeMenu.trigger('mouseover');
	};
	onActive();

});