<?php
require "header.php";
?>
<section id="content">
    <section id="ct-top">

		<?php if(count($topik_pilihan)>0){ ?>
			<div class="blueTitle">TOPIK PILIHAN</div>
			<div id="ctop-right-photo">
				<?php $counter = 0;
				foreach($topik_pilihan as $photo){
					$image = explode(",",$photo['image']);
					$classphoto = "float-lt";
					if($counter%2==1){
						$classphoto = "float-rt";
					} ?>
					<div class="kpem-con <?=$classphoto?>">
						<?php if($image[0]!=""){
							resizeFile($image[0],600,400,$image[0]); ?>
							<div class="img-thumb-photo"><a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$photo['value_alias']?>"><img src="<?='/uploads/cache/'.$image[0]?>"/></a></div>
						<?php } ?>
						<div class="titlelatest">
							<h4><a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$photo['value_alias']?>"><?=$photo['title']?></a></h4>
						</div>
				</div>
					<?php if($classphoto =="float-rt"){
						echo '<div class="clear"></div>';
					}
					$counter++;
				} ?>
			</div>

			<div id="kabarterbaru">
				<div class="blueTitle"><?=$titletopic?></div>
				<div class="listlatest">
					<?php foreach($contentnews as $listlatest){
						$image = explode(",",$listlatest['image']); ?>
						<div class="kpem-con">
							<?php $class="titlelatestnophoto";
							if($image[0]!=""){
								resizeFile($image[0],600,400,$image[0]); ?>
								<span class="img-thumb float-lt"><a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$listlatest['value_alias']?>"><img src="<?='/uploads/cache/'.$image[0]?>"/></a></span>
								<?php $class="titlelatest";
							} ?>
							<div class="<?=$class?> float-lt">
								<h1><a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$listlatest['value_alias']?>"><?=$listlatest['title']?></a></h1>
								<span class="preview"><?=$listlatest['preview']?>
								<a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$listlatest['value_alias']?>"><span class="more"></span></a></span>
							</div>
								<div class="clear"></div>
						</div>
					<?php } ?>
				</div>
			</div>

			<div class="bann-mid1">
				<?php echo getBanner($full5,$banner_path); ?>
			</div> 
					
		<?php }	?>		
		        
		<div class="blueTitle">FOTO TERBARU</div>
		<div id="ctop-right-photo">
			<?php $counter = 0;
			foreach($contentPhoto as $photo){
				$image = explode(",",$photo['image']);
				$classphoto = "float-lt";
				if($counter%2==1){
					$classphoto = "float-rt";
				} ?>
			    <div class="kpem-con <?=$classphoto?>">
					<?php
					if($image[0]!=""){
						resizeFile($image[0],600,400,$image[0]);?>
						<div class="img-thumb-photo"><a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$photo['value_alias']?>"><img src="<?='/uploads/cache/'.$image[0]?>"/></a></div>
					<?php }	?>
					<div class="titlelatest">
						<h4><a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$photo['value_alias']?>"><?=$photo['title']?></a></h4>
					</div>
			    </div>
		   		<?php if($classphoto =="float-rt"){
					echo '<div class="clear"></div>';
				}
				$counter++;
		    } ?>
		</div>
		
    </section>     
    	
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

		<?php require "latestnews.php";	?>

		<div class="bann-mid1">
			<?php
			echo getBanner($mid_half2_kiri,$banner_path,"left");
			echo getBanner($mid_half2_kanan,$banner_path,"right");
			?>
			<div class="clear"></div>
		</div>

		<div class="bann-mid1">
			<?php echo getBanner($full3,$banner_path);?>
			<img src="/fileadmin/banners/hardiknaspnbrs.png" />
		</div>
		

		<?php require "opini.php"; ?>

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
		
		<?php
		require "popular.php";
		?>
		
		<div class="bann-mid1">
	           <div>
		     <img src="/uploads/tx_macinabanners/banner-vaksinasi_01.png"/>
		   </div>	
		</div>
		
		<?php
		require "flora.php";
		?>

		<!-- Tempat Banner full5 -->
		<div class="share">
            <div class="none"><a href="<?='https://www.satuharapan.com'.'/'.PATH_template?>/images/WismaSinarKasih0263_512609.jpg" target="_blank"><img src="<?='https://www.satuharapan.com'.'/'.PATH_template?>mobile/images/BannerWismaSinarKasih309x220.jpg" /></a></div>
			<img src="/fileadmin/banners/hardiknaspnbrs.png" />
		</div>

		<!-- Facebook Page Plugin -->
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v8.0" nonce="GkpAw16c"></script>
		
		<div class="fb-page" data-href="https://www.facebook.com/satuharapan" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/satuharapan" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/satuharapan">Satu Harapan</a></blockquote></div>

	</section>
</section>

<?php
require "footer.php";
?>
