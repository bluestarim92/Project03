$(function(){
	
	$.getJSON('http://api.openweathermap.org/data/2.5/air_pollution?lat=37.5683&lon=126.9778&appid=b9a622a92a130dca23f9755d97503990',function(data){
		var $pm2_5 = data.list[0].components.pm2_5;
		var $pm10 = data.list[0].components.pm10;
		
		$('.kPm25').append($pm2_5);
		$('.kPm10').append($pm10);
	});	
});