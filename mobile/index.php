<?php
require "header.php";
?>
<section id="content">
    <section id="ct-top">
        
	<?php
		if(count($topik_pilihan)>0){?>
			
		<div class="blueTitle">TOPIK PILIHAN</div>
		<div id="ctop-right-photo">
			<?php
			$counter = 0;
			foreach($topik_pilihan as $photo){
				$image = explode(",",$photo['image']);
				$classphoto = "float-lt";
				if($counter%2==1){
					$classphoto = "float-rt";
				}
			?>
			  <div class="kpem-con <?=$classphoto?>">
				<?php
				if($image[0]!=""){
					resizeFile($image[0],600,400,$image[0]);
				?>
					<div class="img-thumb-photo"><a href="<?=baseURL?>/read-detail/read/<?=$photo['value_alias']?>"><img src="<?=PATH_image_cache.$image[0]?>"/></a></div>
				<?php
				}
				?>
					<div class="titlelatest">
						 <h4><a href="<?=baseURL?>/read-detail/read/<?=$photo['value_alias']?>"><?=$photo['title']?></a></h4>
					</div>
			   </div>
		   <?php
				if($classphoto =="float-rt"){
					echo '<div class="clear"></div>';
				}
				$counter++;
		   }
		   ?>
		</div>

        <div id="kabarterbaru">
			<div class="blueTitle"><?=$titletopic?></div>
			<div class="listlatest">
			<?php
			foreach($contentnews as $listlatest){
				$image = explode(",",$listlatest['image']);
			?>
					<div class="kpem-con">
					<?php
					$class="titlelatestnophoto";
					if($image[0]!=""){
						resizeFile($image[0],600,400,$image[0]);
					?>
						<span class="img-thumb float-lt"><a href="<?=baseURL?>/read-detail/read/<?=$listlatest['value_alias']?>"><img src="<?=PATH_image_cache.$image[0]?>"/></a></span>
					<?php
						$class="titlelatest";
					}
					?>
						<div class="<?=$class?> float-lt">
							 <h1><a href="<?=baseURL?>/read-detail/read/<?=$listlatest['value_alias']?>"><?=$listlatest['title']?></a></h1>
							<span class="preview"><?=$listlatest['preview']?>
							<a href="<?=baseURL?>/read-detail/read/<?=$listlatest['value_alias']?>"><span class="more"></span></a></span>
						</div>
						<div class="clear"></div>
				   </div>
			   <?php
			   }
			  ?>
			</div>
		</div>

		<div class="bann-mid1">
			<?php echo getBanner($full5,$banner_path); ?>
		</div> 
        
			
			
			
			
			<!-- <div id="headline">
				<div class="blueTitle">TOPIK PILIHAN</div>
				<div id="headlinecontainer"> 
					<?php
//					foreach($topik_pilihan as $list){
//						$image = explode(",",$list['image']);
					?>
						<div class="listheadline">
						<?php
				//		$class="titlelatestnophoto";
				//		if($image[0]!=""){
				//			resizeFile($image[0],600,400,$image[0]);
						?>
							<div class="imghead float-lt"><a href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><img src="<?=PATH_image_cache.$image[0]?>"></a></div>
						<?php
			//				$class="titlelatest";
			//			}
						?>
							<div class="<?=$class?> float-lt">
								 <h1><a href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a></h1>
								<span class="preview"><?=$list['preview']?>
								<a href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><span class="more"></span></a>
								</span>
							</div>
							<div class="clear"></div>
						</div>
					<?php
			//		}
					?>
				</div>
			</div> -->
			
		<?php
		}
		?>
		
		
        
		<div class="blueTitle">FOTO TERBARU</div>
		<div id="ctop-right-photo">
			<?php
			$counter = 0;
			foreach($contentPhoto as $photo){
				$image = explode(",",$photo['image']);
				$classphoto = "float-lt";
				if($counter%2==1){
					$classphoto = "float-rt";
				}
			?>
			  <div class="kpem-con <?=$classphoto?>">
				<?php
				if($image[0]!=""){
					resizeFile($image[0],600,400,$image[0]);
				?>
					<div class="img-thumb-photo"><a href="<?=baseURL?>/read-detail/read/<?=$photo['value_alias']?>"><img src="<?=PATH_image_cache.$image[0]?>"/></a></div>
				<?php
				}
				?>
					<div class="titlelatest">
						 <h4><a href="<?=baseURL?>/read-detail/read/<?=$photo['value_alias']?>"><?=$photo['title']?></a></h4>
					</div>
			   </div>
		   <?php
				if($classphoto =="float-rt"){
					echo '<div class="clear"></div>';
				}
				$counter++;
		   }
		   ?>
		</div>
		
    </section>
    
    
    
    
    
    
	<div class="bann-mid1"> 
		<!--<a href="http://www.chichiwo.com" target="_blank">

		<img src="http://www.satuharapan.com/uploads/tx_macinabanners/chichi_wed2.jpg"> 

		</a>-->
	
	
	</div>
	<div class="bann-mid1">
		<?php
		echo getBanner($mid_half1_kiri,$banner_path,"left");
		echo getBanner($mid_half1_kanan,$banner_path,"right");
		?>
		<div class="clear"></div>
	</div>
	<div class="bann-mid1"> 
		<?php 
		//memunculkan banner tengah di mobile, full2 ke full1, by : ben
		echo getBanner($full1,$banner_path); ?>
	</div>
	<section id="ct-cent">
		<?php
		require "latestnews.php";
		?>
		<div class="bann-mid1">

<!-- ad banner UKI 31 Okt 2016 by H -->
<!-- <a href="http://www1.uki.ac.id/concrete5411/index.php/mahasiswa-baru/" target="_blank"><img src="http://www.satuharapan.com/uploads/tx_macinabanners/960x150satuharapan.jpg" width="100%" height="100%"></a> -->
<!--<a href="http://www1.uki.ac.id/concrete5411/index.php/mahasiswa-baru/" target="_blank"><img src="http://www.satuharapan.com/uploads/tx_macinabanners/UKI_PMB_2017.jpg" alt="Banner PMB UKI 2017" width="100%" height="100%"></a>
<a href="http://www1.uki.ac.id/concrete5411/index.php/mahasiswa-baru/" target="_blank"><img src="http://www.satuharapan.com/uploads/tx_macinabanners/BannerJalurPrestasiUKI2017.jpg" alt="Banner PMB UKI 2017" width="100%" height="100%"></a>-->
<!--
<a href="http://www1.uki.ac.id/concrete5411/index.php/mahasiswa-baru/" target="_blank"><img src="http://www.satuharapan.com/uploads/tx_macinabanners/UKI960x160pxJul-Ag17.jpg" alt="Banner PMB UKI 2017"width="100%" height="100%"></a>
-->
		<?php
		echo getBanner($mid_half2_kiri,$banner_path,"left");
		echo getBanner($mid_half2_kanan,$banner_path,"right");
		?>
		<div class="clear"></div>
		</div>
		<div class="bann-mid1">
		<?php echo getBanner($full3,$banner_path);?>
		</div>
		<?php
		//require "life.php";
		require "opini.php";
		?>
		<div class="bann-mid1">
		<?php
		echo getBanner($mid_half3_kiri,$banner_path,"left");
		echo getBanner($mid_half3_kanan,$banner_path,"right");
		?>
		<div class="clear"></div>
		</div>
		<div class="bann-mid1">
		<?php echo getBanner($full4,$banner_path);?>
		</div>
		<!--<div class="bann-mid1">
		    <a href="http://www.satuharapan.com/uploads/tx_macinabanners/AdLarryBrook.jpg" target="_blank"><img src="http://www.satuharapan.com/uploads/tx_macinabanners/LarryBrook.jpg"width="100%" height="100%" /></a>
        </div>-->
		<?php
		require "popular.php";
		require "flora.php";
		?>

		<!-- Tempat Banner full5 -->
		<div class="share">
            		<div style="display:none;"><a href="<?=baseURL.'/'.PATH_template?>/images/WismaSinarKasih0263_512609.jpg" target="_blank"><img src="<?=baseURL.'/'.PATH_template?>mobile/images/BannerWismaSinarKasih309x220.jpg" /></a></div>
			<a href="https://bit.ly/penaburkidventure">
	   			<img src="/fileadmin/banners/kidventurebpkpenabur.jpg"/>
			</a>
        	</div>
		

		<div class="fb-page" 
          data-href="https://www.facebook.com/satuharapan"
          data-hide-cover="false"
          data-show-facepile="false" 
          data-show-posts="false"></div>
	</section>
</section>

<?php
require "footer.php";
?>
<script type="text/javascript">
document.getElementsByClassName('preview' ).style.display="none";
</script>
