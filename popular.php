<div class="bann-mid1" align="center">

</div>
<div class="bottompart">
	<div class="bann-mid1">
		<?php
		echo getBanner($mid_half3_kiri,$banner_path,"left");
		echo getBanner($mid_half3_kanan,$banner_path,"right");
		?>

		<div class="clear"></div>
	</div>
	<div class="bann-mid1">
		<?php
		echo getBanner($half_7b,$banner_path,"left");
		echo getBanner($half_8b,$banner_path,"right");
		?>
		<div class="clear"></div>
	</div>
	<div class="bann-mid1">
		<?php
		echo getBanner($full4,$banner_path,"bannerMid");
		?>
	</div>
	<div class="popular left">
		<div class="judulpopuler">TERPOPULER</div>
			<?php
		$counter = 0;
		foreach($populer as $list){
			$image = explode(",",$list['image']);
			resizeFile($image[0],202,135,"202x135_".$image[0]);
			if($counter%2==0){
				$class = "left";
			}
			else
			{
				$class = "right";
			}
		?>
			<div class="listpopuler <?=$class?>">
				<?php
				$class="titlepopulernophoto";
				if($image[0]!=""){?>
				<span class="img-thumb"><a title="<?=$list['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><img src="<?='/uploads/cache/'."202x135_".$image[0]?>" width="202" height="135" alt="<?=$list['realtitle']?>"/></a></span>
				<?php
					$class="titlepopuler";
				}
				?>
				<div class="<?=$class?>">
					 <h5><a title="<?=$list['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a></h5>
				</div>
				<div class="clear"></div>
			</div>
		<?php
			$counter++;
		}
		?>
			<div class="clear"></div>
	</div>
<?php
foreach($flora as $latestnews)
{
?>
	<div class="flora right">
		<div class="judulflora">
			<span class="left"><a href="<?='https://www.satuharapan.com'?>/<?=$latestnews['menuurl']?>" class="blueTitle_a"><?=strtoupper($latestnews['nama'])?></a></span><span class="otherlatest2link right"><a href="<?='https://www.satuharapan.com'."/".$latestnews['menuurl']?>"><?=strtoupper($latestnews['nama'])?> lainnya >></a></span>
			<div class="clear"></div>
		</div>
		<?php
		foreach($latestnews['berita'] as $list){
			$image = explode(",",$list['image']);
			resizeFile($image[0],226,150,"226x150_".$image[0]);
		?>
			<div class="listflora">
				<?php
				$class="bagiankirinophoto";
				if($image[0]!=""){?>
				<div class="img-thumb left"><a title="<?=$list['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><img src="<?='/uploads/cache/'."226x150_".$image[0]?>" width="226" height="150" alt="<?=$list['realtitle']?>"/></a></div>
				<?php
					$class="bagiankiri";
				}
				?>
				<div class="<?=$class?> left">
					<div class="titleflora">
						 <h6><a title="<?=$list['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a></h6>
					</div>
					<span class="preview"><?=$list['preview']?>
					 <a title="<?=$list['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><span class="more"></span></a>
					 </span>
				</div>
				<div class="clear"></div>
			</div>
		<?php
		}
		?>
	</div>
<?php
}
?>
	<div class="clear"></div>
</div>
<div class="bann-mid1">
	<?php
	echo getBanner($half_9a,$banner_path,"left");
	echo getBanner($half_10b,$banner_path,"right");
	?>
	<div class="clear"></div>
</div>
<div class="bann-mid1">
	<?php
	echo getBanner($half_9b,$banner_path,"left");
	echo getBanner($half_10b,$banner_path,"right");
	?>
	<div class="clear"></div>
</div>
<div class="bann-mid1">
	<?php echo getBanner($full5,$banner_path,"bannerMid"); ?>
</div> 

<div class="clear"></div>