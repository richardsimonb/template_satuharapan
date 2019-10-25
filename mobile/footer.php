<footer>
	<section id="socmed_btm">
		<div class="socmed_btmtitle float-lt">Gabung bersama kami</div>
		<?php
		echo '<div id="btm_fb" class="socmedbtm_field float-lt">'.$fb.'</div>';
		echo '<div id="btm_tw" class="socmedbtm_field float-lt">'.$tw.'</div>';
		//echo '<div id="btm_gp" class="socmedbtm_field float-lt">'.$gplus.'</div>';
		?>
		<div class="clear"></div>
	</section>
	<nav id="primary">
		<ul class="nav">
			<li><a href="<?=baseURL?>" class="n-home"><?=$bottommenu2[0]['title']?></a></li>
			<li><a href="<?php echo $bottommenu2[1]['url']; ?>" class="n-account"><?=$bottommenu2[1]['title']?></a></li>
			<li><a href="<?php echo $bottommenu2[2]['url']; ?>" class="n-info"><?=$bottommenu2[2]['title']?></a></li>
			<li><a href="<?php echo $bottommenu2[3]['url']; ?>" class="n-contact"><?=$bottommenu2[3]['title']?></a></li>
			<li><a href="<?php echo $bottommenu2[4]['url']; ?>" class="n-info"><?=$bottommenu2[4]['title']?></a></li>
			<div class="clear"></div>
		</ul>
	</nav>
	<section class="bottom">
		<!--<div class="float-lt"><a href="#top">BACK TO TOP</a></div>-->
                <div class="float-lt">PT Satu Harapan Media</div>
		<div class="float-rt">VIEW <a href="<?php echo $baseURL; ?>/switch/desktop"><img src="<?=baseURL.'/'.PATH_template?>/images/desktop_sh.png" width="32px" />&nbsp;DESKTOP VERSION</a></div>
		<div class="clear"></div>
	</section>
</footer>
<?php
	if($pages_require == "read-detail.php"){?>
<script type="text/javascript">
  (function() {
	var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	po.src = 'https://apis.google.com/js/platform.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<?php
	}
	?>
	<script type="text/javascript">
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
	</script>
<div id='toTop'>
<a href="<?=baseURL?>"><img alt="Back to Home" src="<?=baseURL.'/'.PATH_template?>mobile/images/house_sm.png" width="35px" /></a>
</div>
</body>
</html>