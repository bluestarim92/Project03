$(function(){
	
	$.getJSON('http://api.openweathermap.org/data/2.5/air_pollution?lat=38.3004&lon=-76.5074&appid=b9a622a92a130dca23f9755d97503990',function(data){
		var $pm2_5 = data.list[0].components.pm2_5;
		var $pm10 = data.list[0].components.pm10;
		
		$('.cPm25').append($pm2_5);
		$('.cPm10').append($pm10);
	});	
});