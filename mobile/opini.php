<?php
$countercat = 0;
foreach($listopini as $latestnews)
{
	$classmargin = "";
	if($countercat!=0){
		$classmargin = "marginT10";
	}
?>
<div class="latesttype2 <?=$classmargin?>">
	<div class="blueTitleSmall">
		<span><a href="<?='https://www.satuharapan.com'?>/<?=$latestnews['menuurl']?>" class="blueTitle_a"><?=strtoupper($latestnews['nama'])?></a></span>
                
	</div>
	<div class="latesttype2case">
	<?php
	foreach($latestnews['berita'] as $list){
		$image = explode(",",$list['image']);
	?>
		<div class="listlatesttype2">
			<span class="img-thumb float-lt"><a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><img src="<?='/uploads/pics/'.$image[0]?>"/></a></span>
			<div class="titlelatest float-rt">
				 <h4><a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a></h4>
				 
			</div>
			<div class="clear"></div>
		</div>
	<?php
	}
	?>
		<div class="clear"></div>
	</div>
     <span class="otherlatestlink"><a href="<?='https://www.satuharapan.com'."/".$latestnews['menuurl']?>"><?=$latestnews['nama']?> lainnya >></a></span>
	<div class="clear"></div>
</div>
<?php
	$countercat++;
}
?>

<?php
$countercat = 0;
foreach($listparenting as $latestnews)
{
	$classmargin = "";
	if($countercat!=0){
		$classmargin = "marginT10";
	}
?>
<div class="latesttype2 <?=$classmargin?>">
	<div class="blueTitleSmall">
		<span><a href="<?='https://www.satuharapan.com'?>/<?=$latestnews['menuurl']?>" class="blueTitle_a"><?=strtoupper($latestnews['nama'])?></a></span>
                
	</div>
	<div class="latesttype2case">
	<?php
	foreach($latestnews['berita'] as $list){
		$image = explode(",",$list['image']);
	?>
		<div class="listlatesttype2">
			<span class="img-thumb float-lt"><a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><img src="<?='/uploads/pics/'.$image[0]?>"/></a></span>
			<div class="titlelatest float-rt">
				 <h4><a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a></h4>
				 
			</div>
			<div class="clear"></div>
		</div>
	<?php
	}
	?>
		<div class="clear"></div>
	</div>
     <span class="otherlatestlink"><a href="<?='https://www.satuharapan.com'."/".$latestnews['menuurl']?>"><?=$latestnews['nama']?> lainnya >></a></span>
	<div class="clear"></div>
</div>
<?php
	$countercat++;
}
?>