var udahdiklik=true;
var kota=document.getElementById("City");
var ourRequest = new XMLHttpRequest();
				
ourRequest.open('GET','https://api.pray.zone/v2/times/today.json?city='+city);
ourRequest.onload=function() {
	var ourData = JSON.parse(ourRequest.responseText);
		renderHTML(ourData);
};
ourRequest.send();

function renderHTML(data) {
	var htmlstring = "";
		htmlstring +="<table class='table table-hover' style='background:white'>"
					+"<tr>"+"<td>"+data.results.datetime[0].date.hijri+" H </td>"+"<td>"+data.results.datetime[0].date.gregorian+" M </td>"+"</tr>"	
					+"<tr>"+"<td colspan=2>"+data.results.location.city+", "+data.results.location.country+"</td>"+"</tr>"
					+"<tr>"+"<td>Imsak</td>"+"<td>"+data.results.datetime[0].times.Imsak+"</td>"+"</tr>"	
					+"<tr>"+"<td>Fajr</td>"+"<td>"+data.results.datetime[0].times.Fajr+"</td>"+"</tr>"
					+"<tr>"+"<td>Syuruq</td>"+"<td>"+data.results.datetime[0].times.Sunrise+"</td>"+"</tr>"
					+"<tr>"+"<td>Dzuhur</td>"+"<td>"+data.results.datetime[0].times.Dhuhr+"</td>"+"</tr>"
					+"<tr>"+"<td>Ashar</td>"+"<td>"+data.results.datetime[0].times.Asr+"</td>"+"</tr>"
					+"<tr>"+"<td>Sunset</td>"+"<td>"+data.results.datetime[0].times.Sunset+"</td>"+"</tr>"
					+"<tr>"+"<td>Maghrib</td>"+"<td>"+data.results.datetime[0].times.Maghrib+"</td>"+"</tr>"
					+"<tr>"+"<td>Isya</td>"+"<td>"+data.results.datetime[0].times.Isha+"</td>"+"</tr>"
					+"</table>";
			kota.insertAdjacentHTML('beforeend',htmlstring);
			var br = "<br>";
			kota.insertAdjacentHTML('beforeend',br);
		}
