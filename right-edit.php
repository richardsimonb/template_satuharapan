           <div id="ctop-right">
	<div class="blueTitle"><?=$title_blue?></div>
	<div id="ctop-right-photo">
	  <div class="kpem-con">
	  <?php
	  if($contentPhoto[0]['image']!=""){
			resizeFile($contentPhoto[0]['image'],309,206,"309x206_".$contentPhoto[0]['image']);
	  ?>



			<span class="img-thumb"><a title="<?=$contentPhoto[0]['realtitle']?>" href="<?=baseURL.$link2.$contentPhoto[0]['value_alias']?>"><img src="<?=PATH_image_cache."309x206_".$contentPhoto[0]['image']?>" width="309" height="206" alt="<?=$contentPhoto[0]['realtitle']?>" /></a></span>
	<?php
		}
		?>

		
<div class="titlelatest">
				 <h4><a title="<?=$contentPhoto[0]['realtitle']?>" href="<?=baseURL.$link2.$contentPhoto[0]['value_alias']?>"><?=$contentPhoto[0]['title']?></a></h4>
				<?=$contentPhoto[0]['preview']?>
				<a title="<?=$contentPhoto[0]['realtitle']?>" href="<?=baseURL.$link2.$contentPhoto[0]['value_alias']?>"><span class="more"></span></a>
			</div>
	   </div>
	   <div class="line"></div>
	</div>
	<div class="clear"></div>
	<div id="ctop-right-newsother">
	
	
	
	
	
	<?php
	if($title_blue = "KABAR TERBARU"){
	<?php
		for($m=1;$m<count($contentPhoto);$m++){
			$image = explode(",",$contentPhoto[$m]['image']);
			resizeFile($image[0],150,100,"150x100_".$image[0]);
					
	?>
		<div class="tbru-nws">
			<?php
			$class="titlenophoto";
			if($image[0]!=""){?>
			<span class="img-thumb"><a title="<?=$contentPhoto[$m]['realtitle']?>" href="<?=baseURL.$link2.$contentPhoto[$m]['value_alias']?>"><img src="<?=PATH_image_cache."150x100_".$image[0]?>" width="150" height="100" alt="<?=$contentPhoto[$m]['realtitle']?>"/></a></span>
			<?php
			$class="titlephoto";
			}
			?>
			<div class="<?=$class?>">
				<a title="<?=$contentPhoto[$m]['realtitle']?>" href="<?=baseURL.$link2.$contentPhoto[$m]['value_alias']?>"><?=$contentPhoto[$m]['title']?></a>
			</div>
			<div class="clear"></div>
		</div>
	<?php
		}	
	?>
	}
	else{
	<?php
		for($m=1;$m<count($contentPhoto)-2;$m++){
			$image = explode(",",$contentPhoto[$m]['image']);
			resizeFile($image[0],150,100,"150x100_".$image[0]);
					
	?>
		<div class="tbru-nws">
			<?php
			$class="titlenophoto";
			if($image[0]!=""){?>
			<span class="img-thumb"><a title="<?=$contentPhoto[$m]['realtitle']?>" href="<?=baseURL.$link2.$contentPhoto[$m]['value_alias']?>"><img src="<?=PATH_image_cache."150x100_".$image[0]?>" width="150" height="100" alt="<?=$contentPhoto[$m]['realtitle']?>"/></a></span>
			<?php
			$class="titlephoto";
			}
			?>
			<div class="<?=$class?>">
				<a title="<?=$contentPhoto[$m]['realtitle']?>" href="<?=baseURL.$link2.$contentPhoto[$m]['value_alias']?>"><?=$contentPhoto[$m]['title']?></a>
			</div>
			<div class="clear"></div>
		</div>
	<?php
		}	
	?>
	}
	?>
	<?=$link_other?>
	
	

	
	
	
  </div>
  <?php
  if($life=="exist"){?>
  <div id="life">
	<div id="lifelogoarea">
		<a href="http://www.satuharapan.com/life/"><span id="lifelogo"></span></a>
		
		
		
		<span class="lifetag"></span>
		<div class="clear"></div>
	</div>
	<div class="listlifenews">
		<?php
		$imglife = "http://www.satuharapan.com/life/kcfinder/upload/cache/";
		$counter_life = 0;
		foreach($listheadline as $life)
		{
		?>
			<div class="lifenews <?=$life['class']?>">
				<div class="imglife"><a href="http://www.satuharapan.com/life/<?=$life['link']?>" title="<?=$life['title_link']?>"><img src="<?=$imglife."133x89_".$life['image']?>" alt="<?=$life['title_link']?>" width="133" height="89"/></a></div>
				<div class="titlelife"><a href="http://www.satuharapan.com/life/<?=$life['link']?>" title="<?=$life['title_link']?>"><?=$life['judul']?></a></div>
			</div>
		<?php
			if($counter_life%2==1)
			{
				echo '<div class="clear"></div>';
			}
			$counter_life++;
		}
		?>
		<div class="clear"></div>
	</div>
  </div>
  <div class="redline"></div>
  <?php
  }
  ?>

</div>           