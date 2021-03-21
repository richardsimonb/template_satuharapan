<!-- <div id="life">
	<div class="whiteline">
		<span id="lifelogo">LIFE</span>
		<div class="lifetag">Berita dan tips gaya hidup terkini</div>
	</div>
	<div class="listlifenews">
		<?php
		$imglife = "https://www.satuharapan.com/life/kcfinder/upload/cache/";
		foreach($listheadline as $life)
		{
		?>
			<div class="lifenews <?=$life['class']?>">
				<div class="imglife"><a href="https://www.satuharapan.com/life/<?=$life['link']?>"><img src="<?=$imglife.$life['image']?>" alt="<?=$life['title_link']?>" /></a></div>
				<div class="titlelife"><a href="https://www.satuharapan.com/life/<?=$life['link']?>"><?=$life['judul']?></a></div>
			</div>
		<?php
			if($life['class']=="float-rt"){
			?>
				<div class="clear"></div>
			<?php
			}
		}
		?>
		<div class="clear"></div>
	</div>
</div>
<div class="redline"></div> -->