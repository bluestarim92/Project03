$(function(){
	var current = 1;
	var thumbListSize = 3;
	var thumbnail = $('#thumbnail');
	var prev = thumbnail.find('>.left');
	var next = thumbnail.find('>.right');
	var container = thumbnail.find('>.container>ul');
	var containWidth = thumbnail.find('>.container').width();
	var thumb = container.find('>.thumb');
	var maxSize = thumb.size();
	var image = $('#gallery #image > p');
	thumb.on('click', function(){
		image.css('display', 'none');
		var i = $(this).index();
		image.eq(i).css('display', 'block');
	});
	next.on('click', function(){
		if(current<maxSize/thumbListSize-1){
			current++;
		}else{
			alert('마지막 페이지');
		}
		listMove();
	});
	prev.on('click', function(){
		if(current>0){
			current--;
		}else{
			alert('첫번제 페이지');
		}
		listMove();
	});
	function listMove(){
		var tl = containWidth * current * -1;
		container.stop().animate({left:tl}, {duration: 400, easing:'easeOutCubic'});
		
	};
	listMove();
});