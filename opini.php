<div class="bann-mid1">
	<?php
	echo getBanner($mid_half2_kiri,$banner_path,"left");
	echo getBanner($mid_half2_kanan,$banner_path,"right");
	?>
	<div class="clear"></div>
</div>
<div class="bann-mid1">
	<?php
	echo getBanner($half_5b,$banner_path,"left");
	echo getBanner($half_6b,$banner_path,"right");
	?>
	<div class="clear"></div>
</div>

<div class="bann-mid1">
	<?php
	echo getBanner($full3,$banner_path,"bannerMid");
	?>
</div>

<!-- Konten Berita Opini, Analisis, dan Editorial -->
<?php
$counter = 0;
foreach($listnewsopini as $latestnews)
{
	$class = "latesttype2";
	if($counter>0){$class="latesttype3";}
?>
    <div class="<?=$class?>">
    	<div class="blueTitle">
		    <span class="left"><a href="<?='https://www.satuharapan.com'?>/<?=$latestnews['menuurl']?>" class="blueTitle_a"><?=strtoupper($latestnews['nama'])?></a></span><span class="otherlatest2link right"><a href="<?='https://www.satuharapan.com'."/".$latestnews['menuurl']?>"><?=strtoupper($latestnews['nama'])?> lainnya >></a></span>
		    <div class="clear"></div>
	    </div>
		<div class="latesttype2case">
	    	<?php
			foreach($latestnews['berita'] as $list){
    			$image = explode(",",$list['image']);
	    		resizeFile($image[0],150,100,"150x100_".$image[0]);
	    	?>
	    		<div class="listlatesttype2 left">
				<?php
				if($image[0]!=""){?>
		    		<span class="img-thumb left"><a title="<?=$list['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><img src="<?='/uploads/cache/'."150x100_".$image[0]?>" width="150" height="100" alt="<?=$list['realtitle']?>"/></a></span>
    			<?php
				}
				?>
		    	<div class="titlelatest left">
			    	<h4><a title="<?=$list['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a></h4>
		    	</div>
		    	<div class="clear"></div>
	    		</div>
			<?php
			}
			?>
	    	<div class="clear"></div>
		</div>
		<div class="clear"></div>
    </div>
<?php
	$counter++;
}?>

<div class="clear"></div>

<!-- Konten Parenting -->
<?php
$counter = 0;
foreach($listnewsparenting as $latestnews)
{
	$class = "latesttype3";
?>
    <div class="<?=$class?>">
    	<div class="blueTitle">
		    <span class="left"><a href="<?='https://www.satuharapan.com'?>/<?=$latestnews['menuurl']?>" class="blueTitle_a"><?=strtoupper($latestnews['nama'])?></a></span><span class="otherlatest2link right"><a href="<?='https://www.satuharapan.com'."/".$latestnews['menuurl']?>"><?=strtoupper($latestnews['nama'])?> lainnya >></a></span>
		    <div class="clear"></div>
	    </div>
		<div class="latesttype2case">
	    	<?php
			foreach($latestnews['berita'] as $list){
    			$image = explode(",",$list['image']);
	    		resizeFile($image[0],150,100,"150x100_".$image[0]);
	    	?>
	    		<div class="listlatesttype2 left">
				<?php
				if($image[0]!=""){?>
		    		<span class="img-thumb left"><a title="<?=$list['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><img src="<?='/uploads/cache/'."150x100_".$image[0]?>" width="150" height="100" alt="<?=$list['realtitle']?>"/></a></span>
    			<?php
				}
				?>
		    	<div class="titlelatest left">
			    	<h4><a title="<?=$list['realtitle']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a></h4>
		    	</div>
		    	<div class="clear"></div>
	    		</div>
			<?php
			}
			?>
	    	<div class="clear"></div>
		</div>
		<div class="clear"></div>
    </div>
<?php
	$counter++;
}?>

