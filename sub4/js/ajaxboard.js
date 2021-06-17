$(function(){
	$.ajax({
		url:'data.json',
		type:'get',
		dataType:'json',
		async:true,    // 1. 동기, 비동기 2.전송완료 (비순서, 안기다림) : 비동기 ex) 채팅, 실시간 예매 시스템
		//async:false, 1. 전송완료 2.동기, 비동기 (순서대로, 기다림) : 동기 ex) 무전기, 날씨 데이터
		error:function(){
			alert('데이터를 불러오는데에 실패했습니다');
		},
		success:function(data){
			var boards = data.boards;
			var div = $('.bbs_list');
			for(var i in boards){
				var board = boards[i];
				var cnt = 0;
				for(var prop in board){
					var text = board[prop];
					var tr = div.find('>div').eq(parseInt(i));
					var td = tr.find('>div').eq(cnt); //써있는걸 overwrite 시킬수 있기 때문에 +1을 하지 않음 metaphor를 맞추기 위해
					td.text(text);
					cnt++;
				};
			};
		}
	});
});