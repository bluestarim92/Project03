$(function(){
	$.fn.guideText = function(){
		
		var guideClass = 'guide_color';
		//css 에서 class='red'를 변수처리
		$('.guideText').each(function(){
		//사용자가 .guideText를 focus했을때
			var guideText = this.defaultValue; // text원상복귀를 위해 저장
			//guideText.get(0) = "이름을 입력해주세요.";
			var element = $(this); // 순환하는 .guideText를 jquery객체로만듦
			element.focus(function(){
			if(element.val()===guideText){//사용자가 입력하지 않았을때
				element.val('');//element 값을 비움
				element.removeClass(guideClass);
			};
		});
		element.blur(function(){//사용자가 .guideText를 focus했을때
			if(element.val()===''){//사용자가 입력하지 않았을때
				element.val(guideText);//element 값을 비움
				element.addClass(guideClass);
			};
		});
		
		if(element.val()===guideText){// 페이지를 불러왔을때 초기상태
			element.addClass(guideClass);
		};
		});
		return this;

	};
});