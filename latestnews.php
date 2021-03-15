<!--<div class="bann-mid1"> edit isi banner UKI2017 by H-->
<div class="bann-mid1" align="center">
    <!--
    <div class="img left">
		<title>pop up iklan</title>
		<script language="JavaScript" type="text/javascript">
			var newwindow = ''
			function popitup(url) {
			if (newwindow.location && !newwindow.closed) {
				newwindow.location.href = url;
				newwindow.focus(); }
			else {
			    newwindow=window.open(url,'htmlname','width=1020,height=330,resizable=1');}
    		}

			function tidy() {
				if (newwindow.location && !newwindow.closed) {
				    newwindow.close(); 
				}
			}
		</script>
		<a href="javascript:popitup(' http://www.satuharapan.com/uploads/tx_macinabanners/yamuger-pop-up.jpg ')">
			<img align="right" alt="Yamuger" border="0" height="150" src="http://www.satuharapan.com/uploads/tx_macinabanners/yamuger-2015.jpg" vspace="5" width="475" />
		</a>
    </div>
    <div class="img right">
		<title>pop up iklan2</title>
			<script language="JavaScript" type="text/javascript">
				var newwindow = ''
				function popitup(url) {
				if (newwindow.location && !newwindow.closed) {
				    newwindow.location.href = url;
				    newwindow.focus(); }
				else {
				    newwindow=window.open(url,'htmlname','width=1020,height=500,resizable=1');}
				}
				
				function tidy() {
			    	if (newwindow.location && !newwindow.closed) {
				        newwindow.close(); }
				}
				
			</script>
			<a href="javascript:popitup(' http://www.satuharapan.com/life/img/pop-pacet.jpg ')">
				<img align="right" alt="Pacet" border="0" height="150" src="http://www.satuharapan.com/uploads/tx_macinabanners/pacet.jpg" vspace="5" width="475" />
			</a>
    </div>

    -->
    <!-- <a href="http://www1.uki.ac.id/concrete5411/index.php/mahasiswa-baru/" target="_blank"><img src="http://www.satuharapan.com/uploads/tx_macinabanners/960x150satuharapan.jpg"></a> 
    <a href="http://www1.uki.ac.id/concrete5411/index.php/mahasiswa-baru/" target="_blank"><img src="http://www.satuharapan.com/uploads/tx_macinabanners/UKI_PMB_2017.jpg" alt="Banner PMB UKI 2017"></a> 
    <a href="http://www1.uki.ac.id/concrete5411/index.php/mahasiswa-baru/" target="_blank"><img src="http://www.satuharapan.com/uploads/tx_macinabanners/BannerJalurPrestasiUKI2017.jpg" alt="Banner PMB UKI 2017"></a> 
    -->
    <!-- 
    <a href="http://www1.uki.ac.id/concrete5411/index.php/mahasiswa-baru/" target="_blank"><img src="http://www.satuharapan.com/uploads/tx_macinabanners/UKI960x160pxJul-Ag17.jpg" alt="Banner PMB UKI 2017"></a>
    -->
    <?php
    echo getBanner($mid_half1_kiri,$banner_path,"left");
    echo getBanner($mid_half1_kanan,$banner_path,"right");
    ?>
    <div class="clear"></div>
</div>

<div class="bann-mid1" align="center">
    <!--  ad tags Size: 728x90 ZoneId:1042528 pindah kebawah-->
    <!--<img src="http://www.satuharapan.com/uploads/fespas-bpk.gif">-->
    <?php
    echo getBanner($half_1b,$banner_path,"left");
    echo getBanner($half_2b,$banner_path,"right");
    ?>
    <div class="clear"></div>
</div>

<div class="bann-mid1">
    <!--<a href="http://bpkpenaburjakarta.or.id" target="_blank">
    <img src="http://www.satuharapan.com/uploads/hutbpk.jpg"> 
    <img src="http://www.satuharapan.com/uploads/yamuger2015.jpg"> -->
    <?php
    echo getBanner($full1,$banner_path,"bannerMid");
    ?>
    <div class="clear"></div>
</div>

<!--<div class="bann-mid1">
<img src="http://www.satuharapan.com/uploads/yamuger2015.jpg"> 
<div class="clear"></div>
</div>-->

<div class="leftcent">
<?php
	$countercat = 0;
	foreach($listnews as $latestnews)
	{
		$class = "left";
		if($countercat%2==1){
			$class = "right";
		}
		if($countercat>0&&$countercat%2==0)
		{
			echo '<div class="clear"></div>';
		}
		if($countercat==6){
		?>
			<div class="bann-mid1">
			<?php
			echo getBanner($half_3a,$banner_path,"left");
			echo getBanner($half_4a,$banner_path,"right");
			?>
			<div class="clear"></div>
			</div>
			<div class="bann-mid1">
			<?php
			echo getBanner($half_3b,$banner_path,"left");
			echo getBanner($half_4b,$banner_path,"right");
			?>
			<div class="clear"></div>
			</div>
			<div class="bann-mid1" align="center">
				<?php echo getBanner($full2,$banner_path,"bannerMid"); ?>
                             
                             <!--  ad tags Size: 728x90 ZoneId:1042528-->
                             <!--  pindah ad tgl 31 Okt 2016 by H -->
                             <!-- <script type="text/javascript" src="http://js.adstars.co.id/t/042/528/a1042528.js"></script> -->
			</div>
			
						<!--iklan brosurnew
			<div class="bann-mid1">
			<img src="http://www.satuharapan.com/uploads/brosurnew.png"> 
			<div class="clear"></div>
			</div>-->
			
			<!--iklan adplus-->
			
			<!--<div class="adplus_panjang">			
				<script type="text/javascript">
				var placementId = "5575250";
				var sizeId = "225"; 
				</script><script type="text/javascript" language="javascript" src="http://adr.adplus.co.id/script/adt.js"></script>
				<noscript>
				<a href="http://adsrv.adplus.co.id/adlink/3.0/1336/5575250/0/225/ADTECH;loc=300" target="_blank">
				<img src="http://adsrv.adplus.co.id/adserv/3.0/1336/5575250/0/225/ADTECH;loc=300" border="0" width="728" height="90">
				</a>
				</noscript>
			</div>-->
			
		<?php
		}
        ?>
		<div class="latest-news <?=$class?>">
			<div class="blueTitle"><a href="<?=baseURL?>/<?=$latestnews['menuurl']?>" class="blueTitle_a"><?=strtoupper($latestnews['nama'])?></a></div>
			<div class="listlatest">
				<?php
				$counter = 0;
				$string = "";
				foreach($latestnews['berita'] as $listnewsnya){
					if($counter==0){
						$image = explode(",",$listnewsnya['image']);
						resizeFile($image[0],225,150,"225x150_".$image[0]);
					?>
						<div class="kpem-con">
							<?php
							$class="titleonly";
							if($image[0]!=""){?>
							<span class="img-thumb"><a title="<?=$listnewsnya['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$listnewsnya['value_alias']?>"><img src="<?=PATH_image_cache."225x150_".$image[0]?>" width="225" height="150" alt="<?=$listnewsnya['realtitle']?>"/></a></span>
							<?php
							$class="titlelatest";
							}
							?>
							<div class="<?=$class?>">
								 <h3><a title="<?=$listnewsnya['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$listnewsnya['value_alias']?>"><?=$listnewsnya['title']?></a></h3>
							</div>
							<div class="clear"></div>
					   </div>
					<?php
					}
					else
					{
						$string .= '<li><a title="'.$listnewsnya['realtitle'].'" href="'.baseURL.'/read-detail/read/'.$listnewsnya['value_alias'].'">'.$listnewsnya['title'].'</a></li>';
					}
					$counter++;
				}
				echo "<ul>".$string."</ul>";
				?>
			</div>
			<a href="<?=baseURL."/".$latestnews['menuurl']?>" class="otherlatestlink">Kabar <?=ucwords(strtolower($latestnews['nama']))?> lainnya >></a>
		</div>
    <?php
		$countercat++;
	}
    ?>
	<div class="clear"></div>
</div>