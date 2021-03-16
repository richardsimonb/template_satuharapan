<div class="bann-mid1" align="center">
    <?php
    echo getBanner($mid_half1_kiri,$banner_path,"left");
    echo getBanner($mid_half1_kanan,$banner_path,"right");
    ?>
    <div class="clear"></div>
</div>

<div class="bann-mid1" align="center">
    <?php
    echo getBanner($half_1b,$banner_path,"left");
    echo getBanner($half_2b,$banner_path,"right");
    ?>
    <div class="clear"></div>
</div>

<div class="bann-mid1">
    <?php
    echo getBanner($full1,$banner_path,"bannerMid");
    ?>
    <div class="clear"></div>
</div>

<div class="leftcent">
<?php
	$countercat = 0;
	foreach($listnews as $latestnews)
	{
		$class = "left";
		if($countercat%2==1){
			$class = "right";
		}
		if($countercat>0&&$countercat%2==0)
		{
			echo '<div class="clear"></div>';
		}
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
			<?php
			echo getBanner($half_3b,$banner_path,"left");
			echo getBanner($half_4b,$banner_path,"right");
			?>
			<div class="clear"></div>
			</div>
			<div class="bann-mid1" align="center">
				<?php echo getBanner($full2,$banner_path,"bannerMid"); ?>
			</div>			
		<?php
		}
        ?>
		
		<div class="latest-news <?=$class?>">
			<div class="blueTitle"><a href="<?=baseURL?>/<?=$latestnews['menuurl']?>" class="blueTitle_a"><?=strtoupper($latestnews['nama'])?></a></div>
			<div class="listlatest">
				<?php
				$counter = 0;
				$string = "";
				foreach($latestnews['berita'] as $listnewsnya){
					if($counter==0){
						$image = explode(",",$listnewsnya['image']);
						resizeFile($image[0],225,150,"225x150_".$image[0]);
					?>
						<div class="kpem-con">
							<?php
							$class="titleonly";
							if($image[0]!=""){?>
							<span class="img-thumb"><a title="<?=$listnewsnya['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$listnewsnya['value_alias']?>"><img src="<?=PATH_image_cache."225x150_".$image[0]?>" width="225" height="150" alt="<?=$listnewsnya['realtitle']?>"/></a></span>
							<?php
							$class="titlelatest";
							}
							?>
							<div class="<?=$class?>">
								 <h3><a title="<?=$listnewsnya['realtitle']?>" href="<?=baseURL?>/read-detail/read/<?=$listnewsnya['value_alias']?>"><?=$listnewsnya['title']?></a></h3>
							</div>
							<div class="clear"></div>
					   </div>
					<?php
					}
					else
					{
						$string .= '<li><a title="'.$listnewsnya['realtitle'].'" href="'.baseURL.'/read-detail/read/'.$listnewsnya['value_alias'].'">'.$listnewsnya['title'].'</a></li>';
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
	<div class="clear"></div>
</div>