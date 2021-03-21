<?php
require "header.php";
?>
<section id="content">
    <!--- Content Top --->
    <section id="ct-top">
		<section id="ctop-left">
			<div id="kabarterbaru">
				<div class="blueTitle">HASIL PENCARIAN</div>
				<div class="listlatest">
				<?php
					foreach($listArtikel as $listlatest){
						$image = explode(",",$listlatest['image']);
				?>
						<div class="kpem-con">
							<?php
							$class="titlelatestnophoto";
							if($image[0]!=""){
							resizeFile($image[0],600,400,$image[0]);
							?>
							<span class="img-thumb float-lt"><a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$listlatest['url']?>"><img src="<?='/uploads/cache/'.$image[0]?>"/></a></span>
						<?php
								$class="titlelatest";
							}
							?>
							<div class="<?=$class?> float-lt">
								 <h1><a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$listlatest['url']?>"><?=$listlatest['title']?></a></h1>
								<span class="preview"><?=$listlatest['prev']?>
								<a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$listlatest['url']?>"><span class="more"></span></a>
								</span>
							</div>
							<div class="clear"></div>
					   </div>
				   <?php
				   }
				  ?>
				  <div class="pagination">
						<?=$string_pages?>
					</div>
				</div>
			</div>
		</section>
    </section>
	<section id="ct-cent">
		<div class="bann-mid1">
		<?php
		echo getBanner($mid_half1_kiri,$banner_path,"left");
		echo getBanner($mid_half1_kanan,$banner_path,"right");
		?>
		<div class="clear"></div>
		</div>
		<?php
		require "life.php";
		?>
		<div class="bann-mid1">
		<?php
		echo getBanner($mid_half2_kiri,$banner_path,"left");
		echo getBanner($mid_half2_kanan,$banner_path,"right");
		?>
		<div class="clear"></div>
		</div>
		<?php
		require "opini.php";
		?>
		<div class="bann-mid1">
		<?php
		echo getBanner($mid_half3_kiri,$banner_path,"left");
		echo getBanner($mid_half3_kanan,$banner_path,"right");
		?>
		<div class="clear"></div>
		</div>
		<?php
		require "flora.php";
		?>
		<div class="bann-mid1">
		<?php echo getBanner($full5,$banner_path);?>
		</div>
	</section>
</section>
<?php
require "footer.php";
?>
<script type="text/javascript">
$('.preview' ).hide();
</script>