<?php
	$countercat = 0;
	foreach($listnews as $latestnews)
	{
		
		if($countercat==6){
		?>
			<div class="bann-mid1">
			<?php
			echo getBanner($half_3a,$banner_path,"left");
			echo getBanner($half_4a,$banner_path,"right");
			?>
			<div class="clear"></div>
			</div>
			<div class="bann-mid1">
		    <?php echo getBanner($full2,$banner_path);?>
			</div>
		<?php
		}
?>
		<div class="latest-news">
			<div class="blueTitleSmall"><a href="<?=baseURL?>/<?=$latestnews['menuurl']?>" class="blueTitle_a"><?=strtoupper($latestnews['nama'])?></a></div>
			<div class="listlatest">
				<?php
				$counter = 0;
				$string = "";
				foreach($latestnews['berita'] as $listnewsnya){
					if($counter==0){
					?>
						<h3><a href="<?=baseURL?>/read-detail/read/<?=$listnewsnya['value_alias']?>"><?=$listnewsnya['title']?></a></h3>
					<?php
					}
					else
					{
						$string .= '<li><a href="'.baseURL.'/read-detail/read/'.$listnewsnya['value_alias'].'">'.$listnewsnya['title'].'</a></li>';
					}
					$counter++;
				}
				echo "<ul>".$string."</ul>";
				?>
			</div>
			<a href="<?=baseURL."/".$latestnews['menuurl']?>" class="otherlatestlink">Kabar <?=ucwords(strtolower($latestnews['nama']))?> lainnya >></a>
		</div>
<?php
		$countercat++;
	}
?>