$(function(){
	$.getJSON('http://api.openweathermap.org/data/2.5/forecast?id=4350049&appid=b9a622a92a130dca23f9755d97503990&units=metric',function(data){
		
		function getWorldTime(tzOffset) { // 24시간제
		  now = new Date();
		  tz = now.getTime() + (now.getTimezoneOffset() * 60000) + (tzOffset * 3600000);
		  now.setTime(tz);
		 
		 };
		 
		 getWorldTime(-7);
		 
		var month = now.getMonth() + 1;
		var date = now.getDate();
		var day = now.getDay();
		var hour = now.getHours();
		
		if(hour>=0 && hour<3)
		{
			var $cTemp = data.list[0].main.temp;
			var $cHumi = data.list[0].main.humidity;
			var $cSpd = data.list[0].wind.speed;
			var $cDeg = data.list[0].wind.deg;
			var $wIcon = data.list[0].weather[0].icon;
			
		}
		else if(hour>=3 && hour <6)
		{
			var $cTemp = data.list[1].main.temp;
			var $cHumi = data.list[1].main.humidity;
			var $cSpd = data.list[1].wind.speed;
			var $cDeg = data.list[1].wind.deg;
			var $wIcon = data.list[1].weather[0].icon;
		}
		else if(hour>=6 && hour <9)
		{
			var $cTemp = data.list[2].main.temp;
			var $cHumi = data.list[2].main.humidity;
			var $cSpd = data.list[2].wind.speed;
			var $cDeg = data.list[2].wind.deg;
			var $wIcon = data.list[2].weather[0].icon;
		}
		else if(hour>=9 && hour <12)
		{
			var $cTemp = data.list[3].main.temp;
			var $cHumi = data.list[3].main.humidity;
			var $cSpd = data.list[3].wind.speed;
			var $cDeg = data.list[3].wind.deg;
			var $wIcon = data.list[3].weather[0].icon;
		}
		else if(hour>=12 && hour <15)
		{
			var $cTemp = data.list[4].main.temp;
			var $cHumi = data.list[4].main.humidity;
			var $cSpd = data.list[4].wind.speed;
			var $cDeg = data.list[4].wind.deg;
			var $wIcon = data.list[4].weather[0].icon;
		}
		else if(hour>=15 && hour <18)
		{
			var $cTemp = data.list[5].main.temp;
			var $cHumi = data.list[5].main.humidity;
			var $cSpd = data.list[5].wind.speed;
			var $cDeg = data.list[5].wind.deg;
			var $wIcon = data.list[5].weather[0].icon;
		}
		else if(hour>=18 && hour <21)
		{
			var $cTemp = data.list[6].main.temp;
			var $cHumi = data.list[6].main.humidity;
			var $cSpd = data.list[6].wind.speed;
			var $cDeg = data.list[6].wind.deg;
			var $wIcon = data.list[6].weather[0].icon;
		}
		else if(hour>=21 && hour <24)
		{
			var $cTemp = data.list[7].main.temp;
			var $cHumi = data.list[7].main.humidity;
			var $cSpd = data.list[7].wind.speed;
			var $cDeg = data.list[7].wind.deg;
			var $wIcon = data.list[7].weather[0].icon;
		}
		
		var degE = ['N', 'NNE', 'NE', 'ENE', 'E', 'ESE', 'SE', 'SSE', 'S', 'SSW', 'SW', 'WSW', 'W', 'WNW', 'NW', 'NNW'];
		var whatdegE;
		if($cDeg>=0 && $cDeg<20)
		{
			whatdegE = degE[0];
		}
		else if($cDeg>=20 && $cDeg<50)
		{
			whatdegE = degE[1];
		}
		else if($cDeg>=50 && $cDeg<70)
		{
			whatdegE = degE[2];
		}
		else if($cDeg>=70 && $cDeg<90)
		{
			whatdegE = degE[3];
		}
		else if($cDeg>=90 && $cDeg<110)
		{
			whatdegE = degE[4];
		}
		else if($cDeg>=110 && $cDeg<140)
		{
			whatdegE = degE[5];
		}
		else if($cDeg>=140 && $cDeg<160)
		{
			whatdegE = degE[6];
		}
		else if($cDeg>=160 && $cDeg<180)
		{
			whatdegE = degE[7];
		}
		else if($cDeg>=180 && $cDeg<200)
		{
			whatdegE = degE[8];
		}
		else if($cDeg>=200 && $cDeg<230)
		{
			whatdegE = degE[9];
		}
		else if($cDeg>=230 && $cDeg<250)
		{
			whatdegE = degE[10];
		}
		else if($cDeg>=250 && $cDeg<270)
		{
			whatdegE = degE[11];
		}
		else if($cDeg>=270 && $cDeg<290)
		{
			whatdegE = degE[12];
		}
		else if($cDeg>=290 && $cDeg<320)
		{
			whatdegE = degE[13];
		}
		else if($cDeg>=320 && $cDeg<340)
		{
			whatdegE = degE[14];
		}
		else if($cDeg>=340 && $cDeg<360)
		{
			whatdegE = degE[15];
		}
		var whatday;
		if(day = 1)
		{
			whatday = '일요일';
		}
		else if(day = 2)
		{
			whatday = '월요일'
		}
		else if(day = 3)
		{
			whatday = '화요일'
		}
		else if(day = 4)
		{
			whatday = '수요일'
		}
		else if(day = 5)
		{
			whatday = '목요일'
		}
		else if(day = 6)
		{
			whatday = '금요일'
		}
		else if(day = 7)
		{
			whatday = '토요일'
		}
		
		$('.cTemp').prepend($cTemp);
		$('.cHumi').prepend($cHumi);
		$('.cSpd').append($cSpd);
		$('.cDeg').append(whatdegE);
		$('.cmonth').prepend(month);
		$('.cdate').prepend(date);
		$('.cwhatday').prepend(whatday);
		$('.cicon').append('<img src="http://openweathermap.org/img/wn/'+$wIcon+'@2x.png" />');
	});
});