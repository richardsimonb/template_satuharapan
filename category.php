<div id="kabarterbaru">
	<div class="blueTitle"><?=strtoupper($title)?></div>
	<div class="listlatest">
	    <?php
		foreach($contentnews as $listlatest){
			$image = explode(",",$listlatest['image']);
			resizeFile($image[0],309,206,"309x206_".$image[0]);
	    ?>

			<div class="kpem-con">
				<?php
				$class="titleonly";
				if($image[0]!=""){?>
				<span class="img-thumb"><a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$listlatest['value_alias']?>" title="<?=$listlatest['realtitle']?>"><img src="<?='/uploads/cache/'."309x206_".$image[0]?>" height="206" width="309" alt="<?=$listlatest['realtitle']?>"/></a></span>
				<?php
				$class="titlelatest";
				}
				?>
				<div class="<?=$class?>">
					<h1><a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$listlatest['value_alias']?>" title="<?=$listlatest['realtitle']?>"><?=$listlatest['title']?></a></h1>
					<?=$listlatest['preview']?>
					<a href="<?='https://www.satuharapan.com'?>/read-detail/read/<?=$listlatest['value_alias']?>" title="<?=$listlatest['realtitle']?>"><span class="more"></span></a>
				</div>
				<div class="clear"></div>
		   </div>
		   <div class="line"></div>
	   <?php
	   }
	  ?>
	</div>
</div>

<?=$string_pages?>


