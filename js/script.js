$(function(){
	$('.guideText').guideText();
	var current1=0;
	var slide1_panel_width = $('.slide1_panel>a>img').width();
	var slide1_panel_height = $('.slide1_panel>a>img').height();
	$('.slider_text').css('left', -667).each(function(index)
	{
		$(this).attr('data-index', index);
		//사용자정의 data-index attribute를 정의
	});
	$('.control_button').each(function(index){
			$(this).attr('data-index', index);
	});
	var setIntervalId;
	function timer1(){
		setIntervalId = setInterval(function(){
			current1++;
			if(current1==$('.control_button').size()){current1=0;};
			moveSlider1(current1);
		},3000);
	};
	function moveSlider1(index){
		var willMoveLeft = -(index*slide1_panel_width);
		$('.slide1_panel').animate({left: willMoveLeft},'500');
		$('.slider_text[data-index='+index+']').show().animate({left:0},500);
		$('.slider_text[data-index!='+index+']').hide().animate({left: -667},500);
		$('.btn_pageNum').html((index+1) + ' / 3');
		current1 = index;
	};
	$('.btn_left').click(function(){
		current1--;
		if(current1<0){current1=$('.control_button').size()-1;}
		moveSlider1(current1);
		$('.btn_pageNum').html((current+1)+ ' / 3');
		$('.btn_stop').trigger('click');
	});
	$('.btn_right').click(function(){
		current1++;
		if(current1==$('.control_button').size()){current1=0;}
		moveSlider1(current1);
		$('.btn_pageNum').html((current1+1)+ ' / 3');
		$('.btn_stop').trigger('click');
	});
	
	$(document).on('click', '.btn_stop', function(){
		$('.btn_stop').addClass('btn_start');
		clearInterval(setIntervalId);
		$('.btn_start').removeClass('btn_stop');
	});
	$(document).on('click', '.btn_start', function(){
		$('.btn_start').addClass('btn_stop');
		timer1(current1);
		$('.btn_stop').removeClass('btn_start');
	});
	timer1();
	
	var current2=0;
	var slide2_panel_width = $('.slide2_panel>a>img').width();
	var slide2_panel_height = $('.slide2_panel>a>img').height();
	$('.control_button2').each(function(index){
			$(this).attr('data-index', index);
	});
	var setIntervalId2;
	function timer2(){
		setIntervalId2 = setInterval(function(){
			current2++;
			if(current2==$('.control_button2').size()){current2=0;};
			moveSlider2(current2);
		},3000);
	};
	function moveSlider2(index){
		var willMoveLeft = -(index*slide2_panel_width);
		$('.slide2_panel').animate({left: willMoveLeft},'500');
		$('.btn_pageNum2').html((index+1) + ' / 3');
		current2 = index;
	};
	$('.btn_left2').click(function(){
		current2--;
		if(current2<0){current2=$('.control_button2').size()-1;}
		moveSlider2(current2);
		$('.btn_pageNum2').html((current+1)+ ' / 3');
		$('.btn_stop2').trigger('click');
	});
	$('.btn_right2').click(function(){
		current2++;
		if(current2==$('.control_button2').size()){current2=0;}
		moveSlider2(current2);
		$('.btn_pageNum2').html((current2+1)+ ' / 3');
		$('.btn_stop2').trigger('click');
	});
	
	$(document).on('click', '.btn_stop2', function(){
		$('.btn_stop2').addClass('btn_start2');
		clearInterval(setIntervalId2);
		$('.btn_start2').removeClass('btn_stop2');
	});
	$(document).on('click', '.btn_start2', function(){
		$('.btn_start2').addClass('btn_stop2');
		timer2(current2);
		$('.btn_stop2').removeClass('btn_start2');
	});
	timer2();
	var current3=0;
	var slide3_panel_width = $('.slide3_panel>a>img').width();
	var slide3_panel_height = $('.slide3_panel>a>img').height();
	$('.control_button3').each(function(index){
			$(this).attr('data-index', index);
	});
	var setIntervalId3;
	function timer3(){
		setIntervalId3 = setInterval(function(){
			current3++;
			if(current3==$('.control_button3').size()){current3=0;};
			moveSlider3(current3);
		},3000);
	};
	function moveSlider3(index){
		var willMoveLeft = -(index*slide3_panel_width);
		$('.slide3_panel').animate({left: willMoveLeft},'500');
		$('.btn_pageNum3').html((index+1) + ' / 4');
		current3 = index;
	};
	$('.btn_left3').click(function(){
		current3--;
		if(current3<0){current3=$('.control_button3').size()-1;}
		moveSlider3(current3);
		$('.btn_pageNum3').html((current+1)+ ' / 4');
		$('.btn_stop3').trigger('click');
	});
	$('.btn_right3').click(function(){
		current3++;
		if(current3==$('.control_button3').size()){current3=0;}
		moveSlider3(current3);
		$('.btn_pageNum3').html((current3+1)+ ' / 4');
		$('.btn_stop3').trigger('click');
	});
	
	$(document).on('click', '.btn_stop3', function(){
		$('.btn_stop3').addClass('btn_start3');
		clearInterval(setIntervalId3);
		$('.btn_start3').removeClass('btn_stop3');
	});
	$(document).on('click', '.btn_start3', function(){
		$('.btn_start3').addClass('btn_stop3');
		timer3(current3);
		$('.btn_stop3').removeClass('btn_start3');
	});
	timer3();
		
	var class_closed ='closed';
	
	$('.bbs_list').each(function(){
		var board = $('.board');
		var alltit = board.find('.b_title');
		var allcon = board.find('.content_wrap');
		
		function closedAll(){
			alltit.addClass(class_closed);
			allcon.addClass(class_closed);
		};
		
		function open(tit,con){
			tit.removeClass(class_closed);
			con.removeClass(class_closed);
		};
		closedAll();
		alltit.click(function(){
			var tit = $(this);
			var con = $(this).parents('.board').children('.content_wrap');
			closedAll();
			open(tit,con);
		});
		
	});
	//Tab menu
	$('.broad_bar').each(function(){
		var bar = $(this);
		var anchors = bar.find('ul.tabs a');
		var panelDivs = bar.parent('.broad_notice').find('div.panel')
		var lastAnchor;
		var lastPanel;
		anchors.show();
		lastAnchor = anchors.filter('.active');
		lastPanel = $(lastAnchor.attr('href'));
		panelDivs.hide();
		lastPanel.show();
		
		
		
		anchors.click(function(e){
			e.preventDefault();
			var currentAnchor = $(this);
			var currentPanel = $(currentAnchor.attr('href'));
			if(lastAnchor.get(0)===currentAnchor.get(0))
				{
					return;
				}
			lastPanel.stop(false).fadeOut(200, function(){
				lastAnchor.removeClass('active');
				currentAnchor.addClass('active');
				currentPanel.stop(true).fadeIn(200);
				lastAnchor = currentAnchor;
				lastPanel = currentPanel;
				
			});
			
		});
	});
	//Tab menu
	$('.basic_notice_bar').each(function(){
		var bar = $(this);
		var anchors = bar.find('ul.tabs a');
		var panelDivs = bar.parent('.basic_notice_box').find('div.panel')
		var lastAnchor;
		var lastPanel;
		anchors.show();
		lastAnchor = anchors.filter('.active');
		lastPanel = $(lastAnchor.attr('href'));
		panelDivs.hide();
		lastPanel.show();
		
		
		
		anchors.click(function(e){
			e.preventDefault();
			var currentAnchor = $(this);
			var currentPanel = $(currentAnchor.attr('href'));
			if(lastAnchor.get(0)===currentAnchor.get(0))
				{
					return;
				}
			lastPanel.stop(false).fadeOut(function(){
				lastAnchor.removeClass('active');
				currentAnchor.addClass('active');
				currentPanel.stop(true).fadeIn();
				lastAnchor = currentAnchor;
				lastPanel = currentPanel;
				
			});
			
		});
	});
	$('.tab').each(function(){
		var bar = $(this);
		var anchors = bar.find('ul.tabs a');
		var panelDivs = bar.parent('.tab_wrap').find('div.panel')
		var lastAnchor;
		var lastPanel;
		anchors.show();
		lastAnchor = anchors.filter('.active');
		lastPanel = $(lastAnchor.attr('href'));
		panelDivs.hide();
		lastPanel.show();
		
		
		
		anchors.click(function(e){
			e.preventDefault();
			var currentAnchor = $(this);
			var currentPanel = $(currentAnchor.attr('href'));
			if(lastAnchor.get(0)===currentAnchor.get(0))
				{
					return;
				}
			lastPanel.stop(false).fadeOut(function(){
				lastAnchor.removeClass('active');
				currentAnchor.addClass('active');
				currentPanel.stop(true).fadeIn();
				lastAnchor = currentAnchor;
				lastPanel = currentPanel;
				
			});
			
		});
	});
	//tooltip
	var balloon = $('<div class="balloon"></div>').appendTo('body');
	
	var balloon_r = $('<div class="balloon_r"></div>').appendTo('body');
	
	function updateBalloonPosition(x,y){
		balloon.css({left: x+5, top: y}); // + 5
	};
	function updateBalloonPosition_r(x,y){
		balloon_r.css({left: x+5, top: y}); // + 5
	};
	function showBalloon(){
		balloon.stop().css('opacity', 0).show().animate({opacity:1},100);
	};
	function showBalloon_r(){
		balloon_r.stop().css('opacity', 0).show().animate({opacity:1},100);
	};
	function hideBalloon(){
		balloon.stop().animate({opacity:1},100,function(){balloon.hide()});
	};
	function hideBalloon_r(){
		balloon_r.stop().animate({opacity:1},100,function(){balloon_r.hide()});
	};
	
	$('.tooltip').each(function(){
		var element = $(this);
		var text = element.attr('title');
		element.attr('title', '');
		element.hover(
			function(e){
				balloon.text(text);
				updateBalloonPosition(e.pageX, e.pageY);
				showBalloon();
			},
			function(){
				hideBalloon();
			}
		);
		element.mousemove(function(e){
			updateBalloonPosition(e.pageX, e.pageY);
		});
	});
	
	$('.tooltip_r').each(function(){
		var element = $(this);
		var text = element.attr('title');
		element.attr('title', '');
		element.hover(
			function(e){
				balloon_r.text(text);
				updateBalloonPosition_r(e.pageX, e.pageY);
				showBalloon_r();
			},
			function(){
				hideBalloon_r();
			}
		);
		element.mousemove(function(e){
			updateBalloonPosition_r(e.pageX, e.pageY);
		});
	});
	
	//quick_btn
	$('#sec_ctrl_bar li').hover(
		function(){
			var num = $(this).index()+1;
			$(this).find('>a>img').attr({'src':'images/quickBtn0'+num+'_on.png'});
			$(this).find('>a>span').attr({'style':'color: #ffffff;'});
		},
		function(){
			var num = $(this).index()+1;
			$(this).find('>a>img').attr({'src':'images/quickBtn0'+num+'.png'});
			$(this).find('>a>span').attr({'style':'color: #596d80;'});
		}
	);
	
	//quick_toggle
	bb = true;
	$('.quick_toggle').click(function(){
		if(bb){
			$(this).addClass('quick_open');
			$('.quick_menu').stop(true,true).animate({'margin-left':'-100px'},500,function(){bb=false;});
		}else{
			$(this).removeClass('quick_open');
			$('.quick_menu').stop(true,true).animate({'margin-left':'0px'},500,function(){bb=true;});
		};
	});
	//slide_banner
	var box1 = $('.promo_box1');
	var box2 = $('.promo_box2');
	var box3 = $('.promo_box3');
	var box4 = $('.promo_box4');
	
	box1.hover(
		function(){
			box1.stop().animate({'width':'1352px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'0', 'left':'1400px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'0', 'right':'-30px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'0', 'right':'-30px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box1.find('>.promo_box1_theme>h3.p_title').stop().animate({'height':'90px','font-size':'26px', 'line-height':'90px'},{duration: 300, queue:false, easeing: 'easeOutCubic'});
			box1.find('>.promo_box1_theme>.promo_box_bar').css('display', 'none');
			
		},
		function(){
			box1.stop().animate({'width':'322px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'322px', 'left':'345px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'322px', 'right':'322px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'322px', 'right':'-23px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box1.find('>.promo_box1_theme>h3.p_title').stop().animate({'height':'38px','font-size':'18px', 'line-height':'38px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box1.find('>.promo_box1_theme>.promo_box_bar').css('display', 'block');
		}
	);
	box2.hover(
		function(){
			box1.stop().animate({'width':'0', 'left':'-20px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'1352px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'0', 'right':'-30px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'0', 'right':'-30px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.find('>.promo_box2_theme>h3.p_title').stop().animate({'height':'90px','font-size':'26px', 'line-height':'90px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box2.find('>.promo_box2_theme>.promo_box_bar').css('display', 'none');
		},
		function(){
			box1.stop().animate({'width':'322px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'322px', 'left':'345px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'322px', 'right':'322px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'322px', 'right':'-23px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.find('>.promo_box2_theme>h3.p_title').stop().animate({'height':'38px','font-size':'18px', 'line-height':'38px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box2.find('>.promo_box2_theme>.promo_box_bar').css('display', 'block');
		}
	);
	box3.hover(
		function(){
			box1.stop().animate({'width':'0', 'left':'-20px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'0', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'1352px', 'right':'-23px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'0', 'right':'-30px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.find('>.promo_box3_theme>h3.p_title').stop().animate({'height':'90px','font-size':'26px', 'line-height':'90px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box3.find('>.promo_box3_theme>.promo_box_bar').css('display', 'none');
		},
		function(){
			box1.stop().animate({'width':'322px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'322px', 'left':'345px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'322px', 'right':'322px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'322px', 'right':'-23px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.find('>.promo_box3_theme>h3.p_title').stop().animate({'height':'38px','font-size':'18px', 'line-height':'38px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box3.find('>.promo_box3_theme>.promo_box_bar').css('display', 'block');
		}
	);
	box4.hover(
		function(){
			box1.stop().animate({'width':'0', 'left':'-20px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'0', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'0', 'right':'-30px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'1352px', 'right':'-23px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.find('>.promo_box4_theme>h3.p_title').stop().animate({'height':'90px','font-size':'26px', 'line-height':'90px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box4.find('>.promo_box4_theme>.promo_box_bar').css('display', 'none');
		},
		function(){
			box1.stop().animate({'width':'322px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'322px', 'left':'345px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'322px', 'right':'322px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'322px', 'right':'-23px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.find('>.promo_box4_theme>h3.p_title').stop().animate({'height':'38px','font-size':'18px', 'line-height':'38px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box4.find('>.promo_box4_theme>.promo_box_bar').css('display', 'block');
		}
	);
	
	var menu = $('.aside1Wrap>div, .aside1Wrap>div>ul>li');
	var menu2 = $('.sAsideWrap>ul>li');
	var wrap = $('.aside1');
	var menuHeight = menu.children('span.title').height();
	var menuHeight2 = menu2.children('li').height();
	var menuHeight3 = $('.aside1').height();
	var pageURL = location.href;
	var activeMenu;
	
	menu.on({
		mouseover:function(){
			var tg = $(this);
			menu.removeClass('active');
			tg.addClass('active');
			var th = menuHeight3 + tg.find('> .sAsideWrap').height();
			wrap.stop(false,false).animate({height:th},5000);
		},
		mouseout:function(){
			var tg = $(this);
			menu.removeClass('active');
			wrap.stop(false,false).animate({height: menuHeight3},5000);
			onActive();
		}
	});
	
	menu.each(function(i){
		var tg = $(this);
		var sub = tg.find('>.sAsideWrap>ul>li');
		var menuURL = tg.children('a').attr('href')
		var active = pageURL.indexOf(menuURL);
		if(active>-1){activeMenu=tg;};
		sub.each(function(j){
			var tg = $(this);
			var subURL = tg.children('a').attr('href');
			active = pageURL.indexOf(subURL);
			if(active>-1){activeMenu=tg;};
		});
		sub.on({
			mouseover:function(){
				var tg = $(this);
				sub.removeClass('active');
				tg.addClass('active');
			},
			mouseout:function(){
				var tg = $(this);
				tg.removeClass('active');
				onActive();
			}
		});
	});
	onActive();
	function onActive(){
		if(activeMenu){activeMenu.trigger('mouseover')};
	};

	var fmcurrent = 0;
	var fmbanner = $('.banner_family img');
	var fm_settimer;

	function fm_timer(){

		fm_settimer = setInterval(function(){
			var prev = fmbanner.eq(fmcurrent);
			move(prev, '0%', '100%');
			fmcurrent++;
			if(fmcurrent==fmbanner.size())
			{
				fmcurrent=0;
			}
			var next = fmbanner.eq(fmcurrent);
			move(next, '100%', '0%');
		},1000);
		function move(tg, start, end){
			tg.css('top', start).stop().animate({top:end}, {duration: 500, ease:'easeOutCubic'});
		};
	};
	fm_timer();

	function swing(){
		$('.chat_bb').animate({'top':'40px'},1000).animate({'top':'60px'},1000);
		
	};
	setInterval(swing,1000);

	swing();

});