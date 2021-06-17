jQuery(document).ready(function(){
	var bbs = $('.bbs_list');
	$.getJSON('data.json', function(bbs_el){
		$.each(bbs_el, function(i, thread){
			var text_title = thread.title;
			var text_date = thread.date;
			var text_subject = thread.subject;
			var text_content = thread.content;
			var board = $('<div class="board" />');
			var contentwrap = $('<div class ="content_wrap cf" />');
			var title = $('<div class="b_title" />').html(text_title);
			var date = $('<div class="b_date" />').html(text_date);
			var subject = $('<div class="c_subject"/>').html(text_subject);
			var content = $('<div class ="c_content" />').html(text_content);
			title.append(date);
			board.append(title);
			board.append(contentwrap);
			contentwrap.append(subject);
			contentwrap.append(content);
			bbs.append(board);
			
			var class_closed = 'closed';
			$(bbs).each(function(){
				var alltit = board.find(title);
				var allcon = board.find(contentwrap);
				
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
					var con = $(this).parent(board).find(contentwrap);
					$('.title').addClass(class_closed);
					$('.content_wrap').addClass(class_closed);
					open(tit,con);
				});
				/* $(document).on('click', alltit, function(){
					var tit = $(this).attr('class');
					alert(tit);
					var con = $(title).parent(board).find(contentwrap);
					closedAll();
					open(tit,con);
				}); */
			});	
		});
	});
	
});


