$(function(){
	
	$.getJSON('http://api.openweathermap.org/data/2.5/air_pollution?lat=35.6895&lon=139.6917&appid=b9a622a92a130dca23f9755d97503990',function(data){
		var $pm2_5 = data.list[0].components.pm2_5;
		var $pm10 = data.list[0].components.pm10;
		
		$('.tPm25').append($pm2_5);
		$('.tPm10').append($pm10);
	});	
});