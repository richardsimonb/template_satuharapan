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