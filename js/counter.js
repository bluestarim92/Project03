$(function(){
	

	var tid;
	var cnt = parseInt(5);//초기값(초단위)
	
	function counter_init() {
		tid = setInterval(function(){
			counter_run();
		}, 1000);
	};

	function counter_reset(){
		clearInterval(tid);
		cnt = parseInt(60);
		counter_init();
	};

	function counter_run(){
		document.getElementById("counter").innerText = time_format(cnt);
		cnt--;
		if(cnt < 0) {
			clearInterval(tid);
			self.location = "sub6/sub6.html";
		}
	};
	function time_format(s) {
		var nHour=0;
		var nMin=0;
		var nSec=0;
		if(s>0) {
			nMin = parseInt(s/60);
			nSec = s%60;

			if(nMin>60) {
				nHour = parseInt(nMin/60);
				nMin = nMin%60;
			}
		} 
		if(nSec<10) nSec = "0"+nSec;
		if(nMin<10) nMin = "0"+nMin;

		return ""+nHour+":"+nMin+":"+nSec;
	};
	counter_init();
});