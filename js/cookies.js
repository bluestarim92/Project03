$(function(){
	//cookie close1day
	if($.cookie('pop') !='no'){$('#pop_wrap').show();}
	$('#pop_wrap').css('cursor','move').draggable();
	
	$('#pop_wrap area:eq(0)').on('click',function(){
		$('#pop_wrap').fadeOut('fast');
		return false;
	});
	$('#pop_wrap area:eq(1)').on('click',function(){
		$.cookie('pop','no',{expires:1});
		$('#pop_wrap').fadeOut('fast');
		return false;
	});
});