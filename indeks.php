<form method="get" action="<?='https://www.satuharapan.com'?>/indeks">
	<span class="deskripsi">Lihat Indeks Tanggal :</span> 
	<span id="tanggal"><?=$contentnews_all['optiontgl']?></span>
    <input type="submit" value="Lihat Indeks" />
</form>
<div class="listlatest">
<?php
	foreach($contentnews_all['detail'] as $listlatest){
		$image = explode(",",$listlatest['image']);
		resizeFile($image[0],309,206,"309x206_".$image[0]);
?>
		<div class="kpem-con">
			<?php
			$class="titleonly";
			if($image[0]!=""){?>
			<span class="img-thumb"><a title="<?=$listlatest['title']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$listlatest['url']?>"><img src="<?='/uploads/cache/'."309x206_".$image[0]?>" width="309" height="206" alt="<?=$listlatest['title']?>"/></a></span>
			<?php
				$class="titlelatest";
			}
			?>
			<div class="<?=$class?>">
				 <h1><a title="<?=$listlatest['title']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$listlatest['url']?>"><?=$listlatest['title']?></a></h1>
				<?=$listlatest['prev']?>
				<a title="<?=$listlatest['title']?>" href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$listlatest['url']?>"><span class="more"></span></a>
			</div>
			<div class="clear"></div>
	   </div>
	   <div class="line"></div>
   <?php
   }
  ?>
  <?=$contentnews_all['pages']?>
</div>