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
		    <img src="<?=baseURL."/".PATH_template?>/images/logo2018_bawah.png" alt="logo bawah" width="169" height="21"/>
		</div>
			<span>&copy; Copyright 2012-2020
		    	<br />
		    	PT Satu Harapan Media
			    <br />
    			SatuHarapan.Com
			    <br />
			    All Rights Reserved.
			</span>
	</div>
	<div class="logo_bawah sectionfooter">
		<div class="center"><a href="<?=baseURL?>/switch/mobile">
		    <img src="<?=baseURL?>/uploads/media/mobile_icon.png" width="80px" height="80px">MOBILE VERSION</a>  
		</div>
        <div class="center">
            <a href="#top">BACK to TOP &nbsp; <img src="<?=baseURL.'/'.PATH_template?>images/totop.png" width="21" height="17"/></a>
        </div>
	</div>
		<div class="clear"></div>
</div>
<div id='toTop'>
    <a href="<?=baseURL?>"><img alt="Back to Home" src="<?=baseURL.'/'.PATH_template?>images/house_sm.png" width="39" /></a>
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
