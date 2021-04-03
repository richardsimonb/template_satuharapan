<div id="ctop-right">
	
	<!-- Bagian Atas -->
	<div class="blueTitle"><?=$title_blue?></div>
	<div id="ctop-right-photo">
	    <div class="kpem-con">
    	    <?php
	        if($contentPhoto[0]['image']!=""){
    		    resizeFile($contentPhoto[0]['image'],309,206,"309x206_".$contentPhoto[0]['image']);
	        ?>
    		<span class="img-thumb"><a title="<?=$contentPhoto[0]['realtitle']?>" href="<?='https://www.satuharapan.com'.$link2.$contentPhoto[0]['value_alias']?>"><img src="<?='/uploads/cache/'."309x206_".$contentPhoto[0]['image']?>" width="309" height="206" alt="<?=$contentPhoto[0]['realtitle']?>" /></a></span>
            <?php
	        }
	        ?>
            <div class="titlelatest">
			    <h4><a title="<?=$contentPhoto[0]['realtitle']?>" href="<?='https://www.satuharapan.com'.$link2.$contentPhoto[0]['value_alias']?>"><?=$contentPhoto[0]['title']?></a></h4>
			    <?=$contentPhoto[0]['preview']?>
			    <a title="<?=$contentPhoto[0]['realtitle']?>" href="<?='https://www.satuharapan.com'.$link2.$contentPhoto[0]['value_alias']?>"><span class="more"></span></a>
		    </div>
        </div>
        <div class="line"></div>
	</div>
	<div class="clear"></div>
	
	<!--  ad tags Size: 300x250 ZoneId:1042527
	<script type="text/javascript" src="http://js.adstars.co.id/t/042/527/a1042527.js">
	</script>
	-->
	<div id="ctop-right-newsother">
	    <?php
    	for($m=1;$m<count($contentPhoto)-1;$m++){
			$image = explode(",",$contentPhoto[$m]['image']);
	        resizeFile($image[0],150,100,"150x100_".$image[0]);
	    ?>
		<div class="tbru-nws">
			<?php
			$class="titlenophoto";
			if($image[0]!=""){
			?>
			<span class="img-thumb"><a title="<?=$contentPhoto[$m]['realtitle']?>" href="<?='https://www.satuharapan.com'.$link2.$contentPhoto[$m]['value_alias']?>"><img src="<?='/uploads/cache/'."150x100_".$image[0]?>" width="150" height="100" alt="<?=$contentPhoto[$m]['realtitle']?>"/></a></span>
			<?php
			$class="titlephoto";
			}
			?>
			<div class="<?=$class?>">
			    <a title="<?=$contentPhoto[$m]['realtitle']?>" href="<?='https://www.satuharapan.com'.$link2.$contentPhoto[$m]['value_alias']?>"><?=$contentPhoto[$m]['title']?></a>
			</div>
			<div class="clear"></div>
		</div>
	    <?php
		}
	    ?>
	
	    <?=$link_other?>
	

	
	<!--iklan adplus
	
	<script type="text/javascript">
	var placementId = "5575247";
	var sizeId = "170"; 
	</script>
	<script type="text/javascript" language="javascript" src="http://adr.adplus.co.id/script/adt.js">
	</script>
	
	<noscript>
	<a href="http://adsrv.adplus.co.id/adlink/3.0/1336/5575247/0/170/ADTECH;loc=300" target="_blank">
	<img src="http://adsrv.adplus.co.id/adserv/3.0/1336/5575247/0/170/ADTECH;loc=300" border="0" width="300" height="250">
	</a>
	</noscript> -->
	
	
	
    </div>

    
    <!-- <div class=iklan_ataslife_rd><a href="http://www.satuharapan.com/uploads/tx_macinabanners/AdLarryBrook.jpg" target="_blank"><img src="http://www.satuharapan.com/uploads/tx_macinabanners/LarryBrook.jpg" /></a>
    </div>  -->
              
  <?php
//    require "karikatur.php";
  ?>

<!-- sisipan galeri foto -->  

    <?php 
        //require "galerifoto.php";
    ?>
    <?php // mysqli_close($koneksi); ?>
        <!-- akhir sisipan galeri foto -->

        <!--<div class=iklan_ataslife_rd> -->

        <!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
        </script>
        -->
    <!-- ben -->

    <!--<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-7845316037564383"
     data-ad-slot="7185509555"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

    -->

    <!--</div> -->


    <!--
        <a href="http://www.chichiwo.com" target="_blank">
        <img src="http://www.satuharapan.com/uploads/tx_macinabanners/chichi_wed.png"  width="309" height="464"/>
        </a>
    -->

    <br>

    <?php 
    if($pages_require !="read-detail.php")
    {
    ?>

        <div class="blueTitle"><?=$title_blue_smash?></div>
	    <div id="ctop-right-photo">
	        <div class="kpem-con">
	        <?php
	        if($contentsmash[0]['image']!=""){
    			resizeFile($contentsmash[0]['image'],309,206,"309x206_".$contentsmash[0]['image']);
	        ?>
			    <span class="img-thumb"><a title="<?=$contentsmash[0]['realtitle']?>" href="<?='https://www.satuharapan.com'.$link2smash.$contentsmash[0]['value_alias']?>"><img src="<?='/uploads/cache/'."309x206_".$contentsmash[0]['image']?>" width="309" height="206" alt="<?=$contentsmash[0]['realtitle']?>" /></a></span>
	        <?php
		    }
		    ?>
                <div class="titlelatest">
    			    <h4><a title="<?=$contentsmash[0]['realtitle']?>" href="<?='https://www.satuharapan.com'.$link2smash.$contentsmash[0]['value_alias']?>"><?=$contentsmash[0]['title']?></a></h4>
			        <?=$contentsmash[0]['preview']?>
			        <a title="<?=$contentsmash[0]['realtitle']?>" href="<?='https://www.satuharapan.com'.$link2.$contentsmash[0]['value_alias']?>"><span class="more"></span></a>
		        </div>
    	    </div>
	        <div class="line"></div>
	    </div>
	    <div class="clear"></div>

	    <div id="ctop-right-newsother">
	    <?php
		    for($m=1;$m<count($contentsmash)-1;$m++){
			    $image = explode(",",$contentsmash[$m]['image']);
			    resizeFile($image[0],150,100,"150x100_".$image[0]);
	    ?>
    		<div class="tbru-nws">
			<?php
			$class="titlenophoto";
			if($image[0]!=""){?>
			    <span class="img-thumb"><a title="<?=$contentsmash[$m]['realtitle']?>" href="<?='https://www.satuharapan.com'.$link2smash.$contentsmash[$m]['value_alias']?>"><img src="<?='/uploads/cache/'."150x100_".$image[0]?>" width="150" height="100" alt="<?=$contentsmash[$m]['realtitle']?>"/></a></span>
			<?php
			$class="titlephoto";
			}
			?>
			    <div class="<?=$class?>">
    				<a title="<?=$contentsmash[$m]['realtitle']?>" href="<?='https://www.satuharapan.com'.$link2smash.$contentsmash[$m]['value_alias']?>"><?=$contentsmash[$m]['title']?></a>
			    </div>
			    <div class="clear"></div>
		    </div>
		    
	    <?php
    	}
    	?>
	    <?=$link_other_smash?>
        </div>
<?php
    }
    ?>

  <?php
//  require "liferight.php";
  ?>
	
  <!-- <div class=iklan_ataslife_rd>
        <a href="#" target="_blank">
            <img src="http://www.satuharapan.com/fileadmin/user_upload/banners/banner_zuri_oktober_1.jpg" width="309" />
        </a>
    </div> -->
    	
    <div class="isidaftarbaru">
        <!--<a href="http://danautoba.org/gcdt-2016/acara-kegiatan/" target="_blank">
        <img src="http://www.satuharapan.com/uploads/tx_macinabanners/Iklan_GCDT_II_2016_sm.jpg"  width="309">
        </a>-->
    </div>
    
</div>           

<div class=iklan_ataslife_rd>
	<a href="<?='https://www.satuharapan.com'.'/'.PATH_template?>images/WismaSinarKasih0263_512609.jpg" target="_blank">
		<img src="<?='https://www.satuharapan.com'.'/'.PATH_template?>mobile/images/BannerWismaSinarKasih309x220.jpg" />
	</a>
</div>