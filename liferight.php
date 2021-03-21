 
  <?php
  if($life=="exist"){?>
  <div id="life">
	<div id="lifelogoarea">
		<a href="https://www.satuharapan.com/life/" target="_blank"><span id="lifelogo" ></span></a>
		
		
		
		<span class="lifetag"></span>
		<div class="clear"></div>
	</div>
	<div class="listlifenews">
		<?php
		$imglife = "https://www.satuharapan.com/life/kcfinder/upload/cache/";
		$counter_life = 0;
		foreach($listheadline as $life)
		{
		?>
			<div class="lifenews <?=$life['class']?>">
				<div class="imglife"><a href="https://www.satuharapan.com/life/<?=$life['link']?>" title="<?=$life['title_link']?>" target="_blank"><img src="<?=$imglife."133x89_".$life['image']?>" alt="<?=$life['title_link']?>" width="133" height="89"/></a></div>
				<div class="titlelife"><a href="https://www.satuharapan.com/life/<?=$life['link']?>" title="<?=$life['title_link']?>" target="_blank"><?=$life['judul']?></a></div>
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
  
  //require "karikatur.php";
   
  ?>
   