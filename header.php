<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="id" xmlns="http://www.w3.org/1999/xhtml" xml:lang="id">
<head>
	<meta name="author" content="PT. Satu Harapan Media | satuharapan.com" />
    <meta name="news_keywords" content="<?=$keyword?>" />
	<meta name="description" content="satuharapan.com berbagi ruang dalam keragaman" />
	<meta name="bitly-verification" content="fbdeb1a23940"/>
	<meta name="viewport" content="target-densitydpi=device-dpi" />
	<?php
	if($keyword){
	?>
        <meta name="keywords" content="<?=$keyword?>" />
	    <meta property="og:title" content="Satu Harapan: <?=$title?>" />
	    <meta property="og:description" content="<?=$desc?>" />
	<?php
	}
	if($pages_require == "read-detail.php"){?>
	    <link rel="canonical" href="<?=baseURL."/".$route?>"/>
	<?php
	}
	?>
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?=PATH_image.$og_img?>" />
	<meta property="og:site_name" content="SatuHarapan.com" />
	<meta property="og:url" content="http://<?=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>" />
	<meta name="rating" content="general" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@1harapan" />
	<meta name="twitter:title" content="<?=$title?>" />
    <meta name="twitter:description" content="<?=$desc?>" />
	<meta name="twitter:image" content="<?=PATH_image.$og_img?>" />
    <meta name="twitter:url" content="http://<?=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>" />
	
	<title>Satu Harapan: <?=$title?></title>
	
	<!--<base href="<?=baseURL?>">-->
	<meta name="bitly-verification" content="fbdeb1a23940"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="<?=baseURL.'/'.PATH_template?>css/reset.css" />
	<!--<link rel="stylesheet" href="<?=baseURL.'/'.PATH_template?>css/text.css" />-->
	<style>
		/*
		  960 Grid System ~ Text CSS.
		  Learn more ~ http://960.gs/

		  Licensed under GPL and MIT.
		*/

		/* `Basic HTML
		----------------------------------------------------------------------------------------------------*/

		body {
		  font: 12px/1.5 'Calibri', Arial, 'Liberation Sans', FreeSans, sans-serif;
		}

		pre,
		code {
		  font-family: 'DejaVu Sans Mono', Menlo, Consolas, monospace;
		}

		hr {
		  border: 0 #ccc solid;
		  border-top-width: 1px;
		  clear: both;
		  height: 0;
		}

		/* `Headings
		----------------------------------------------------------------------------------------------------*/

		h1 {
		  font-size: 25px;
		}

		h2 {
		  font-size: 23px;
		}

		h3 {
		  font-size: 21px;
		}

		h4 {
		  font-size: 19px;
		}

		h5 {
		  font-size: 17px;
		}

		h6 {
		  font-size: 15px;
		}

		/* `Spacing
		----------------------------------------------------------------------------------------------------*/

		ol {
		  list-style: decimal;
		}

		ul {
		  list-style: disc;
		}

		li {
		  margin-right: 10px;
		  line-height: 20px
		}

		p,
		dl,
		hr,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		ol,
		ul,
		pre,
		table,
		address,
		fieldset,
		figure {
		  margin-bottom: 20px;
		}
	</style>
	<link rel="stylesheet" href="<?=baseURL.'/'.PATH_template?>css/style2.css" />
		<link rel="shortcut icon" href="<?=baseURL.'/'.PATH_template?>images/favicon.ico" />
	<script async="" src="//www.google-analytics.com/analytics.js"></script>
	
	<!--google analytic yang baru dipasang 1 juni 2016-->
	<script>
  	    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  	    ga('create', 'UA-78633708-1', 'auto');
  	    ga('send', 'pageview');
	</script>	
	
	<!--google analytic yang lama-->
	<script>
	    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	    ga('create', 'UA-19662655-20', 'satuharapan.com');
	    ga('send', 'pageview');
	</script>
	
	<script type="text/javascript" src="<?=baseURL.'/'.PATH_template?>js/jquery-1.9.1.min.js?v=1"></script>
	<script type="text/javascript">
	  var browserName = navigator.appName;
		var browserVer = parseInt(navigator.appVersion);
		var version = "";
		var msie4 = (browserName == "Microsoft Internet Explorer" && browserVer >= 4);
		if ((browserName == "Netscape" && browserVer >= 3) || msie4 || browserName=="Konqueror" || browserName=="Opera") {version = "n3";} else {version = "n2";}
			// Blurring links:
		function blurLink(theObject)	{	//
			if (msie4)	{theObject.blur();}
		}
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

	    $(document).ready(function() {
	        date_time('date_time')
	    });
    </script>
	
	<!--
	<script type="text/javascript" src="<?=baseURL.'/'.PATH_template?>js/date_time.js"></script>
	<script type="text/javascript" src="<?=baseURL.'/'.PATH_template?>js/date.js"></script>
	-->
	
	<script type="text/javascript" src="<?=baseURL.'/'.PATH_template?>js/jquery.setup.js?v=1.1"></script>
	<script type="text/javascript" src="<?=baseURL.'/'.PATH_template?>js/jquery.carouFredSel-6.1.0-packed.js?v=1"></script>
    <!--
    [if gte IE 6]>
    <style type="text/css">
        #bann  { border: 1px solid #CCC; }
    </style>
    <![endif]
    -->
    <script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
    <script type="text/javascript">
        twttr.conversion.trackPid('l5fxo');
    </script>
    <noscript>
    <img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l5fxo&p_id=Twitter" />
    <img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l5fxo&p_id=Twitter" /></noscript>

    <!--Galeri foto
        <link rel="stylesheet" href="<?=baseURL.'/'.PATH_template?>css/bootstrap.min.css" />
    -->
    <style type='text/css'>
        #toTop {opacity:0.8;padding:5px;position:fixed; bottom:2px; right:5px;cursor:pointer;display:none}
    </style>

    <script type='text/javascript'>
        $(function() {
            $(window).scroll(function() {
            if($(this).scrollTop() != 0) {
                $('#toTop').fadeIn(); 
            } else {
                $('#toTop').fadeOut();
            }
        });

        $('#toTop').click(function() {
        $('body,html').animate({scrollTop:0},10000);
        }); 
    });
    </script>
</head>
<body>
    <?php
    if($pages_require == "read-detail.php"){?>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            //js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&appId=264085093773455&version=v2.0";
  
            js.src = "https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.0";
  
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <?php
    }
    ?>
	<a class="none" href="https://plus.google.com/114744379740699124576" rel="publisher">Google+</a>
	<div id="loading-image">
	    <!--<img src="images/loading2.gif" alt="Loading..." />-->
	    <span>Loading...</span>
	</div>
	<div id="header">
	    <div id="hd-bann">
	    <!--<div class="img "><img src="http://www.satuharapan.com/uploads/tx_macinabanners/harkitnas_mei_2015.jpg"  width="1000" height="150"/></div>-->
	    <!--<div class="img "><img src="http://www.satuharapan.com/uploads/tx_macinabanners/kartini_2016.jpg"  width="1000" height="150"/></div>-->
	    <!--<div class="img "><img src="http://www.satuharapan.com/uploads/tx_macinabanners/SayaIndonesiaPancasila.jpg"  width="1000"/></div>-->
 	        <?php
    		if($banntop){?>
			    <div id="bann-top">
				    <?=$banntop?>
			    </div>
		    <?php
		    }
		    ?>
		</div>
		<div id="hd-logo">
			<div id="logo-left"><a href="<?=baseURL?>"><img src="<?=baseURL.'/'.PATH_template?>images/logo2018.png" alt="Satuharapan.com" width="460" height="106"/></a></div>
			<div id="logo-right">
			    <div id="bann-top-life">
			        <!--iklan adplus-->
        			<!--<script type="text/javascript">
				    var placementId = "5607033";
				    var sizeId = "1"; 
				    </script><script type="text/javascript" language="javascript" src="http://adr.adplus.co.id/script/adt.js"></script>
				    <noscript>
				    <a href="http://adsrv.adplus.co.id/adlink/3.0/1336/5607033/0/1/ADTECH;loc=300" target="_blank">
				    <img src="http://adsrv.adplus.co.id/adserv/3.0/1336/5607033/0/1/ADTECH;loc=300" border="0" width="468" height="60">
				    </a>
				    </noscript>
				    -->
					<!-- Div 'class' replace with image banner/adv -->
					<?=$bannlogo?>
			    </div>
			</div>
			<div class="clear"></div>
		</div>
		<div id="hd-comp">
			<div id="bg-hd-comp">
				<div id="comp-left"></div>
				<div id="comp-right"><span id="date_time"></span></div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="hd-hbar">
			<div id="bg-hd-hbar">
				<div id="hbar-left">
					<ul>
						<li class="first"><a href="<?=baseURL?>"><img src="<?=baseURL.'/'.PATH_template?>images/home.png" width="21" height="17"/></a></li>
						<?=$topmenu?>
					</ul>
				</div>
				<div id="hbar-right">
				    <div id="src">
						<form method="get" action="<?=baseURL?>/search">
						    <input type="text" name="search" class="frm" value = "Cari artikel..."
							     onblur  = "if(this.value ==' ') { this.value='Cari artikel...'}"
							    onfocus = "if(this.value == 'Cari artikel...') {this.value=' '}" />
						    <input type="submit" value="" class="btn" />
						</form>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<div id="hd-hnav">
			<div id="bg-hd-hnav">
				<ul>
					<?=$mainmenu?>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
	</div>
      