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

<iframe width="100%" height="40px" frameborder="0" scrolling="no"

src="https://karirpad.com/mediapartner/satuharapan/">
</iframe>



<div class="bann-mid1">

<!--<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="960" height="150" id="KC.swf" align="middle">
	<param name="allowScriptAccess" value="sameDomain">
	<param name="movie" value="KC.swf">
	<param name="quality" value="best">
	<param name="bgcolor" value="#ffffff">
	<param name="menu" value="false">
	<param name="devicefont" value="true">
	<embed src="www.satuharapan.com/uploads/KC.swf" quality="best" bgcolor="#ffffff" width="960" height="150" name="KC.swf" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
</object> 
-->



	<?php
	echo getBanner($full3,$banner_path);
	?>
	
	
	
	
	
	
	
	
	
</div>





<?php
$counter = 0;
foreach($listnewsopini as $latestnews)
{
	$class = "latesttype2";
	if($counter>0){$class="latesttype3";}
?>
<div class="<?=$class?>">
	<div class="blueTitle">
		<span class="left"><a href="<?=baseURL?>/<?=$latestnews['menuurl']?>" class="blueTitle_a"><?=strtoupper($latestnews['nama'])?></a></span><span class="otherlatest2link right"><a href="<?=baseURL."/".$latestnews['menuurl']?>"><?=strtoupper($latestnews['nama'])?> lainnya >></a></span>
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
			<span class="img-thumb left"><a title="<?=$list['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><img src="<?=PATH_image_cache."150x100_".$image[0]?>" width="150" height="100" alt="<?=$list['realtitle']?>"/></a></span>
			<?php
			}
			?>
			<div class="titlelatest left">
				 <h4><a title="<?=$list['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a></h4>
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

<div class="bottompart">

<?php
foreach($listinspirasi as $latestnews)
{
?>
	<div class="inspirasi left">
		<div class="judulflora">
			<span class="left"><a href="<?=baseURL?>/<?=$latestnews['menuurl']?>" class="blueTitle_a"><?=strtoupper($latestnews['nama'])?></a></span><span class="otherlatest2link right"><a href="<?=baseURL."/".$latestnews['menuurl']?>"><?=strtoupper($latestnews['nama'])?> lainnya >></a></span>
			<div class="clear"></div>
		</div>
		<?php
		foreach($latestnews['berita'] as $list){
			$image = explode(",",$list['image']);
			resizeFile($image[0],222,148,"222x148_".$image[0]);
		?>
			<div class="listflora">
				<?php
				$class="bagiankirinophoto";
				if($image[0]!=""){?>
				<div class="img-thumb left"><a title="<?=$list['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><img src="<?=PATH_image_cache."222x148_".$image[0]?>" width="222" height="148" alt="<?=$list['realtitle']?>"/></a></div>
				<?php
					$class="bagiankiri";
				}
				?>
				<div class="<?=$class?> left">
					<div class="titleflora">
						 <h6><a title="<?=$list['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a></h6>
					</div>
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

<?php
foreach($listsmashayub as $latestnews)
{
?>
	<div class="smashayub right">
		<div class="judulflora">
			<span class="left"><a href="<?=baseURL?>/<?=$latestnews['menuurl']?>" class="blueTitle_a"><?=strtoupper($latestnews['nama'])?></a></span><span class="otherlatest2link right"><a href="<?=baseURL."/".$latestnews['menuurl']?>"><?=strtoupper($latestnews['nama'])?> lainnya >></a></span>
			<div class="clear"></div>
		</div>
		<?php
		foreach($latestnews['berita'] as $list){
			$image = explode(",",$list['image']);
			resizeFile($image[0],222,148,"222x148_".$image[0]);
		?>
			<div class="listflora">
				<?php
				$class="bagiankirinophoto";
				if($image[0]!=""){?>
				<div class="img-thumb left"><a title="<?=$list['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><img src="<?=PATH_image_cache."222x148_".$image[0]?>" width="222" height="148" alt="<?=$list['realtitle']?>"/></a></div>
				<?php
					$class="bagiankiri";
				}
				?>
				<div class="<?=$class?> left">
					<div class="titleflora">
						 <h6><a title="<?=$list['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a></h6>
					</div>
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
</div>
<div class="clear"></div>
			




