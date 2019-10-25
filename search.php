<?php
require "header.php";
?>
<div id="content">
    <!--- Content Top --->
    <div id="ct-top" class="homepage">
		<div id="ctop-left">
			<div id="kabarterbaru">
				<div class="blueTitle">HASIL PENCARIAN</div>
				<div class="listlatest">
				<?php
					foreach($listArtikel as $listlatest){
				?>
						<div class="kpem-con">
							<?php
							$class="titleonly";
							if($listlatest['image']!=""){?>
							<span class="img-thumb"><a title="<?=$listlatest['title']?>" href="<?=baseURL?>/read-detail/read/<?=$listlatest['url']?>"><img src="<?=PATH_image_cache.$listlatest['image']?>" width="309" height="206" alt="<?=$listlatest['title']?>"/></a></span>
							<?php
								$class="titlelatest";
							}
							?>
							<div class="<?=$class?>">
								 <h1><a title="<?=$listlatest['title']?>" href="<?=baseURL?>/read-detail/read/<?=$listlatest['url']?>"><?=$listlatest['title']?></a></h1>
								<?=$listlatest['prev']?>
								<a title="<?=$listlatest['title']?>" href="<?=baseURL?>/read-detail/read/<?=$listlatest['url']?>"><span class="more"></span></a>
							</div>
							<div class="clear"></div>
					   </div>
					   <div class="line"></div>
				   <?php
				   }
				  ?>
				  <?=$string_pages?>
				</div>
			</div>

		</div>
		<?php
		require "right.php";
		?>
        <div class="clear line"></div>
    </div>
	<div id="ct-cent">
		<?php
		require "opini.php";
		?>
		<div id="footermenu">
			<ul>
			<?=$bottommenu?>
			</ul>
		</div>
	</div>
</div>
	<?php
	require "footer.php";
	?>
