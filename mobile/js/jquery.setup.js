$(window).load(function() {	
	
	if($('div').hasClass('searchformfobile')){
		$("#mobile-content .searchformfobile").remove();
	}	
	if($('div').hasClass('dright')){
		var checkHTML = $("#related-by-user .dcon").html();
		if(checkHTML == ''){
			$("#related-by-user").hide();
			$("#related-by-cat").show();
		}
	}
	if($('div').hasClass('cat_rootline')){
		var cat = $(".news-catRootline").text();
		if(cat == ''){
			cat = $(".cat_rootline").text();
		}
		//alert(cat);
		//<span class="blue">Kabar Indonesia</span> | Politik
		var arrCat = cat.split("|");
		var html = '';
		if(arrCat.length > 1){
			html = '<span class="blue">' + arrCat[0] + '</span>|' + arrCat[1];	
		}else{
			html = '<span class="blue">' + arrCat[0] + '</span>';
		}
		$(".title-breadcrumb").html(html);
		//alert(html);
	}
		
	if($('span').hasClass('news-date')){
		var forindex;
		$(".news-date").each(function() {
			var arrDay 			= new Array();
			arrDay['Sunday'] 	= 'Minggu';
			arrDay['Monday'] 	= 'Senin';
			arrDay['Tuesday']	= 'Selasa';
			arrDay['Wednesday']	= 'Rabu';
			arrDay['Thursday']	= 'Kamis';
			arrDay['Friday']	= 'Jumat';
			arrDay['Saturday']	= 'Sabtu';
			
			var arrMonth 			= new Array();
			arrMonth['January']		= 'Januari';
			arrMonth['February']	='Februari';
			arrMonth['March']		= 'Maret';
			arrMonth['April']		= 'April';
			arrMonth['May']			= 'Mei';
			arrMonth['June']		= 'Juni';
			arrMonth['July']		= 'Juli';
			arrMonth['August']		= 'Agustus';
			arrMonth['September']	= 'September';
			arrMonth['October']		= 'Oktober';
			arrMonth['November']	= 'November';
			arrMonth['December']	= 'Desember';
			
			var dt 			= $(this).text();
			var arrDayTime 	= dt.split(",");
			var arrTime 	= arrDayTime[1].split("-");
			var thisday 	= arrDay[arrDayTime[0]];
			var thismonth 	= arrMonth[arrTime[1]];
			var thisdaytime = thisday + ', ' + arrTime[0] + ' ' + thismonth + ' ' + arrTime[2];
			
			forindex 		= thismonth + ' ' + arrTime[2];
			
			$(this).text(thisdaytime);  
		});
		if($('div').hasClass('archivpage')){			
			$("#menu-breadcrumb").append(forindex);
		}	
	}
	if($('article').hasClass("mobile-detail")){	
		$(".mobile-detail p").each(function() {
		    var $this = $(this);		    
		    if($this.html().replace(/\s|&nbsp;/g, '').length == 0 || $this.html().replace(/\s|<br>/g, '').length == 0){
			    $(this).remove();
		    }	    
		});
	}	
	
});