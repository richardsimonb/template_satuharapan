function makeArray() {
	for (i = 0; i<makeArray.arguments.length; i++)
		this[i + 1] = makeArray.arguments[i];
}

var weekday = new makeArray('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
var months	= new makeArray('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
var d 		= new Date();
var day		= weekday[d.getDay() + 1];
var date 	= d.getDate();
var month 	= months[d.getMonth() + 1];
var yy 		= d.getYear();
var year 	= (yy < 1000) ? yy + 1900 : yy;
function date_time(id)
{
		date = new Date;
		year = date.getFullYear();
		month = date.getMonth();
		months = new Array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		d = date.getDate();
		day = date.getDay();
		days = new Array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
		h = date.getHours();
		if(h<10)
		{
				h = "0"+h;
		}
		m = date.getMinutes();
		if(m<10)
		{
				m = "0"+m;
		}
		s = date.getSeconds();
		if(s<10)
		{
				s = "0"+s;
		}
		result = h+':'+m+':'+s+', '+days[day]+', '+d+' '+months[month]+' '+year;
		document.getElementById(id).innerHTML = result;
		setTimeout('date_time("'+id+'");','1000');
		return true;
}
date_time('date_time')

document.getElementById("navi").style.display="none";
var button = document.getElementById("hd-hnav");
button.getElementsByTagName("span")[0].addEventListener("click",function(e){
	if(document.getElementById("navi").style.display=="none"){
		document.getElementById("navi").style.display = "block";
	}
	else{
		document.getElementById("navi").style.display = "none";
	}
},false);