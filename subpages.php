<?php
if($namepage=="category.php"){
?>
<!-- Header Start -->

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
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta name="author" content="PT. Satu Harapan Media | satuharapan.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="googlebot-news" content="index, follow">
	<meta name="googlebot" content="index, follow">
	<meta name="robots" content="index, follow">
	<meta name="language" content="id">
	<meta name="geo.country" content="id">
	<meta http-equiv="content-language" content="In-Id">
	<meta name="geo.placename" content="Indonesia">
	<meta name="google-site-verification" content="GN62cXC9ihahXR5tf_A3wopqATomzuHEJAjbvKKP0LE" />

	<meta property="og:title" content="<?=$title?> - Satu Harapan" />
	<meta property="og:description" content="<?=$desc?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?='/uploads/pics/'.$og_img?>" />
	<meta property="og:site_name" content="satuharapan.com" />
	<meta property="og:url" content="https://<?=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>" />

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
		<link rel="canonical" href="https://www.satuharapan.com"/>
	<?php }
	?>

	<meta name="rating" content="general" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@1harapan" />
	<meta name="twitter:title" content="<?=$title?>" />
    <meta name="twitter:description" content="<?=$desc?>" />
	<meta name="twitter:image" content="<?='/uploads/pics/'.$og_img?>" />
    <meta name="twitter:url" content="https://<?=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>" />
	
	<title><?=$title?> - Satu Harapan</title>
	
	<!--<base href="<?='https://www.satuharapan.com'?>">-->
	
	<link rel="stylesheet" href="<?='https://www.satuharapan.com'.'/'.PATH_template?>css/reset.css" />
	<!--<link rel="stylesheet" href="<?='https://www.satuharapan.com'.'/'.PATH_template?>css/text.css" />-->

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

	<link rel="stylesheet" href="<?='https://www.satuharapan.com'.'/'.PATH_template?>css/style2.css?version=1.3" />
	<link rel="shortcut icon" href="<?='https://www.satuharapan.com'.'/'.PATH_template?>images/favicon.ico" />
	
	<script type="text/javascript" src="<?='https://www.satuharapan.com'.'/'.PATH_template?>js/jquery-1.9.1.min.js?v=1"></script>
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
	<script type="text/javascript" src="<?='https://www.satuharapan.com'.'/'.PATH_template?>js/date_time.js"></script>
	<script type="text/javascript" src="<?='https://www.satuharapan.com'.'/'.PATH_template?>js/date.js"></script>
	-->
	
	<script type="text/javascript" src="<?='https://www.satuharapan.com'.'/'.PATH_template?>js/jquery.setup.js?v=1.1"></script>
	<script type="text/javascript" src="<?='https://www.satuharapan.com'.'/'.PATH_template?>js/jquery.carouFredSel-6.1.0-packed.js?v=1"></script>
    
    <script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
    <script type="text/javascript">
        twttr.conversion.trackPid('l5fxo');
    </script>
    <noscript>
    <img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l5fxo&p_id=Twitter" />
    <img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l5fxo&p_id=Twitter" /></noscript>

    <!--Galeri foto
        <link rel="stylesheet" href="<?='https://www.satuharapan.com'.'/'.PATH_template?>css/bootstrap.min.css" />
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
	<div id="loading-image">
	    <span>Loading...</span>
	</div>
	<div id="header">
	    <div id="hd-bann">
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
			<div id="logo-left"><a href="<?='https://www.satuharapan.com'?>"><img src="<?='https://www.satuharapan.com'.'/'.PATH_template?>images/logo2018.png" alt="Satuharapan.com" width="460" height="106"/></a></div>
			<div id="logo-right">
			    <div id="bann-top-life">
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
						<li class="first"><a href="<?='https://www.satuharapan.com'?>"><img src="<?='https://www.satuharapan.com'.'/'.PATH_template?>images/home.png" width="21" height="17"/></a></li>
						<?=$topmenu?>
					</ul>
				</div>
				<div id="hbar-right">
				    <div id="src">
						<form method="get" action="<?='https://www.satuharapan.com'?>/search">
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
      


<!-- Header End -->

	<div id="content">
		<!--- Content Top --->
		<div id="ct-top" class="homepage">
			<div id="ctop-left">
				<?php
				require $namepage;
				?>
			</div>
			<?php
			require "right.php";
			?>
			<div class="clear line"></div>
		</div>
		<div id="ct-cent">
			<?php
			require "latestnews.php";
			require "opini.php";
			require "popular.php";
			?>
			<div id="footermenu">
				<ul>
				<?=$bottommenu?>
				</ul>
			</div>
		</div>
	</div>

<!-- Footer Start -->

	
<div id="footer">
    <div class="information sectionfooter">
    	<ul>
			<?php echo $bottommenu2;?>
		</ul>
	</div>
	<div class="socmed sectionfooter">
		<div class="socmedtitle">Gabung bersama kami</div>
			<?php
    		echo '<div>'.$fb.'</div>';
			echo '<div>'.$tw.'</div>';
			echo '<div>'.$gplus.'</div>';
			?>
		</div>
	<div class="copyright sectionfooter">
		<div>
		    <img src="<?='https://www.satuharapan.com'."/".PATH_template?>/images/logo2018_bawah.png" alt="logo bawah" width="169" height="21"/>
		</div>
			<span>&copy; Copyright 2012-2021
		    	<br />
		    	PT Satu Harapan Media
			    <br />
    			SatuHarapan.Com
			    <br />
			    All Rights Reserved.
			</span>
	</div>
	<div class="logo_bawah sectionfooter">
		<div class="center"><a href="<?='https://www.satuharapan.com'?>/switch/mobile">
		    <img src="<?='https://www.satuharapan.com'?>/uploads/media/mobile_icon.png" width="80px" height="80px">MOBILE VERSION</a>  
		</div>
        <div class="center">
            <a href="#top">BACK to TOP &nbsp; <img src="<?='https://www.satuharapan.com'.'/'.PATH_template?>images/totop.png" width="21" height="17"/></a>
        </div>
	</div>
		<div class="clear"></div>
</div>
<div id='toTop'>
    <a href="<?='https://www.satuharapan.com'?>"><img alt="Back to Home" src="<?='https://www.satuharapan.com'.'/'.PATH_template?>images/house_sm.png" width="39" /></a>
</div>
	
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
	
</body>
</html>      


<!-- Footer End -->



<?php
} else {
?>

	<?php
	require "header.php";
	?>

	<div id="content">
		<!--- Content Top --->
		<div id="ct-top" class="homepage">
			<div id="ctop-left">
				<?php
				require $namepage;
				?>
			</div>
			<?php
			require "right.php";
			?>
			<div class="clear line"></div>
		</div>
		<div id="ct-cent">
			<?php
			require "latestnews.php";
			require "opini.php";
			require "popular.php";
			?>
			<div id="footermenu">
				<ul>
				<?=$bottommenu?>
				</ul>
			</div>
		</div>
	</div>

	<?php
	require "footer.php";
	?>
<?php
}
?>

