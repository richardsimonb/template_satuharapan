<!DOCTYPE html>
<html lang="id">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-78633708-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-78633708-1');
	</script>

	<link rel="stylesheet" type="text/css" href="<?='https://www.satuharapan.com'.'/'.PATH_template?>mobile/css/style.css?version=2.1" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> 
	<meta name="author" content="PT. Satu Harapan Media, satuharapan.com" />
	<meta name="googlebot-news" content="index, follow">
	<meta name="googlebot" content="index, follow">
	<meta name="robots" content="index, follow">
	<meta name="language" content="id">
	<meta name="geo.country" content="id">
	<meta http-equiv="content-language" content="In-Id">
	<meta name="geo.placename" content="Indonesia">
	<meta name="google-site-verification" content="GN62cXC9ihahXR5tf_A3wopqATomzuHEJAjbvKKP0LE" />

	<?php
	if($keyword){
	?>
        <meta name="keywords" content="<?=$keyword?>" />
	<?php
	} else {?>
		<meta name="keywords" content="Satu Harapan, Berbagi Ruang Dalam Keberagaman, Telling News and Milenial Life, Berita" />
	<?php }
	?>

	<?php
	if($pages_require == "read-detail.php"){
	?>
		<meta name="description" content="<?=$desc?>" />
	    <link rel="canonical" href="<?='https://www.satuharapan.com'."/".$route?>"/>
	<?php
	} else { ?>
		<meta name="description" content="Satuharapan.com - Berbagi Ruang dalam Keberagaman" />
		<link rel="canonical" href="https://<?=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>"/>
	<?php }
	?>
	
	<meta property="og:title" content="<?=$title?> - Satu Harapan" />
	<meta property="og:description" content="<?=$desc?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?='/uploads/pics/'.$og_img?>" />
	<meta property="og:site_name" content="satuharapan.com" />
	<meta property="og:url" content="https://<?=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>" />
	<meta name="language" content="Indonesia" />
	<meta name="rating" content="general" />

	<title><?=$title?> - Satu Harapan</title>
	
	<link rel="shortcut icon" href="<?='https://www.satuharapan.com'.'/'.PATH_template?>mobile/images/favicon.ico" />
	
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
	</script>
	<!--<script type="text/javascript" src="<?='https://www.satuharapan.com'.'/'.PATH_template?>js/date.js"></script>-->
	<!--[if gte IE 6]>
    <style type="text/css">
        #bann  { border: 1px solid #CCC; }
    </style>
    <![endif]-->
    <script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
	<script type="text/javascript">twttr.conversion.trackPid('l5fxo');</script>
    <noscript>
	<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l5fxo&p_id=Twitter" />
	<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l5fxo&p_id=Twitter" /></noscript>
	<style type='text/css'>
		#toTop {opacity:0.8;padding:5px;position:fixed; bottom:2px; right:5px;cursor:pointer;display:none}
	</style>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js' type='text/javascript'></script>
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
	<?php if($pages_require == "read-detail.php"){?>

		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v8.0" nonce="zsXZPgdR"></script>

		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		
	<?php } ?>
	
	<header>
	
	<?php
		if($banntop){?>
	   <div id="hd-bann">
	   
			 <div id="bann-top">
			 
				<?=$banntop?>
			</div>
		</div>
		<?php
		}
		?>
		<div id="hd-logo">
			<div class="float-lt"><a href="<?='https://www.satuharapan.com'?>"><img src="<?='https://www.satuharapan.com'.'/'.PATH_template?>mobile/images/logo2018mobile.png" /></a></div>
			<div class="float-rt">
				<a href="<?='https://www.satuharapan.com'?>/switch/desktop">DESKTOP VERSION <img src="<?='https://www.satuharapan.com'.'/'.PATH_template?>images/desktop_sh.png" width="26px" /></a>
			</div>
			<div class="clear"></div>
		</div>
		<div id="hd-comp">
			<div class="float-lt"></div>
			<div class="float-rt"><span id="date_time"></span></div>
			<div class="clear"></div>
		</div>
		<nav id="hd-hbar">
			<ul><li class="first"><a href="<?='https://www.satuharapan.com'?>"><img src="<?='https://www.satuharapan.com'.'/'.PATH_template?>images/home.png" width="21" height="17"/></a></li>
				<?=$topmenu?>
			</ul>
		</nav>
		<div id="hd-hnav">
			<div class="float-lt">
				<span>&nbsp;<img src="/fileadmin/templates/new/images/menu.png" width="12px" height="17px">&nbsp;MENU KATEGORI</span>				
				<nav id="navi">
					<ul>
						<?=$mainmenu?>
					</ul>
				</nav>
			</div>
			<div class="float-rt">
			  <div id="src">
					<form method="get" name="search_form" action="<?='https://www.satuharapan.com'?>/search">
					  <div class="btnarea"><a href="javascript:void(0)" onclick="submit()"><img src="<?='https://www.satuharapan.com'.'/'.PATH_template?>mobile/images/search_mobile.jpg" /></a></div>
					  <input type="text" name="search" class="frm" placeholder = "Cari artikel..." />
					  <div class="clear"></div>
					</form>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</header>
