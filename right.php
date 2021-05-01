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
	
	
    </div>
    
	<div class="iklan_ataslife_rd bannerRight">
        <img src="/fileadmin/banners/hardiknas.png" />
    </div>

	

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
<div class="iklan_ataslife_rd none">
	<a href="<?='https://www.satuharapan.com'.'/'.PATH_template?>images/WismaSinarKasih0263_512609.jpg" target="_blank">
		<img src="<?='https://www.satuharapan.com'.'/'.PATH_template?>mobile/images/BannerWismaSinarKasih309x220.jpg" />
	</a>
</div>
	
</div>           

