<div class="bottompart">
<?php
foreach($flora as $latestnews)
{
?>
	<div class="flora">
		<div class="judulflora">
			<span><a href="<?=baseURL?>/<?=$latestnews['menuurl']?>" class="blueTitle_a"><?=strtoupper($latestnews['nama'])?></a></span>
			<span class="otherlatest2link"><a href="<?=baseURL."/".$latestnews['menuurl']?>"><?=strtoupper($latestnews['nama'])?> lainnya >></a></span>
			<div class="clear"></div>
		</div>
		<?php
		$counter = 0;
		foreach($latestnews['berita'] as $list){
			$image = explode(",",$list['image']);
			if($counter%2==0&&$counter>0){
				$class = "float-rt";
			}
			else
			{
				$class = "float-lt";
			}
		?>
			<div class="listflora <?=$class?>">
				<?php
				if($image[0]!=""){
				resizeFile($image[0],600,400,$image[0]);
				?>
				<div class="img-thumb"><a href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><img src="<?=PATH_image_cache.$image[0]?>"/></a></div>
				<?php
				}
				?>
				<div class="bagiankiri">
					<div class="titleflora">
						 <h6><a href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><?=$list['title']?></a></h6>
					</div>
                                        <!-- Menghilangkan cuplikan -->
					<!-- <span class="preview"><?=$list['preview']?>
					 <a href="<?=baseURL?>/read-detail/read/<?=$list['value_alias']?>"><span class="more"></span></a>
					</span> -->
				</div>
				<div class="clear"></div>
			</div>
		<?php
			$counter++;
		}
		?>
			<div class="clear"></div>
	</div>
<?php
}
?>
	<div class="clear"></div>
</div>