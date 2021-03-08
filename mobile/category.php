<div id="kabarterbaru">
	<div class="blueTitle uppercaseLetter"><?=$title?></div>
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
		   <div class="line"></div>
	   <?php
	   }
	  ?>
		<div class="pagination">
			<?=$string_pages?>
		</div>
	</div>
</div>

<div class="blueTitle">FOTO TERBARU</div>
<div id="ctop-right-photo">
	<?php
	$counter = 0;
	foreach($contentPhoto as $photo){
		$image = explode(",",$photo['image']);
		resizeFile($image[0],600,400,$image[0]);
		$classphoto = "float-lt";
		if($counter%2==1){
			$classphoto = "float-rt";
		}
	?>
	  <div class="kpem-con <?=$classphoto?>">
			<?php
			if($image[0]!=""){?>
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
<script type="text/javascript">
$('.preview' ).hide();
</script>