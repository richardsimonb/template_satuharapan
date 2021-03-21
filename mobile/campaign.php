<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta name="author" content="Sinar Kasih, satuharapan.com" />
	<meta name="description" content="satuharapan.com kasih memperbarui kehidupan" />
	<meta name="bitly-verification" content="fbdeb1a23940"/>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0" /> 
	<?php
	if($keyword){
	?>
	<meta name="keywords" content="<?=$keyword?>" />
	<meta property="og:title" content="Satu Harapan: <?=$title?>" />
	<meta property="og:description" content="<?=$desc?>" />
	<?php
	}
	?>
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?=$og_img?>" />
	<meta property="og:site_name" content="SatuHarapan.com" />
	<meta property="og:url" content="http://<?=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>" />
	<meta name="language" content="Indonesia" />
	<meta name="rating" content="general" />
	<title>Satu Harapan: <?=$title?></title>
	<!--<base href="<?=baseURL?>">-->
	<meta name="bitly-verification" content="fbdeb1a23940"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="<?=baseURL.'/'.PATH_template?>mobile/style.css" />
	<link rel="shortcut icon" href="<?=baseURL.'/'.PATH_template?>mobile/favicon.png" />
	<script async="" src="//www.google-analytics.com/analytics.js">
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-19662655-20', 'satuharapan.com');
	  ga('send', 'pageview');

	</script>
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
    <!--[if gte IE 6]>
    <style type="text/css">
        #bann  { border: 1px solid #CCC; }
    </style>
    <![endif]-->
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<a class="none" href="https://plus.google.com/114744379740699124576" rel="publisher">Google+</a>
<section id="kampanye">
	<div>
		<img src="<?='/uploads/pics/'.$logo_img?>" alt="<?=$title?>"/>
	</div>
	<div class="caleg">
		<h1><span>Nama</span>: <?=$title?></h1>
		<h2><span>Fraksi</span>: <?=$fraksi?></h2>
		<div>
			<img src="<?='/uploads/pics/'.$foto_img?>" alt="<?=$title?>"/>
		</div>
		<div class="isi">
			<?=$isi_process?>
		</div>
	</div>
</section>
<?php
require "footer.php";
?>